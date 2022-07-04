@extends('front.layout')
@section('content')
    <div class="overlay-s"></div>
    <main class="main-content col-xs-12">
        <div class="breads col-xs-12">
            @foreach ($settings as $setting)
                @foreach ($setting->photes as $key => $value)
                    <div class="item">
                        <img src="{{ asset('images/settings/' . $value->photo) }}" alt="">
                    </div>
                @endforeach
            @endforeach
            <div class="container">
                <h3>حسابي</h3>
                <ul>
                    <li>
                        <a href="{{ route('front.index') }}">الرئيسية</a>
                    </li>
                    <li>المفضلة</li>
                </ul>
            </div>
        </div>
        <div class="log-wrap profile-wrap col-xs-12">
            <div class="container">
                <div class="prof-sidebar col-md-3 col-xs-12">
                    <ul>
                        <li>
                            <a href="{{ route('front.profile') }}">الملف الشخصي</a>
                        </li>
                        <li class="active">
                            <a href="{{ route('front.favorites') }}">المفضلة</a>
                        </li>
                        <li>
                            <a href="#">الرقم السرى</a>
                        </li>
                        <li>
                            <a href="{{ route('front.logout') }}">تسجيل الخروج</a>
                        </li>
                    </ul>
                </div>
                <div class="prof-content col-md-9 col-xs-12">
                    <div class="p-head col-xs-12">
                        <h4>المفضلة</h4>
                    </div>
                    <div class="p-blocks col-xs-12">
                        <div class="row">
                            {{-- @if (!Auth::user()->wishlist->count()) --}}
                            @foreach ($favorites as $favorite)
                                <div class="block col-md-4 col-sm-6 col-xs-12">
                                    <div class="m-block">
                                        @foreach ($favorite->product->photes as $key => $value)
                                            <img src="{{ asset('images/products/' . $value->photo) }}" alt="">
                                        @endforeach
                                        <div class="icap-o">

                                            <a href="#" class="title">{{ $favorite->product->title }}</a>
                                            <div class="overl">
                                                <ul>
                                                    <li>
                                                        <img src="{{ asset('front/images/ic1.png') }}" alt="">
                                                        عدد الادوار
                                                        <span>{{ $favorite->product->number_of_floors }}</span>
                                                    </li>
                                                    <li>
                                                        <img src="{{ asset('front/images/ic2.png') }}" alt="">
                                                        عدد الغرف
                                                        <span>{{ $favorite->product->number_of_rooms }}</span>
                                                    </li>
                                                    <li>
                                                        <img src="{{ asset('front/images/ic3.png') }}" alt="">
                                                        مساحة الارض
                                                        <span>{{ $favorite->Land_area }} م2</span>
                                                    </li>
                                                </ul>
                                                <p>تصميم: {{ $favorite->product->designed_by }}</p>
                                            </div>
                                            <h4>‏{{ $favorite->product->price }} ر.س</h4>
                                            <a href="#" class="btn btn-border">استعرض</a>
                                            <div class="i-actions">
                                                <a href="#" class="fav">
                                                    <i class="la la-heart"></i>
                                                </a>
                                                <a href="#">
                                                    <i class="la la-share"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- @endif --}}

                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endsection
