@extends('front.layout')
@section('content')
    <!-- Start slider -->
    <div class="hero-sec col-xs-12">
        <div class="slider">
            <div class="one owl-carousel">
                @foreach ($slidbars as $slidbar)
                    <div class="item-box">
                        <img src="{{ asset('images/sliders/' . $slidbar->image) }}" alt="">
                        <div class="i-cap">
                            <h3>{{ $slidbar->title }}</h3>
                            <p> {{ $slidbar->description }}</p>
                            <a href="#" class="btn btn-border">اطلب الان</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="slider-two">
            <div class="two owl-carousel">
                @foreach ($slidbars as $key => $slidbar)
                    <div class="item @if ($key == 0) active @endif">
                        <img src="{{ asset('images/sliders/' . $slidbar->image) }}" alt="">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- end slider -->


    <div class="about-s col-xs-12">
        <div class="container">
            <div class="row">

                @foreach ($settings as $setting)
                    <div class="ab-img col-md-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
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
                        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400"> {{ $setting->description }}
                        </p>

                        <a href="#" class="btn" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="600">تعرف
                            علينا</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="blocks col-xs-12">
        <div class="container">
            <div class="g-head col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <h3>اختر التصميم الذي يناسبك</h3>
            </div>
            <div class="g-body col-xs-12">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="block col-md-4 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="200">
                            <div class="inner">
                                <div class="i-img">
                                    {{-- <img src="{{ $product->photo }}" alt=""> --}}
                                    @foreach ($product->photes as $key => $value)
                                        <img src="{{ asset('images/products/' . $value->photo) }}" alt="">
                                    @endforeach
                                    <span>‏{{ $product->price }} ر.س</span>
                                    <div class="i-actions">
                                        <a href="#">
                                            <i class="la la-share"></i>
                                        </a>
                                        {{-- <form action="{{ route('front.favorites.store') }}" id="contact_form"
                                            method="POST">
                                            @csrf
                                            <input name="user_id" type="text" value="{{ Auth::user()->id }}" hidden />
                                            <input name="product_id" type="text" value="{{ $product->id }}" hidden />
                                            <button type="submit" class="fav">
                                                <i class="la la-heart"></i>
                                            </button>
                                        </form> --}}
                                    </div>
                                </div>
                                <div class="i-data">
                                    <a href="#" class="title">{{ $product->title }} </a>
                                    <div class="i-extra">
                                        <ul>
                                            <li>
                                                <img src="{{ asset('front/images/ic1.png') }}" alt="">
                                                <p>No of floors</p>
                                                <span>{{ $product->number_of_floors }}</span>
                                            </li>
                                            <li>
                                                <img src="{{ asset('front/images/ic2.png') }}" alt="">
                                                <p>No of rooms</p>
                                                <span>{{ $product->number_of_rooms }}</span>
                                            </li>
                                            <li>
                                                <img src="{{ asset('front/images/ic3.png') }}" alt="">
                                                <p>Land area</p>
                                                <span>{{ $product->Land_area }} م2</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <p class="desc">Design by: {{ $product->designed_by }}</p>
                                    <a href="#" class="btn">استعرض التصميم</a>
                                </div>

                            </div>
                        </div>
                    @endforeach

                    <div class="g-more col-xs-12">
                        <a href="#" class="btn">المزيد</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="vid col-xs-12">
            <div class="container">
                <div class="inner" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <img src="{{ asset('front/images/hero2.jpg') }}" alt="">
                    <a href="#youtube_url" data-fancybox>
                        <i class="la la-play"></i>
                    </a>
                    {{-- <video id="video" controls="controls" src="{{ asset('images/settings/' . $setting->video) }}"
                        type="video/mp4"></video> --}}

                </div>
            </div>
        </div>
        <div class="most col-xs-12">
            <div class="g-head col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="container">
                    <h3>اكثر التصاميم طلبا</h3>
                </div>
            </div>
            <div class="g-body col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="most-slider owl-carousel">
                    @foreach ($products as $product)
                        @if ($product->most_requested == true)
                            <div class="item">
                                <div class="m-block">
                                    @foreach ($product->photes as $key => $value)
                                        <img src="{{ asset('images/products/' . $value->photo) }}" alt="">
                                    @endforeach
                                    <div class="icap-o">
                                        <a href="#" class="title">{{ $product->title }}</a>
                                        <div class="overl">
                                            <ul>
                                                <li>
                                                    <img src="{{ asset('front/images/ic1.png') }}" alt="">
                                                    عدد الادوار
                                                    <span>{{ $product->number_of_floors }}</span>
                                                </li>
                                                <li>
                                                    <img src="{{ asset('front/images/ic2.png') }}" alt="">
                                                    عدد الغرف
                                                    <span>{{ $product->number_of_rooms }}</span>
                                                </li>
                                                <li>
                                                    <img src="{{ asset('front/images/ic3.png') }}" alt="">
                                                    مساحة الارض
                                                    <span>{{ $product->Land_area }} م2</span>
                                                </li>
                                            </ul>
                                            <p>تصميم: {{ $product->designed_by }}</p>
                                        </div>
                                        <h4>‏{{ $product->price }} ر.س</h4>
                                        <a href="#" class="btn btn-border">استعرض</a>
                                        <div class="i-actions">

                                            <a href="#">
                                                <i class="la la-share"></i>
                                            </a>
                                            {{-- <form action="{{ route('front.favorites.store') }}" id="contact_form"
                                                method="post">
                                                {{ csrf_field() }}
                                                <input name="user_id" type="text" value="{{ Auth::user()->id }}"
                                                    hidden />
                                                <input name="product_id" type="text" value="{{ $product->id }}"
                                                    hidden />
                                                <button type="submit" class="fav">
                                                    <i class="la la-heart"></i>
                                                </button>
                                            </form> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach


                </div>
            </div>
        </div>
        <div class="counters col-xs-12">
            <div class="container">
                <div class="co-inner" style="background-image: url({{ asset('front/images/hero.jpg') }});">
                    {{-- @foreach ($statistic as $statistic) --}}
                    <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="200">
                        <div class="inner">
                            <span class="counter"> {{ $products_count }}</span>
                            <h4>Products</h4>
                        </div>
                    </div>
                    <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="200">
                        <div class="inner">
                            <span class="counter"> {{ $users_count }}</span>
                            <h4>Users</h4>
                        </div>
                    </div>
                    {{-- @endforeach --}}
                </div>
            </div>
        </div>
        <div class="contact col-xs-12">
            <div class="g-head col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="container">
                    <h3>تواصـل معنـا</h3>
                </div>
            </div>
            <div class="g-body col-xs-12" style="background-image: url({{ asset('front/images/hero.jpg') }});">
                @include('admin.layouts.errors')
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <form method="POST" action="{{ route('front.contact-us.store') }}">
                    @csrf
                    <div class="container">
                        <div class="inner col-xs-12">
                            <div class="form-group col-md-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-delay="200">
                                <input name="full_name" type="text" class="form-control"
                                    placeholder="الاسـم الثـلاثي">
                            </div>
                            <div class="form-group col-md-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-delay="400">
                                <input name="email" type="email" class="form-control"
                                    placeholder="البريد الإلكتروني">
                            </div>
                            <div class="form-group col-md-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-delay="600">
                                <input name="phone" type="text" class="form-control" placeholder="رقـم الجـوال">
                            </div>
                            <div class="form-group col-md-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-delay="800">
                                <input name="subject" type="text" class="form-control" placeholder="الـمـوضـوع">
                            </div>
                            <div class="form-group col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-delay="1000">
                                <textarea name="message" class="form-control" placeholder="الـرسـالة"></textarea>
                            </div>
                            <div class="form-group col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-delay="1200">
                                <button type="submit" class="btn">ارسال</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endsection
