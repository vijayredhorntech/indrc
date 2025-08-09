@extends('frontend.layouts.layout')
@section('content')
    <section class="page-title" data-bg-img="{{asset('assets/frontEnd/images/portfolio/large/01.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1>
                        Announcements/ News
                    </h1>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('index')}}">
                                    <i class="bi bi-house-door me-1"></i>Home</a>
                            </li>

                            <li class="breadcrumb-item active" aria-current="page">Announcements/ News</li>
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

                <div class="col-md-12">
                    <h3 style="font-family: FELIXTI !important;font-weight: 600;font-size: 25px;color: rgb(154, 41, 18); border-bottom: 1px solid rgb(154, 41, 18); width: max-content">
                        Announcements/ News</h3>

                    <table class="table table-striped mb-3">
                        <thead>
                        <tr style="background-color: #561304; color: white; font-size: 15px">

                            <th style="width: 10%;text-align: left;">Date</th>
                            <th style="width: 25%;text-align: left;">Title</th>
                            <th style="width: 50%;text-align: left;">Description</th>
                            <th style="width: 15%;text-align: left;"> Documents</th>

                        </tr>
                        </thead>
                        @php
                            $today = \Carbon\Carbon::today();
                            $allNotifications = \App\Models\Notification::where(function($query) use ($today) {
                                $query->whereNull('publication_date')
                                      ->orWhere('publication_date', '<=', $today);
                            })
                            ->where(function($query) use ($today) {
                                $query->whereNull('notification_end_date')
                                      ->orWhere('notification_end_date', '>=', $today);
                            })
                            ->orderBy('notification_date', 'desc')
                            ->get();
                        @endphp



                        <tbody>
                        @forelse($allNotifications as $announcement)
                            <tr>

                                <td>
                                    {{\Carbon\Carbon::parse($announcement->notification_date)->format('d/m/Y')}}
                                </td>
                                <td>
                                    {{$announcement->notification_title}}
                                </td>
                                <td>
                                    {{$announcement->notification_description}}
                                </td>
                                <td style="text-align: left;">
                                    <a href="{{asset('storage/'. $announcement->notification_file)}}" target="_blank" style="font-size: 12px;" tabindex="0">View Document</a>
                                </td>
                            </tr>
                        @empty
                        @endforelse


                        </tbody>


                    </table>
                </div>


            </div>

        </div>
    </div>
@endsection






