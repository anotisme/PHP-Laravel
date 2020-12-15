@extends('layouts.app')

@section('content')
    <div class="top-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h3>Edit {{ $user->name }}</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="center-area">
        <div class="container">
            <div class="row">
                <form action="/users/update/{{ $user->id }}" method="PUT">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                    </div>

                    <div class="form-group">
                        <input type="file" class="form-control" name="avatar" value="{{ $user->avatar }}">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
