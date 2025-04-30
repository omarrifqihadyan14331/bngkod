<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

<<<<<<< HEAD

=======
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        $obats = Obat::all();
        return view('dokter/obat.index', compact('obats'));


=======
        return view('dokter/obat.index');
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< HEAD
        return view('dokter/obat.create');
=======
        //
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        $request->validate([
            'nama_obat' => 'required',
            'kemasan' => 'required',
            'harga' => 'required',
        ]);
        Obat::create($request->all());
        return redirect()->route('obat.index');
=======
        //
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
    }

    /**
     * Display the specified resource.
     */
    public function show(Obat $obat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Obat $obat)
    {
<<<<<<< HEAD
        return view('dokter/obat.edit', compact('obat'));
=======
        //
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Obat $obat)
    {
<<<<<<< HEAD
        
            $request->validate([
                'nama_obat' => 'required',
                'kemasan' => 'required',
                'harga' => 'required'
            ]);
            $obat->update($request->all());
            return redirect()->route('obat.index');
    
=======
        //
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Obat $obat)
    {
<<<<<<< HEAD
        $obat->delete();
        return redirect()->route('obat.index');

=======
        //
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
    }
}
