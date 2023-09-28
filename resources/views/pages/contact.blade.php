@extends('layouts.app')
@section('add-head')
@endsection

@section('content')
    <x-card-default>
        <x-slot name="layoutContent">
            <!-- main content -->
            <main class="main-factory-contact">

                {{-- thông báo --}}
                @if (session('success'))
                    <div class="alert alert-success add h4 text-white" id="alert" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                {{-- end thông báo --}}

                <section class="p-contact">
                    <div class="p-contact__main">
                        <div class="l-container">
                            <div class="l-row">
                                <div class="l-col l-col__info">
                                    <div class="c-title">
                                        <h3>Để lại thông tin liên hệ</h3>
                                        <p>
                                            Gửi thông tin để được tư vấn, báo giá, hoặc liên hệ hợp tác <br
                                                class="item-pc">kinh doanh. Vui lòng gửi email cho chúng tôi bất cứ lúc
                                            nào.<br />Chúng tôi sẵn sàng lắng nghe và hỗ trợ quý khách.
                                        </p>
                                    </div>
                                    <div class="l-col__form item-sp">
                                        <form method="POST" action="{{ route('contact-send') }}">
                                            @csrf
                                            <div class="p-contact__form">
                                                <input type="text" name="fullname" placeholder="Nguyễn Văn A">
                                            </div>
                                            <div class="p-contact__form">
                                                <input type="text" name="email" placeholder="Work email">
                                            </div>
                                            <div class="p-contact__form">
                                                <input type="text" name="phone" placeholder="Số điện thoại">
                                            </div>
                                            <div class="p-contact__form">
                                                <input type="text" name="title" placeholder="Tiêu đề">
                                            </div>
                                            <div class="p-contact__form">
                                                <select name="" id="">
                                                    <option value="" disabled hidden selected>Mục đích liên hệ
                                                    </option>
                                                    <option value="demo">demo</option>
                                                    <option value="demo">demo</option>
                                                </select>
                                            </div>
                                            <div class="p-contact__form">
                                                <textarea name="" id="" cols="30" rows="10" placeholder="Nội dung liên hệ"></textarea>
                                            </div>
                                            <div class="p-contact__form">
                                                <label class="filelabel">
                                                    <span class="title">
                                                        <img src="./assets/img/common/icn_up-load-file.svg" alt="">
                                                        File đính kèm
                                                    </span>
                                                    <input class="FileUpload1" id="FileInput" name="booking_attachment"
                                                        type="file" value="" />
                                                </label>
                                            </div>
                                            <div class="p-contact__form">
                                                <button class="c-btn">Gửi thông tin</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="p-contact__keep">
                                        <div class="p-contact__title">
                                            <h3>LIÊN HỆ NGAY</h3>
                                        </div>
                                        <div class="contact">
                                            <a href="tel:+84-24-3910-2030"><img
                                                    src="./assets/img_new/common/icn-contact-02.svg"
                                                    alt="err">+84-24-3910-2030</a>
                                            <a href="mailto:info@eyefire.vn"><img
                                                    src="./assets/img_new/common/icn-contact-01.svg"
                                                    alt="err">info@eyefire.vn</a>
                                        </div>
                                    </div>
                                    <div class="p-contact__keep">
                                        <div class="p-contact__title">
                                            <h3>KEEP IN TOUCH</h3>
                                        </div>
                                        <div class="p-contact__keep__content">
                                            <ul>
                                                <li>
                                                    <a href="#"><img
                                                            src="./assets/img_new/common/icn-social-contact-03.svg"
                                                            alt="err"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src="./assets/img_new/common/icn-social-contact-02.svg"
                                                            alt="err"></a>
                                                </li>
                                                <li>
                                                    <a href="#"><img
                                                            src="./assets/img_new/common/icn-social-contact-01.svg"
                                                            alt="err"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="l-col l-col__form item-pc">
                                    <form id="contact-form" method="POST" action="{{ route('contact-send') }}">
                                        @csrf
                                        <div class="p-contact__form">
                                            <input type="text" name="fullname" placeholder="Nguyễn Văn A">
                                        </div>
                                        <div class="p-contact__form">
                                            <input type="text" name="email" placeholder="Work email">
                                        </div>

                                        <div class="p-contact__form">
                                            <input type="text" name="phone" placeholder="Số điện thoại">
                                        </div>
                                        <div class="p-contact__form">
                                            <input type="text" name="title" placeholder="Tiêu đề">
                                        </div>
                                        <div class="p-contact__form" id="contact_purpose">
                                            <select name="purpose" id="">
                                                <option value="" disabled hidden selected>Mục đích liên hệ</option>
                                                <option value="demo">demo 1</option>
                                                <option value="demo">demo 2</option>
                                            </select>
                                        </div>
                                        <div class="p-contact__form">
                                            <textarea name="description" id="" cols="30" rows="10" placeholder="Nội dung liên hệ"></textarea>
                                        </div>
                                        <div class="p-contact__form">
                                            <label class="filelabel">
                                                <span class="title">
                                                    <img src="./assets/img/common/icn_up-load-file.svg" alt="">
                                                    File đính kèm
                                                </span>
                                                <input class="FileUpload1" id="FileInput" name="file"
                                                    type="file" value="" />
                                            </label>
                                        </div>
                                        <div class="p-contact__form">
                                            <button type="submit" class="c-btn">Gửi thông tin</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="p-contact__main__office">
                                <div class="p-contact__keep">
                                    <div class="p-contact__title">
                                        <h3>OFFICE</h3>
                                    </div>
                                </div>
                                <div class="content">
                                    <div class="box">
                                        <div>
                                            <h4>TRỤ SỞ HÀ NỘI </h4>
                                            <p>
                                                Tầng 3 tòa nhà Fafim A, Số 19 Nguyễn Trãi, Phường Khương Trung, Quận Thanh
                                                Xuân,<br> TP Hà Nội
                                            </p>
                                        </div>
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.760100107764!2d105.81783027600524!3d21.002251488687126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac84f6869bf1%3A0xd2a5ff274402a0a0!2zTmcuIDE5IMSQLiBOZ3V54buFbiBUcsOjaSwgS2jGsMahbmcgVHJ1bmcsIMSQ4buRbmcgxJBhLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1694244009716!5m2!1svi!2s"
                                            style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                    <div class="box">
                                        <div>
                                            <h4>CHI NHÁNH HỒ CHÍ MINH</h4>
                                            <p>
                                                Tầng 2, Toà nhà văn phòng, Số 102 Nguyễn <br>Đình Chính, Phường 15, Quận Phú
                                                Nhuận, <br>TP Hồ Chí Minh
                                            </p>
                                        </div>
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.760100107764!2d105.81783027600524!3d21.002251488687126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac84f6869bf1%3A0xd2a5ff274402a0a0!2zTmcuIDE5IMSQLiBOZ3V54buFbiBUcsOjaSwgS2jGsMahbmcgVHJ1bmcsIMSQ4buRbmcgxJBhLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1694244009716!5m2!1svi!2s"
                                            style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                    <div class="box">
                                        <div>
                                            <h4>CHI NHÁNH NHẬT BẢN</h4>
                                            <p>
                                                〒190-0023 <br> 東京都立川市柴崎町3-8-5立川NXビル5F
                                            </p>
                                        </div>
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.760100107764!2d105.81783027600524!3d21.002251488687126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac84f6869bf1%3A0xd2a5ff274402a0a0!2zTmcuIDE5IMSQLiBOZ3V54buFbiBUcsOjaSwgS2jGsMahbmcgVHJ1bmcsIMSQ4buRbmcgxJBhLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1694244009716!5m2!1svi!2s"
                                            style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <!-- end main content -->
        </x-slot>
    </x-card-default>
@endsection

@push('add-js')
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/contact.js') }}"></script>
@endpush
