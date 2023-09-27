<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\InformasiUmum;
use App\Models\Pendiri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $data = InformasiUmum::where('id', 1)->first();
        $pendiri = Pendiri::get();
        $berita = Berita::with(['sampul', 'dibuat'])
            ->where('publish_st', 1)
            ->orderBy('created_at', 'desc')
            ->simplePaginate(4);

        return view('home.index', compact('data', 'pendiri', 'berita'));
    }

    public function berita($id)
    {
        $data = Berita::with('foto', 'dibuat')->where('slug', $id)->first();
        $informasi = InformasiUmum::where('id', 1)->first();
        $pendiri = Pendiri::get();

        views($data)->cooldown(2)->record();

        return view('detail-berita', compact('data', 'informasi', 'pendiri'));
    }

}