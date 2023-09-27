 <!-- header -->
 <header class="l-header">
    <!-- header desktop -->
    <div class="l-header-desktop">
        <div class="l-container-fluid">
            <div class="l-row">
                <div class="l-col-auto">
                    <a href="#" class="l-header-desktop__logo">
                        <img src="./assets/img/common/fig_logo.svg" alt="">
                    </a>
                </div>
                <div class="l-col l-header-desktop__right">
                    <div class="l-header-desktop__right__inner">
                        <div class="l-header-desktop__nav">
                            <div class="l-header-desktop__menu">
                                <ul>
                                    <li class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}">
                                        <a href="{{ route('home') }}">Trang chủ</a>
                                    </li>
                                    <li class="has-sub">
                                        <a href="javascript:void(0)">Công nghệ</a>
                                        <div class="l-header-desktop__menu__dropdown-menu tech">
                                            <div class="bg-trans"></div>
                                            <div class="title">
                                                <h5>
                                                    Nền tảng toàn diện được <br>vận hành bởi trí tuệ nhân <br>tạo tiên tiến
                                                </h5>
                                                <p>
                                                    Triển khai công nghệ nhận diện tại nhà máy, <br>phát hiện và cảnh báo sớm các nguy cơ, từ đó <br>có thể giảm thiểu tai nạn lao động.
                                                </p>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="#"><img src="./assets/img_new/home/icn-tech-01.svg" alt="err">Kiểm soát khu vực</a>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="./assets/img_new/home/icn-tech-03.svg" alt="err">Kiểm soát đồ bảo hộ cá nhân</a>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="./assets/img_new/home/icn-tech-02.svg" alt="err">Kiểm soát phương tiện</a>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="./assets/img_new/home/icn-tech-04.svg" alt="err">Kiểm soát vệ sinh mặt sàn</a>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="./assets/img_new/home/icn-tech-07.svg" alt="err">Kiểm soát hành động</a>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="./assets/img_new/home/icn-tech-05.svg" alt="err">Phát hiện khói và báo cháy</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-sub">
                                        <a href="javascript:void(0)">Tích hợp</a>
                                        <div class="l-header-desktop__menu__dropdown-menu">
                                            <ul>
                                                <li>
                                                    <a href="#"><img src="./assets/img_new/common/icn-integrate-02.svg" alt="err">Device</a>
                                                </li>
                                                <li>
                                                    <a href="#"><img src="./assets/img_new/common/icn-integrate-01.svg" alt="err">Tích hợp</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="https://eyefire.vn/news">Tin tức</a></li>
                                    <li class="{{ Route::currentRouteName() === 'contact' ? 'active' : '' }}">
                                        <a href="{{ route('contact') }}">Liên hệ</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="l-header-desktop__group-right">
                                <div class="l-header-desktop__languages">
                                    <a href="#">
                                        <img src="./assets/img_new/common/icn_vn.svg" alt="err">
                                        <span>VN</span>
                                        <img src="./assets/img_new/common/icn_down.svg" alt="err">
                                    </a>
                                    <div class="l-header-desktop__languages__dropdown">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img src="./assets/img_new/common/icn_vn.svg" alt="err">
                                                    <span>Viet Nam</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img src="./assets/img_new/common/icn-jp.svg" alt="err">
                                                    <span>Japan</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header desktop -->

    <!-- header mobile -->
    <div class="l-header-mobile">
        <div class="l-container">
            <div class="l-row">
                <div class="l-col-auto l-header-mobile__left">
                    <a href="{{ route('home') }}" class="l-header-mobile__logo">
                        <img src="./assets/img_new/common/logo-heder-sp.svg" alt="">
                    </a>
                </div>
                <div class="l-col l-header-mobile__right">
                    <a href="#" class="l-header-mobile__menu js-open-menu">
                        <img src="./assets/img_new/common/icn-menu-sp.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="l-header-mobile__canvas">
            <div class="l-container">
                <div class="l-row">
                    <div class="l-col-auto l-header-mobile__left">
                        <a href="#" class="l-header-mobile__logo">
                            <img src="./assets/img/common/fig_logo_sp.svg" alt="">
                        </a>
                    </div>
                    <div class="l-col l-header-mobile__right">
                        <a href="#" class="l-header-mobile__menu js-close-menu">
                            <img src="./assets/img_new/common/icn_close.svg" alt="err">
                        </a>
                    </div>
                </div>
                <div class="l-header-mobile__canvas__inner">
                    <div class="l-header-mobile__canvas__menu">
                        <ul>
                            <li class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}">
                                <a href="{{ route('home') }}">Trang chủ</a>
                            </li>
                            <li class="has-sub">
                                <a href="javascript:void(0)" class="dropdown-menu-sp">Công nghệ</a>
                                <div class="l-header-desktop__menu__dropdown-menu desktop">
                                    <ul>
                                        <li>
                                            <a href="#"><img src="./assets/img_new/home/icn-tech-01.svg" alt="err">Kiểm soát khu vực</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="./assets/img_new/home/icn-tech-03.svg" alt="err">Kiểm soát đồ bảo hộ cá nhân</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="./assets/img_new/home/icn-tech-02.svg" alt="err">Kiểm soát phương tiện</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="./assets/img_new/home/icn-tech-04.svg" alt="err">Kiểm soát vệ sinh mặt sàn</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="./assets/img_new/home/icn-tech-07.svg" alt="err">Kiểm soát hành động</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="./assets/img_new/home/icn-tech-05.svg" alt="err">Phát hiện khói và báo cháy</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="has-sub">
                                <a href="#" class="dropdown-menu-sp">Tích hợp</a>
                                <div class="l-header-desktop__menu__dropdown-menu desktop">
                                    <ul>
                                        <li>
                                            <a href="#"><img src="./assets/img_new/common/icn-integrate-02.svg" alt="err">Device</a>
                                        </li>
                                        <li>
                                            <a href="#"><img src="./assets/img_new/common/icn-integrate-01.svg" alt="err">Tích hợp</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="https://eyefire.vn/news">Tin tức</a></li>
                            <li class="{{ Route::currentRouteName() === 'contact' ? 'active' : '' }}">
                                <a href="#">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                    <div class="l-header-mobile__canvas__languages">
                        <a href="#" class="js-open-dropdown-languages">
                            <img src="./assets/img/common/icn_vn.svg" alt="">
                            <span>VN</span>
                            <img src="./assets/img/common/icn_down-sp.svg" alt="">
                        </a>
                        <div class="l-header-mobile__canvas__languages__dropdown">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="./assets/img/common/icn_vn_small.svg" alt="">
                                        <span>VN</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="./assets/img/common/icn_ja_small.svg" alt="">
                                        <span>JA</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header mobile -->
</header>
<!-- end header -->
