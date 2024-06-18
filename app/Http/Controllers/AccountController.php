<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('account.index', [
            'users' => $user
        ]);
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
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:5|max:255'
        ]);

        // Buat pengguna baru
        User::create($validatedData);

        return redirect()->route('account')->with('success', 'User berhasil ditambahkan.');
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
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('account.edit', compact('user')); // Kirim data peran ke tampilan
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        // Update data pengguna
        $user->update([
            'name' => $validatedData['name'],
            'email' => $validatedData['email']
        ]);


        return redirect()->route('account')->with('success', 'User berhasil Di edit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('account')->with('success', 'User berhasil dihapus.');
    }
}
