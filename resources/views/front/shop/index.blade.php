@extends('front.app')

@section('title')
    Shop
@endsection

@section('menu-shop')
    active 
@endsection

@section('content')
<div class="row">
    {{-- begin:shop-sidebar --}}
    <div class="col-lg-3">
        @include('front.inc.shop-sidebar')
    </div>
    {{-- end:shop-sidebar --}}
    <div class="col-lg-9">
        <div class="masonry-loader masonry-loader-showing">
            <div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
                @foreach($data as $p)
                <div class="col-sm-6 col-lg-4 product">
                    {{-- <a href="shop-product-sidebar-left.html">
                        <span class="onsale">Sale!</span>
                    </a> --}}
                    <span class="product-thumb-info border-0">
                        <a href="shop-cart.html" class="add-to-cart-product bg-color-primary">
                            <span class="text-uppercase text-1">Add to Cart</span>
                        </a>
                        <a href="shop-product-sidebar-left.html">
                            <span class="product-thumb-info-image">
                                <img alt="" class="img-fluid" src="{{url('/assets/img/produk/'.$p->gambar)}}" height="" width="800px">
                            </span>
                        </a>
                        <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                            <a href="shop-product-sidebar-left.html">
                                <h4 class="text-4 text-primary">{{$p->nama_produk}}</h4>
                                <span class="price">
                                    {{-- <del><span class="amount">$325</span></del> --}}
                                    <ins><span class="amount text-dark font-weight-semibold">Rp. {{$p->harga}}</span></ins>
                                </span>
                            </a>
                        </span>
                    </span>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col">
                    <ul class="pagination float-right">
                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection