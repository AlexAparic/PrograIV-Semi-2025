<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\CodigoVerificacionMail; 

use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('REGRISTRO'); // Asegurate que el archivo esté en views/auth
    }
    

    public function register(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'edad' => 'required|integer',
            'miembro' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->nombre . ' ' . $request->apellido,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'edad' => $request->edad,
            'miembro' => $request->miembro,
        ]);
        

        
     // Generar código y guardarlo en base de datos
      $codigo = Str::random(6);
      $user->verification_code = $codigo;
      $user->save();

    // Enviar el correo con el código
      Mail::to($user->email)->send(new CodigoVerificacionMail($codigo));

    // Redirigir a la vista de verificación de código
      return redirect()->route('verificacion.codigo');

 
        
    }
}