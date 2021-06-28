@extends('layouts.frontend.index')
@section('content')
<!-- content start -->
    <div class="container-fluid p-0 home-content">
        <!-- banner start -->
        <div class="homepage-slide-blue">
            <h1>{{ Sitehelpers::get_option('pageHome', 'banner_title') }}</h1>
            <span class="title-sub-header">{{ Sitehelpers::get_option('pageHome', 'banner_text') }}</span>
            <form method="GET" action="{{ route('course.list') }}">
            <div class="searchbox-contrainer col-md-6 mx-auto">
                <input name="keyword" type="text" class="searchbox d-none d-sm-inline-block" placeholder="Search for courses by course titles"><input name="keyword" type="text" class="searchbox d-inline-block d-sm-none" placeholder="Search for courses"><button type="submit" class="searchbox-submit"><i class="fa fa-search"></i></button>
            </div>
            </form>
        </div>
        <!-- banner end -->

        <!-- dummy block start -->
        <article class="learn-block">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <h3 class="dblock-heading">{{ Sitehelpers::get_option('pageHome', 'learn_block_title') }}</h3>
                        <p class="dblock-text">{!! Sitehelpers::get_option('pageHome', 'learn_block_text') !!}</p>
                        <a href="{{ route('course.list') }}" class="btn btn-ulearn">Explore Courses</a>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-md-6 vertical-align">
                        <img class="img-fluid mt-5 mx-auto" src="{{ asset('frontend/img/landing.png') }}">
                    </div>
                </div>
            </div>
        </article>
        <!-- dummy block end -->

        <!-- instructor block start -->
        <article class="instructor-block">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center seperator-head mt-3">
                        <h3>Our Instructors</h3>
                        <p class="mt-3">{{ Sitehelpers::get_option('pageHome', 'instructor_text') }}</p>
                    </div>
                </div>
                
                <div class="row mt-4 mb-5">
                    @foreach ($instructors as $instructor) 
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="instructor-box mx-auto text-center">
                        <a href="{{ route('instructor.view', $instructor->instructor_slug) }}">
                            <main>
                                <img src="@if(Storage::exists($instructor->instructor_image)){{ Storage::url($instructor->instructor_image) }}@else{{ asset('backend/assets/images/course_detail_thumb.jpg') }}@endif">
                                <div class="col-md-12">
                                    <h6 class="instructor-title">{{ $instructor->first_name.' '.$instructor->last_name }}</h6>
                                    <p>{!! mb_strimwidth($instructor->biography, 0, 120, ".....") !!}</p>
                                </div>
                            </main>
                        </a>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </article>
        <!-- instructor block end -->

    </div>
    <!-- content end -->
@endsection