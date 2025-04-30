<?php

namespace App\Http\Controllers;

use App\Models\Periksa;
<<<<<<< HEAD
use App\Models\DetailPeriksa;
use App\Models\Obat;
use App\Models\User;
=======
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
use Illuminate\Http\Request;

class PeriksaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        $periksas = Periksa::with(['pasien', 'dokter', 'obats'])->get();
        return view('dokter.periksa.index', compact('periksas'));
        

        
    }

    public function pasienindex()
    {
        $periksas = Periksa::with('pasien', 'dokter')->get();
        return view('pasien.periksa.index', compact('periksas'));

        
    }

    public function riwayatindex()
    {
        $periksas = Periksa::with('pasien', 'dokter')->get();
        return view('pasien.riwayat.index', compact('periksas'));
        
    }


    public function create()
    {
        $pasiens = User::where('role', 'pasien')->get();
        $dokters = User::where('role', 'dokter')->get();
        $obats = Obat::all();

        return view('dokter.periksa.create', compact('pasiens', 'dokters', 'obats'));
    }

    public function pasienCreate()
{
    // Mengambil data dokter dengan role 'dokter'
    $dokters = User::where('role', 'dokter')->get();

    // Mengirimkan data dokter ke view
    return view('pasien.periksa.create', compact('dokters'));
}

public function pasienStore(Request $request)
{
    $request->validate([
        'id_dokter' => 'required|exists:users,id',
        'tgl_periksa' => 'required|date',
    ]);

    Periksa::create([
        'id_pasien' => auth()->id(), // otomatis isi dari user yang login
        'id_dokter' => $request->id_dokter,
        'tgl_periksa' => $request->tgl_periksa,
        'catatan' => null,
        'biaya_periksa' => null,
    ]);

    return redirect()->route('periksa.pasienindex')->with('success', 'Permintaan periksa berhasil diajukan.');
}

=======
        return view('dokter/periksa.index');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        $request->validate([
            'id_pasien' => 'required|exists:users,id',
            'id_dokter' => 'required|exists:users,id',
            'tgl_periksa' => 'required|date',
            'catatan' => 'nullable|string',
            'biaya_periksa' => 'nullable|integer',
            'obat_ids' => 'nullable|array'
        ]);

        $periksa = Periksa::create([
            'id_pasien' => $request->id_pasien,
            'id_dokter' => $request->id_dokter,
            'tgl_periksa' => $request->tgl_periksa,
            'catatan' => $request->catatan,
            'biaya_periksa' => $request->biaya_periksa,
        ]);

        // Masukkan data ke tabel detail_periksas jika obat dipilih
        if ($request->has('obat')) {
            $periksa->obats()->attach($request->obat);
        }
    
        return redirect()->route('periksa.index')->with('success', 'Data periksa berhasil disimpan.');

        
=======
        //
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
    }

    /**
     * Display the specified resource.
     */
    public function show(Periksa $periksa)
    {
<<<<<<< HEAD
        return view('dokter.periksa.show', compact('periksa'));
=======
        //
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Periksa $periksa)
    {
<<<<<<< HEAD
        // Mengambil data pasien, dokter, dan obat yang diperlukan
        $pasiens = User::where('role', 'pasien')->get();
        $dokters = User::where('role', 'dokter')->get();
        $obats = Obat::all();

        // Mengonversi tgl_periksa ke objek Carbon
        $periksa->tgl_periksa = \Carbon\Carbon::parse($periksa->tgl_periksa)->format('Y-m-d\TH:i');

        // Mengembalikan view dengan data yang diperlukan
        return view('dokter.periksa.edit', compact('periksa', 'pasiens', 'dokters', 'obats'));
=======
        //
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Periksa $periksa)
    {
<<<<<<< HEAD
        $request->validate([
            'tgl_periksa' => 'required|date',
            'catatan' => 'nullable|string',
            'biaya_periksa' => 'nullable|integer',
            'obat_ids' => 'nullable|array'
        ]);

        // Update data pemeriksaan
        $periksa->update($request->only('tgl_periksa', 'catatan', 'biaya_periksa'));

        // Hapus hubungan lama dengan obat
        $periksa->obats()->detach();

        // Tambahkan hubungan obat yang baru
        if ($request->has('obat_ids') && is_array($request->obat_ids)) {
            foreach ($request->obat_ids as $id_obat) {
                DetailPeriksa::create([
                    'id_periksa' => $periksa->id,
                    'id_obat' => $id_obat
                ]);
            }
        }

        return redirect()->route('periksa.index')->with('success', 'Data periksa berhasil diperbarui.');
=======
        //
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Periksa $periksa)
    {
<<<<<<< HEAD
        $periksa->delete();
        return redirect()->route('periksa.index')->with('success', 'Data periksa berhasil dihapus.');
=======
        //
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
    }
}
