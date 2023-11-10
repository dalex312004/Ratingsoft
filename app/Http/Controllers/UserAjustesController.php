<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAjustesController extends Controller
{
     public function Miperfil(){
        
        return view('persona.index');
    }


    public function actualizar(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'Avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $user = Auth::user();

    if ($request->hasFile('Avatar')) {
        $nombreArchivo = "img_" . time() . "." . $request->file('Avatar')->guessExtension();
        $request->file('Avatar')->storeAs('public/Avatar', $nombreArchivo);
        $user->avatar = $nombreArchivo;
    }

    if ($user->name !== $request->input('name')) {
        $user->name = $request->input('name');
    }

    if ($user->email !== $request->input('email')) {
        $user->email = $request->input('email');
    }

    $user->save();

    return redirect()->route('Administrador')->with('success', 'Perfil actualizado exitosamente');
}
    

public function perfil(){
    return view('persona.edit', array('user'=>Auth::user()) ); 
}

}