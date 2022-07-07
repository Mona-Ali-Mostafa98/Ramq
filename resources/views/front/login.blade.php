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
            <h3>Login</h3>
            <ul>
                <li>
                    <a href="{{ route('front.index') }}">Home</a>
                </li>
                <li>Login</li>
            </ul>
        </div>
    </div>
    <div class="log-wrap col-xs-12">
        <div class="container">
            <div class="log-form col-xs-12">
                <ul class="nav-tabs col-xs-12">
                    <li class="active">
                        <a href="#" data-toggle="tab" data-target="#t1">Login</a>
                    </li>
                    <li>
                        <a href="#" data-toggle="tab" data-target="#t2">Register</a>
                    </li>
                </ul>
                <div class="tab-content col-xs-12">
                    <div class="tab-pane fade active in" id="t1">
                        <div class="row">
                            <form action="{{ route('front.dologin') }}" method="post">
                                @csrf
                                <div class="form-group col-md-6 col-xs-12">
                                    <h4>Password</h4>
                                    <input name="password" type="password" class="form-control" id="pass">
                                    <button type="button" class="show-pass" toggle="#pass">
                                        <i class="la la-eye-slash"></i>
                                    </button>
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <h4>Email</h4>
                                    <input name="email" type="email" class="form-control">
                                </div>
                                <div class="form-group rems col-xs-12">
                                    <div>
                                        <label>
                                            <input type="checkbox">
                                            <span>Remember me</span>
                                        </label>
                                        <a href="#" class="forget">Forget Password ?</a>
                                    </div>
                                </div>
                                <div class="form-group has-btn col-xs-12">
                                    <button type="submit" class="btn">Login</button>
                                    <p class="hint">
                                        Don't have account ? <a href="#">Create Account</a>
                                    </p>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="t2">
                        @include('front.layouts.errors')

                        <form action="{{ route('front.users.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-6 col-xs-12">
                                    <h4> <i>*</i>Name</h4>
                                    <input name="name" type="text" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <h4>Email</h4>
                                    <input name="email" type="email" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <h4>Mobile</h4>
                                    <input name="phone" type="text" class="form-control" id="phone">
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <h4> <i>*</i>Password </h4>
                                    <input name="password" type="password" class="form-control">
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <h4>city</h4>
                                    <select name="city" class="form-control nice-select">
                                        @foreach ($cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <h4>Region</h4>
                                    <select name="state" class="form-control nice-select">
                                        @foreach ($regions as $region)
                                            <option value="{{ $region->id }}">{{ $region->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group has-btn col-xs-12">
                                    <button type="submit" class="btn">Register</button>
                                    <p class="hint">
                                        You have an account ? <a href="#">Login</a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
