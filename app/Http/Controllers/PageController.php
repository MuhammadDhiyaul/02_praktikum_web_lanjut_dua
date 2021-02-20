<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {
        return "Selamat Datang";
    }

    public function about()
    {
        return "Muhammad Dhiyaul Auliya 2041723007";
    }
    public function articles($id)
    {
        return "Halaman artikel dengan ID = " .$id;
    }
}
