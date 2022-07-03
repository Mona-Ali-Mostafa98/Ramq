@extends('front.layout')
@section('content')
    <div class="breads col-xs-12">
        <img src="images/hero.jpg" alt="">
        <div class="container">
            <h3>حسابي</h3>
            <ul>
                <li>
                    <a href="{{ route('front.index') }}">الرئيسية</a>
                </li>
                <li>الملف الشخصي</li>
            </ul>
        </div>
    </div>
    <div class="log-wrap profile-wrap col-xs-12">
        <div class="container">
            <div class="prof-sidebar col-md-3 col-xs-12">
                <ul>
                    <li>
                        <a href="#">الملف الشخصي</a>
                    </li>
                    <li>
                        <a href="#">المفضلة</a>
                    </li>
                    <li class="active">
                        <a href="#">الرقم السرى</a>
                    </li>
                    <li>
                        <a href="#">تسجيل الخروج</a>
                    </li>
                </ul>
            </div>
            <div class="prof-content col-md-9 col-xs-12">
                <div class="p-head col-xs-12">
                    <h4>تغير الرقم السرى</h4>
                </div>
                <div class="pers-wrap col-xs-12">
                    <div class="edit-form col-xs-12">
                        <div class="row">
                            <div class="form-group col-md-12 col-xs-12">
                                <h4>الرقم السرى الحالى</h4>
                                <input type="password" class="form-control" id="pass__1">
                                <button type="button" class="show-pass" toggle="#pass__1">
                                    <i class="la la-eye-slash"></i>
                                </button>
                                <i class="la la-lock place-icon"></i>
                            </div>
                            <div class="form-group col-md-12 col-xs-12">
                                <h4>الرقم السرى الجديد</h4>
                                <input type="password" class="form-control" id="pass__2">
                                <button type="button" class="show-pass" toggle="#pass__2">
                                    <i class="la la-eye-slash"></i>
                                </button>
                                <i class="la la-lock place-icon"></i>
                            </div>
                            <div class="form-group col-md-12 col-xs-12">
                                <h4>الرقم السرى الجديد مرة اخرى</h4>
                                <input type="password" class="form-control" id="pass__3">
                                <button type="button" class="show-pass" toggle="#pass__3">
                                    <i class="la la-eye-slash"></i>
                                </button>
                                <i class="la la-lock place-icon"></i>
                            </div>
                            <div class="form-group col-md-12 col-xs-12">
                                <button type="submit" class="btn">حفظ</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
