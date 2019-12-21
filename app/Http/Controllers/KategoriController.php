<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('tbl_kategori')
                    ->select('id_kategori','nama_kategori')
                    ->get();
        return view('admin.kategori.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('tbl_kategori')
            ->insert([
                'nama_kategori' =>$request->nama_kategori
            ]);
        return redirect()->route('kategori.index');
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
        $data = DB::table('tbl_kategori')
                    ->where('id_kategori',$id)
                    ->select('id_kategori','nama_kategori')
                    ->get();
        //$data = DB::select("SELECT * FROM tbl_kategori WHERE id_kategori='$id'");            
        return view('admin.kategori.edit',compact('data'));
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
        $data = DB::table('tbl_kategori')
                    ->where('id_kategori',$id)
                    ->select('id_kategori','nama_kategori')
                    ->update([
                        'id_kategori' => $request->id_kategori,
                        'nama_kategori' => $request->nama_kategori
                    ]);
        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::table('tbl_kategori')
                    ->where('id_kategori',$id)
                    ->delete();
        return redirect()->route('kategori.index')->with('alert-success','Data berhasi dihapus!');
    }
}
