@extends('index')

@section('content')
    <main>

        <!-- =======================
        Page Banner START -->
        <section class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bg-light p-4 text-center rounded-3">
                            <h1 class="m-0 fs-2">لیست نسخه 2</h1>
                            <!-- Breadcrumb -->
                            <div class="d-flex justify-content-center">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb breadcrumb-dots mb-0">
                                        <li class="breadcrumb-item"><a href="#">صفحه اصلی</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">لیست نسخه 2</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
        Page Banner END -->

        <!-- =======================
        Page content START -->
        <section class="pt-0">
            <div class="container">

                <!-- Filter bar START -->
                <form class="bg-light border p-4 rounded-3 my-4 z-index-9 position-relative">
                    <div class="row g-3">
                        <!-- Input -->
                        <div class="col-xl-3">
                            <input class="form-control me-1" type="search" placeholder="جستجو براساس کلمه کلیدی">
                        </div>

                        <!-- Select item -->
                        <div class="col-xl-8">
                            <div class="row g-3">
                                <!-- Select items -->
                                <div class="col-sm-6 col-md-3 pb-2 pb-md-0">
                                    <select class="form-select form-select-sm js-choice" aria-label=".form-select-sm example">
                                        <option value="">دسته بندی ها</option>
                                        <option>همه</option>
                                        <option>طراحی وب</option>
                                        <option>هنر</option>
                                        <option>حسابداری</option>
                                        <option>داده کاوی</option>
                                        <option>مالی</option>
                                        <option>شبکه</option>
                                        <option>عکاسی</option>
                                        <option>نوشتاری</option>
                                        <option>برنامه نویسی</option>
                                    </select>
                                </div>

                                <!-- Search item -->
                                <div class="col-sm-6 col-md-3 pb-2 pb-md-0">
                                    <select class="form-select form-select-sm js-choice" aria-label=".form-select-sm example">
                                        <option value="">قیمت</option>
                                        <option>همه</option>
                                        <option>رایگان</option>
                                        <option>خریدنی</option>
                                    </select>
                                </div>

                                <!-- Search item -->
                                <div class="col-sm-6 col-md-3 pb-2 pb-md-0">
                                    <select class="form-select form-select-sm js-choice" aria-label=".form-select-sm example">
                                        <option value="">مهارت</option>
                                        <option>همه سطح</option>
                                        <option>مبتدی</option>
                                        <option>مقدماتی</option>
                                        <option>پیشرفته</option>
                                    </select>
                                </div>

                                <!-- Search item -->
                                <div class="col-sm-6 col-md-3 pb-2 pb-md-0">
                                    <select class="form-select form-select-sm js-choice" aria-label=".form-select-sm example">
                                        <option value="">زبان</option>
                                        <option>انگلیسی</option>
                                        <option>فرانسه</option>
                                        <option>روسیه</option>
                                        <option>هندی</option>
                                        <option>آلمان</option>
                                        <option>اسپانیا</option>
                                    </select>
                                </div>
                            </div> <!-- Row END -->
                        </div>
                        <!-- Button -->
                        <div class="col-xl-1">
                            <button type="button" class="btn btn-primary mb-0 rounded z-index-1 w-100"><i class="fas fa-search"></i></button>
                        </div>
                    </div> <!-- Row END -->
                </form>
                <!-- Filter bar END -->

                <div class="row mt-3">
                    <!-- Main content START -->
                    <div class="col-12">

                        <!-- Course Grid START -->
                        <div class="row g-4">

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <img src="assets/images/courses/4by3/08.jpg" class="card-img-top" alt="course image">
                                    <!-- Card body -->
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <a href="#" class="badge bg-purple bg-opacity-10 text-purple">همه سطح</a>
                                            <a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title fw-normal"
                                        ><a href="{{ route('single_course' , 'اموزشـSketch') }}">

                                                آموزش Sketch</a>
                                        </h5>
                                        <!-- Rating star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">4.0/5.0</li>
                                        </ul>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>12دقیقه</span>
                                            <span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>15 ویدیو</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <img src="assets/images/courses/4by3/02.jpg" class="card-img-top" alt="course image">
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <a href="#" class="badge bg-success bg-opacity-10 text-success">مبتدی</a>
                                            <a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title fw-normal"><a href="#">آموزش Photoshop</a></h5>
                                        <!-- Rating star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
                                        </ul>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>9ساعت</span>
                                            <span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>65 ویدیو</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <img src="assets/images/courses/4by3/03.jpg" class="card-img-top" alt="course image">
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <a href="#" class="badge bg-success bg-opacity-10 text-success">مبتدی</a>
                                            <a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title fw-normal"><a href="#">آموزش Figma</a></h5>
                                        <!-- Rating star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
                                        </ul>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>5دقیقه</span>
                                            <span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>32 ویدیو</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <img src="assets/images/courses/4by3/07.jpg" class="card-img-top" alt="course image">
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <a href="#" class="badge bg-success bg-opacity-10 text-success">مبتدی</a>
                                            <a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title fw-normal"><a href="#">آموزش React-Native</a></h5>
                                        <!-- Rating star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">4.0/5.0</li>
                                        </ul>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>18دقیقه</span>
                                            <span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>99 ویدیو</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <img src="assets/images/courses/4by3/11.jpg" class="card-img-top" alt="course image">
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <a href="#" class="badge bg-purple bg-opacity-10 text-purple">همه سطح</a>
                                            <a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title fw-normal"><a href="#">آموزش HTML</a></h5>
                                        <!-- Rating star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">4.0/5.0</li>
                                        </ul>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>15دقیقه</span>
                                            <span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>68 ویدیو</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <img src="assets/images/courses/4by3/12.jpg" class="card-img-top" alt="course image">
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <a href="#" class="badge bg-success bg-opacity-10 text-success">مبتدی</a>
                                            <a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title fw-normal"><a href="#">آموزش CSS</a></h5>
                                        <!-- Rating star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
                                        </ul>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>36دقیقه</span>
                                            <span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>72 ویدیو</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <img src="assets/images/courses/4by3/05.jpg" class="card-img-top" alt="course image">
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <a href="#" class="badge bg-success bg-opacity-10 text-success">مبتدی</a>
                                            <a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title fw-normal"><a href="#">آموزش Python</a></h5>
                                        <!-- Rating star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
                                        </ul>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>10ساعت</span>
                                            <span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>26 ویدیو</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <img src="assets/images/courses/4by3/06.jpg" class="card-img-top" alt="course image">
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <a href="#" class="badge bg-info bg-opacity-10 text-info">مقدماتی</a>
                                            <a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title fw-normal"><a href="#">آموزش Angular</a></h5>
                                        <!-- Rating star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
                                        </ul>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>9ساعت</span>
                                            <span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>42 ویدیو</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <img src="assets/images/courses/4by3/10.jpg" class="card-img-top" alt="course image">
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <a href="#" class="badge bg-info bg-opacity-10 text-info">مقدماتی</a>
                                            <a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title fw-normal"><a href="#">آموزش Bootstrap</a></h5>
                                        <!-- Rating star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
                                        </ul>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>25دقیقه</span>
                                            <span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>38 ویدیو</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <img src="assets/images/courses/4by3/13.jpg" class="card-img-top" alt="course image">
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <a href="#" class="badge bg-success bg-opacity-10 text-success">مبتدی</a>
                                            <a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title fw-normal"><a href="#">آموزش PHP</a></h5>
                                        <!-- Rating star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">4.0/5.0</li>
                                        </ul>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>21ساعت</span>
                                            <span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>30 ویدیو</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <img src="assets/images/courses/4by3/01.jpg" class="card-img-top" alt="course image">
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <a href="#" class="badge bg-success bg-opacity-10 text-success">مبتدی</a>
                                            <a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title fw-normal"><a href="#">آموزش Laravel</a></h5>
                                        <!-- Rating star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
                                        </ul>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between">
                                            <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>6ساعت</span>
                                            <span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>82 ویدیو</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                            <!-- Card item START -->
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card shadow h-100">
                                    <!-- Image -->
                                    <img src="assets/images/courses/4by3/04.jpg" class="card-img-top" alt="course image">
                                    <div class="card-body pb-0">
                                        <!-- Badge and favorite -->
                                        <div class="d-flex justify-content-between mb-2">
                                            <a href="#" class="badge bg-purple bg-opacity-10 text-purple">همه سطح</a>
                                            <a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
                                        </div>
                                        <!-- Title -->
                                        <h5 class="card-title fw-normal"><a href="#">آموزش Invision</a></h5>
                                        <!-- Rating star -->
                                        <ul class="list-inline mb-0">
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
                                            <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                                            <li class="list-inline-item ms-2 h6 fw-light mb-0">3.5/5.0</li>
                                        </ul>
                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer pt-0 pb-3">
                                        <hr>
                                        <div class="d-flex justify-content-between mt-2">
                                            <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>6ساعت</span>
                                            <span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>82 ویدیو</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->

                        </div>
                        <!-- Course Grid END -->

                        <!-- Pagination START -->
                        <div class="col-12">
                            <nav class="mt-4 d-flex justify-content-center" aria-label="navigation">
                                <ul class="pagination pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
                                    <li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-double-right"></i></a></li>
                                    <li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item mb-0"><a class="page-link" href="#">..</a></li>
                                    <li class="page-item mb-0"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Pagination END -->
                    </div>
                    <!-- Main content END -->
                </div><!-- Row END -->
            </div>
        </section>
        <!-- =======================
        Page content END -->

        <!-- =======================
        Newsletter START -->
        <section class="pt-0">
            <div class="container position-relative overflow-hidden">
                <!-- SVG decoration -->
                <figure class="position-absolute top-50 start-50 translate-middle ms-3">
                    <svg>
                        <path class="fill-white opacity-2" d="m496 22.999c0 10.493-8.506 18.999-18.999 18.999s-19-8.506-19-18.999 8.507-18.999 19-18.999 18.999 8.506 18.999 18.999z"/>
                        <path class="fill-white opacity-2" d="m775 102.5c0 5.799-4.701 10.5-10.5 10.5-5.798 0-10.499-4.701-10.499-10.5 0-5.798 4.701-10.499 10.499-10.499 5.799 0 10.5 4.701 10.5 10.499z"/>
                        <path class="fill-white opacity-2" d="m192 102c0 6.626-5.373 11.999-12 11.999s-11.999-5.373-11.999-11.999c0-6.628 5.372-12 11.999-12s12 5.372 12 12z"/>
                        <path class="fill-white opacity-2" d="m20.499 10.25c0 5.66-4.589 10.249-10.25 10.249-5.66 0-10.249-4.589-10.249-10.249-0-5.661 4.589-10.25 10.249-10.25 5.661-0 10.25 4.589 10.25 10.25z"/>
                    </svg>
                </figure>
                <!-- Svg decoration -->
                <figure class="position-absolute bottom-0 end-0 mb-5 d-none d-sm-block">
                    <svg class="rotate-130" width="258.7px" height="86.9px" viewBox="0 0 258.7 86.9">
                        <path stroke="white" fill="none" stroke-width="2" d="M0,7.2c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5 c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5s16-25.5,31.9-25.5"/>
                        <path stroke="white" fill="none" stroke-width="2" d="M0,57c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5 c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5s16-25.5,31.9-25.5"/>
                    </svg>
                </figure>

                <div class="bg-grad-blue p-3 p-sm-5 rounded-3">
                    <div class="row justify-content-center position-relative">
                        <!-- SVG decoration -->
                        <figure class="position-absolute top-50 start-0 translate-middle-y">
                            <svg width="141px" height="141px">
                                <path class="fill-white opacity-1" d="M140.520,70.258 C140.520,109.064 109.062,140.519 70.258,140.519 C31.454,140.519 -0.004,109.064 -0.004,70.258 C-0.004,31.455 31.454,-0.003 70.258,-0.003 C109.062,-0.003 140.520,31.455 140.520,70.258 Z"/>
                            </svg>
                        </figure>
                        <!-- Newsletter -->
                        <div class="col-12 position-relative my-2 my-sm-3">
                            <div class="row align-items-center">
                                <!-- Title -->
                                <div class="col-lg-6">
                                    <h3 class="text-white mb-3 mb-lg-0 ff-vb">دریافت جدیدترین به‌روزرسانی‌های دوره، در خبرنامه ما</h3>
                                </div>
                                <!-- Input item -->
                                <div class="col-lg-6 text-lg-end">
                                    <form class="bg-body rounded p-2">
                                        <div class="input-group">
                                            <input class="form-control border-0 me-1" type="email" placeholder="ایمیل">
                                            <button type="button" class="btn btn-dark mb-0 rounded">عضویت</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row END -->
                </div>
            </div>
        </section>
        <!-- =======================
        Newsletter END -->

    </main>

@endsection
