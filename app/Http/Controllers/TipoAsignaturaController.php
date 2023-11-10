<?php

namespace App\Http\Controllers;

use App\Models\TipoAsignatura;
use Illuminate\Http\Request;


class TipoAsignaturaController extends Controller
{
 
    public function index()
    {
        $tipoAsignaturas = TipoAsignatura::paginate();

        return view('tipoAsignaturas.index', compact('tipoAsignaturas'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoAsignaturas->perPage());
    }

    public function create()
    {
        $tipoAsignatura = new TipoAsignatura();
        return view('tipoAsignaturas.create', compact('tipoAsignatura'));
    }


    public function store(Request $request)
    {
        request()->validate(TipoAsignatura::$rules);

        $tipoAsignatura = TipoAsignatura::create($request->all());

        return redirect()->route('tipoAsignaturas.index')
            ->with('success', 'Tipo Asignatura created successfully.');
    }


    public function show($id)
    {
        $tipoAsignatura = TipoAsignatura::find($id);

        return view('tipoAsignaturas.show', compact('tipoAsignatura'));
    }


    public function edit($id)
    {
        $tipoAsignatura = TipoAsignatura::find($id);

        return view('tipoAsignaturas.edit', compact('tipoAsignatura'));
    }

   
    public function update(Request $request, TipoAsignatura $tipoAsignatura)
    {
        request()->validate(TipoAsignatura::$rules);

        $tipoAsignatura->update($request->all());

        return redirect()->route('tipoAsignaturas.index')
            ->with('success', 'Tipo Asignatura updated successfully');
    }

    public function destroy($id)
    {
        $tipoAsignatura = TipoAsignatura::find($id)->delete();

        return redirect()->route('tipoAsignaturas.index')
            ->with('success', 'Tipo Asignatura deleted successfully');
    }
}
