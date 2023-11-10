<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use App\Models\Persona;
use App\Models\TipoDocumento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocumentoController extends Controller
{
    public function index()
    {
        $idPersona = Auth::user()->persona->id;

        $documentos = Documento::where('idPersona', $idPersona)->paginate();

        return view('documento.index', compact('documentos'))
            ->with('i', (request()->input('page', 1) - 1) * $documentos->perPage());
    }

    public function create()
    {
        $documento = new Documento();
        $tiposDocumento = TipoDocumento::pluck('nombre', 'id');
        return view('documento.create', compact('documento', 'tiposDocumento'));
    }


    public function store(Request $request)
    {
        //validacion para que solo reciba archivos pdf y de determinado tamaño
        $request->validate([
            'enlace' => 'required|mimes:pdf|max:10240',
        ]);

        $data = $request->all();

        $documento = new Documento($data);
        $idPersona = Auth::user()->persona->id;
        $documento->idPersona = $idPersona;
        
        $nombreArchivo = "Doc_" . time() . "." . $request->file('enlace')->guessExtension();
        $request->file('enlace')->storeAs('public/Documentos', $nombreArchivo);
        $documento->enlace = $nombreArchivo;

        $documento->save();

        return redirect()->route('documentos.index')->with('success', 'Documento creado exitosamente.');
    }



    public function show($id)
    {
        $documento = Documento::find($id);

        return view('documento.show', compact('documento'));
    }


    public function edit($id)
    {
        $documento = Documento::find($id);

        return view('documento.edit', compact('documento'));
    }

   
    public function update(Request $request, Documento $documento)
    {
        request()->validate(Documento::$rules);

        $documento->update($request->all());

        return redirect()->route('documentos.index')
            ->with('success', 'Documento updated successfully');
    }

    public function destroy($id)
    {
        $tipoDocumento = Documento::find($id)->delete();

        return redirect()->route('documentos.index')
            ->with('success', 'Documento deleted successfully');
    }
}
