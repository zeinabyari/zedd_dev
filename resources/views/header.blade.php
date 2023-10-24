<header class="navbar-light navbar-sticky">
    <!-- Logo Nav START -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo START -->
            <a class="navbar-brand me-0" href="{{route('home')}}">
                <img class="light-mode-item navbar-brand-item" src="{{ Voyager::image(setting('site.logo')) }}"
                     alt="logo">
                <img class="dark-mode-item navbar-brand-item" src="{{Voyager::image(setting('site.logo'))}}"
                     alt="logo">
            </a>
            <!-- Logo END -->

            <!-- Responsive navbar toggler -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
				<span class="navbar-toggler-animation">
					<span></span>
					<span></span>
					<span></span>
				</span>
            </button>

            <!-- Main navbar START -->
            <div class="navbar-collapse collapse" id="navbarCollapse">

                <!-- Nav Search END -->
                <ul class="navbar-nav navbar-nav-scroll mx-auto">

                    <!-- Nav item 1 Demos -->
                    <li class="nav-item dropdown"><a class="nav-link" href="{{route('home')}}">صفحه اصلی</a></li>


                    <!-- Nav item 2 Pages -->
                    {{--                    <li class="nav-item dropdown">--}}
                    {{--                        <a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown"--}}
                    {{--                           aria-haspopup="true" aria-expanded="false">صفحات</a>--}}
                    {{--                        <ul class="dropdown-menu" aria-labelledby="pagesMenu">--}}
                    {{--                            <!-- Dropdown submenu -->--}}
                    {{--                            <li class="dropdown-submenu dropend">--}}
                    {{--                                <a class="dropdown-item dropdown-toggle" href="#">دوره ها</a>--}}
                    {{--                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">--}}
                    {{--                                    <li><a class="dropdown-item" href="course-categories.html">دسته بندی</a></li>--}}
                    {{--                                    <li>--}}
                    {{--                                        <hr class="dropdown-divider">--}}
                    {{--                                    </li>--}}
                    {{--                                    <li><a class="dropdown-item" href="course-grid.html">لیست نسخه 1</a></li>--}}
                    {{--                                    <li><a class="dropdown-item" href="course-grid-2.html">لیست نسخه 2</a></li>--}}
                    {{--                                    <li>--}}
                    {{--                                        <hr class="dropdown-divider">--}}
                    {{--                                    </li>--}}
                    {{--                                    <li><a class="dropdown-item" href="course-list.html">لیست نسخه 3</a></li>--}}
                    {{--                                    <li><a class="dropdown-item" href="course-list-2.html">لیست نسخه 4</a></li>--}}
                    {{--                                    <li>--}}
                    {{--                                        <hr class="dropdown-divider">--}}
                    {{--                                    </li>--}}
                    {{--                                    <li><a class="dropdown-item" href="course-detail.html">جزئیات نسخه 1</a></li>--}}
                    {{--                                    <li><a class="dropdown-item" href="course-detail-min.html">جزئیات نسخه 2</a></li>--}}
                    {{--                                    <li><a class="dropdown-item" href="course-detail-adv.html">جزئیات نسخه 3</a></li>--}}
                    {{--                                    <li><a class="dropdown-item" href="course-detail-module.html">جزئیات نسخه 4</a></li>--}}
                    {{--                                    <li><a class="dropdown-item" href="course-video-player.html">جزئیات نسخه 5</a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </li>--}}

                    {{--                            <!-- Dropdown submenu -->--}}
                    {{--                            <li class="dropdown-submenu dropend">--}}
                    {{--                                <a class="dropdown-item dropdown-toggle" href="#">سایر</a>--}}
                    {{--                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">--}}
                    {{--                                    <li><a class="dropdown-item" href="about.html">درباره ما</a></li>--}}
                    {{--                                    <li><a class="dropdown-item" href="contact-us.html">تماس با ما</a></li>--}}
                    {{--                                    <li><a class="dropdown-item" href="blog-grid.html">لیست وبلاگ 1</a></li>--}}
                    {{--                                    <li><a class="dropdown-item" href="blog-masonry.html">لیست وبلاگ 2</a></li>--}}
                    {{--                                    <li><a class="dropdown-item" href="blog-detail.html">جزئیات وبلاگ</a></li>--}}
                    {{--                                    <li><a class="dropdown-item" href="pricing.html">قیمت گذاری</a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </li>--}}
                    {{--                            <!-- Dropdown submenu -->--}}
                    {{--                            <li class="dropdown-submenu dropend">--}}
                    {{--                                <a class="dropdown-item dropdown-toggle" href="#">بنرها</a>--}}
                    {{--                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">--}}
                    {{--                                    <li><a class="dropdown-item" href="#">نسخه 1</a></li>--}}
                    {{--                                    <li><a class="dropdown-item" href="#">نسخه 2</a></li>--}}
                    {{--                                    <li><p class="dropdown-item mb-0">به زودی</p></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </li>--}}
                    {{--                            <li><a class="dropdown-item" href="instructor-list.html">لیست مدرس</a></li>--}}
                    {{--                            <li><a class="dropdown-item" href="instructor-single.html">جزئیات مدرس</a></li>--}}
                    {{--                            <li><a class="dropdown-item" href="become-instructor.html">مدرس شوید</a></li>--}}
                    {{--                            <li><a class="dropdown-item" href="abroad-single.html">مهاجرت مدرس</a></li>--}}
                    {{--                            <li><a class="dropdown-item" href="workshop-detail.html">خرید دوره</a></li>--}}
                    {{--                            <li><a class="dropdown-item" href="event-detail.html">رویدادها <span--}}
                    {{--                                        class="badge bg-success ms-2 smaller">جدید</span></a></li>--}}

                    {{--                            <!-- Dropdown submenu -->--}}
                    {{--                            <li class="dropdown-submenu dropend">--}}
                    {{--                                <a class="dropdown-item dropdown-toggle" href="#">فروشگاه</a>--}}
                    {{--                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">--}}
                    {{--                                    <li><a class="dropdown-item" href="shop.html">لیست دوره</a></li>--}}
                    {{--                                    <li><a class="dropdown-item" href="shop-product-detail.html">جزئیات دوره</a></li>--}}
                    {{--                                    <li><a class="dropdown-item" href="cart.html">سبد خرید</a></li>--}}
                    {{--                                    <li><a class="dropdown-item" href="checkout.html">تسویه حساب</a></li>--}}
                    {{--                                    <li><a class="dropdown-item" href="empty-cart.html">سبد خرید خالی</a></li>--}}
                    {{--                                    <li><a class="dropdown-item" href="wishlist.html">مورد علاقه ها</a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </li>--}}

                    {{--                            <!-- Dropdown submenu -->--}}
                    {{--                            <li class="dropdown-submenu dropend">--}}
                    {{--                                <a class="dropdown-item dropdown-toggle" href="#">پشتیبانی</a>--}}
                    {{--                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">--}}
                    {{--                                    <li><a class="dropdown-item" href="help-center.html">مرکز پشتیبانی</a></li>--}}
                    {{--                                    <li><a class="dropdown-item" href="help-center-detail.html">جزئیات</a></li>--}}
                    {{--                                    <li><a class="dropdown-item" href="faq.html">سوالات متداول</a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </li>--}}

                    {{--                            <!-- Dropdown submenu -->--}}
                    {{--                            <li class="dropdown-submenu dropend">--}}
                    {{--                                <a class="dropdown-item dropdown-toggle" href="#">احراز هویت</a>--}}
                    {{--                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">--}}
                    {{--                                    <li><a class="dropdown-item" href="sign-in.html">ورود</a></li>--}}
                    {{--                                    <li><a class="dropdown-item" href="sign-up.html">ثبت نام</a></li>--}}
                    {{--                                    <li><a class="dropdown-item" href="forgot-password.html">فراموشی رمز عبور</a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </li>--}}

                    {{--                            <!-- Dropdown submenu -->--}}
                    {{--                            <li class="dropdown-submenu dropend">--}}
                    {{--                                <a class="dropdown-item dropdown-toggle" href="#">فرم</a>--}}
                    {{--                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">--}}
                    {{--                                    <li><a class="dropdown-item" href="request-demo.html">درخواست دوره</a></li>--}}
                    {{--                                    <li><a class="dropdown-item" href="book-class.html">رزرو آنلاین</a></li>--}}
                    {{--                                    <li><a class="dropdown-item" href="request-access.html">دسترسی رایگان</a></li>--}}
                    {{--                                    <li><a class="dropdown-item" href="university-admission-form.html">پذیرش</a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </li>--}}

                    {{--                            <!-- Dropdown submenu -->--}}
                    {{--                            <li class="dropdown-submenu dropend">--}}
                    {{--                                <a class="dropdown-item dropdown-toggle" href="#">سایر</a>--}}
                    {{--                                <ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">--}}
                    {{--                                    <li><a class="dropdown-item" href="error-404.html">صفحه 404</a></li>--}}
                    {{--                                    <li><a class="dropdown-item" href="coming-soon.html">به زودی</a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </li>--}}

                    {{--                        </ul>--}}
                    {{--                    </li>--}}

                    <!-- Nav item 3 Pages -->
                    <li class="nav-item dropdown"><a class="nav-link" href="{{route('courses')}}">دوره های آموزشی</a>
                    </li>

                    <!-- Nav item 4 link-->
                    <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">تماس با ما</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('about')}}">درباره ما</a></li>
                </ul>
            </div>
            <!-- Main navbar END -->
            <div class="navbar-nav ms-2">
                <a class="btn btn-sm btn-dark mb-0" href="{{route('login')}}"><i class="bi bi-power me-2"></i>ورود</a>
            </div>

        </div>
    </nav>
    <!-- Logo Nav END -->
</header>
