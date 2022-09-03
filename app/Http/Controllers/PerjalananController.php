<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perjalanan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class perjalanancontroller extends Controller
{
    // untuk menampilkan data berdasarkan user
    public function index()
    {
        $data = Auth::user()->perjalanan()->get();
        return view('perjalanan.index', compact('data'));
        
    }

    //  untuk menampilkan view create
    public function create()
    {
        $users = user::all();
        return view('perjalanan.create', compact('users'));
    }

    public function store(Request $request)
    {
        // validasi data yang dikirimkan dari create
        
        $request->validate([
            'tanggal' => 'required',
            'waktu' => 'required',
            'lokasi' => 'required',
            'suhu' => 'required',
        ]);

        $create = new Perjalanan;

        $create->tanggal = $request->tanggal;
        $create->waktu = $request->waktu;
        $create->lokasi = $request->lokasi;
        $create->suhu = $request->suhu;
        $create->user_id = Auth::user()->id;

        $create->save();

        return redirect('/perjalanan')->with('status',' data baru berhasil dibuat.');
    }
    
    public function show(perjalanan $perjalanan){

    }

  
}
