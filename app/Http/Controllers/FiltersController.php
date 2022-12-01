<?php

namespace App\Http\Controllers;

use App\Models\Filter;
use Illuminate\Http\Request;

class FiltersController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|min:3',
            'filter' => 'required'
        ]);
        $selectedFilter = new Filter();
        //$selectedFilter.getFilterById();
        //Send requested filter to email.

        return redirect()-> route('contact')->with('success', 'Formulario enviado correctamente');
    }

    public function index()
    {

    }
}
