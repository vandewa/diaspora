<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = Partner::select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return
                        '<div class="list-icons">
                        <a href="' . route('partner.edit', $data->id) . '" class="btn btn-outline-primary rounded-round"><i class="far fa-plus-square mr-2"></i>Edit</a>
                        <a href="' . route('partner.destroy', $data->id) . '" class="btn btn-outline-danger rounded-round delete-data-table"><i class="fas fa-trash mr-2"></i>Hapus</a>
                    </div>';
                })
                ->addColumn('image', function ($data) {
                    return '<img src="' . $data->preview_image . '" style="width:150px;">';
                })
                ->rawColumns(['action', 'image'])
                ->make(true);
        }

        return view('partner.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('partner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->file('logo')) {
            $lokasi = $request->file('logo')->storeAs(
                'public/partner/',
                date('Ymdhis') . '.' . $request->file('logo')->extension()
            );
        }

        Partner::create([
            'nama' => $request->nama,
            'url' => $request->url,
            'logo' => $lokasi
        ]);

        return redirect()->route('partner.index')->with('store', 'ok');
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
        $data = Partner::find($id);

        return view('partner.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->file('logo')) {
            $lokasi = $request->file('logo')->storeAs(
                'public/pendiri/',
                date('Ymdhis') . '.' . $request->file('logo')->extension()
            );
        } else {
            $lokasi = Partner::where('id', $id)->first()->logo;
        }

        Partner::find($id)->update([
            'nama' => $request->nama,
            'url' => $request->url,
            'logo' => $lokasi,
        ]);

        return redirect()->route('partner.index')->with('edit', 'oke');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Partner::destroy($id);
    }
}