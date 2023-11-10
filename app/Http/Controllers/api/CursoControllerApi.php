<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoControllerApi extends Controller
{
    
    public function index()
    {
        $cursos = Curso::paginate();

        return response()->json($cursos);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate(Curso::$rules);

        $curso = Curso::create($validatedData);

        return response()->json(['message' => 'Curso created successfully', 'curso' => $curso], 201);
    }


    public function show($id)
    {
        $curso = Curso::find($id);

        if (!$curso) {
            return response()->json(['message' => 'Curso not found'], 404);
        }

        return response()->json(['curso' => $curso], 200);
    }
    

    public function update(Request $request, Curso $curso)
    {
        $request->validate(Curso::$rules);

        $curso->update($request->all());

        return response()->json(['message' => 'Curso updated successfully'], 200);
    }


 
    public function destroy($id)
    {
        $curso = Curso::find($id);

        if (!$curso) {
            return response()->json(['message' => 'Curso not found'], 404);
        }

        $curso->delete();

        return response()->json(['message' => 'Curso deleted successfully'], 200);
    }

}
