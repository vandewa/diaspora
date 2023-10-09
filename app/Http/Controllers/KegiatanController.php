<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use App\Models\File as Files;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\StoreVideoValidation;
use Cviebrock\EloquentSluggable\Services\SlugService;


class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = Kegiatan::select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return
                        '<div class="list-icons">
                        <a href="' . route('kegiatan.edit', $data->id) . '" class="btn btn-outline-primary rounded-round"><i class="far fa-plus-square mr-2"></i>Edit</a>
                        <a href="' . route('kegiatan.destroy', $data->id) . '" class="btn btn-outline-danger rounded-round delete-data-table"><i class="fas fa-trash mr-2"></i>Hapus</a>
                    </div>';
                })
                ->addColumn(
                    'tombol',
                    function ($data) {
                        $check = $data->publish_st ? "checked" : "";
                        return '<label class="switch">
                        <input type="checkbox" ' . $check . ' onclick="publish(' . $data->id . ')">
                        <span class="slider round"></span>
                        </label>';
                    }
                )
                ->addColumn('tanggal', function ($a) {
                    return Carbon::createFromTimeStamp(strtotime($a->created_at))->isoFormat('D MMMM Y');
                })
                ->rawColumns(['action', 'tombol'])
                ->make(true);
        }

        return view('kegiatan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kegiatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $kegiatan = Kegiatan::create([
            'judul' => $request->judul,
            'slug' => $request->slug,
            'isi_berita' => $request->isi_berita,
            'created_by' => auth()->user()->id,
            'link_yt' => $request->link_yt
        ]);

        // if ($request->file('video')) {
        //     $lokasi = $request->file('video')->storeAs(
        //         'public/kegiatan/',
        //         date('Ymdhis') . '.' . $request->file('video')->extension()
        //     );

        //     $nama = date('Ymdhis') . '.' . $request->file('video')->extension();

        //     Files::create([
        //         'kegiatan_id' => $kegiatan->id,
        //         'nama_file' => $nama,
        //         'path' => $lokasi
        //     ]);
        // }

        return redirect()->route('kegiatan.index')->with('store', 'ok');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Kegiatan::find($id);

        return view('kegiatan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Kegiatan::find($id)->update([
            'judul' => $request->judul,
            'slug' => $request->slug,
            'isi_berita' => $request->isi_berita,
            'link_yt' => $request->link_yt
        ]);

        return redirect()->route('kegiatan.index')->with('edit', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kegiatan::destroy($id);
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Kegiatan::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }

    public function changeAccess(Request $request)
    {
        $comp = Kegiatan::where('id', $request->id)->first();
        $comp->publish_st = !$comp->publish_st;
        $comp->save();

        return response()->json(
            [
                'success' => true,
                'message' => 'Data has been successfully changed!'
            ],
            200
        );
    }
}