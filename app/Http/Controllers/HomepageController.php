<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $data = array('title' => 'Halaman Home' );
        return view('homepage/index', $data);
    }

    public function about()
    {
        $data = array('tittle' => 'Halaman tentang kami');
        return view('homepage/about',$data);
    }

    public function kategory()
    {
        $data = array('tittle' => 'kategori');
        return view('layouts.ktgr', $data);
    }

    public function contact()
    {
        $data = array('tittle' => 'Kontak Us');
        return view('homepage.contact', $data);
    }
}
