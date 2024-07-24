<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cariers = DB::table('cariers')
        ->select(
            '*',
            DB::raw('SUBSTRING_INDEX(description, " ", 20) as short_description')
        )
        ->get();
        return view('admin.carier.index', compact('cariers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.carier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|mimes:jpg,jpeg,png', 
            'name' => 'required',
            'description' => 'nullable'
        ], [
            'image.required' => 'Gambar belum di upload',
            'image.mimes' => 'Format gambar harus jpg / jpeg / png',
            'name.required' => 'Nama wajib diisi.',
        ]);
        $validatedData['status'] = $request->status === 'true' ? true : false; 
        $validatedData['image'] = $request->file('image')->store('image/carier', 'public');
        $data = Carier::create($validatedData);

        return redirect()->route('cariers.index')->with('success', 'Berhasil menambahkan data karir : ' . $data->name);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Carier::findOrFail($id);
        return view('admin.carier.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Carier::findOrFail($id);
        return view('admin.carier.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'image' => 'mimes:jpg,jpeg,png', 
            'name' => 'required',
            'description' => 'nullable'
        ], [
            'image.mimes' => 'Format gambar harus jpg / jpeg / png',
            'name.required' => 'Nama wajib diisi.',
        ]);
        $validatedData['status'] = $request->status === 'true' ? true : false; 
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('image/carier', 'public');
        }
        $data = Carier::findOrFail($id);
        $data->update($validatedData);

        return redirect()->route('cariers.index')->with('success', 'Berhasil mengubah data karir : ' . $data->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Carier::findOrFail($id);
        $data->delete();

        return redirect()->route('cariers.index')->with('success', 'Berhasil menghapus data karir : ' . $data->name);
    }

    public function changeStatus($id)
    {
        $data = Carier::findOrFail($id);
        $status = $data->status === 1 ? 0 : 1;
        $data->status = $status;
        $data->save();

        return redirect()->route('cariers.index')->with('success', 'Berhasil mengubah status karir : ' . $data->name);
    }
}
