<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('tbl_produk as a')
                ->join('tbl_kategori as b','b.id_kategori','=','a.id_kategori')
                //->select('b.nama_kategori','a.id_produk','a.nama_produk','a.deskripsi','a.harga','a.stok','a.gambar')
                ->get();
        return view('admin.produk.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = DB::table('tbl_kategori')
                    ->get();

        return view('admin.produk.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file('gambar')) {
            $file = $request->file('gambar');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('gambar')->move('assets/img/produk', $fileName);
            $gambar = $fileName;
        } else {
            $gambar = "default.png";
        }
        
        DB::table('tbl_produk')
            ->insert([
                'id_kategori' =>$request->id_kategori,
                'nama_produk' =>$request->nama_produk,
                'deskripsi' =>$request->deskripsi,
                'harga' =>$request->harga,
                'stok' =>$request->stok,
                'berat' =>$request->berat,
                'diskon' =>$request->diskon,
                'dibeli' =>$request->dibeli,
                'tgl_masuk' =>$request->tgl_masuk,
                'gambar' =>$gambar
            ]);
        
        return redirect()->route('produk.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('tbl_produk as a')
                    ->join('tbl_kategori as b','b.id_kategori','=','a.id_kategori')
                    ->where('a.id_produk',$id)
                    ->get();
        
        return view('admin.produk.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data1 = DB::table('tbl_kategori')
                    ->get();
        $data = DB::table('tbl_produk')
                    ->where('id_produk',$id)
                    ->get();

        return view('admin.produk.edit',compact('data1','data'));
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
        $image_name = $request->hidden_image;
        $gambar = $request->file('gambar');

        if($gambar !='') {
            $file = $request->file('gambar');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak; 
            $request->file('gambar')->move('/assets/img/produk', $fileName);
            $gambar = $fileName;

            DB::table('tbl_produk')
                ->where('id_produk',$id)
                ->update([
                    'id_kategori' =>$request->id_kategori,
                    'nama_produk' =>$request->nama_produk,
                    'deskripsi' =>$request->deskripsi,
                    'harga' =>$request->harga,
                    'stok' =>$request->stok,
                    'berat' =>$request->berat,
                    'diskon' =>$request->diskon,
                    'dibeli' =>$request->dibeli,
                    'tgl_masuk' =>$request->tgl_masuk,
                    'gambar' =>$gambar
                ]);

        } else {
            
            DB::table('tbl_produk')
                ->where('id_produk',$id)
                ->update([
                    'id_kategori' =>$request->id_kategori,
                    'nama_produk' =>$request->nama_produk,
                    'deskripsi' =>$request->deskripsi,
                    'harga' =>$request->harga,
                    'stok' =>$request->stok,
                    'berat' =>$request->berat,
                    'diskon' =>$request->diskon,
                    'dibeli' =>$request->dibeli,
                    'tgl_masuk' =>$request->tgl_masuk,
                    'gambar' =>$image_name
                ]);
        };
        return redirect()->route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tbl_produk')
            ->where('id_produk',$id)
            ->delete();
        
        return redirect()->route('produk.index');
    }
}
