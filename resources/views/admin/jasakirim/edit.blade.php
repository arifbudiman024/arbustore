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
            <li class="breadcrumb-item active" aria-current="page">Edit Jasa Pengiriman</li>
        </ul>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
            <h3 class="mb-0">Edit Jasa Pengiriman</h3>
            </div>
            <div class="card-body">
                @foreach($data as $j)
                <form action="{{ route('jasakirim.update',$j->id_jasakirim) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <input type="hidden" name="id_jasakirim" value="{{ $j->id_jasakirim }}">                                   
                    <div class="form-group">
                        <label for="Nama Perusahaan">Nama Perusahaan</label>
                        <input type="text" name="nama_perusahaan" class="form-control" value="{{$j->nama_perusahaan}}">
                    </div>
                    <div class="form-group">
                        <label for="Alias">Alias</label>
                        <input type="text" name="alias" class="form-control" value="{{$j->alias}}">
                    </div>
                    <div class="form-group">
                        <label for="Gambar">Gambar</label>
                        <div>
                            <img width="200" src="{{ url('assets/img/jasakirim/'.$j->gambar) }}"/>
                            <input type="file" name="gambar" class="uploads form-control" style="margin-top: 20px;" >
                            <input type="hidden" name="hidden_image" value="{{$j->gambar}}">
                        </div>
                    </div>							
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{route('jasakirim.index')}}" class=" btn btn-danger">Batal</a>
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
