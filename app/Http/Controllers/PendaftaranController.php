<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        $data = array( 'title' => 'Mahasiswa' );
        return view( 'pendaftaran', $data );
    }
}
