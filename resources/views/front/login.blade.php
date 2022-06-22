@extends('front.layout')
@section('content')
    <div class="breads col-xs-12">
        <img src="images/hero.jpg" alt="">
        <div class="container">
            <h3>تسجيل دخول</h3>
            <ul>
                <li>
                    <a href="#">الرئيسية</a>
                </li>
                <li>تسجيل دخول</li>
            </ul>
        </div>
    </div>
    <div class="log-wrap col-xs-12">
        <div class="container">
            <div class="log-form col-xs-12">
                <ul class="nav-tabs col-xs-12">
                    <li class="active">
                        <a href="#" data-toggle="tab" data-target="#t1">تسجيل الدخول</a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tab" data-target="#t2">تسجيل جديد</a>
                    </li>
                </ul>
                <div class="tab-content col-xs-12">
                    <div class="tab-pane fade active in" id="t1">
                        <div class="row">
                            <div class="form-group col-md-6 col-xs-12">
                                <h4>البريد الالكترونى</h4>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h4>كلمة المرور</h4>
                                <input type="password" class="form-control" id="pass">
                                <button type="button" class="show-pass" toggle="#pass">
                                    <i class="la la-eye-slash"></i>
                                </button>
                            </div>
                            <div class="form-group rems col-xs-12">
                                <div>
                                    <label>
                                        <input type="checkbox">
                                        <span>تذكرني</span>
                                    </label>
                                    <a href="#" class="forget">نسيت كلمة المرور؟</a>
                                </div>
                            </div>
                            <div class="form-group has-btn col-xs-12">
                                <button type="submit" class="btn">تسجيل الدخول</button>
                                <p class="hint">
                                    ليس لديك حساب بالفعل؟ <a href="#">تسجيل جديد</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="t2">
                        <div class="row">
                            <div class="form-group col-md-6 col-xs-12">
                                <h4> <i>*</i>الاسم الأول</h4>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h4> <i>*</i>الاسم الأخير</h4>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h4>البريد الالكترونى</h4>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h4>رقم الجوال</h4>
                                <input type="text" class="form-control" id="phone">
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h4>المدينة</h4>
                                <select class="form-control nice-select">
                                    <option>اختار المدينة</option>
                                    <option>اختار المدينة</option>
                                    <option>اختار المدينة</option>
                                    <option>اختار المدينة</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h4>الحى</h4>
                                <select class="form-control nice-select">
                                    <option>اختار الحى</option>
                                    <option>اختار الحى</option>
                                    <option>اختار الحى</option>
                                    <option>اختار الحى</option>
                                </select>
                            </div>
                            <div class="form-group has-btn col-xs-12">
                                <button type="submit" class="btn">تسجيل جديد</button>
                                <p class="hint">
                                    هل لديك حساب بالفعل؟ <a href="#">تسجيل دخول</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
