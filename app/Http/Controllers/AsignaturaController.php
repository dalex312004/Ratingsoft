<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use App\Models\TipoAsignatura;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
   
    public function index()
    {
        $asignaturas = Asignatura::paginate();

        return view('asignatura.index', compact('asignaturas'))
            ->with('i', (request()->input('page', 1) - 1) * $asignaturas->perPage());
    }

   
    public function create()
{
    $asignatura = new Asignatura();
    $tiposAsignatura = TipoAsignatura::pluck('nombreTipoAsignatura', 'id');

    return view('asignatura.create', compact('asignatura', 'tiposAsignatura'));
}


    
    public function store(Request $request)
    {
        request()->validate(Asignatura::$rules);

        $asignatura = Asignatura::create($request->all());

        return redirect()->route('asignaturas.index')
            ->with('success', 'asignatura created successfully.');
    }


    public function show($id)
    {
        $asignatura = Asignatura::find($id);

        return view('asignatura.show', compact('asignatura'));
    }


    public function edit($id)
    {
        $asignatura = Asignatura::find($id);

        return view('asignatura.edit', compact('asignatura'));
    }


    public function update(Request $request, Asignatura $asignatura)
    {
        request()->validate(Asignatura::$rules);

        $asignatura->update($request->all());

        return redirect()->route('asignaturas.index')
            ->with('success', 'Asignatura updated successfully');
    }


    public function destroy($id)
    {
        $asignatura = Asignatura::find($id)->delete();

        return redirect()->route('asignaturas.index')
            ->with('success', 'Asignatura deleted successfully');
    }
}
