<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Berita;
use App\Models\InformasiUmum;
use App\Models\Kegiatan;
use App\Models\Partner;
use App\Models\Pendiri;
use App\Models\Visitor;
use hisorange\BrowserDetect\Parser as Browser;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function pengunjung()
    {
        $geoipInfo = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        if (Browser::isDesktop() == 1) {
            $jenis = 'Desktop';
        }
        if (Browser::isTablet() == 1) {
            $jenis = 'Tablet';
        }
        if (Browser::isMobile() == 1) {
            $jenis = 'Mobile';
        }
        $data = [
            'ip' => $geoipInfo->ip,
            'iso_code' => $geoipInfo->iso_code,
            'country' => $geoipInfo->country,
            'city' => $geoipInfo->city,
            'state' => $geoipInfo->state,
            'state_name' => $geoipInfo->state_name,
            'postal_code' => $geoipInfo->postal_code,
            'lat' => $geoipInfo->lat,
            'lon' => $geoipInfo->lon,
            'timezone' => $geoipInfo->timezone,
            'continent' => $geoipInfo->continent,
            'currency' => $geoipInfo->currency,
            'browser_family' => Browser::browserFamily(),
            'browser_name' => Browser::browserName(),
            'platform_family' => Browser::platformFamily(),
            'platform_name' => Browser::platformName(),
            'jenis' => $jenis,
        ];
        Visitor::create($data);
    }
    public function index()
    {
        $this->pengunjung();
        $data = InformasiUmum::where('id', 1)->first();
        $pendiri = Pendiri::get();
        $berita = Berita::with(['sampul', 'dibuat'])
            ->where('publish_st', 1)
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
        $partner = Partner::get();
        $kegiatan = Kegiatan::with(['video'])
            ->where('publish_st', 1)
            ->orderBy('created_at', 'desc')
            ->limit(4)
            ->get();

        return view('home.index', compact('data', 'pendiri', 'berita', 'partner', 'kegiatan'));
    }

    public function berita($id)
    {
        $data = Berita::with('foto', 'dibuat')->where('slug', $id)->first();
        $informasi = InformasiUmum::where('id', 1)->first();
        $pendiri = Pendiri::get();

        views($data)->cooldown(2)->record();

        return view('detail-berita', compact('data', 'informasi', 'pendiri'));
    }

    public function anggota()
    {
        $informasi = InformasiUmum::where('id', 1)->first();
        $pendiri = Pendiri::get();

        return view('anggota', compact('informasi', 'pendiri'));
    }
    public function storeAnggota(Request $request)
    {
        Anggota::create([
            'nama' => $request->nama,
            'asal_desa' => $request->asal_desa,
            'domisili' => $request->domisili,
            'profesi' => $request->profesi,
            'no_hp' => $request->no_hp,
        ]);

        return redirect()->route('index')->with('store', 'oke');
    }

    public function pengurus($id)
    {
        $data = Pendiri::where('id', $id)->first();
        $informasi = InformasiUmum::where('id', 1)->first();
        $pendiri = Pendiri::get();

        return view('tentang', compact('data', 'informasi', 'pendiri'));
    }

    public function kegiatan($id)
    {
        $data = Kegiatan::with(['dibuat', 'video'])->where('slug', $id)->first();
        $informasi = InformasiUmum::where('id', 1)->first();
        $pendiri = Pendiri::get();

        views($data)->cooldown(2)->record();

        return view('detail-kegiatan', compact('data', 'informasi', 'pendiri'));
    }

    public function listNews()
    {
        $data = Berita::with('foto', 'dibuat')
            ->where('publish_st', 1)
            ->orderBy('created_at', 'desc')
            ->simplePaginate(8);
        $informasi = InformasiUmum::where('id', 1)->first();
        $pendiri = Pendiri::get();

        return view('list-berita', compact('data', 'informasi', 'pendiri'));
    }
    public function listKegiatan()
    {
        $data = Kegiatan::with('video', 'dibuat')
            ->where('publish_st', 1)
            ->orderBy('created_at', 'desc')
            ->simplePaginate(8);
        $informasi = InformasiUmum::where('id', 1)->first();
        $pendiri = Pendiri::get();

        return view('list-kegiatan', compact('data', 'informasi', 'pendiri'));
    }

}