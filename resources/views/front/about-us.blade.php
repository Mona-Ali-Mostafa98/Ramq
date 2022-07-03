@extends('front.layout')
@section('content')
    <div class="breads col-xs-12">
        @foreach ($settings as $setting)
            @foreach ($setting->photes as $key => $value)
                <div class="item">
                    <img src="{{ asset('images/settings/' . $value->photo) }}" alt="">
                </div>
            @endforeach
        @endforeach
        <div class="container">
            <h3>من نحن</h3>
            <ul>
                <li>
                    <a href="{{ route('front.index') }}">الرئيسية</a>
                </li>
                <li>من نحن</li>
            </ul>
        </div>
    </div>
    <div class="ab-wrap col-xs-12">
        <div class="about-s col-xs-12">
            <div class="container">
                <div class="row">
                    @foreach ($settings as $setting)
                        <div class="ab-img col-md-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="200">
                            <div class="ab-slider owl-carousel">
                                @foreach ($setting->photes as $key => $value)
                                    <div class="item">
                                        <img src="{{ asset('images/settings/' . $value->photo) }}" alt="">

                                    </div>
                                @endforeach
                            </div>

                        </div>
                    @endforeach
                    <div class="ab-data col-md-6 col-xs-12">
                        @foreach ($settings as $setting)
                            <div class="g-head col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                <h3>اهلا بكم فى <b>{{ $setting->title }}</b></h3>
                            </div>
                            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                                {{ $setting->description }}
                            </p>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <div class="vid vid-inner col-xs-12">
            <div class="inner" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <img src="images/hero2.jpg" alt="">
                <a href="#youtube_url" data-fancybox>
                    <i class="la la-play"></i>
                </a>
            </div>
        </div>
        <div class="why-us col-xs-12">
            <div class="container">
                <div class="g-head col-xs-12">
                    <h3>لماذا نحن</h3>
                </div>
                <div class="g-body col-xs-12">
                    <div class="row">
                        @foreach ($features as $feature)
                            <div class="block col-md-3 col-sm-6 col-xs-12">
                                <div class="inner">
                                    <div class="i-img">
                                        <img src="{{ asset('images/features/' . $feature->image) }}" alt="">
                                    </div>
                                    <h3>{{ $feature->title }}</h3>
                                    <p>{{ $feature->description }}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
