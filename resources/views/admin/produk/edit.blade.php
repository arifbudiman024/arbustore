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
            <li class="breadcrumb-item active" aria-current="page">Edit Produk</li>
        </ul>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
            <h3 class="mb-0">Edit Produk</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                    @foreach($data as $p)
                    <form action="{{ route('produk.update',$p->id_produk) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{method_field('PUT')}}
                        <input type="hidden" name="id_produk" value="{{ $p->id_produk }}">
                        <div class="form-group">
                            <label for="Gambar">Gambar</label>
                            <div>
                                <img style="border:5px" width="250" height="" src="{{url('/assets/img/produk/'.$p->gambar)}}"/>
                                <input type="file" name="gambar" class="uploads form-control" style="margin-top: 20px;" >                               
                                <input type="hidden" name="hidden_image" value="{{$p->gambar}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="Nama Kategori">Pilih Kategori</label>
                            <select class="form-control" name="id_kategori" id="exampleSelect1">
                                @foreach($data1 as $k)
                                <option value="{{$k->id_kategori}}"
                                    @if($k->id_kategori === $p->id_kategori)
                                        selected
                                    @endif
                                    >
                                    {{$k->nama_kategori}}</option>
                                @endforeach
                            </select>
                        </div>                                   
                        <div class="form-group">
                            <label for="Nama Produk">Nama Produk</label>
                            <input type="text" name="nama_produk" class="form-control" value="{{$p->nama_produk}}">
                        </div>
                        <div class="form-group">
                            <label for="Harga">Harga</label>
                            <input type="text" name="harga" class="form-control" value="{{$p->harga}}">
                        </div>
                        <div class="form-group">
                            <label for="Tanggal Masuk">Tanggal Masuk</label>
                            <input type="date" name="tgl_masuk" class="form-control" value="{{$p->tgl_masuk}}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="Stok">Stok</label>
                            <input type="text" name="stok" class="form-control" value="{{$p->stok}}">
                        </div>
                        <div class="form-group">
                            <label for="Berat">Berat</label>
                            <input type="text" name="berat" class="form-control" value="{{$p->berat}}">
                        </div>
                        <div class="form-group">
                            <label for="Terjual">Terjual</label>
                            <input type="text" name="dibeli" class="form-control" value="{{$p->dibeli}}">
                        </div>
                        <div class="form-group">
                            <label for="diskon">Diskon</label>
                            <input type="text" name="diskon" class="form-control" value="{{$p->diskon}}">
                        </div>
                    </div>
                </div>
                    <div class="form-group">
                        <label for="Deskripsi">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="8">{{$p->deskripsi}}</textarea>
                    </div>    							
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{route('produk.index')}}" class=" btn btn-danger">Batal</a>
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
