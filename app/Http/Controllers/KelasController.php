<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelas::all();
        return view('admin.kelas.list-kelas', [ 'kelas' => $kelas ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kelas.create-kelas');
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
            'tema' => 'required',
            'tipe' => 'required',
            'judul' => 'required',
            'deskripsi_singkat' => 'required',
            'nama_pembicara' => 'required',
            'deskripsi_singkat_pembicara' => 'required',
            'poin_materi' => 'required',
            'rangkaian_materi' => 'required',
        ]);

        if($request->hasFile('image')){
            $filename = $request->image->hashName();
            $request->image->storeAs('banners',$filename,'public');
        } else {
            $filename = 'banner.png';
        }

        $kelas = Kelas::create([
            'slug' => $request->judul,
            'tema' => $request->tema,
            'tipe' => $request->tipe,
            'judul' => $request->judul,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'nama_pembicara' => $request->nama_pembicara,
            'deskripsi_singkat_pembicara' => $request->deskripsi_singkat_pembicara,
            'poin_materi' => $request->poin_materi,
            'rangkaian_materi' => $request->rangkaian_materi,
            'image' => $filename,
        ]);

        return redirect()->to('/admin/kelas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas = Kelas::find($id);
        return view('admin.kelas.edit', [ 'kelas' => $kelas ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tema' => 'required',
            'tipe' => 'required',
            'judul' => 'required',
            'deskripsi_singkat' => 'required',
            'nama_pembicara' => 'required',
            'deskripsi_singkat_pembicara' => 'required',
            'poin_materi' => 'required',
            'rangkaian_materi' => 'required',
        ]);
        $kelas = Kelas::find($id);
        $request['slug'] = $request->judul;

        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('banners',$filename,'public');
            $request['image'] = $filename;
        } 

        $kelas->fill($request->post())->save();

        return redirect()->to('/admin/kelas')->with('success', "Class has been updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();
        return redirect()->to('/admin/kelas')->with('success', "Class has been deleted successfully");
    }
}
