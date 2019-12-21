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
            <h3 class="mb-0">Kategori Produk</h3>
            </div>
            <div class="card-body">
                @foreach ($data as $k)
                <form action="{{ route('kategori.update',$k->id_kategori) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}                                    
                    <input type="hidden" name="id_kategori" value="{{ $k->id_kategori }}"> <br/>
                    <div class="form-group">
                        <label for="Nama Kategori">Nama Kategori</label>
                        <input type="text" name="nama_kategori" class="form-control" value="{{$k->nama_kategori}}">
                    </div>							
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{route('kategori.index')}}" class=" btn btn-danger">Batal</a>
                </form>    
                @endforeach
            </div>
            <div class="card-footer py-4">
                
            </div>
        </div>
    </div>
</div>
    
@endsection
