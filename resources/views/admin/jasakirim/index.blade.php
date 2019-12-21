@extends('admin.app')
@section('title')
    Jasa Pengiriman
@endsection

@section('title_navbar')
    Jasa Pengiriman 
@endsection

@section('content-header')    
    <div class="container-fluid">
        <ul class="breadcrumb">
            {{-- <li class="breadcrumb-item"><a href="#">Manajemen Produk</a></li> --}}
            <li class="breadcrumb-item">Manajemen Produk</li>
            <li class="breadcrumb-item active" aria-current="page">Jasa Pengiriman</li>
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
                        <h3 class="mb-0">Jasa Pengiriman</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('jasakirim.create')}}"><button class="btn btn-md btn-success float-right">+ Tambah Jasa Kirim</button></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Perusahaan</th>
                                <th>Alias</th>
                                <th>Gambar</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $j)
                            <tr>
                                <td></td>
                                <td>{{$j->nama_perusahaan}}</td>
                                <td>{{$j->alias}}</td>
                                <td>
                                <img src="{{url('/assets/img/jasakirim/'.$j->gambar)}}" width="" height="50px" alt="image" style="margin-right: 10px;" />
                                </td>
                                <td> 
                                    <form action="{{route('jasakirim.destroy',$j->id_jasakirim)}}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <a href="{{route('jasakirim.edit',$j->id_jasakirim)}}" class="btn btn-sm btn-warning">Edit</a>
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </td>
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
