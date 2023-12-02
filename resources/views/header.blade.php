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
            @if(! auth()->guard('clients')->check())
                <div class="navbar-nav ms-2">
                    <a class="btn btn-sm btn-dark mb-0" href="{{route('login')}}"><i
                            class="bi bi-power me-2"></i>ورود</a>
                </div>
            @else
                @php
                    $client = auth()->guard('clients')->user();
                @endphp
                <div class="ms-xl-auto">
                    <ul class="navbar-nav flex-row align-items-center">
                        <li class="nav-item ms-3 dropdown">
                            <!-- Avatar -->
                            <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button"
                               data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                <img class="avatar-img rounded-circle"
                                     src="{{ $client->avatar ? Voyager::image($client->avatar) : asset('assets/images/avatar/main.webp')}}"
                                     alt="avatar">
                            </a>

                            <!-- Profile dropdown START -->
                            <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3"
                                aria-labelledby="profileDropdown">
                                <!-- Profile info -->
                                <li class="px-3 mb-3">
                                    <div class="d-flex align-items-center">
                                        <!-- Avatar -->
                                        <div class="avatar me-3">
                                            <img class="avatar-img rounded-circle shadow"
                                                 src="{{ $client->avatar ? Voyager::image($client->avatar) : asset('assets/images/avatar/main.webp')}}"
                                                 alt="avatar">
                                        </div>
                                        <div>
                                            <a class="h6" href="#">
                                                {{ $client->name }}
                                            </a>
                                            <p class="small m-0">
                                                {{ $client->email }}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <!-- Links -->
                                <li><a class="dropdown-item" href="{{ route('dashboard') }}"><i
                                            class="bi bi-person fa-fw me-2"></i>ویرایش</a>
                                </li>
                                {{--                                <li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>تنظیمات</a>--}}
                                {{--                                </li>--}}
                                {{--                                <li><a class="dropdown-item" href="#"><i--}}
                                {{--                                            class="bi bi-info-circle fa-fw me-2"></i>پشتیبانی</a></li>--}}
                                <li><a class="dropdown-item bg-danger-soft-hover" href="{{ route('logout') }}"><i
                                            class="bi bi-power fa-fw me-2"></i>خروج</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <!-- Dark mode options START -->
                                <li>
                                    <div
                                        class="bg-light dark-mode-switch theme-icon-active d-flex align-items-center p-1 rounded mt-2">
                                        <button type="button" class="btn btn-sm mb-0"
                                                data-bs-theme-value="light">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 fill="currentColor" class="bi bi-sun fa-fw mode-switch"
                                                 viewBox="0 0 16 16">
                                                <path
                                                    d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
                                                <use href="#"></use>
                                            </svg>
                                            روشن
                                        </button>
                                        <button type="button" class="btn btn-sm mb-0"
                                                data-bs-theme-value="dark">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 fill="currentColor" class="bi bi-moon-stars fa-fw mode-switch"
                                                 viewBox="0 0 16 16">
                                                <path
                                                    d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"/>
                                                <path
                                                    d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
                                                <use href="#"></use>
                                            </svg>
                                            تیره
                                        </button>
                                        <button type="button" class="btn btn-sm mb-0 active"
                                                data-bs-theme-value="auto">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 fill="currentColor" class="bi bi-circle-half fa-fw mode-switch"
                                                 viewBox="0 0 16 16">
                                                <path
                                                    d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
                                                <use href="#"></use>
                                            </svg>
                                            خودکار
                                        </button>
                                    </div>
                                </li>
                                <!-- Dark mode options END-->
                            </ul>
                            <!-- Profile dropdown END -->
                        </li>
                    </ul>
                </div>

            @endif

        </div>
    </nav>
    <!-- Logo Nav END -->
</header>
