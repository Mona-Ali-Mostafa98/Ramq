@extends('front.layout')
@section('content')
    <!-- Start slider -->
    <div class="hero-sec col-xs-12">
        <div class="slider">
            <div class="one owl-carousel">
                <div class="item-box">
                    <img src="{{ asset('front/images/hero.jpg') }}" alt="">
                    <div class="i-cap">
                        <h3>مسكن أطلال - دورين</h3>
                        <p> مسكن أطلال يتميز بالمرونة العالية في عدد الوحدات والتمدد مستقبلا ، كما يمكن عمله على
                            دور أودورين أو ثلاثة أدوار كوحدات منفصلة . بالإضافة لإمكانية عمل وحدتين ( وحدة في
                            الدور الأرضي والوحدة الثانية دور للعائلة مع نصف دور للضيافة في السطح ) مع إمكانية
                            عمل ثلاثة غرف مستقبلا .لتصبح وحدة ثالثة</p>
                        <a href="#" class="btn btn-border">اطلب الان</a>
                    </div>
                </div>
                <div class="item-box">
                    <img src="{{ asset('front/images/hero2.jpg') }}" alt="">
                    <div class="i-cap">
                        <h3>مسكن أطلال - دورين</h3>
                        <p> مسكن أطلال يتميز بالمرونة العالية في عدد الوحدات والتمدد مستقبلا ، كما يمكن عمله على
                            دور أودورين أو ثلاثة أدوار كوحدات منفصلة . بالإضافة لإمكانية عمل وحدتين ( وحدة في
                            الدور الأرضي والوحدة الثانية دور للعائلة مع نصف دور للضيافة في السطح ) مع إمكانية
                            عمل ثلاثة غرف مستقبلا .لتصبح وحدة ثالثة</p>
                        <a href="#" class="btn btn-border">اطلب الان</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-two">
            <div class="two owl-carousel">
                <div class="item active">
                    <img src="{{ asset('front/images/hero.jpg') }}" alt="">
                </div>
                <div class="item">
                    <img src="{{ asset('front/images/hero2.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- end slider -->


    <div class="about-s col-xs-12">
        <div class="container">
            <div class="row">
                <div class="ab-img col-md-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="ab-slider owl-carousel">
                        <div class="item">
                            <img src="{{ asset('front/images/2.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('front/images/hero2.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('front/images/hero.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="ab-data col-md-6 col-xs-12">
                    <div class="g-head col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <h3>اهلا بكم فى <b>منصة رمق</b></h3>
                    </div>
                    <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">هذا النص هو مثال لنص
                        يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن
                        تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها
                        التطبيق.
                        إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما
                        تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على
                        وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
                    </p>
                    <a href="#" class="btn" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">تعرف
                        علينا</a>
                </div>
            </div>
        </div>
    </div>
    <div class="blocks col-xs-12">
        <div class="container">
            <div class="g-head col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <h3>اختر التصميم الذي يناسبك</h3>
            </div>
            <div class="g-body col-xs-12">
                <div class="row">
                    <div class="block col-md-4 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="200">
                        <div class="inner">
                            <div class="i-img">
                                <img src="{{ asset('front/images/hero.jpg') }}" alt="">
                                <span>‏8.118.6 ر.س</span>
                                <div class="i-actions">
                                    <a href="#">
                                        <i class="la la-share"></i>
                                    </a>
                                    <a href="#" class="fav">
                                        <i class="la la-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="i-data">
                                <a href="#" class="title">مضياف + مصعد</a>
                                <div class="i-extra">
                                    <ul>
                                        <li>
                                            <img src="{{ asset('front/images/ic1.png') }}" alt="">
                                            <p>عدد الادوار</p>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <img src="{{ asset('front/images/ic2.png') }}" alt="">
                                            <p>عدد الغرف</p>
                                            <span>8</span>
                                        </li>
                                        <li>
                                            <img src="{{ asset('front/images/ic3.png') }}" alt="">
                                            <p>مساحة الارض</p>
                                            <span>500 م2</span>
                                        </li>
                                    </ul>
                                </div>
                                <p class="desc">تصميم: المهندس بدر الدامغ</p>
                                <a href="#" class="btn">استعرض التصميم</a>
                            </div>
                        </div>
                    </div>
                    <div class="block col-md-4 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="400">
                        <div class="inner">
                            <div class="i-img">
                                <img src="{{ asset('front/images/hero.jpg') }}" alt="">
                                <span>‏8.118.6 ر.س</span>
                                <div class="i-actions">
                                    <a href="#">
                                        <i class="la la-share"></i>
                                    </a>
                                    <a href="#" class="fav">
                                        <i class="la la-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="i-data">
                                <a href="#" class="title">مضياف + مصعد</a>
                                <div class="i-extra">
                                    <ul>
                                        <li>
                                            <img src="{{ asset('front/images/ic1.png') }}" alt="">
                                            <p>عدد الادوار</p>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <img src="{{ asset('front/images/ic2.png') }}" alt="">
                                            <p>عدد الغرف</p>
                                            <span>8</span>
                                        </li>
                                        <li>
                                            <img src="{{ asset('front/images/ic3.png') }}" alt="">
                                            <p>مساحة الارض</p>
                                            <span>500 م2</span>
                                        </li>
                                    </ul>
                                </div>
                                <p class="desc">تصميم: المهندس بدر الدامغ</p>
                                <a href="#" class="btn">استعرض التصميم</a>
                            </div>
                        </div>
                    </div>
                    <div class="block col-md-4 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="600">
                        <div class="inner">
                            <div class="i-img">
                                <img src="{{ asset('front/images/hero.jpg') }}" alt="">
                                <span>‏8.118.6 ر.س</span>
                                <div class="i-actions">
                                    <a href="#">
                                        <i class="la la-share"></i>
                                    </a>
                                    <a href="#" class="fav">
                                        <i class="la la-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="i-data">
                                <a href="#" class="title">مضياف + مصعد</a>
                                <div class="i-extra">
                                    <ul>
                                        <li>
                                            <img src="{{ asset('front/images/ic1.png') }}" alt="">
                                            <p>عدد الادوار</p>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <img src="{{ asset('front/images/ic2.png') }}" alt="">
                                            <p>عدد الغرف</p>
                                            <span>8</span>
                                        </li>
                                        <li>
                                            <img src="{{ asset('front/images/ic3.png') }}" alt="">
                                            <p>مساحة الارض</p>
                                            <span>500 م2</span>
                                        </li>
                                    </ul>
                                </div>
                                <p class="desc">تصميم: المهندس بدر الدامغ</p>
                                <a href="#" class="btn">استعرض التصميم</a>
                            </div>
                        </div>
                    </div>
                    <div class="block col-md-4 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="200">
                        <div class="inner">
                            <div class="i-img">
                                <img src="{{ asset('front/images/hero.jpg') }}" alt="">
                                <span>‏8.118.6 ر.س</span>
                                <div class="i-actions">
                                    <a href="#">
                                        <i class="la la-share"></i>
                                    </a>
                                    <a href="#" class="fav">
                                        <i class="la la-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="i-data">
                                <a href="#" class="title">مضياف + مصعد</a>
                                <div class="i-extra">
                                    <ul>
                                        <li>
                                            <img src="{{ asset('front/images/ic1.png') }}" alt="">
                                            <p>عدد الادوار</p>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <img src="{{ asset('front/images/ic2.png') }}" alt="">
                                            <p>عدد الغرف</p>
                                            <span>8</span>
                                        </li>
                                        <li>
                                            <img src="{{ asset('front/images/ic3.png') }}" alt="">
                                            <p>مساحة الارض</p>
                                            <span>500 م2</span>
                                        </li>
                                    </ul>
                                </div>
                                <p class="desc">تصميم: المهندس بدر الدامغ</p>
                                <a href="#" class="btn">استعرض التصميم</a>
                            </div>
                        </div>
                    </div>
                    <div class="block col-md-4 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="400">
                        <div class="inner">
                            <div class="i-img">
                                <img src="{{ asset('front/images/hero.jpg') }}" alt="">
                                <span>‏8.118.6 ر.س</span>
                                <div class="i-actions">
                                    <a href="#">
                                        <i class="la la-share"></i>
                                    </a>
                                    <a href="#" class="fav">
                                        <i class="la la-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="i-data">
                                <a href="#" class="title">مضياف + مصعد</a>
                                <div class="i-extra">
                                    <ul>
                                        <li>
                                            <img src="{{ asset('front/images/ic1.png') }}" alt="">
                                            <p>عدد الادوار</p>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <img src="{{ asset('front/images/ic2.png') }}" alt="">
                                            <p>عدد الغرف</p>
                                            <span>8</span>
                                        </li>
                                        <li>
                                            <img src="{{ asset('front/images/ic3.png') }}" alt="">
                                            <p>مساحة الارض</p>
                                            <span>500 م2</span>
                                        </li>
                                    </ul>
                                </div>
                                <p class="desc">تصميم: المهندس بدر الدامغ</p>
                                <a href="#" class="btn">استعرض التصميم</a>
                            </div>
                        </div>
                    </div>
                    <div class="block col-md-4 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="600">
                        <div class="inner">
                            <div class="i-img">
                                <img src="{{ asset('front/images/hero.jpg') }}" alt="">
                                <span>‏8.118.6 ر.س</span>
                                <div class="i-actions">
                                    <a href="#">
                                        <i class="la la-share"></i>
                                    </a>
                                    <a href="#" class="fav">
                                        <i class="la la-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="i-data">
                                <a href="#" class="title">مضياف + مصعد</a>
                                <div class="i-extra">
                                    <ul>
                                        <li>
                                            <img src="{{ asset('front/images/ic1.png') }}" alt="">
                                            <p>عدد الادوار</p>
                                            <span>2</span>
                                        </li>
                                        <li>
                                            <img src="{{ asset('front/images/ic2.png') }}" alt="">
                                            <p>عدد الغرف</p>
                                            <span>8</span>
                                        </li>
                                        <li>
                                            <img src="{{ asset('front/images/ic3.png') }}" alt="">
                                            <p>مساحة الارض</p>
                                            <span>500 م2</span>
                                        </li>
                                    </ul>
                                </div>
                                <p class="desc">تصميم: المهندس بدر الدامغ</p>
                                <a href="#" class="btn">استعرض التصميم</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="g-more col-xs-12">
                    <a href="#" class="btn">المزيد</a>
                </div>
            </div>
        </div>
    </div>
    <div class="vid col-xs-12">
        <div class="container">
            <div class="inner" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <img src="{{ asset('front/images/hero2.jpg') }}" alt="">
                <a href="#youtube_url" data-fancybox>
                    <i class="la la-play"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="most col-xs-12">
        <div class="g-head col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <div class="container">
                <h3>اكثر التصاميم طلبا</h3>
            </div>
        </div>
        <div class="g-body col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <div class="most-slider owl-carousel">
                <div class="item">
                    <div class="m-block">
                        <img src="{{ asset('front/images/hero.jpg') }}" alt="">
                        <div class="icap-o">
                            <a href="#" class="title">مضياف + مصعد</a>
                            <div class="overl">
                                <ul>
                                    <li>
                                        <img src="{{ asset('front/images/ic1.png') }}" alt="">
                                        عدد الادوار
                                        <span>2</span>
                                    </li>
                                    <li>
                                        <img src="{{ asset('front/images/ic2.png') }}" alt="">
                                        عدد الغرف
                                        <span>2</span>
                                    </li>
                                    <li>
                                        <img src="{{ asset('front/images/ic3.png') }}" alt="">
                                        مساحة الارض
                                        <span>500 م2</span>
                                    </li>
                                </ul>
                                <p>تصميم: المهندس بدر الدامغ</p>
                            </div>
                            <h4>‏8.118.6 ر.س</h4>
                            <a href="#" class="btn btn-border">استعرض</a>
                            <div class="i-actions">
                                <a href="#" class="fav">
                                    <i class="la la-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="la la-share"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="m-block">
                        <img src="{{ asset('front/images/hero2.jpg') }}" alt="">
                        <div class="icap-o">
                            <a href="#" class="title">مضياف + مصعد</a>
                            <div class="overl">
                                <ul>
                                    <li>
                                        <img src="{{ asset('front/images/ic1.png') }}" alt="">
                                        عدد الادوار
                                        <span>2</span>
                                    </li>
                                    <li>
                                        <img src="{{ asset('front/images/ic2.png') }}" alt="">
                                        عدد الغرف
                                        <span>2</span>
                                    </li>
                                    <li>
                                        <img src="{{ asset('front/images/ic3.png') }}" alt="">
                                        مساحة الارض
                                        <span>500 م2</span>
                                    </li>
                                </ul>
                                <p>تصميم: المهندس بدر الدامغ</p>
                            </div>
                            <h4>‏8.118.6 ر.س</h4>
                            <a href="#" class="btn btn-border">استعرض</a>
                            <div class="i-actions">
                                <a href="#" class="fav">
                                    <i class="la la-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="la la-share"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="m-block">
                        <img src="{{ asset('front/images/hero.jpg') }}" alt="">
                        <div class="icap-o">
                            <a href="#" class="title">مضياف + مصعد</a>
                            <div class="overl">
                                <ul>
                                    <li>
                                        <img src="{{ asset('front/images/ic1.png') }}" alt="">
                                        عدد الادوار
                                        <span>2</span>
                                    </li>
                                    <li>
                                        <img src="{{ asset('front/images/ic2.png') }}" alt="">
                                        عدد الغرف
                                        <span>2</span>
                                    </li>
                                    <li>
                                        <img src="{{ asset('front/images/ic3.png') }}" alt="">
                                        مساحة الارض
                                        <span>500 م2</span>
                                    </li>
                                </ul>
                                <p>تصميم: المهندس بدر الدامغ</p>
                            </div>
                            <h4>‏8.118.6 ر.س</h4>
                            <a href="#" class="btn btn-border">استعرض</a>
                            <div class="i-actions">
                                <a href="#" class="fav">
                                    <i class="la la-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="la la-share"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="m-block">
                        <img src="{{ asset('front/images/hero2.jpg') }}" alt="">
                        <div class="icap-o">
                            <a href="#" class="title">مضياف + مصعد</a>
                            <div class="overl">
                                <ul>
                                    <li>
                                        <img src="{{ asset('front/images/ic1.png') }}" alt="">
                                        عدد الادوار
                                        <span>2</span>
                                    </li>
                                    <li>
                                        <img src="{{ asset('front/images/ic2.png') }}" alt="">
                                        عدد الغرف
                                        <span>2</span>
                                    </li>
                                    <li>
                                        <img src="{{ asset('front/images/ic3.png') }}" alt="">
                                        مساحة الارض
                                        <span>500 م2</span>
                                    </li>
                                </ul>
                                <p>تصميم: المهندس بدر الدامغ</p>
                            </div>
                            <h4>‏8.118.6 ر.س</h4>
                            <a href="#" class="btn btn-border">استعرض</a>
                            <div class="i-actions">
                                <a href="#" class="fav">
                                    <i class="la la-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="la la-share"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="m-block">
                        <img src="{{ asset('front/images/hero.jpg') }}" alt="">
                        <div class="icap-o">
                            <a href="#" class="title">مضياف + مصعد</a>
                            <div class="overl">
                                <ul>
                                    <li>
                                        <img src="{{ asset('front/images/ic1.png') }}" alt="">
                                        عدد الادوار
                                        <span>2</span>
                                    </li>
                                    <li>
                                        <img src="{{ asset('front/images/ic2.png') }}" alt="">
                                        عدد الغرف
                                        <span>2</span>
                                    </li>
                                    <li>
                                        <img src="{{ asset('front/images/ic3.png') }}" alt="">
                                        مساحة الارض
                                        <span>500 م2</span>
                                    </li>
                                </ul>
                                <p>تصميم: المهندس بدر الدامغ</p>
                            </div>
                            <h4>‏8.118.6 ر.س</h4>
                            <a href="#" class="btn btn-border">استعرض</a>
                            <div class="i-actions">
                                <a href="#" class="fav">
                                    <i class="la la-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="la la-share"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="m-block">
                        <img src="{{ asset('front/images/hero2.jpg') }}" alt="">
                        <div class="icap-o">
                            <a href="#" class="title">مضياف + مصعد</a>
                            <div class="overl">
                                <ul>
                                    <li>
                                        <img src="{{ asset('front/images/ic1.png') }}" alt="">
                                        عدد الادوار
                                        <span>2</span>
                                    </li>
                                    <li>
                                        <img src="{{ asset('front/images/ic2.png') }}" alt="">
                                        عدد الغرف
                                        <span>2</span>
                                    </li>
                                    <li>
                                        <img src="{{ asset('front/images/ic3.png') }}" alt="">
                                        مساحة الارض
                                        <span>500 م2</span>
                                    </li>
                                </ul>
                                <p>تصميم: المهندس بدر الدامغ</p>
                            </div>
                            <h4>‏8.118.6 ر.س</h4>
                            <a href="#" class="btn btn-border">استعرض</a>
                            <div class="i-actions">
                                <a href="#" class="fav">
                                    <i class="la la-heart"></i>
                                </a>
                                <a href="#">
                                    <i class="la la-share"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="counters col-xs-12">
        <div class="container">
            <div class="co-inner" style="background-image: url({{ asset('front/images/hero.jpg') }});">
                <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="200">
                    <div class="inner">
                        <span class="counter">98</span>
                        <h4>عدد التصميمات</h4>
                    </div>
                </div>
                <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="400">
                    <div class="inner">
                        <span class="counter">15</span>
                        <h4>عدد التصميمات المباعة</h4>
                    </div>
                </div>
                <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="600">
                    <div class="inner">
                        <span class="counter">20</span>
                        <h4>عدد العملاء</h4>
                    </div>
                </div>
                <div class="block col-md-3 col-sm-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="800">
                    <div class="inner">
                        <span class="counter">10</span>
                        <h4>عدد المهندسين</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact col-xs-12">
        <div class="g-head col-xs-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <div class="container">
                <h3>تواصـل معنـا</h3>
            </div>
        </div>
        <div class="g-body col-xs-12" style="background-image: url({{ asset('front/images/hero.jpg') }});">
            <div class="container">
                <form action="#" method="GET">
                    <div class="inner col-xs-12">
                        <div class="form-group col-md-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="200">
                            <input type="text" class="form-control" placeholder="الاسـم الثـلاثي">
                        </div>
                        <div class="form-group col-md-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="400">
                            <input type="email" class="form-control" placeholder="البريد الإلكتروني">
                        </div>
                        <div class="form-group col-md-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="600">
                            <input type="text" class="form-control" placeholder="رقـم الجـوال">
                        </div>
                        <div class="form-group col-md-6 col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="800">
                            <input type="text" class="form-control" placeholder="الـمـوضـوع">
                        </div>
                        <div class="form-group col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="1000">
                            <textarea class="form-control" placeholder="الـرسـالة"></textarea>
                        </div>
                        <div class="form-group col-xs-12" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="1200">
                            <button type="submit" class="btn">ارسال</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
