@extends('layouts.app')

@section('content')
    <div class="top-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h3>User detail</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="center-area">
        <div class="container">
            <div class="row">
            @if(isset($user))
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="user-content">
                        <div class="user-meta-thumb">
                        @if(isset($user->avatar))
                            <a href="/storage/{{ $user->avatar }}" class="sh-overlay-item sh-table-cell" data-rel="lightcase">
                                <img src="/storage/{{ $user->avatar }}" class="user-image" alt="">
                            </a>
                        @else
                            <a href="/storage/default.png" class="sh-overlay-item sh-table-cell" data-rel="lightcase">
                                <img src="/storage/default.png" class="default-image" alt="">
                            </a>
                        @endif
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8">
                    <div class="user-info">
                        <h2>{{ $user->name }}</h2>
                        <p>{{ $user->email }}</p>
                    </div>

                    <div class="user-action">
                        <a class="btn btn-success" href="/users/edit/{{ Auth::user()->id }}">Edit</a>
                    </div>
                </div>
            </div>
            @else
            <div class="user-container">
                <div class="sh-group blog-list blog-style-masonry masonry-shadow" style="position: relative; opacity: 1;">
                    <div class="sh-nothing-found sh-table">
                        <div class="sh-table-cell-top">
                            <i class="fa fa-compass"></i>
                        </div>
                        <div class="sh-table-cell-top">
                            <h2>No user matches</h2>
                        </div>
                    </div>
                    <div class="sh-nothing-found-big">
                        <span>Sorry</span>
                        <div>No user matches</div>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
@endsection
