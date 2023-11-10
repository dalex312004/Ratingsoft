<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class ProfesorController extends Controller
{
   
    public function index()
    {
         // Obtén el rol 'profesor'
        $rolProfesor = Role::where('name', 'profesor')->first();

        // Obten los usuarios que tienen ese rol
        $usuariosProfesor = $rolProfesor->users;

        return view('profesor.index', compact('usuariosProfesor'));
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

 
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
