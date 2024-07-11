<?php

namespace App\Http\Controllers\Admin;

use App\Models\Document;
use App\Models\LogDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Date;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = DB::table('documents')->get();
        return view('admin.document.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.document.create');
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
            'no_registrasi_sistem_simbg' => 'required', 
            'nama_pemohon' => 'required',
            'date_start' => 'required|date'
        ], [
            'no_registrasi_sistem_simbg.required' => 'Nomor registrasi sistem SimBG wajib diisi.',
            'nama_pemohon.required' => 'Nama pemohon wajib diisi.',
            'date_start.required' => 'Tanggal mulai wajib diisi.',
            'date_start.date' => 'Tanggal mulai harus berupa tanggal yang valid.'
        ]);
        $validatedData['tanggal'] = Date::now();
        $validatedData['token'] = 'DR' . rand(111111, 999999);

        $data = Document::create($validatedData);
        LogDocument::create([
            'id_document' => $data->id,
            'tanggal' => $request->date_start, 
            'status' => 'Mulai'
        ]);

        return redirect()->route('documents.index')->with('success', 'Berhasil menambahkan data dengan token : ' . $data->token);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Document::findOrFail($id);
        return view('admin.document.edit', compact('data'));
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
            'no_registrasi_sistem_simbg' => 'required', 
            'nama_pemohon' => 'required',
            'date_start' => 'required|date'
        ], [
            'no_registrasi_sistem_simbg.required' => 'Nomor registrasi sistem SimBG wajib diisi.',
            'nama_pemohon.required' => 'Nama pemohon wajib diisi.',
            'date_start.required' => 'Tanggal mulai wajib diisi.',
            'date_start.date' => 'Tanggal mulai harus berupa tanggal yang valid.'
        ]);

        $data = Document::findOrFail($id);
        $data->update($validatedData);

        return redirect()->route('documents.index')->with('success', 'Berhasil menambahkan data dengan token : ' . $data->token);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Document::findOrFail($id);
        $data->delete();

        return redirect()->route('documents.index')->with('success', 'Berhasil menghapus data dengan token : ' . $data->token);
    }

    public function changeStatus($id) 
    {
        $log = DB::table('log_documents')->orderBy('id', 'DESC')->where('id_document', $id)->first();
        
        $status = 'Rencana';
        if($log->status === 'Rencana') {
            $status = 'Selesai';
        }

        LogDocument::create([
            'id_document' => $id,
            'tanggal' => Date::now(),
            'status' => $status
        ]);

        return redirect()->back()->with('success', 'Berhasil Menambahkan Status : ' . $status);
    }
}
