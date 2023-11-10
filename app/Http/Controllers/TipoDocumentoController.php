<?php

namespace App\Http\Controllers;

use App\Models\TipoDocumento;
use Illuminate\Http\Request;

class TipoDocumentoController extends Controller
{
    public function index()
    {
        $tipoDocumentos = TipoDocumento::paginate();

        return view('tipoDocumento.index', compact('tipoDocumentos'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoDocumentos->perPage());
    }

    public function create()
    {
        $tipoDocumento = new TipoDocumento();
        return view('tipoDocumento.create', compact('tipoDocumento'));
    }


    public function store(Request $request)
    {
        request()->validate(TipoDocumento::$rules);

        $tipoDocumento = TipoDocumento::create($request->all());

        return redirect()->route('tipoDocumentos.index')
            ->with('success', 'Tipo Documento created successfully.');
    }


    public function show($id)
    {
        $tipoDocumento = TipoDocumento::find($id);

        return view('tipoDocumento.show', compact('tipoDocumento'));
    }


    public function edit($id)
    {
        $tipoDocumento = TipoDocumento::find($id);

        return view('tipoDocumento.edit', compact('tipoDocumento'));
    }

   
    public function update(Request $request, TipoDocumento $tipoDocumento)
    {
        request()->validate(TipoDocumento::$rules);

        $tipoDocumento->update($request->all());

        return redirect()->route('tipoDocumentos.index')
            ->with('success', 'Tipo Documento updated successfully');
    }

    public function destroy($id)
    {
        $tipoDocumento = TipoDocumento::find($id)->delete();

        return redirect()->route('tipoDocumentos.index')
            ->with('success', 'Tipo Documento deleted successfully');
    }
}
