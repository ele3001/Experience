<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller

{
    public function addAdmin(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    
}

   
    $user = new User();
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->password = Hash::make($request->input('password'));
    $user->role = 'admin'; 
    $user->save();

    
    return redirect()->back()->with('success', 'Nouvel administrateur ajouté avec succès.');

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    
}
