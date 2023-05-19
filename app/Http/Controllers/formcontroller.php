<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formcontroller extends Controller
{
    public function index(){
        return view('form');
}

// buat function yang di dalam nya mengambil inputan form
// dengan menggunakan parameter $request
// dan lakukan pengecekan apakah nama all sudah di isi atau belum (/required)

public function hasil(Request $request){
    $this->validate($request, [
        "nama" => 'required',
        "tempat,tanggal_lahir" => 'required',
        "jenis_kelamin" => 'required',
        "hobi" => 'required',
    ]);
    return view('hasil', ['data' => $request]);
}
}

