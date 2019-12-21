<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class JasaKirimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('tbl_jasakirim')
                    ->select('id_jasakirim','nama_perusahaan','alias','gambar')
                    ->get();
        return view('admin.jasakirim.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jasakirim.create');
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
            $request->file('gambar')->move('assets/img/jasakirim', $fileName);
            $gambar = $fileName;
        } else {
            $gambar = "default.png";
        }

        DB::table('tbl_jasakirim')
            ->insert([
                'nama_perusahaan' =>$request->nama_perusahaan,
                'alias'=>$request->alias,
                'gambar' =>$gambar
            ]);
        
        return redirect()->route('jasakirim.index');
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
        $data = DB::table('tbl_jasakirim')
                    ->where('id_jasakirim',$id)
                    ->select('id_jasakirim','nama_perusahaan','alias','gambar')
                    ->get();
        
        return view('admin.jasakirim.edit',compact('data'));
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
            $request->file('gambar')->move('/assets/img/jasakirim', $fileName);
            $gambar = $fileName;

            $data = DB::table('tbl_jasakirim')
                ->where('id_jasakirim',$id)
                ->select('id_jasakirim','nama_perusahaan','alias','gambar')
                ->update([
                    'id_jasakirim' => $request->id_jasakirim,
                    'nama_perusahaan' => $request->nama_perusahaan,
                    'alias' => $request->alias,
                    'gambar' => $gambar
                ]);

        } else {
            $data = DB::table('tbl_jasakirim')
                ->where('id_jasakirim',$id)
                ->select('id_jasakirim','nama_perusahaan','alias','gambar')
                ->update([
                    'id_jasakirim' => $request->id_jasakirim,
                    'nama_perusahaan' => $request->nama_perusahaan,
                    'alias' => $request->alias,
                    'gambar' => $image_name
                ]);
        }
        return redirect()->route('jasakirim.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tbl_jasakirim')
            ->where('id_jasakirim',$id)
            ->delete();
        
            return redirect()->route('jasakirim.index'); 
    }
}
