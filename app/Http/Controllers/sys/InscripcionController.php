<?php

namespace App\Http\Controllers\sys;

use App\Http\Controllers\Controller;
use App\Models\sys\Inscripcion;
use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    public function index()
    {
        return view('sys.inscripcion.index');
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
    }

    public function show(Inscripcion $inscripcion)
    {
        
    }

    public function edit(Inscripcion $inscripcion)
    {
        
    }

    public function update(Request $request, Inscripcion $inscripcion)
    {
        
    }

    public function destroy(Inscripcion $inscripcion)
    {
        
    }
}
