<header class="navbar-light navbar-sticky">
    <!-- Nav START -->
    <nav class="navbar navbar-expand-xl z-index-9">
        <div class="container">
            <!-- Logo START -->
            <a class="navbar-brand" href="index.html">
                <img class="light-mode-item navbar-brand-item" src="{{asset('assets/images/logo.svg')}}" alt="logo">
                <img class="dark-mode-item navbar-brand-item" src="{{asset('assets/images/logo-light.svg')}}" alt="logo">
            </a>
            <!-- Logo END -->

            <!-- Responsive navbar toggler -->
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-animation">
					<span></span>
					<span></span>
					<span></span>
				</span>
            </button>

            <!-- Main navbar START -->
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <!-- Nav Search START -->
                <div class="col-xxl-6">
                    <div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
                        <div class="nav-item w-100">
                            <form class="rounded position-relative">
                                <input class="form-control pe-5 bg-secondary bg-opacity-10 border-0" type="search" placeholder="جستجو..." aria-label="Search">
                                <button class="btn btn-link bg-transparent px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="fas fa-search fs-6 text-primary"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Nav Search END -->

                <!-- Nav Main menu START -->
                <ul class="navbar-nav navbar-nav-scroll ms-auto">
                    <!-- Nav item 1 Demos -->
                    <li class="nav-item dropdown"><a class="nav-link" href="#">بزرگسالان</a></li>

                    <!-- Nav item 2 Eduport Business -->
                    <li class="nav-item dropdown"><a class="nav-link" href="#">نوجوانان</a></li>

                    <!-- Nav item 3 My learning -->
                    <li class="nav-item"><a class="nav-link" href="#">کودکان</a></li>
                </ul>
                <!-- Nav Main menu END -->
            </div>
            <!-- Main navbar END -->

            <!-- Profile and notification START -->
            <ul class="nav flex-row align-items-center list-unstyled ms-xl-auto">

                <!-- Wishlist START -->
                <li class="nav-item ms-0 ms-sm-2 d-none d-sm-block">
                    <a class="btn btn-light btn-round mb-0" href="#"> <i class="bi bi-heart fa-fw"></i></a>
                </li>
                <!-- Wishlist END -->

                <!-- Notification dropdown START -->
                <li class="nav-item ms-2 ms-sm-3 dropdown">
                    <!-- Notification button -->
                    <a class="btn btn-light btn-round mb-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                        <i class="bi bi-bell fa-fw"></i>
                    </a>
                    <!-- Notification dote -->
                    <span class="notif-badge animation-blink"></span>

                    <!-- Notification dropdown menu START -->
                    <div class="dropdown-menu dropdown-animation dropdown-menu-end dropdown-menu-size-md p-0 shadow-lg border-0">
                        <div class="card bg-transparent">
                            <div class="card-header bg-transparent border-bottom py-4 d-flex justify-content-between align-items-center">
                                <h6 class="m-0">پیام ها <span class="badge bg-danger bg-opacity-10 text-danger ms-2">2 خبر جدید</span></h6>
                                <a class="small" href="#">حذف همه</a>
                            </div>
                            <div class="card-body p-0">
                                <ul class="list-group list-unstyled list-group-flush">
                                    <!-- Notif item -->
                                    <li>
                                        <a href="#" class="list-group-item-action border-0 border-bottom d-flex p-3">
                                            <div class="me-3">
                                                <div class="avatar avatar-md">
                                                    <img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
                                                </div>
                                            </div>
                                            <div>
                                                <h6 class="mb-1">به روز رسانی نسخه 2.3 با موفقیت انجام شد</h6>
                                                <p class="small text-body m-0">چه خبر! با ویژگی های جدید آشنا شوید</p>
                                                <small class="text-body">5 دقیقه قبل</small>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Button -->
                            <div class="card-footer bg-transparent border-0 py-3 text-center position-relative">
                                <a href="#" class="stretched-link">مشاهده تمام فعالیت های ورودی</a>
                            </div>
                        </div>
                    </div>
                    <!-- Notification dropdown menu END -->
                </li>
                <!-- Notification dropdown END -->

                <!-- Profile dropdown START -->
                <li class="nav-item ms-3 dropdown">
                    <!-- Avatar -->
                    <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
                    </a>

                    <!-- Profile dropdown START -->
                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
                        <!-- Profile info -->
                        <li class="px-3 mb-3">
                            <div class="d-flex align-items-center">
                                <!-- Avatar -->
                                <div class="avatar me-3">
                                    <img class="avatar-img rounded-circle shadow" src="assets/images/avatar/01.jpg" alt="avatar">
                                </div>
                                <div>
                                    <a class="h6" href="#">الهام حسینی</a>
                                    <p class="small m-0">example@gmail.com</p>
                                </div>
                            </div>
                        </li>
                        <!-- Links -->
                        <li><a class="dropdown-item" href="#"><i class="bi bi-person fa-fw me-2"></i>ویرایش</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>تنظیمات</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>پشتیبانی</a></li>
                        <li><a class="dropdown-item bg-danger-soft-hover" href="#"><i class="bi bi-power fa-fw me-2"></i>خروج</a></li>
                        <li> <hr class="dropdown-divider"></li>
                        <!-- Dark mode options START -->
                        <li>
                            <div class="bg-light dark-mode-switch theme-icon-active d-flex align-items-center p-1 rounded mt-2">
                                <button type="button" class="btn btn-sm mb-0" data-bs-theme-value="light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sun fa-fw mode-switch" viewBox="0 0 16 16">
                                        <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
                                        <use href="#"></use>
                                    </svg> روشن
                                </button>
                                <button type="button" class="btn btn-sm mb-0" data-bs-theme-value="dark">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars fa-fw mode-switch" viewBox="0 0 16 16">
                                        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"/>
                                        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
                                        <use href="#"></use>
                                    </svg> تیره
                                </button>
                                <button type="button" class="btn btn-sm mb-0 active" data-bs-theme-value="auto">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch" viewBox="0 0 16 16">
                                        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
                                        <use href="#"></use>
                                    </svg> خودکار
                                </button>
                            </div>
                        </li>
                        <!-- Dark mode options END-->
                    </ul>
                    <!-- Profile dropdown END -->
                </li>
            </ul>
            <!-- Profile and notification END -->
        </div>
    </nav>
    <!-- Nav END -->

    <hr class="my-0">

    <!-- Category Nav link START -->
    <nav class="navbar navbar-expand-xl nav-category">
        <div class="container px-0">

            <!-- Responsive navbar toggler -->
            <button class="navbar-toggler m-auto w-100" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse2" aria-controls="navbarCollapse2" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-grid-fill"></i> دسته بندی
            </button>

            <!-- Main navbar START -->
            <div class="navbar-collapse w-100 collapse" id="navbarCollapse2">
                <!-- Nav Main menu START -->
                <ul class="navbar-nav navbar-nav-scroll mx-auto">
                    <!-- Nav item 1 link -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="demoMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">برنامه نویسی</a>
                        <ul class="dropdown-menu" aria-labelledby="demoMenu">
                            <li> <a class="dropdown-item" href="#">طراحی وب</a> </li>
                            <li> <a class="dropdown-item" href="#">بانک های اطلاعاتی</a> </li>
                            <li> <a class="dropdown-item" href="#">برنامه نویسی موبایل</a> </li>
                            <li> <a class="dropdown-item" href="#">برنامه نویسی وب</a> </li>
                            <li> <a class="dropdown-item" href="#">سیستم عامل</a> </li>
                            <li> <a class="dropdown-item" href="#">مهندسی نرم افزار</a> </li>
                            <li> <a class="dropdown-item" href="#">مدیریت پروژه</a> </li>
                        </ul>
                    </li>

                    <!-- Navmitem 2 link -->
                    <li class="nav-item"><a class="nav-link" href="#">حسابداری مالی</a></li>

                    <!-- Nav item 3 link -->
                    <li class="nav-item"><a class="nav-link" href="#">مهندسی نرم افزار</a></li>

                    <!-- Nav item 4 link-->
                    <li class="nav-item"><a class="nav-link" href="#">فناوری و اطلاعات</a></li>

                    <!-- Nav item 5 link-->
                    <li class="nav-item"><a class="nav-link" href="#">نگارش آکادمیک</a></li>

                </ul>
            </div>
            <!-- Main navbar END -->
        </div>
    </nav>
    <!-- Category Nav link END -->

</header>
