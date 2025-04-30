<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class VerificationCodeController extends Controller
{
    public function show()
    {
        return view('verificacion-de-codigo');
    }

    public function verificar(Request $request)
    {
        $request->validate([
            'codigo' => 'required|string',
        ]);

        $user = User::where('verification_code', $request->codigo)->first();

        if ($user) {
            $user->email_verified_at = now();
            $user->verification_code = null;
            $user->save();

            return redirect()->route('login')->with('success', 'Correo verificado correctamente');

        } else {
            return back()->withErrors(['codigo' => 'El código ingresado es incorrecto.'])->withInput();
        }
    }
}
