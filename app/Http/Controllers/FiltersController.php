<?php

namespace App\Http\Controllers;

use App\Models\Filter;
use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\SendNotification;

class FiltersController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|min:3',
            'phone' => 'required|min:3',
            'type' => 'required|int',
            'details' => 'required'
        ]);
        //Send requested filter to Telegram.
        $user = new User();
        $user->notify(new SendNotification($request['name'], $request['surname'], $request['email'], $request['phone'], $request['type'], $request['details']));


        return redirect()-> route('contact')->with('success', 'Formulario enviado correctamente');
    }
}
