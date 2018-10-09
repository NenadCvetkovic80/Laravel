@extends('master')
@section('title', 'Home')

@section('content')

    <div class="container">
        <div class="row banner">

            <div class="col-md-12">

                <h1 class="text-center margin-top-100 editContent">
                    A good beginning
                </h1>

                <h3 class="text-center margin-top-100 editContent">{!! trans('main.subtitle') !!}</h3>

                <div class="text-center">
                    <img src="https://images.pexels.com/photos/307008/pexels-photo-307008.jpeg" width="1000" height="450" alt="">
                </div>

            </div>

        </div>
    </div>

@endsection