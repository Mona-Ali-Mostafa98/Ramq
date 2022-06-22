@extends('front.layout')
@section('content')
    <div class="breads col-xs-12">
        <img src="images/hero.jpg" alt="">
        <div class="container">
            <h3>حسابي</h3>
            <ul>
                <li>
                    <a href="#">الرئيسية</a>
                </li>
                <li>الملف الشخصي</li>
            </ul>
        </div>
    </div>
    <div class="log-wrap profile-wrap col-xs-12">
        <div class="container">
            <div class="prof-sidebar col-md-3 col-xs-12">
                <ul>
                    <li class="active">
                        <a href="#">الملف الشخصي</a>
                    </li>
                    <li>
                        <a href="#">المفضلة</a>
                    </li>
                    <li>
                        <a href="#">الرقم السرى</a>
                    </li>
                    <li>
                        <a href="#">تسجيل الخروج</a>
                    </li>
                </ul>
            </div>
            <div class="prof-content col-md-9 col-xs-12">
                <div class="p-head col-xs-12">
                    <h4>الملف الشخصي</h4>
                    <a href="#" class="btn  edit-data">تعديل</a>
                </div>
                <div class="pers-wrap col-xs-12">
                    <div class="prev-form col-xs-12">
                        <ul>
                            <li>mohamed ibrahim mohamed ali : الاسم </li>
                            <li>Mohamedibrahim@gmail.com : البريد الالكترونى </li>
                            <li>01212455157 : رقم الجوال </li>
                            <li>الرياض : المدينة </li>
                            <li>الحى : اسم الحى يكتب هنا</li>
                        </ul>
                    </div>
                    <div class="edit-form col-xs-12" style="display: none;">
                        <div class="row">
                            <div class="form-group col-md-12 col-xs-12">
                                <h4> <i>*</i>الاسم الكامل</h4>
                                <input type="text" class="form-control" required>
                                <i class="la la-user place-icon"></i>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h4>البريد الالكترونى</h4>
                                <input type="email" class="form-control">
                                <i class="la la-envelope place-icon"></i>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h4>رقم الجوال</h4>
                                <input type="text" class="form-control" id="phone">
                                <i class="la la-phone place-icon"></i>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h4>المدينة</h4>
                                <select class="form-control nice-select">
                                    <option>اختار المدينة</option>
                                    <option>اختار المدينة</option>
                                    <option>اختار المدينة</option>
                                    <option>اختار المدينة</option>
                                </select>
                                <i class="la la-map-marker place-icon"></i>
                            </div>
                            <div class="form-group col-md-6 col-xs-12">
                                <h4>الحى</h4>
                                <select class="form-control nice-select">
                                    <option>اختار الحى</option>
                                    <option>اختار الحى</option>
                                    <option>اختار الحى</option>
                                    <option>اختار الحى</option>
                                </select>
                                <i class="la la-map-marker place-icon"></i>
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
