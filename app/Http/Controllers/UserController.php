<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    
    public function  Crear_usuario(){
        $user = new User();
        $user->name = 'Hache';
        $user->password = Hash::make('hacher46904');
        $user->email = 'harveympv@hotmail.com';
        $user->save();

        return response(["data"=>"datos guardadoso"]);
    }


    public function Iniciar_Sesion(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dash');
        }
      
        return back()->withErrors([
            'email' => 'El correo o contraseña ingresados no cohinciden',
        ]);
      
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function dashboards(){
        return view('principal.index');
    }
}
