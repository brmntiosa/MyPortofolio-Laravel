<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function getIndex()
    {
        $data['list']= mahasiswa::all();
        return view ('profile.index', $data);


    }
    
}
