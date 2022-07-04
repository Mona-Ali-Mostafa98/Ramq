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
            <h3>مسكن أطلال - دورين</h3>
            <ul>
                <li>
                    <a href="{{ route('front.index') }}">الرئيسية</a>
                </li>
                <li>شراء المنتج</li>
            </ul>
        </div>
    </div>
    <div class="log-wrap profile-wrap checkout col-xs-12">
        <div class="container">
            <div class="prof-content col-md-9 col-xs-12">
                <form action="{{ route('front.carts.store') }}" id="contact_form" method="post">
                    @csrf
                    <input name="user_id" type="text" value="{{ Auth::user()->id }}" hidden />
                    <input name="product_id" type="text" value="{{ $product->id }}" hidden />
                    <div class="pers-wrap col-xs-12">
                        <h3>معلومات المشترى</h3>
                        <div class="edit-form col-xs-12">
                            <div class="row">
                                <div class="form-group col-md-6 col-xs-12">
                                    <h4>الاسم ثلاثي <i>*</i></h4>
                                    <input name="full_name" type="text" class="form-control" required>
                                    <i class="la la-user place-icon"></i>
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <h4> رقم الهوية <i>*</i></h4>
                                    <input name="id_number" type="text" class="form-control" required>
                                    <i class="la la-id-card place-icon"></i>
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <h4>رقم الجوال <i>*</i></h4>
                                    <input name="phone" type="text" class="form-control" required>
                                    <i class="la la-mobile place-icon"></i>
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <h4> البريد الالكترونى <i>*</i></h4>
                                    <input name="email" type="email" class="form-control" required>
                                    <i class="la la-envelope place-icon"></i>
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <h4> المدينة <i>*</i></h4>
                                    <select name="city" class="form-control nice-select" required>
                                        <label class="form-label">City</label>
                                        <select name="city_id" class="form-control">
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select> </select>
                                    <i class="la la-map-marker place-icon"></i>
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <h4> الحى <i>*</i></h4>
                                    <select name="region" class="form-control nice-select" required>
                                        <label class="form-label">Region</label>
                                        <select name="region_id" class="form-control">
                                            @foreach ($regions as $region)
                                                <option value="{{ $region->id }}">{{ $region->name }}</option>
                                            @endforeach
                                        </select> </select>
                                    <i class="la la-map-marker place-icon"></i>
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <h4> المهنة <i>*</i></h4>
                                    <input type="text" class="form-control" required>
                                    <i class="la la-user-cog place-icon"></i>
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <h4> صورة الصك او التقرير المساحى <i>*</i></h4>
                                    <div class="f-upload">
                                        <input type="file">
                                        <i class="la la-file-text place-icon"></i>
                                        <input type="text" class="form-control" readonly="" required>
                                    </div>
                                </div>

                                <button type="button" data-dismiss="modal">اغلاق</button>
                            </div>
                        </div>
                    </div>
                </form>

                <div class="pers-wrap col-xs-12">
                    <h3>معلومات بطاقة الدفع</h3>
                    <div class="edit-form col-xs-12">
                        {{-- <div class="row">
                                <div class="form-group col-md-12 col-xs-12">
                                    <h4>الاسم مثل البطاقة <i>*</i></h4>
                                    <input type="text" class="form-control" required>
                                    <i class="la la-user place-icon"></i>
                                </div>
                                <div class="form-group col-md-12 col-xs-12">
                                    <h4> رقم البطاقة <i>*</i></h4>
                                    <input type="text" class="form-control ccFormatMonitor" placeholder="رقم البطاقة"
                                        maxlength='19' required>
                                    <i class="la la-credit-card place-icon"></i>
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4> العام <i>*</i></h4>
                                    <select class="form-control nice-select" required>
                                        <option>اختار العام</option>
                                        <option>اختار العام</option>
                                        <option>اختار العام</option>
                                        <option>اختار العام</option>
                                    </select>
                                    <i class="la la-calendar place-icon"></i>
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4> الشهر <i>*</i></h4>
                                    <select class="form-control nice-select" required>
                                        <option>اختار الشهر</option>
                                        <option>اختار الشهر</option>
                                        <option>اختار الشهر</option>
                                        <option>اختار الشهر</option>
                                    </select>
                                    <i class="la la-calendar place-icon"></i>
                                </div>
                                <div class="form-group col-md-4 col-xs-12">
                                    <h4> ccv رقم ال <i>*</i></h4>
                                    <input type="password" class="form-control cvv" placeholder="***" maxlength='3'
                                        required>
                                    <i class="la la-credit-card place-icon"></i>
                                </div>
                                <div class="form-group confirm col-md-12 col-xs-12">
                                    <label>
                                        <input type="checkbox">
                                        <span>أوافق على <a href="#" data-toggle="modal"
                                                data-target="#confirm_pop">اتفاقية
                                                الشراء</a></span>
                                    </label>
                                    <button type="submit" class="btn">ادفع 12399</button>
                                </div>
                            </div> --}}
                    </div>
                </div>
            </div>

            <div class="checkout-sidebar col-md-3 col-xs-12">
                <div class="s-widget col-xs-12">
                    <h4>تفاصيل محتويات ملف التصميم</h4>
                    <div class="s-inner">
                        <ul>
                            <li>
                                <i class="la la-check"></i>
                                الرسوم الهيكلية
                            </li>
                            <li>
                                <i class="la la-check"></i>
                                الرسوم المعمارية
                            </li>
                            <li>
                                <i class="la la-check"></i>
                                رسوم الكهرباء
                            </li>
                            <li>
                                <i class="la la-check"></i>
                                الرسوم السمكرية
                            </li>
                            <li>
                                <i class="la la-check"></i>
                                رسوم الواجهة الامامية
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="w-widget col-xs-12">
                    <span>السعر : 10999 رس</span>
                </div>
                <div class="w-widget col-xs-12">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="كود الخصم ">
                        <button type="submit" class="btn">خصم</button>
                    </div>
                </div>
                <div class="w-widget col-xs-12">
                    <span>السعر بعد الخصم : 10999 رس</span>
                </div>
                <div class="w-widget col-xs-12">
                    <span>الضريبة : 1400 رس</span>
                </div>
                <div class="w-widget total col-xs-12">
                    <span>المجموع الكلى : 12399 رس</span>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('diffrence')
    <div class="modal fade" id="confirm_pop">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="confo-p">
                        <h4>اتفاقية الشراء</h4>
                        <p> يقر المشتري بأن المنتج الذي يشتريه عبر المنصة هو للاستخدام الشخصي وليس التجاري ولمرة واحدة فقط ،
                            وذلك على أرضه المرفق بياناتها في عملية الشراء ، ويتحمل كافة التبعات القانونية في حال انتهاك
                            الحقوق أو
                            تسريب المخططات بشكل مقصود إلى الآخرين بقصد الاستفادة منها في البناء أو التطوير . كما يتعهد
                            بمراجعة
                            المخططات ومواءمتها مع الاستشاري والمقاول والتأكد من القواعد الإنشائية المناسبة بناء على تقرير
                            التربة
                            .وتوصية الاستشاري المشرف على المشروع</p>
                        <button type="button" data-dismiss="modal">اغلاق</button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
