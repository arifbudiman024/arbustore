@extends('admin.app')
@section('title')
    Produk
@endsection

@section('title_navbar')
    Produk 
@endsection

@section('content-header')    
    <div class="container-fluid">
        <ul class="breadcrumb">
            {{-- <li class="breadcrumb-item"><a href="#">Manajemen Produk</a></li> --}}
            <li class="breadcrumb-item">Manajemen Produk</li>
            <li class="breadcrumb-item active" aria-current="page">Produk</li>
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
                        <h3 class="mb-0">Produk</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('produk.create')}}"><button class="btn btn-md btn-success float-right"><i class="fa fa-plus"></i> Tambah Produk</button></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Kategori</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Opsi</th>
                                {{-- <th>Deskripsi</th>
                                <th>Dibeli</th>
                                <th>Berat</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $p)
                            <tr>
                                <td></td>
                                <td>
                                    <img src="{{url('/assets/img/produk/'.$p->gambar)}}" width="100px" alt="image" style="margin-right: 10px;" />
                                </td>
                                <td>{{$p->nama_kategori}}</td>
                                <td>{{$p->nama_produk}}</td>
                                <td>{{$p->harga}}</td>
                                <td>{{$p->stok}}</td>
                                <td> 
                                    <form action="{{route('produk.destroy',$p->id_produk)}}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <a href="{{route('produk.show',$p->id_produk)}}" class="btn btn-sm btn-outline-info" title="detail"><i class="fa fa-info-circle"></i></a>
                                        <a href="{{route('produk.edit',$p->id_produk)}}" class="btn btn-sm btn-outline-warning" title="edit"><i class="fa fa-pen"></i></a>
                                        <button type="submit" class="btn btn-sm btn-outline-danger" title="hapus"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                                {{-- <td>{{$p->deskripsi}}</td>
                                <td>{{$p->dibeli}}</td>
                                <td>{{$p->berat}}</td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                  </div>
            </div>
            <div class="card-footer py-4">
                
            </div>
        </div>
    </div>
</div>
    
@endsection

@section('add_js')

<script type="text/javascript">
    $(document).ready(function() {
      $('#table').DataTable({
        "iDisplayLength": 50
      });
  
  } );
</script>

@endsection