<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Pendiri;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PendiriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = Pendiri::select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return
                        '<div class="list-icons">
                        <a href="' . route('pendiri.edit', $data->id) . '" class="btn btn-outline-primary rounded-round"><i class="icon-key mr-2"></i>Edit</a>
                        <a href="' . route('pendiri.destroy', $data->id) . '" class="btn btn-outline-danger rounded-round delete-data-table"><i class="icon-trash mr-2"></i>Hapus</a>
                    </div>';
                })
                ->addColumn('image', function ($data) {
                    return '<img src="' . $data->preview_image . '" style="height:100px;">';
                })
                ->rawColumns(['action', 'image'])
                ->make(true);
        }

        return view('pendiri.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pendiri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->file('path_foto')) {
            $lokasi = $request->file('path_foto')->storeAs(
                'public/pendiri/',
                date('Ymdhis') . '.' . $request->file('path_foto')->extension()
            );
        }

        Pendiri::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'path_foto' => $lokasi
        ]);

        return redirect()->route('pendiri.index')->with('store', 'ok');
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
        $data = Pendiri::find($id);

        return view('pendiri.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->file('path_foto')) {
            $lokasi = $request->file('path_foto')->storeAs(
                'public/pendiri/',
                date('Ymdhis') . '.' . $request->file('path_foto')->extension()
            );
        } else {
            $lokasi = Pendiri::where('id', $id)->first()->logo;
        }

        Pendiri::find($id)->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'path_foto' => $lokasi,
        ]);

        return redirect()->route('pendiri.index')->with('edit', 'oke');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Pendiri::destroy($id);
    }
}