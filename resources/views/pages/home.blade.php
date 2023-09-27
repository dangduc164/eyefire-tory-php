@extends('layouts.app')
@section('add-head')
@endsection

@section('content')
    <x-card-default>
        <x-slot name="layoutContent">
            <!-- main content -->
            <section class="main-factory-home">
                <div class="p-home">
                    <div class="p-home__slogan">
                        <div class="l-container">
                            <h1>an toàn nơi làm việc<br> được hỗ trợ bởi A.I</h1>
                            <p>
                                EYEFIRE mang tới giải pháp toàn diện để quản lý, giám sát an toàn trong nhà máy thông qua
                                camera <br class="item-pc"> được tích hợp AI, giúp phát hiện và cảnh báo sớm các nguy cơ mất
                                an toàn tiềm ẩn, từ đó có thể ngăn <br class="item-pc"> ngừa các sự cố có thể xảy ra.
                            </p>
                        </div>
                    </div>
                    <div class="p-home__int">
                        <div class="l-container">
                            <div class="img-diagram">
                                <dotlottie-player src="./assets/lottie/lottie-homepage.json" autoplay loop />
                            </div>
                            <div class="feature">
                                <ul>
                                    <li class="active">Sử dụng camera<br class="item-pc"> có sẵn</li>
                                    <li>Thêm hơn 20+ quy tắc an toàn <br class="item-pc">chỉ với vài click</li>
                                    <li>Phát hiện ngay lập tức các hành <br class="item-pc">vi và điều kiện không an toàn
                                    </li>
                                </ul>
                            </div>
                            <div class="p-home__int__slider">
                                <div class="inner">
                                    <img class="item-pc" src="./assets/img_new/home/pic-slide.jpg" alt="err">
                                    <img class="item-sp" src="./assets/img_new/home/pic-slide-sp.jpg" alt="err">
                                </div>
                                <div class="inner">
                                    <img class="item-pc" src="./assets/img_new/home/pic-slide.jpg" alt="err">
                                    <img class="item-sp" src="./assets/img_new/home/pic-slide-sp.jpg" alt="err">
                                </div>
                                <div class="inner">
                                    <img class="item-pc" src="./assets/img_new/home/pic-slide.jpg" alt="err">
                                    <img class="item-sp" src="./assets/img_new/home/pic-slide-sp.jpg" alt="err">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-home__solution">
                        <div class="l-container">
                            <div class="p-home__solution__head">
                                <div class="title">
                                    <h2>CÁC GIẢI PHÁP AN TOÀN <br class="item-pc">CHO NHÀ MÁY</h2>
                                    <img src="./assets/img_new/home/icn-deco-solution.svg" alt="err" class="item-pc">
                                </div>
                                <p>Chúng tôi tin rằng an toàn nơi làm việc là vô cùng quan trọng. Chúng tôi nhận thức rằng
                                    các điều kiện không an toàn thường có thể không được nhận thấy, ngay cả khi có nhiều
                                    người quan sát. Các giải pháp an toàn của EYEFIRE có thể
                                    phát hiện và cảnh báo sớm các nguy cơ, từ đó có thể giảm thiểu tai nạn lao động.</p>
                            </div>
                            <div class="p-home__solution__content item-pc">
                                <div class="box">
                                    <img src="./assets/img_new/home/icn-solution-03.svg" alt="err">
                                    <h3>Phát hiện những nguy hiểm không nhìn thấy được</h3>
                                    <p>Các giải pháp an toàn của EYEFIRE giúp <br>cho người quan sát thấy được các nguy hiểm
                                        tiềm ẩn thông qua các cảnh báo thời gian thực bằng hình ảnh, video, thống kê phân
                                        tích.</p>
                                    <img src="./assets/img_new/home/icn-solution-06.png" alt="err">
                                </div>
                                <div class="box">
                                    <img src="./assets/img_new/home/icn-solution-02.svg" alt="err">
                                    <h3>Dự báo sớm về sự<br> mất an toàn</h3>
                                    <p>Theo dõi các hoạt động thông qua hệ <br>thống camera, EYEFIRE có thể đưa ra các dự
                                        báo sớm cho thấy các sự việc, các tình huống gần như sẽ xảy ra tai nạn.</p>
                                    <img src="./assets/img_new/home/icn-solution-05.png" alt="err">
                                </div>
                                <div class="box">
                                    <img src="./assets/img_new/home/icn-solution-01.svg" alt="err">
                                    <h3>Giảm thiểu thương tích<br> tại nơi làm việc</h3>
                                    <p>Có thể giảm thiểu những thương tích xảy ra tại nơi làm việc một cách chủ động bằng
                                        cách xử lý các trường hợp gần như tai nạn trước khi chúng trở thành sự cố.</p>
                                    <p>Dữ liệu phân tích của EYEFIRE cung cấp cho nhóm giám sát an toàn những thông tin giúp
                                        họ đưa ra các biện pháp phòng ngừa tai nạn một cách hiệu quả.</p>
                                    <img src="./assets/img_new/home/icn-solution-04.png" alt="err">
                                </div>
                            </div>
                            <div class="p-home__solution__content item-sp">
                                <div class="slide">
                                    <div class="box">
                                        <img src="./assets/img_new/home/icn-solution-03.svg" alt="err">
                                        <h3>Phát hiện những nguy hiểm không nhìn thấy được</h3>
                                        <p>Các giải pháp an toàn của EYEFIRE giúp cho người quan sát thấy được các nguy hiểm
                                            tiềm ẩn thông qua các cảnh báo thời gian thực bằng hình ảnh, video, thống kê
                                            phân tích.</p>
                                        <img src="./assets/img_new/home/icn-solution-06.png" alt="err">
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="box">
                                        <img src="./assets/img_new/home/icn-solution-02.svg" alt="err">
                                        <h3>Dự báo sớm về sự mất an toàn</h3>
                                        <p>Theo dõi các hoạt động thông qua hệ thống camera, EYEFIRE có thể đưa ra các dự
                                            báo sớm cho thấy các sự việc, các tình huống gần như sẽ xảy ra tai nạn.</p>
                                        <img src="./assets/img_new/home/icn-solution-05.png" alt="err">
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="box">
                                        <img src="./assets/img_new/home/icn-solution-01.svg" alt="err">
                                        <h3>Giảm thiểu thương tích tại nơi làm việc</h3>
                                        <p>Có thể giảm thiểu những thương tích xảy ra tại nơi làm việc một cách chủ động
                                            bằng cách xử lý các trường hợp gần như tai nạn trước khi chúng trở thành sự cố.
                                        </p>
                                        <p>Dữ liệu phân tích của EYEFIRE cung cấp cho nhóm giám sát an toàn những thông tin
                                            giúp họ đưa ra các biện pháp phòng ngừa tai nạn một cách hiệu quả.</p>
                                        <img src="./assets/img_new/home/icn-solution-04.png" alt="err">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-home__tech">
                        <div class="l-container">
                            <div class="c-title">
                                <img src="./assets/img_new/home/icn-deco-tech-02.svg" alt="err">
                                <h2>A.I technology</h2>
                                <img src="./assets/img_new/home/icn-deco-tech-01.svg" alt="err">
                            </div>
                            <div class="c-home__tech__content">
                                <div class="box active">
                                    <div class="detail">
                                        <img src="./assets/img_new/home/icn-tech-01.svg" alt="err">
                                        <h4>KIỂM SOÁT KHU VỰC</h4>
                                        <p>Ngăn chặn công nhân đi vào khu vực hạn chế, thiết lập số lượng công nhân tối
                                            thiểu và tối đa trong khu vực làm việc, hạn thế thời gian tiếp xúc</p>
                                        <div class="c-more-info">
                                            <a href="#">Xem thêm<img src="./assets/img_new/home/icn-tech-06.svg"
                                                    alt="err"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="detail">
                                        <img src="./assets/img_new/home/icn-tech-02.svg" alt="err">
                                        <h4>KIỂM SOÁT <br class="item-pc">PHƯƠNG TIỆN</h4>
                                        <p>Đảm bảo rằng phương tiện và người điều khiển tuân thủ đường đi định sẵn, giới hạn
                                            tốc độ, hạn chế tối đa việc mất an toàn</p>
                                        <div class="c-more-info">
                                            <a href="#">Xem thêm<img src="./assets/img_new/home/icn-tech-06.svg"
                                                    alt="err"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="detail">
                                        <img src="./assets/img_new/home/icn-tech-07.svg" alt="err">
                                        <h4>KIỂM SOÁT HÀNH ĐỘNG</h4>
                                        <p>Tránh thương tích khi thực hiện các hành vi gây mất an toàn, cảnh báo trong
                                            trường hợp khẩn cấp</p>
                                        <div class="c-more-info">
                                            <a href="#">Xem thêm<img src="./assets/img_new/home/icn-tech-06.svg"
                                                    alt="err"></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="box">
                                    <div class="detail">
                                        <img src="./assets/img_new/home/icn-tech-03.svg" alt="err">
                                        <h4>KIỂM SOÁT ĐỒ<br> BẢO HỘ CÁ NHÂN</h4>
                                        <p>Phát hiện và cảnh báo thiếu đồ bảo hộ cá nhân như mũ bảo hộ, găng tay, mặt nạ và
                                            các trang thiết bị bảo hộ cá nhân khác.</p>
                                        <div class="c-more-info">
                                            <a href="#">Xem thêm<img src="./assets/img_new/home/icn-tech-06.svg"
                                                    alt="err"></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="box">
                                    <div class="detail">
                                        <img src="./assets/img_new/home/icn-tech-04.svg" alt="err">
                                        <h4>KIỂM SOÁT VỆ SINH <br>MẶT SÀN</h4>
                                        <p>Tai nạn do mặt sàn lộn xộn, không sạch sẽ thường xảy ra, và có thể ngăn chặn
                                            100%. Phát hiện sớm các nguy cơ có thể giảm tai nạn và thương tích.</p>
                                        <div class="c-more-info">
                                            <a href="#">Xem thêm<img src="./assets/img_new/home/icn-tech-06.svg"
                                                    alt="err"></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="box">
                                    <div class="detail">
                                        <img src="./assets/img_new/home/icn-tech-05.svg" alt="err">
                                        <h4>PHÁT HIỆN KHÓI <br>VÀ BÁO CHÁY</h4>
                                        <p>Phát hiện khói và nguy cơ cháy nổ tại các khu vực được trang bị camera giám sát.
                                        </p>
                                        <div class="c-more-info">
                                            <a href="#">Xem thêm<img src="./assets/img_new/home/icn-tech-06.svg"
                                                    alt="err"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-home__safety">
                        <div class="l-container">
                            <div class="c-title">
                                <img src="./assets/img_new/home/icn-deco-tech-02.svg" alt="err">
                                <h2>Safety Hazards</h2>
                                <img src="./assets/img_new/home/icn-deco-tech-01.svg" alt="err">
                            </div>
                            <div class="p-home__safety__content">
                                <div class="box">
                                    <div>
                                        <img src="./assets/img_new/home/icn-safety-01.svg" alt="err"
                                            class="item-pc">
                                        <img src="./assets/img_new/home/icn-safety-sp-01.svg" alt="err"
                                            class="item-sp">
                                    </div>
                                    <p>Slips trips & fall</p>
                                </div>
                                <div class="box">
                                    <div>
                                        <img src="./assets/img_new/home/icn-safety-02.svg" alt="err"
                                            class="item-pc">
                                        <img src="./assets/img_new/home/icn-safety-sp-02.svg" alt="err"
                                            class="item-sp">
                                    </div>
                                    <p>Electrical Hazards</p>
                                </div>
                                <div class="box">
                                    <div>
                                        <img src="./assets/img_new/home/icn-safety-03.svg" alt="err"
                                            class="item-pc">
                                        <img src="./assets/img_new/home/icn-safety-sp-03.svg" alt="err"
                                            class="item-sp">
                                    </div>
                                    <p>Chemical Handing</p>
                                </div>
                                <div class="box">
                                    <div>
                                        <img src="./assets/img_new/home/icn-safety-04.svg" alt="err"
                                            class="item-pc">
                                        <img src="./assets/img_new/home/icn-safety-sp-04.svg" alt="err"
                                            class="item-sp">
                                    </div>
                                    <p>Worker Machine <br>Interaction</p>
                                </div>
                                <div class="box">
                                    <div>
                                        <img src="./assets/img_new/home/icn-safety-05.svg" alt="err"
                                            class="item-pc">
                                        <img src="./assets/img_new/home/icn-safety-sp-05.svg" alt="err"
                                            class="item-sp">
                                    </div>
                                    <p>Smock & Fire</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-home__blog">
                        <div class="l-container">
                            <h2>BLOG</h2>
                            <div class="p-home__blog__content">
                                <div class="p-home__blog__content__left">
                                    <div href="#" class="box">
                                        <img src="./assets/img_new/home/img-blog-01.png" alt="err">
                                        <h4>Với AIoT, các hệ thống và thiết bị có khả năng học <br class="item-pc">hỏi và
                                            tương tác thông minh hơn.</h4>
                                        <ul>
                                            <li>News / Công nghệ</li>
                                            <li>11/04/2023</li>
                                        </ul>
                                        <p>Trong một hệ thống nhà thông minh, AIoT có thể tự động điều khiển ánh sáng, nhiệt
                                            độ, bảo mật và các thiết bị khác dựa trên các dữ liệu và mô hình học của nó.</p>
                                        <a href="">Xem thêm</a>
                                    </div>
                                </div>
                                <div class="p-home__blog__content__right">
                                    <div class="box">
                                        <a href="#">
                                            <img src="./assets/img_new/home/img-blog-02.jpg" alt="err">
                                            <div>

                                                <h4>Công nghệ AIOT trong thời cách mạng 4.0</h4>
                                                <ul>
                                                    <li>News / Công nghệ</li>
                                                    <li>11/04/2023</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="box">
                                        <a href="#">
                                            <img src="./assets/img_new/home/img-blog-02.jpg" alt="err">
                                            <div>

                                                <h4>Sự kết hợp giữa Trí tuệ nhân tạo và Internet of Things</h4>
                                                <ul>
                                                    <li>News / Công nghệ</li>
                                                    <li>11/04/2023</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="box">
                                        <a href="#">
                                            <img src="./assets/img_new/home/img-blog-02.jpg" alt="err">
                                            <div>

                                                <h4>TDL Holding hợp tác TCOM COMPORATION</h4>
                                                <ul>
                                                    <li>News / Công nghệ</li>
                                                    <li>11/04/2023</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="box">
                                        <a href="#">
                                            <img src="./assets/img_new/home/img-blog-02.jpg" alt="err">
                                            <div>
                                                <h4>Áp dụng công nghệ cao trong an toàn lao động</h4>
                                                <ul>
                                                    <li>News / Công nghệ</li>
                                                    <li>11/04/2023</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end main content -->
        </x-slot>
    </x-card-default>
@endsection

@push('add-js')
@endpush
