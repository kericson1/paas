<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;

use Illuminate\Http\Request;
use Tymon\JWTAuth\JWTAuth;


class UserController extends Controller
{
    public function register(Request $request)
{
    $validator = Validator::make($request->all(), [
        'nom' => 'required',
        'prenom' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|same:password_confirm',
        'password_confirm' => 'required|min:6',
    ]);

    if ($validator->fails()) {
        return response()->json(['errors' => $validator->errors()], 422);
    }

    $user = new User;
    $user->nom = $request->nom;
    $user->prenom = $request->prenom;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->role = 'user';
    $user->save();

    try {
        $token = app('tymon.jwt.auth')->attempt($request->only('email', 'password')); 
        if (!$token) {
            return response()->json(['message' => 'Erreur lors de la tentative de connexion'], 401);
        }
    } catch (JWTException $e) {
        return response()->json(['message' => 'Erreur lors de la tentative de connexion'], 500);
    }

    return response()->json(['token' => $token, 'message' => 'Inscription réussie'], 201);
}

}
