<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mahasiswa::all();
        return view('mahasiswa.index', ['data'=>$data]);
        // return view('mahasiswa.index')->with([
        //     'mahasiswa'-> Mahasiswa::all(),
        // ])
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.formcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'nim_mahasiswa' => 'required|min:8|max:10',
            'nama_mahasiswa' => 'required|min:4',
            'jenis_kelamin' => 'required|min:5',
            'alamat' => 'required|min:5',
            'prodi' => 'required|min:5',
            'jurusan' => 'required|min:5',
            'fakultas' => 'required|min:5',
            'kelas' => 'required|min:1|max:1',
        ]);

        $data = new Mahasiswa; 
        $data->nim_mahasiswa = $request -> nim_mahasiswa;
        $data->nama_mahasiswa = $request -> nama_mahasiswa;
        $data->jenis_kelamin = $request -> jenis_kelamin;
        $data->alamat = $request -> alamat;
        $data->prodi = $request -> prodi;
        $data->jurusan = $request -> jurusan;
        $data->fakultas = $request -> fakultas;
        $data->kelas = $request -> kelas;
        $data->save();
        
        return to_route('mahasiswa.index')->with('succes','data sukses di tambahkan');

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
