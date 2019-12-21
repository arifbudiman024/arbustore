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
            <li class="breadcrumb-item"><a href="/admin/produk">Produk</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Produk</li>
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
                        <a href="{{route('produk.index')}}" class=" btn btn-success float-left"><i class="fa fa-arrow-left"></i></a><h3 class="mb-0">Detail Produk</h3>
                    </div>
                    <div class="col-md-6">
                    @foreach($data as $p)
                        <a href="{{route('produk.destroy',$p->id_produk)}}" class=" btn btn-danger float-right"><i class="fa fa-trash"></i></a>
                        <a href="{{route('produk.edit',$p->id_produk)}}" class=" btn btn-warning float-right"><i class="fa fa-edit"></i></a>
                        
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="float-none">
                                <img width="250" height="" src="{{ url('assets/img/produk/'.$p->gambar) }}"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="Kategori">Kategori Produk</label>
                            <input type="text" name="kategori" class="form-control" value="{{$p->nama_kategori}}" disabled>
                        </div>                                  
                        <div class="form-group">
                            <label for="Nama Produk">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control" value="{{$p->nama_produk}}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="Harga">Harga</label>
                            <input type="text" name="harga" class="form-control" value="{{$p->harga}}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="Tanggal Masuk">Tanggal Masuk</label>
                            <input type="text" name="tgl_masuk" class="form-control" value="{{$p->tgl_masuk}}" disabled>
                        </div>			                        
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="Stok">Stok</label>
                            <input type="text" name="stok" class="form-control" value="{{$p->stok}}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="Berat">Berat</label>
                            <input type="text" name="berat" class="form-control" value="{{$p->berat}}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="Berat">Terjual</label>
                            <input type="text" name="dibeli" class="form-control" value="{{$p->dibeli}}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="Diskon">Diskon</label>
                            <input type="text" name="diskon" class="form-control" value="{{$p->diskon}}" disabled>
                        </div>
                    </div>
                </div>
                        <div class="form-group">
                            <label for="Deskripsi">Deskripsi</label>
                            <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="8" disabled >{{$p->deskripsi}}</textarea>
                        </div>
                    </form>
                    @endforeach
                
                    
            </div>
            <div class="card-footer py-4">
                
            </div>
        </div>
    </div>
</div>
    
@endsection

@section('add_js')
<!--begin::Page Scripts(used by this page) -->

<script type="text/javascript">
    function readURL() {
        var input = this;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $(input).prev().attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(function () {
        $(".uploads").change(readURL)
        $("#f").submit(function(){
            // do ajax submit or just classic form submit
            //  alert("fake subminting")
            return false
        })
    })
</script>
<!--end::Page Scripts -->
@endsection
