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
                        {{ucfirst($page->name)}}
                    </h1>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('index')}}">
                                    <i class="bi bi-house-door me-1"></i>Home</a>
                            </li>

                            <li class="breadcrumb-item active" aria-current="page">{{ucfirst($page->name)}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div id="particles-js"></div>
    </section>
    <div class="page-content">
        <div class="container" style="padding: 20px">
            @php
                // Grouping media items by 'gallery_title' custom property
                $groupedMedia = $page->getMedia('gallery_images')->groupBy(function($media) {
                    return $media->getCustomProperty('gallery_title');
                });
            @endphp
            @if($groupedMedia->isNotEmpty())
                <section class="gallery-page-section gallery-page-2 centred">
                    <div class="auto-container">
                        <div class="sortable-masonry">
                            <div class="filters">
                                <ul class="filter-tabs filter-btns clearfix">
                                    @foreach($groupedMedia as $galleryTitle => $mediaItems)
                                        <li class="{{$loop->iteration===1?'active':''}} filter" data-role="button" data-filter=".{{$loop->iteration}}">{{ $galleryTitle }}</li>
                                    @endforeach

                                </ul>
                            </div>
                            <div class="items-container row clearfix">
                                @foreach($groupedMedia as $galleryTitle => $mediaItems)
                                    @php $parentLoop = $loop->iteration; @endphp
                                    @foreach($mediaItems as $media)
                                        <div class="col-lg-4 col-md-6 col-sm-12 masonry-item small-column {{ $parentLoop }}">
                                            <div class="project-block-one">
                                                <div class="inner-box">
                                                    <figure class="image-box"><img src="{{ $media->getUrl() }}" alt=""></figure>
                                                    <div class="content-box">
                                                        <div class="text">
                                                            <div class="view-btn"><a href="{{ $media->getUrl() }}" class="lightbox-image" data-fancybox="gallery"><i class="icon-49"></i></a></div>
                                                            @if($media->getCustomProperty('caption'))
                                                                <h4><a href="javascript:void(0)"> {{ $media->getCustomProperty('caption') }}</a></h4>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>
                            <a href="public/assets/pdf/resume.pdf"></a>
                        </div>
                    </div>
                </section>
            @endif




            {!! $page->content !!}
        </div>
    </div>
@endsection


