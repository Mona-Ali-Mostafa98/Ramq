{{-- start of parteners section --}}
<div class="partners col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
    <div class="container">
        <div class="part-slider owl-carousel">
            @foreach ($partners as $partner)
                <div class="item">
                    <img src="{{ asset('images/partners/' . $partner->image) }}" alt="">
                </div>
            @endforeach

        </div>
    </div>
</div>
{{-- end of parteners section --}}

</main>
<footer class="main-footer col-xs-12" style="background-image: url(images/hero2.jpg);">
    <div class="container">
        <div class="f-top col-xs-12">
            <div class="row">
                <div class="f-item col-md-4 col-xs-12">
                    <h4>نبذة عنا</h4>
                    @foreach ($settings as $setting)
                        <p> {{ $setting->description }}</p>
                    @endforeach
                </div>
                <div class="f-item col-md-2 col-xs-12">
                    <h4>اهم الروابط</h4>
                    <ul class="sitemap">
                        <li>
                            <a href="{{ route('front.index') }}">الرئيسية</a>
                        </li>
                        <li>
                            <a href="{{ route('front.about-us.index') }}">من نحن</a>
                        </li>
                        <li>
                            <a href="#">متجر التصاميم</a>
                        </li>
                        <li>
                            <a href="{{ route('front.contact-us.create') }}">تواصل معنا</a>
                        </li>
                    </ul>
                </div>
                <div class="f-item col-md-3 col-xs-12">
                    <h4>تواصل معنا</h4>
                    <ul class="siteinfo">
                        <li>
                            <i class="la la-crosshairs"></i>
                            العنوان
                            @foreach ($settings as $setting)
                                <p>
                                    <a href="#">‏ {{ $setting->address }}</a>
                                </p>
                            @endforeach

                        </li>
                        <li>
                            <i class="la la-envelope"></i>
                            البريد الالكترونى
                            @foreach ($settings as $setting)
                                <p>
                                    <a href="mailto:companymaimail@gmail.com">{{ $setting->email }}</a>
                                </p>
                            @endforeach
                        </li>
                        <li>
                            <i class="las la-crosshairs"></i>
                            الهاتف
                            <p>
                                @foreach ($settingPhones as $setting)
                                    <a href="tel:0548596523">{{ $setting->phone }}</a> -
                                @endforeach
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="f-item col-md-3 col-xs-12">
                    <h4>التواصل الاجتماعى</h4>
                    <div class="soclia">
                        <a href="#" class="twitter">
                            <i class="la la-twitter"></i>
                        </a>
                        <a href="#" class="youtube">
                            <i class="la la-youtube"></i>
                        </a>
                        <a href="#" class="instagram">
                            <i class="la la-instagram"></i>
                        </a>
                        <a href="#" class="facebook">
                            <i class="la la-facebook"></i>
                        </a>
                    </div>
                    <ul class="siteinfo">
                        <li>
                            <i class="la la-file-invoice"></i>
                            رقم السجل التجارى
                            @foreach ($settings as $setting)
                                <p>{{ $setting->commercial_registration_no }}</p>
                            @endforeach

                        </li>
                        <li>
                            <i class="la la-file-invoice"></i>
                            الرقم الضريبى
                            @foreach ($settings as $setting)
                                <p>{{ $setting->tax_number }}</p>
                            @endforeach
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="f-bottom col-xs-12">
            <p>جميع الحقوق محفوظة لـمنصة رمق</p>
            <a href="#">
                <img src="images/dev.svg" alt="">
            </a>
        </div>
    </div>
    <div class="toTop">
        <i class="la la-angle-up"></i>
    </div>
    <div class="float-icons">
        <a href="javascript:void(0)" class="dark-th" data-tool="tooltip" title="الوضع الليلي" data-placement="right">
            <i class="la la-moon"></i>
        </a>
        <a href="#" class="whats" data-tool="tooltip" title="تواصل عبر الواتساب" data-placement="right">
            <i class="la la-whatsapp"></i>
        </a>
    </div>
</footer>
<!-- /.modal -->
</div>

<div class="modal fade" id="search_pop">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="la la-close"></i>
            </button>
            <div class="modal-body">
                <div class="search-wrap">
                    <form action="#" method="GET">
                        <div class="form-group">
                            <input type="search" class="form-control" placeholder="اكتب بحثك هنا">
                            <button type="submit" class="btn">بحث</button>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@yield('diffrence');
<!-- Javascript Files -->
<script src="{{ asset('front/js/jquery-2.2.2.min.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front/js/aos.js') }}"></script>
<script src="{{ asset('front/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('front/js/visa-format.js') }}"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="{{ asset('front/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('front/js/script.js') }}"></script>
</body>

</html>
