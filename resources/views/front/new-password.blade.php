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
            <h3>New Password</h3>
            <ul>
                <li>
                    <a href="{{ route('front.index') }}">الرئيسية</a>
                </li>
                <li>New Password</li>
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
                        <h4>New Password</h4>
                        <input type="password" class="form-control" id="pass_1">
                        <button type="button" class="show-pass" toggle="#pass_1">
                            <i class="la la-eye-slash"></i>
                        </button>
                    </div>
                    <div class="form-group col-md-6 col-xs-12">
                        <h4>كلمة المرور مرة اخرى</h4>
                        <input type="password" class="form-control" id="pass_2">
                        <button type="button" class="show-pass" toggle="#pass_2">
                            <i class="la la-eye-slash"></i>
                        </button>
                    </div>
                    <div class="form-group has-btn col-xs-12">
                        <button type="submit" class="btn">حفظ</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
