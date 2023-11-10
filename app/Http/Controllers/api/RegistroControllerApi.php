<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Persona;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistroControllerApi extends Controller
{
   
    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $persona = new Persona([
        ]);

        $persona->save();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'idPersona' => $persona->id,
        ]);

        return response()->json(['user' => $user], 201);
    }

 
    public function show($id)
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
