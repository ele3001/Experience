<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('admin');
    }

    public function login(Request $request)
    {
        // Logique d'authentification de l'administrateur
    }
}