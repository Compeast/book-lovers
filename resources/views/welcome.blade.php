@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row height d-flex justify-content-center align-items-center">

            <div class="col-md-8">
                <div class="d-flex align-items-center justify-content-center mb-2">
                    <span style="font-size: 40px;font-weight: bolder;">SEARCH</span>
                </div>

                <div class="search">
                    <i class="fa fa-search"></i>
                    <input type="search" class="form-control" name="q"
                           placeholder="ISBN, Title, Author, ..."
                           value="{{ old('q') }}" required autocomplete="q" autofocus>
                    <button class="btn btn-primary">Search</button>
                </div>
                @error('q')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror

            </div>

        </div>
    </div>
@endsection
