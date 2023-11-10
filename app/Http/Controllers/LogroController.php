<?php

namespace App\Http\Controllers;

use App\Models\Logro;
use Illuminate\Http\Request;

class LogroController extends Controller
{
 
    public function index()
    {
        $logros = Logro::paginate();

        return view('logro.index', compact('logros'))
            ->with('i', (request()->input('page', 1) - 1) * $logros->perPage());
    }

    public function create()
    {
        $logro = new Logro();
        return view('logro.create', compact('logro'));
    }


    public function store(Request $request)
    {
        request()->validate(Logro::$rules);
        $logro = Logro::create($request->all());

        return redirect()->route('logros.index')
            ->with('success', 'logro created successfully.');
    }

  
    public function show($id)
    {
        $logro = Logro::find($id);
        return view('logro.show', compact('logro'));
    }


    public function edit($id)
    {
        $logro =  Logro::find($id);
        return view('logro.edit', compact('logro'));
    }


    public function update(Request $request, Logro $logro)
    {
        request()->validate(Logro::$rules);

        $logro->update($request->all());

        return redirect()->route('logros.index')
            ->with('success', 'logro updated successfully');
    }

 
    public function destroy($id)
    {
        $logro = Logro::find($id)->delete();

        return redirect()->route('logros.index')
            ->with('success', 'logro deleted successfully');
    }
}
