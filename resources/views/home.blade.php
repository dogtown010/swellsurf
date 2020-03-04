@extends('layouts.app')

@section('title', 'Swell Surf Lodge')

@section('sidebar')
    @include('layouts.nav')
@endsection

@section('content')
    <div class="banner">
        <div class="container">
            <div class="row" style="padding-top: 160px">
                <div class="col-lg-6">
                    <h1 class="banner-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit 
                    </h1>
                    <a href="">
                        <button class="button-primary">BOOK NOW</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection