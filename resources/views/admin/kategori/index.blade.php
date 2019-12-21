@extends('admin.app')
@section('title')
    Kategori Produk
@endsection

@section('title_navbar')
    Kategori Produk 
@endsection

@section('content-header')    
    <div class="container-fluid">
        <ul class="breadcrumb">
            {{-- <li class="breadcrumb-item"><a href="#">Manajemen Produk</a></li> --}}
            <li class="breadcrumb-item">Manajemen Produk</li>
            <li class="breadcrumb-item active" aria-current="page">Kategori Produk</li>
        </ul>
    </div>

@endsection

@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="mb-0">Kategori Produk</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('kategori.create')}}"><button class="btn btn-md btn-success float-right">+ Tambah Kategori</button></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Opsi</th>
                        </tr>
                        @foreach ($data as $k)
                        <tr>
                            <td></td>
                            <td>{{$k->nama_kategori}}</td>
                            <td>
                                
                                <form action="{{route('kategori.destroy',$k->id_kategori)}}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <a href="{{route('kategori.edit',$k->id_kategori)}}" class="btn btn-sm btn-warning">Edit</a>
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                  </div>
            </div>
            <div class="card-footer py-4">
                
            </div>
        </div>
    </div>
</div>
    
@endsection
