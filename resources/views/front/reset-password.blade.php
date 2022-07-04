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
            <h3>نسيت كلمة المرور</h3>
            <ul>
                <li>
                    <a href="{{ route('front.index') }}">الرئيسية</a>
                </li>
                <li>نسيت كلمة المرور</li>
            </ul>
        </div>
    </div>
    <div class="log-wrap col-xs-12">
        <div class="container">
            <div class="log-form col-xs-12">
                <div class="form-head col-xs-12">
                    <h4>نسيت كلمة المرور</h4>
                </div>
                <div class="form-body col-xs-12">
                    <div class="form-group col-md-6 col-xs-12">
                        <h4>البريد الالكترونى</h4>
                        <input type="email" class="form-control">
                    </div>
                    <div class="form-group has-btn col-xs-12">
                        <p class="green-par">اكتب بريدك الالكترونى وستصلك رساله بها رابط لتعديل الرقم السرى</p>
                        <button type="submit" class="btn">ارسال</button>
                        <p class="hint">
                            لم تتلق الرابط ؟ <a href="#">إعادة ارسال</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
