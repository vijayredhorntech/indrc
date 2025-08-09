@extends('frontend.layouts.layout')
@section('content')
    <section class="page-title" data-bg-img="{{asset('assets/frontEnd/images/portfolio/large/01.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1>
                        Opportunities
                    </h1>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('index')}}">
                                    <i class="bi bi-house-door me-1"></i>Home</a>
                            </li>

                            <li class="breadcrumb-item active" aria-current="page">Opportunities</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div id="particles-js"></div>
    </section>
    <div class="page-content">
        <div class="container" style="padding: 20px">
            <div class="row">
                @php
                    $today = \Carbon\Carbon::today();
                    $allOpportunities = \App\Models\StudentAchievements::where(function($query) use ($today) {
                        $query->whereNull('publication_date')
                              ->orWhere('publication_date', '<=', $today);
                    })
                    ->where(function($query) use ($today) {
                        $query->whereNull('end_date')
                              ->orWhere('end_date', '>=', $today);
                    })
                    ->orderBy('created_at', 'desc')
                    ->get();
                @endphp
                @forelse($allOpportunities as $opportunity)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card h-100" style="border: 1px solid #ddd;">
                            <div class="card-body d-flex flex-column">
                                <div class="text-center mb-3">
                                    <img src="{{asset('storage/'.$opportunity->image)}}"
                                         alt="{{$opportunity->title}}"
                                         class="img-fluid rounded"
                                         style="max-height: 200px; width: 100%; object-fit: cover;">
                                </div>
                                <h5 class="card-title" style="color: rgb(154, 41, 18);">
                                    <i class="fa fa-award" style="margin-right: 8px;"></i>
                                    {{$opportunity->title}}
                                </h5>
                                <p class="card-text flex-grow-1" style="color: #333;">
                                    {{$opportunity->description}}
                                </p>
                                <div class="mt-auto">
                                    <a href="{{asset('storage/'.$opportunity->image)}}"
                                       target="_blank"
                                       class="btn btn-primary btn-sm">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="text-center py-5">
                            <h4>No opportunities found</h4>
                            <p class="text-muted">Please check back later for new opportunities.</p>
                        </div>
                    </div>
                @endforelse
            </div>

        </div>
    </div>
@endsection







