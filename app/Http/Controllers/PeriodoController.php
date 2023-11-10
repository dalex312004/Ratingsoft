<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use Illuminate\Http\Request;

class PeriodoController extends Controller
{

    public function index()
    {
        $periodos = Periodo::paginate();
        return view('periodo.index', compact('periodos'))
        ->with('i', (request()->input('page', 1) - 1) * $periodos->perPage());
    }

    public function create()
    {
        $periodo = new Periodo();
        return view('periodo.create', compact('periodo'));
    }

    public function store(Request $request)
    {
        request()->validate(Periodo::$rules);

        $periodo = Periodo::create($request->all());

        return redirect()->route('periodos.index')
            ->with('success', 'Periodo created successfully.');
    }

    public function show($id)
    {
        $periodo = Periodo::find($id);
        return view('periodo.show', compact('periodo'));
    }


    public function edit($id)
    {
        $periodo = Periodo::find($id);
        return view('periodo.edit', compact('periodo'));
    }

    
    public function update(Request $request, Periodo $periodo)
    {
        request()->validate(Periodo::$rules);
        $periodo->update($request->all());
        return redirect()->route('periodos.index')
            ->with('success', 'Periodo updated successfully');
    }

    public function destroy($id)
    {
        $periodo = Periodo::find($id)->delete();
        return redirect()->route('periodos.index');
    }
}
