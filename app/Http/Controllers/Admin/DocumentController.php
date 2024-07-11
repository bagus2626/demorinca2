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
        $data = DB::table('documents')->get();
        return view('admin.test', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'no_registrasi_sistem_simbg' => 'required', 
                'nama_pemohon' => 'required'
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
        } catch (\Throwable $th) {
            Log::error('Error creating document: ', ['error' => $th->getMessage()]);
            return response()->json(['error' => 'Failed to create document', 'message' => $th->getMessage()], 500);
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
