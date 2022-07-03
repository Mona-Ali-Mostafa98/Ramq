@extends('front.layout')
@section('content')
    <div class="breads col-xs-12">
        <img src="images/hero.jpg" alt="">
        <div class="container">
            <h3>متجر التصاميم</h3>
            <ul>
                <li>
                    <a href="{{ route('front.index') }}">الرئيسية</a>
                </li>
                <li>متجر التصاميم</li>
            </ul>
        </div>
    </div>
    <div class="blocks blocks_inner col-xs-12">
        <div class="container">
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
                                        <a href="#" class="fav">
                                            <i class="la la-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="i-data">
                                    <a href="#" class="title">{{ $product->title }} </a>
                                    <a href="#" hidden>{{ $product->id }} </a>
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
                                    <a href="{{ route('front.products.show', $product->id) }}" class="btn">استعرض
                                        التصميم</a>
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
    </div>
@endsection
