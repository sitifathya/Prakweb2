<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForminputController extends Controller
{
    public function index(){
        return view('form_input');
}


public function input(Request $request){
    $this->validate($request, [
        "nama" => 'required',
        "email" => 'required',
        "lokasi" => 'required',
        "jk" => 'required',
        "skill" => 'required',
    ]);
    return view('input', ['data' => $request]);
}
}