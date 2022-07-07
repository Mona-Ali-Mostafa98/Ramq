@extends('front.layout')
@section('content')
    <div class="breads hero-breads col-xs-12">
        @foreach ($settings as $setting)
            @foreach ($setting->photes as $key => $value)
                <div class="item">
                    <img src="{{ asset('images/settings/' . $value->photo) }}" alt="">
                </div>
            @endforeach
        @endforeach
        <div class="container">
            <h3>{{ $product->title }} </h3>
            <p> {{ $product->description }} </p>
            <div class="row">
                <div class="block col-md-3 col-sm-6 col-xs-6">
                    <div class="inner">
                        <div class="i-img">
                            <img src="images/ic1.png" alt="">
                        </div>
                        <h4>عدد الادوار</h4>
                        <span>{{ $product->number_of_floors }}</span>
                    </div>
                </div>
                <div class="block col-md-3 col-sm-6 col-xs-6">
                    <div class="inner">
                        <div class="i-img">
                            <img src="images/ic2.png" alt="">
                        </div>
                        <h4>عدد الغرف</h4>
                        <span>{{ $product->number_of_rooms }}</span>
                    </div>
                </div>
                <div class="block col-md-3 col-sm-6 col-xs-6">
                    <div class="inner">
                        <div class="i-img">
                            <img src="images/ic3.png" alt="">
                        </div>
                        <h4>مساحة الارض</h4>
                        <span>{{ $product->Land_area }} م2</span>
                    </div>
                </div>
                <div class="block col-md-3 col-sm-6 col-xs-6">
                    <div class="inner">
                        <div class="i-img">
                            <img src="images/ic4.png" alt="">
                        </div>
                        <h4>تصميم</h4>
                        <span>{{ $product->designed_by }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-wrap col-xs-12">
        <div class="container">
            <div class="row">
                <div class="single-box col-md-8 col-xs-12">
                    @foreach ($product->photes as $key => $value)
                        <div class="post-img col-xs-12">
                            <img src="{{ asset('images/products/' . $value->photo) }}" alt="">
                        </div>
                    @endforeach

                    <div class="post-data col-xs-12">
                        <h4>عن التصميم</h4>
                        <p> {{ $product->design_details }}</p>
                        <h4>تفاصيل المخطط الهندسي</h4>
                        <div class="fl-item">
                            <h5>الدور الارضى</h5>
                            <p>
                                @foreach ($product->informations as $value)
                                    <span class="card-text"> {{ $value->information }}</span> <br>
                                @endforeach
                            </p>
                            {{-- <img src="images/3d.jpg" alt=""> --}}
                        </div>
                        {{-- <div class="fl-item">
                            <h5>الدور الأول</h5>
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                                العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف
                                التى يولدها التطبيق.
                                إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد،
                                النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه
                                الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
                                ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد
                                النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه
                                التصميم فيظهر بشكل لا يليق.
                            </p>
                            <img src="images/3d.jpg" alt="">
                        </div> --}}
                    </div>
                </div>
                <div class="single-sidebar col-md-4 col-xs-12">
                    <div class="s-widget col-xs-12">
                        <h4>معلومات المخطط</h4>
                        <div class="s-inner">
                            <ul>
                                @foreach ($product->informations as $value)
                                    <li>
                                        <i class="la la-check"></i>
                                        <span class="card-text"> {{ $value->information }}</span> <br>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="s-widget col-xs-12">
                        <h4>تفاصيل محتويات ملف التصميم</h4>
                        <div class="s-inner">
                            <ul>
                                <li>
                                    <i class="la la-check"></i>
                                    {{ $product->design_details }}
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="s-widget col-xs-12">
                        <h4>تفاصيل محتويات ملف التصميم</h4>
                        <div class="s-inner">
                            <div class="s-btns">
                                <a href="#" data-tool="tooltip" title="رؤية الكتاب">
                                    <i class="la la-eye"></i>
                                </a>
                                <a href="#" data-tool="tooltip" title="تحميل الكتاب">
                                    <i class="la la-download"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="s-widget col-xs-12">
                        <h4>ملاحظات</h4>
                        <div class="s-inner">
                            <ul>
                                <li>
                                    <i class="la la-check"></i>
                                    {{ $product->notes }}
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="vid vid-inner col-xs-12">
        <div class="inner" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <img src="{{ asset('front/images/hero2.jpg') }}" alt="">
            <a href="{{ asset('images/settings/' . $setting->video) }}" data-fancybox>
                <i class="la la-play"></i>
            </a>
        </div>
    </div>
    <div class="single-dimension col-xs-12">
        <div class="container">
            <div class="row">
                <div class="dim-img col-md-3 col-xs-12">
                    <div class="i-horz">
                        <span>شمال</span>
                        <span>شرق</span>
                        <span>جنوب</span>
                        <span>غرب</span>
                    </div>
                    <div class="i-area">
                        <span>500 م2</span>
                    </div>
                </div>
                <div class="dim-body col-md-9 col-xs-12">
                    <div class="dim-head col-xs-12">
                        <h3>ابعاد الأرض ( اختر ابعاد الأرض المناسبة لك)</h3>
                    </div>
                    <div class="dim-form col-xs-12">
                        <div class="row">
                            <div class="form-group col-md-3 col-sm-6 col-xs-12">
                                <h5>شمال</h5>
                                <select class="form-control nice-select">
                                    <option>اختر</option>
                                    <option>5 م</option>
                                    <option>5 م</option>
                                    <option>5 م</option>
                                    <option>5 م</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3 col-sm-6 col-xs-12">
                                <h5>جنوب</h5>
                                <select class="form-control nice-select">
                                    <option>اختر</option>
                                    <option>5 م</option>
                                    <option>5 م</option>
                                    <option>5 م</option>
                                    <option>5 م</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3 col-sm-6 col-xs-12">
                                <h5>شرق</h5>
                                <select class="form-control nice-select">
                                    <option>اختر</option>
                                    <option>5 م</option>
                                    <option>5 م</option>
                                    <option>5 م</option>
                                    <option>5 م</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3 col-sm-6 col-xs-12">
                                <h5>غرب</h5>
                                <select class="form-control nice-select">
                                    <option>اختر</option>
                                    <option>5 م</option>
                                    <option>5 م</option>
                                    <option>5 م</option>
                                    <option>5 م</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dim-btn col-xs-12">
                    {{-- <form action="{{ route('front.carts.create') }}" id="contact_form" method="get"> --}}
                    {{-- @csrf --}}
                    {{-- <input name="user_id" type="text" value="{{ Auth::user()->id }}" hidden />
                        <input name="product_id" type="text" value="{{ $product->id }}" hidden /> --}}
                    <a href="{{ url('front/carts/create?product=' . $product->id) }}" class="btn">شراء المخطط</a>
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
