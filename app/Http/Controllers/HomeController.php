<?php

namespace App\Http\Controllers;

use App\Models\InformasiUmum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $data = InformasiUmum::where('id', 1)->first();

        return view('home.index', compact('data'));
    }


}