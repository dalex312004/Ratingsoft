<?php

namespace App\Http\Controllers;

use App\Models\TipoPersona;
use Illuminate\Http\Request;

class TipoPersonaController extends Controller
{

    public function index()
    {
        $tipoPersonas = TipoPersona::paginate();

        return view('tipoPersona.index', compact('tipoPersonas'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoPersonas->perPage());
    }

    public function create()
    {
        $tipoPersona = new TipoPersona();
        return view('tipoPersona.create', compact('tipoPersona'));
    }

 
    public function store(Request $request)
    {
        request()->validate(TipoPersona::$rules);

        $tipoPersona = TipoPersona::create($request->all());

        return redirect()->route('tipoPersonas.index')
            ->with('success', 'tipoPersona created successfully.');
    }


    public function show($id)
    {
        $tipoPersona = TipoPersona::find($id);

        return view('tipoPersona.show', compact('tipoPersona'));
    }


    public function edit($id)
    {
        $tipoPersona = TipoPersona::find($id);
        return view('tipoPersona.edit', compact('tipoPersona'));
    }

 
    public function update(Request $request, TipoPersona $tipoPersona)
    {
        request()->validate(TipoPersona::$rules);

        $tipoPersona->update($request->all());

        return redirect()->route('tipoPersonas.index')
            ->with('success', 'tipoPersona updated successfully');
    }

  
    public function destroy($id)
    {
        $tipoPersona = TipoPersona::find($id)->delete();
        return redirect()->route('tipoPersonas.index')->with('success', 'Tipo Persona deleted successfully');
    }
}
