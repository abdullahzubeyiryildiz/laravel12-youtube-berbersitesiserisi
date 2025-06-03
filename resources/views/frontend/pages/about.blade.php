@extends('frontend.layouts.app')

@section('content')

 <!-- Header Banner -->
    @include('frontend.inc.breadcrumb')
    <!-- About -->
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30">
                    <div class="section-head mb-20">
                        <div class="section-title">{{$about->name}}</div>
                    </div>
                    <p>{!! $about->content !!}</p>

                    <p>{!! $about->vision !!}</p>
                    <p>{!! $about->mission !!}</p>
                </div>
                <div class="col col-md-3"> <img src="{{asset($about->image_url)}}" alt="" class="mt-90 mb-30"> </div>

            </div>
        </div>
    </section>
    <!-- Services Box -->
    <section class="services-box  section-padding pt-0 ">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="item"> <span class="{{$settings['home_hero_image_1']}}"></span>
                        <div class="cont">
                            <h5>{{__($settings['home_hero_title_1'])}}</h5>
                            <p>{{__($settings['home_hero_description_1'])}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item"> <span class="{{$settings['home_hero_image_2']}}"></span>
                        <div class="cont">
                            <h5>{{__($settings['home_hero_title_2'])}}</h5>
                            <p>{{__($settings['home_hero_description_2'])}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item"> <span class="{{$settings['home_hero_image_3']}}"></span>
                        <div class="cont">
                            <h5>{{__($settings['home_hero_title_3'])}}</h5>
                            <p>{{__($settings['home_hero_description_3'])}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Team -->
    <section class="team section-padding pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-head text-center">
                        <div class="section-title white">Ekibimiz</div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        @foreach ($teams as $team)
                        <div class="team-card mb-30">
                            <div class="team-img"><img src="{{asset($team->image_url)}}" alt="" class="w-100"></div>
                            <div class="team-content">
                                <h3 class="team-title">{{$team->name}}</h3>
                                <p class="team-text">{{$team->content}}</p>
                                <div class="social">
                                    <div class="full-width">
                                        <a href="{{$team->facebook}}"><i class="ti-linkedin"></i></a>
                                        <a href="{{$team->twitter}}"><i class="ti-facebook"></i></a>
                                         <a href="{{$team->instagram}}"><i class="ti-twitter"></i></a>
                                         <a href="{{$team->linkedin}}"><i class="ti-instagram"></i></a>
                                    </div>
                                </div>
                                <a href="{{route('ekibimiz.detay', $team->slug)}}" class="button-1 mt-15">Görüntüle<span></span></a>
                            </div>
                            <div class="title-box">
                                <h3 class="mb-0">{{$team->name}}<span>{{$team->short_content}}</span></h3>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
