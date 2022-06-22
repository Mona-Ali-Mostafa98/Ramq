@extends('front.layout')
@section('content')
    <div class="breads col-xs-12">
        <img src="images/hero.jpg" alt="">
        <div class="container">
            <h3>تواصل معنا</h3>
            <ul>
                <li>
                    <a href="#">الرئيسية</a>
                </li>
                <li>تواصل معنا</li>
            </ul>
        </div>
    </div>
    <div class="contact-wrap col-xs-12">
        <div class="container">
            <div class="conto-form col-md-8 col-xs-12">
                <div class="cop-head col-xs-12">
                    <h4>اترك رسالتك</h4>
                    <p>ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص
                        العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم
                        فيظهر بشكل لا يليق.
                    </p>
                </div>
                <div class="cop-body col-xs-12">
                    <div class="row">
                        <div class="form-group col-md-6 col-xs-12">
                            <input type="text" class="form-control" placeholder="اسم الكريم">
                        </div>
                        <div class="form-group col-md-6 col-xs-12">
                            <input type="email" class="form-control" placeholder="البريد الالكترونى">
                        </div>
                        <div class="form-group col-md-12 col-xs-12">
                            <input type="text" class="form-control" placeholder="عنوان الرساله">
                        </div>
                        <div class="form-group col-md-12 col-xs-12">
                            <textarea class="form-control" placeholder="اكتب رسالتك هنا"></textarea>
                        </div>
                        <div class="form-group col-md-12 col-xs-12">
                            <button type="submit" class="btn">ارسال</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="conto-data col-md-4 col-xs-12">
                <div class="cop-head col-xs-12">
                    <h4>الموقع</h4>
                </div>
                <ul>
                    <li>
                        <i class="la la-map-marker"></i>
                        <a href="#">
                            المملكة العربية السعودية . الرياض . حى الورورد. شارع
                            النزهة . بناية رقم 15
                        </a>
                    </li>
                    <li>
                        <i class="la la-envelope"></i>
                        <a href="mailto:contact@example">contact@example.com</a>
                    </li>
                    <li>
                        <i class="la la-phone"></i>
                        <a href="tel:+1-3524-3356">+1-3524-3356</a>
                    </li>
                </ul>
                <div class="cop-head col-xs-12">
                    <h4>الخريطة</h4>
                </div>
                <div class="cop-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3418.699866967512!2d31.366383685338207!3d31.034610678072703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f79d99ef7ea253%3A0xe92319f27469b714!2z2LPZhdin2LHYqiDZgdmK2KzZhiDZhNiq2LXZhdmK2YUg2YjYqNix2YXYrNipINin2YTZhdmI2KfZgti5INmI2KfZhNiq2LfYqNmK2YLYp9iqINin2YTYp9mE2YPYqtix2YjZhtmK2Kk!5e0!3m2!1sar!2seg!4v1629677229468!5m2!1sar!2seg"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
