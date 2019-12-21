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
            <li class="breadcrumb-item"><a href="/admin/jasakirim">Jasa Pengiriman</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Jasa Pengiriman</li>
        </ul>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
            <h3 class="mb-0">Tambah Jasa Pengiriman</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('jasakirim.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}                                   
                    <div class="form-group">
                        <label for="Nama Perusahaan">Nama Perusahaan</label>
                        <input type="text" name="nama_perusahaan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Alias">Alias</label>
                        <input type="text" name="alias" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Gambar">Gambar</label>
                        <div>
                            <img width="200"/>
                            <input type="file" name="gambar" class="uploads form-control" style="margin-top: 20px;" >
                        </div>
                    </div>							
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="{{route('jasakirim.index')}}" class=" btn btn-danger">Batal</a>
                </form>
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
