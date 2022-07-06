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
            <h3> Contact Us</h3>
            <ul>
                <li>
                    <a href="{{ route('front.index') }}">Home</a>
                </li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
    <div class="contact-wrap col-xs-12">
        <div class="container">
            <div class="conto-form col-md-8 col-xs-12">
                <div class="cop-head col-xs-12">
                    <h4> Leave Your Message.</h4>
                    {{-- <p>ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص
                        العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم
                        فيظهر بشكل لا يليق.
                    </p> --}}
                </div>
                <div class="cop-body col-xs-12">
                    @include('admin.layouts.errors')

                    <div class="row">
                        <form method="POST" action="{{ route('front.contact-us.store') }}">
                            @csrf
                            <div class="form-group col-md-6 col-xs-12">
                                <input name="full_name" type="text" class="form-control" placeholder="Enter your name">
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <input name="email" type="email" class="form-control" placeholder="Enter your email">
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <input name="phone" type="phone" class="form-control" placeholder="Enter your phone">
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <input name="subject" type="text" class="form-control" placeholder="Enter your subject">
                            </div>
                            <div class="form-group col-md-12 col-xs-12">
                                <textarea name="message" class="form-control" placeholder="Enter your message"></textarea>
                            </div>
                            <div class="form-group col-md-12 col-xs-12">
                                <button type="submit" class="btn">Send Message</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
            <div class="conto-data col-md-4 col-xs-12">
                <div class="cop-head col-xs-12">
                    <h4>Location</h4>
                </div>
                <ul>
                    @foreach ($settings as $setting)
                        <li>
                            <i class="la la-map-marker"></i>
                            <a href="#"> {{ $setting->address }}</a>
                        </li>
                        <li>
                            <i class="la la-envelope"></i>
                            <a href="mailto:contact@example">{{ $setting->email }}</a>
                        </li>
                        <li>
                            <i class="la la-phone"></i>
                            <a href="tel:+1-3524-3356">
                                @foreach ($settingPhones as $setting)
                                    <a href="tel:0548596523">{{ $setting->phone }}</a> -
                                @endforeach
                            </a>
                        </li>
                    @endforeach
                </ul>
                <div class="cop-head col-xs-12">
                    <h4>Map</h4>
                </div>
                <div class="cop-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3418.699866967512!2d31.366383685338207!3d31.034610678072703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f79d99ef7ea253%3A0xe92319f27469b714!2z2LPZhdin2LHYqiDZgdmK2KzZhiDZhNiq2LXZhdmK2YUg2YjYqNix2YXYrNipINin2YTZhdmI2KfZgti5INmI2KfZhNiq2LfYqNmK2YLYp9iqINin2YTYp9mE2YPYqtix2YjZhtmK2Kk!5e0!3m2!1sar!2seg!4v1629677229468!5m2!1sar!2seg"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
