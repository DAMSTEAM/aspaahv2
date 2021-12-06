<?php

namespace App\Http\Controllers\sys;

use App\Http\Controllers\Controller;
use App\Models\sys\Socio;
use Illuminate\Http\Request;

class SocioController extends Controller
{
    public function index()
    {
        return view('sys.socio.index');
    }

    public function create()
    {
        return view('sys.socio.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Socio $socio)
    {
        //
    }

    public function edit(Socio $socio)
    {
        return view('sys.socio.edit');
    }

    public function update(Request $request, Socio $socio)
    {
        //
    }
}
