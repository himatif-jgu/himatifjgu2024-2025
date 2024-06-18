<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery = Gallery::all();

        return view('gallery.index', [
            'gallery' => $gallery
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required',
            'tahun' => 'required',
            'image' => 'image|file',
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('gallery-images');
        }

        Gallery::Create($validateData);

        return redirect('/gallery')->with('success', 'Data Gallery berhasil di upload');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        return view('gallery.edit', [
            'gallery' => $gallery
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        $rules = [
            'nama' => 'required|max:255',
            'tahun' => 'required',
            'image' => 'image|file',
        ];

        $validateData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            $validateData['image'] = $request->file('image')->store('gallery-images');
        }

        Gallery::where('id', $gallery->id)
            ->update($validateData);

        return redirect('/gallery')->with('success', 'Gallery berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        if ($gallery->image) {
            Storage::delete($gallery->image);
        }

        Gallery::destroy($gallery->id);
        return redirect('/gallery')->with('success', 'Gallery berhasil di Hapus');
    }
}
