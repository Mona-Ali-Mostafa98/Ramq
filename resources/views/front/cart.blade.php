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
            @foreach ($settings as $setting)
                <h3> {{ $setting->title }} </h3>
            @endforeach

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
            @include('front.layouts.errors')

            <div class="prof-content col-md-9 col-xs-12">
                <form action="{{ route('front.carts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input name="user_id" type="text" value="{{ Auth::user()->id }}" hidden />
                    <input name="product_id" type="text" value="{{ $product->id }}" hidden />
                    <div class="pers-wrap col-xs-12">

                        <h3>InformationS about Buyer</h3>
                        <div class="edit-form col-xs-12">
                            <div class="row">
                                <div class="form-group col-md-6 col-xs-12">
                                    <h4> Full Name <i>*</i></h4>
                                    <input name="full_name" type="text" class="form-control" required>
                                    <i class="la la-user place-icon"></i>
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <h4> Identity Number <i>*</i></h4>
                                    <input name="id_number" type="text" class="form-control" required>
                                    <i class="la la-id-card place-icon"></i>
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <h4>Phone <i>*</i></h4>
                                    <input name="phone" type="text" class="form-control" required>
                                    <i class="la la-mobile place-icon"></i>
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <h4> Email<i>*</i></h4>
                                    <input name="email" type="email" class="form-control" required>
                                    <i class="la la-envelope place-icon"></i>
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <h4> City <i>*</i></h4>
                                    <select id="city" name="city_id" class="form-control nice-select" required>
                                        <label class="form-label">City</label>
                                        <option value="">Select City</option>
                                        @foreach ($cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                    <i class="la la-map-marker place-icon"></i>
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <h4> Region <i>*</i></h4>
                                    <select id="region" name="region_id" class="form-control nice-select" required>
                                        <label class="form-label">Region</label>
                                        <option value="">Select Region</option>
                                    </select>
                                    <i class="la la-map-marker place-icon"></i>
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <h4> Career <i>*</i></h4>
                                    <input name="career" type="text" class="form-control" required>
                                    <i class="la la-user-cog place-icon"></i>
                                </div>
                                <div class="form-group col-md-6 col-xs-12">
                                    <h4> Image of the instrument or survey report <i>*</i></h4>
                                    <div class="f-upload">
                                        <input name="copy_of_instrument_or_survey_report" type="file">
                                        <i class="la la-file-text place-icon"></i>
                                        <input type="text" class="form-control" readonly="" required>
                                    </div>
                                </div>

                                <button type="btn" data-dismiss="modal">اغلاق</button>
                            </div>
                        </div>
                    </div>


                    <div class="pers-wrap col-xs-12">
                        {{-- <h3>معلومات بطاقة الدفع</h3> --}}
                        <div class="edit-form col-xs-12">
                            <div class="row">
                                <div class="form-group confirm col-md-12 col-xs-12">
                                    <label>
                                        <input name="policy" type="checkbox">
                                        <span> I agree to <a href="#" data-toggle="modal" data-target="#confirm_pop">
                                                Purchase Agreement</a></span>
                                    </label>
                                    <button type="submit" class="btn">Pay 12399</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </form>

            <div class="checkout-region_idebar col-md-3 col-xs-12">
                <div class="s-widget col-xs-12">
                    <h4>Details Of The Design </h4>
                    <div class="s-inner">
                        <ul>
                            <li>{{ $product->title }}</li>
                        </ul>
                    </div>

                </div>
                <div class="w-widget col-xs-12">
                    <span>Price : {{ $product->price }} رس</span>
                </div>
                <div class="w-widget col-xs-12">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Discount code ">
                        <button type="submit" class="btn">Dicount</button>
                    </div>
                </div>
                <div class="w-widget col-xs-12">
                    <span> Price After Discount : 10999 رس</span>
                </div>
                <div class="w-widget col-xs-12">
                    <span>Tax : 1400 رس</span>
                </div>
                <div class="w-widget total col-xs-12">
                    <span> Total price : 12399 رس</span>
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
                        <p> يقر المشتري بأن المنتج الذي يشتريه عبر المنصة هو للاستخدام الشخصي وليس التجاري ولمرة واحدة
                            فقط ،
                            وذلك على أرضه المرفق بياناتها في عملية الشراء ، ويتحمل كافة التبعات القانونية في حال انتهاك
                            الحقوق أو
                            تسريب المخططات بشكل مقصود إلى الآخرين بقصد الاستفادة منها في البناء أو التطوير . كما يتعهد
                            بمراجعة
                            المخططات ومواءمتها مع الاستشاري والمقاول والتأكد من القواعد الإنشائية المناسبة بناء على
                            تقرير
                            التربة
                            .وتوصية الاستشاري المشرف على المشروع</p>
                        <button type="button" data-dismiss="modal">اغلاق</button>
                    </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection



@push('js')
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery('#city').change(function() {
                let city_id = jQuery(this).val();
                // alert(city_id);
                jQuery.ajax({
                    url: '/front/getRegion',
                    type: 'post',
                    data: 'city_id=' + city_id + '&_token={{ csrf_token() }}',
                    success: function(result) {
                        jQuery('#region').html(result)
                    }
                });
                alert(result)
            });

        });
    </script>
@endpush
