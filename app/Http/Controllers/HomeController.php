<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\User;
=======
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
<<<<<<< HEAD
        $jumlahUser = User::count();
        return view('home', compact('jumlahUser'));
=======
        return view('home');
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
    }

    public function dokter()
    {
<<<<<<< HEAD
        return redirect()->route('home');
=======
        return view('dokter.index');
>>>>>>> adbd3e70a3c725fac0464c3e8b7cda961f5beb2d
    }
}
