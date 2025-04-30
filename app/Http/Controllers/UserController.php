<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Hash;
=======
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        $users = User::all();
        return view('users.index', compact('users'));
=======
        //
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
<<<<<<< HEAD
        return view('users.create');
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
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required|in:dokter,pasien,admin', // sesuaikan jika perlu
        ]);

        $validated['password'] = Hash::make($validated['password']);

        User::create($validated);

        return redirect()->route('users.index')->with('success', 'User berhasil ditambahkan.');
=======
        //
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
<<<<<<< HEAD
        return view('users.show', compact('user'));
=======
        //
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
<<<<<<< HEAD
        return view('users.edit', compact('user'));
=======
        //
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
<<<<<<< HEAD
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => "required|email|unique:users,email,{$user->id}",
            'role' => 'required|in:dokter,pasien,admin',
        ]);

        if ($request->filled('password')) {
            $validated['password'] = Hash::make($request->password);
        }

        $user->update($validated);

        return redirect()->route('users.index')->with('success', 'User berhasil diperbarui.');
=======
        //
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
<<<<<<< HEAD
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User berhasil dihapus.');
=======
        //
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
    }
}
