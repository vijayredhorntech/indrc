@push('styles')
    <style>
        p {color: black;}
    </style>
@endpush

@extends('frontend.layouts.layout')
@section('content')
    <section class="page-title" data-bg-img="{{asset('assets/frontEnd/images/portfolio/large/01.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1>
                        {{ucfirst($title)}}
                    </h1>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('index')}}">
                                    <i class="bi bi-house-door me-1"></i>Home</a>
                            </li>

                            <li class="breadcrumb-item active" aria-current="page">{{ucfirst($title)}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div id="particles-js"></div>
    </section>
    <div class="page-content">
        <div class="container" style="padding: 20px">
            <iframe src="{{$path}}" style="width:100%; height: 1000px" frameborder="0"></iframe>
        </div>
    </div>
@endsection





