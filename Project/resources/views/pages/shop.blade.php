@extends('layouts.app')

@section('content')
    <div class="shop container-fluid sh-titlebar sh-titlebar-center sh-titlebar-light sh-titlebar-parallax sh-titlebar-mobile-layout-compact sh-titlebar-mobile-title-on">
        <div class="container">
            <div class="sh-table sh-titlebar-height-medium">
                <div class="sh-table-cell">
                    <div class="titlebar-title">
                        <h2 class="titlebar-title-h1">Shop</h2>
                        <div class="sh-titlebar-desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container product-content">
        <div class="row">
            <div class="col-sm-4">
                <div id="sidebar" class="sidebar-left">
                    @include('inc.sidebar')
                </div>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-sm-4">
                            <h1>{{ $product->name }}</h1>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection


