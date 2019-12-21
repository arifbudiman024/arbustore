@extends('admin.app')
@section('title')
    Cara Pembelian
@endsection

@section('title_navbar')
    Cara Pembelian
@endsection

@section('content-header')

@endsection

@section('content')
<div class="row">
    <div class="col">
        <div class="card shadow">
            <div class="card-header border-0">
            <h3 class="mb-0">Cara Pembelian</h3>
            </div>
            <div class="card-body">
                @foreach ($data as $c)
                    <form action="{{route('carabeli.update',$c->id)}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <input type="hidden" name="id" value="{{$c->id}}">
                        <div class="form-group">
                            <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="15">{{$c->deskripsi}}</textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Simpan Perubahan</button>
                        </div>
                    </form>
                @endforeach
            </div>
            {{-- <div class="card-footer py-4">
                
            </div> --}}
        </div>
    </div>
</div>
    
@endsection
