<?php

namespace App\Http\Controllers;

use App\Models\Filter;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'data' => 'required|min:3'
        ]);
        //$selectedFilter = new Filter();
        //$selectedFilter.getFilterById();
        //Send requested filter to email.

        return redirect()-> route('contact')->with('success', 'Formulario enviado correctamente');
    }
}
