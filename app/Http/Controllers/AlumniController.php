<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Http\Requests\StoreAlumniRequest;
use App\Http\Requests\UpdateAlumniRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumni = Alumni::all();

        return view('alumni.index', [
            'alumni' => $alumni
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alumni.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:255',
            'angkatan' => 'required',
            'image' => 'image|file',
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('alumni-images');
        }

        Alumni::Create($validateData);

        return redirect('/alumni')->with('success', 'Data Alumni berhasil di upload');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alumni $alumni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumni $alumni)
    {
        return view('alumni.edit', [
            'alumni' => $alumni
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alumni $alumni)
    {
        $rules = [
            'nama' => 'required|max:255',
            'angkatan' => 'required',
            'image' => 'image|file',
        ];

        $validateData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            $validateData['image'] = $request->file('image')->store('alumni-images');
        }

        Alumni::where('id', $alumni->id)
            ->update($validateData);

        return redirect('/alumni')->with('success', 'Posts berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumni $alumni)
    {
        if ($alumni->image) {
            Storage::delete($alumni->image);
        }

        Alumni::destroy($alumni->id);
        return redirect('/alumni')->with('success', 'alumni berhasil di Hapus');
    }
}
