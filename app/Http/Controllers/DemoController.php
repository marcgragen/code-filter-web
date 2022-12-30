<?php

namespace App\Http\Controllers;

use App\Models\Filter;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class DemoController extends Controller
{
    private String $html = "<div class ='like' ondblclick= 'ondblclick(); return false;' onmousedown='mousedown()'><div class='title' title='I am a title!' value = 'big'>title</div><div class='desc' onsubmit='load()'>desc</div><div>just a div</div><style type='text'>.red{color: #f00}</style><script>alert(88)</script></div><script>alert(99)</script>";
    /**
     * @throws GuzzleException
     */public function store(Request $request)
    {
        $request->validate([
            'data' => 'required|min:3'
        ]);

        $this->saveApiData("<div class ='like' ondblclick= 'ondblclick(); return false;' onmousedown='mousedown()'><div class='title' title='I am a title!' value = 'big'>title</div><div class='desc' onsubmit='load()'>desc</div><div>just a div</div><style type='text'>.red{color: #f00}</style><script>alert(88)</script></div><script>alert(99)</script>");

        return redirect()-> route('contact')->with('success', 'Formulario enviado correctamente');
    }

    /**
     * @throws GuzzleException
     */
    private function saveApiData(String $raw_html)
    {
        $client = new Client();
        $res = $client->request('POST', 'https://b5d4nlvuoe.execute-api.eu-west-1.amazonaws.com/test/xss_filter', [
            'form_params' => [
                'id' => '123',
                'name' => 'nom1',
                'raw_html' => $raw_html
            ]
        ]);
        echo $res->getStatusCode();
        // 200
        echo $res->getHeader('content-type');
        // 'application/json; charset=utf8'
        echo $res->getBody();
        // {"type":"User"...'
    }
}
