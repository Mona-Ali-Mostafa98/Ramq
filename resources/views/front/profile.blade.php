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
                    <li class="active">
                        <a href="{{ route('front.profile') }}">الملف الشخصي</a>
                    </li>
                    <li>
                        <a href="#">المفضلة</a>
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
                    <h4>الملف الشخصي</h4>
                    <a href="#" class="btn  edit-data">تعديل</a>
                </div>
                <div class="pers-wrap col-xs-12">
                    <div class="prev-form col-xs-12">
                        @foreach ($users as $user)
                        @endforeach
                        <ul>
                            <li>{{ $user->name }} : الاسم </li>
                            <li>{{ $user->email }} : البريد الالكترونى </li>
                            <li>{{ $user->phone }} : رقم الجوال </li>
                            <li>{{ $user->city }}: المدينه </li>
                            <li>{{ $user->state }}: الحى</li>
                        </ul>
                    </div>
                    <div class="edit-form col-xs-12" style="display: none;">
                        <div class="row">
                            @include('admin.layouts.errors')

                            <form method="POST" action="{{ route('front.users.update', $user->id) }}">
                                @csrf
                                @method ('put')
                                <div class="form-group col-md-12 col-xs-12">
                                    <h4> <i>*</i>الاسم الكامل</h4>
                                    <input name="name" type="text" class="form-control" required
                                        value="{{ $user->name }}">
                                    <i class="la la-user
                                        place-icon"></i>
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <h4>البريد الالكترونى</h4>
                                    <input name="email" type="email" class="form-control" value="{{ $user->email }}">
                                    <i class="la
                                        la-envelope place-icon"></i>
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <h4>رقم الجوال</h4>
                                    <input name="phone" type="text" class="form-control" id="phone"
                                        value="{{ $user->phone }}">
                                    <i class="la la-phone
                                        place-icon"></i>
                                </div>
                                <div class="form-group
                                        col-md-6 col-xs-12">
                                    <h4>المدينة</h4>
                                    <input name="city" type="text" class="form-control" id="phone"
                                        value="{{ $user->city }}">
                                    <i class="la
                                        la-map-marker place-icon"></i>
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <h4>الحى</h4>
                                    <input name="state" type="text" class="form-control" id="phone"
                                        value="{{ $user->state }}">
                                    <i class="la
                                        la-map-marker place-icon"></i>
                                </div>
                                <div class="form-group col-md-12 col-xs-12">
                                    <button type="submit" class="btn">حفظ</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
