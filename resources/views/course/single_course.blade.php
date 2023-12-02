@extends('index')
@section('content')
    <main>
        <section class="pt-3 pt-xl-5">
            <div class="container" data-sticky-container>
                <div class="row g-4">
                    <!-- Main content START -->
                    <div class="col-xl-8">

                        <div class="row g-4">
                            <!-- Title START -->
                            <div class="col-12">
                                <!-- Title -->
                                <h2 class="fs-3">{{ $course->title }}</h2>
                                <p>{!!  $course->description !!}</p>
                            </div>
                            <!-- Title END -->

                            <!-- Image and video -->
                            <div class="col-12 position-relative">
                                <div class="video-player rounded-3">
                                    @if($course->video)
                                        <video controls crossorigin="anonymous" playsinline
                                               poster="{{ Voyager::image($course->video_poster) }}">

                                            <source src="{{Storage::url($course->video) }}" type="video/mp4"
                                                    size="720">

                                            <!-- Caption files -->
                                            {{--                                        <track kind="captions" label="English" srclang="en"--}}
                                            {{--                                               src="{{ asset('assets/images/videos/en.vtt') }}" default>--}}
                                            {{--                                        <track kind="captions" label="French" srclang="fr"--}}
                                            {{--                                               src="{{ asset('assets/images/videos/fr.vtt') }}">--}}
                                        </video>
                                    @endif
                                </div>
                            </div>

                            <!-- About course START -->
                            <div class="col-12">
                                <div class="card border">
                                    <!-- Card header START -->
                                    <div class="card-header border-bottom">
                                        <h3 class="mb-0 fs-5">توضیحات دوره</h3>
                                    </div>
                                    <!-- Card header END -->

                                    <!-- Card body START -->
                                    <div class="card-body">
                                        {!!  $course->description2 !!}

                                    </div>
                                    <!-- Card body START -->
                                </div>
                            </div>
                            <!-- About course END -->

                            <!-- Curriculum START -->
                            <div class="col-12">
                                <div class="card border rounded-3">
                                    <!-- Card header START -->
                                    <div class="card-header border-bottom">
                                        <h3 class="mb-0 fs-5">جلسات دوره</h3>
                                    </div>
                                    <!-- Card header END -->

                                    <!-- Card body START -->
                                    <div class="card-body">
                                        <div class="row g-5">
                                            <!-- Lecture item START -->
                                            <div class="col-12">
                                                <!-- Curriculum item -->

                                                @foreach($course->lesson as $lesson)
                                                    <div
                                                        class="d-sm-flex justify-content-sm-between align-items-center">
                                                        <div class="d-flex">
                                                            <a href="{{ $lesson->video }}"
                                                               class="btn btn-danger-soft btn-round mb-0"><i
                                                                    class="fas fa-play"></i></a>
                                                            <div class="ms-2 ms-sm-3 mt-1 mt-sm-0">
                                                                <h6 class="mb-0 fw-normal">{{ $lesson->title }}</h6>
                                                                <p class="mb-2 mb-sm-0 small">{{ $lesson->hour }}</p>
                                                                <p class="mb-2 mb-sm-0 small">{!! $lesson->description !!}</p>
                                                            </div>
                                                        </div>
                                                        <!-- Button -->
                                                        <a href="{{ $lesson->video }}"
                                                           class="btn btn-sm btn-success mb-0">پخش</a>
                                                    </div>
                                                    <!-- Divider -->
                                                    <hr>
                                                @endforeach
                                            </div>


                                        </div>
                                    </div>
                                    <!-- Card body START -->
                                </div>
                            </div>
                            <!-- Curriculum END -->

                            <!-- FAQs START -->
                        </div>
                    </div>
                    <!-- Main content END -->

                    <!-- Right sidebar START -->
                    <div class="col-xl-4">
                        <div data-sticky data-margin-top="80" data-sticky-for="768">
                            <div class="row g-4">
                                <div class="col-md-6 col-xl-12">
                                    <!-- Course info START -->
                                    <div class="card card-body border p-4">
                                        <!-- Price and share button -->
                                        <div class="d-flex justify-content-between align-items-center">
                                            <!-- Price -->
                                            <h3 class="text-success mb-0">رایگان</h3>
                                            <!-- Share button with dropdown -->
                                            <div class="dropdown">
                                                <a href="#" class="btn btn-sm btn-light rounded mb-0 small"
                                                   role="button" id="dropdownShare" data-bs-toggle="dropdown"
                                                   aria-expanded="false">
                                                    <i class="fas fa-fw fa-share-alt"></i>
                                                </a>
                                                <!-- dropdown button -->
                                                <ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded"
                                                    aria-labelledby="dropdownShare">
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fab fa-twitter-square me-2"></i>Twitter</a></li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fab fa-facebook-square me-2"></i>Facebook</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fab fa-linkedin me-2"></i>LinkedIn</a></li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="fas fa-copy me-2"></i>کپی لینک</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Buttons -->
                                        {{--                                        <div class="mt-3 d-grid">--}}
                                        {{--                                            <a href="#" class="btn btn-outline-primary">افزودن به سبد</a>--}}
                                        {{--                                            <a href="#" class="btn btn-success">خرید آنلاین</a>--}}
                                        {{--                                        </div>--}}
                                        <!-- Divider -->
                                        <hr>

                                        <!-- Title -->
                                        <h5 class="mb-3 fs-5">مشخصات دوره</h5>
                                        <ul class="list-group list-group-borderless">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <span class="h6 fw-light mb-0"><i
                                                        class="fas fa-fw fa-book-open text-primary"></i>تعداد ویدیو ها</span>
                                                <span>
                                                    {{ $course->lesson_count }}
                                                </span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <span class="h6 fw-light mb-0"><i
                                                        class="fas fa-fw fa-clock text-primary"></i>مدت زمان دوره</span>
                                                <span>
                                                    {{  $lesson->hour }}
                                                </span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                <span class="h6 fw-light mb-0"><i
                                                        class="fas fa-fw fa-signal text-primary"></i>سطح دوره</span>
                                                <span>
                                              {{ config('enum.course')[$course->level] }}
                                                </span>
                                            </li>

                                        </ul>
                                        <!-- Divider -->
                                        {{--                                        <hr>--}}

                                        <!-- Instructor info -->
                                        <h5 class="mb-3 fs-5" style="margin-top: 10px">مدرس دوره</h5>

                                        <div class="d-sm-flex align-items-center">

                                            <!-- Avatar image -->
                                            <div class="avatar avatar-xl">
                                                <img class="avatar-img rounded-circle"
                                                     src="{{ Voyager::image($course->teacher->image)  }}"
                                                     alt="avatar">
                                            </div>
                                            <div class="ms-sm-3 mt-2 mt-sm-0">
                                                <h5 class="mb-0"><a href="#">{{ $course->teacher->name }}</a></h5>
                                                <p class="mb-0 small">{{$course->teacher->title  }}</p>
                                            </div>
                                        </div>

                                        <!-- Rating and follow -->
                                        <div
                                            class="d-sm-flex justify-content-sm-between align-items-center mt-0 mt-sm-2">
                                            <!-- Rating star -->

                                            <!-- button -->
                                            {{--                                            <button class="btn btn-sm btn-primary mb-0 mt-2 mt-sm-0">دنبال کردن</button>--}}
                                        </div>
                                    </div>
                                    <!-- Course info END -->
                                </div>

                                <!-- Tags START -->
                                {{--                                <div class="col-md-6 col-xl-12">--}}
                                {{--                                    <div class="card card-body border p-4">--}}
                                {{--                                        <h4 class="mb-3 fs-5">برچسب ها</h4>--}}
                                {{--                                        <ul class="list-inline mb-0">--}}
                                {{--                                            <li class="list-inline-item"><a class="btn btn-outline-light btn-sm"--}}
                                {{--                                                                            href="#">PHP</a></li>--}}
                                {{--                                            <li class="list-inline-item"><a class="btn btn-outline-light btn-sm"--}}
                                {{--                                                                            href="#">استارت آپ</a></li>--}}
                                {{--                                            <li class="list-inline-item"><a class="btn btn-outline-light btn-sm"--}}
                                {{--                                                                            href="#">HTML</a></li>--}}
                                {{--                                            <li class="list-inline-item"><a class="btn btn-outline-light btn-sm"--}}
                                {{--                                                                            href="#">bootstrap</a></li>--}}
                                {{--                                            <li class="list-inline-item"><a class="btn btn-outline-light btn-sm"--}}
                                {{--                                                                            href="#">بانک اطلاعات</a></li>--}}
                                {{--                                            <li class="list-inline-item"><a class="btn btn-outline-light btn-sm"--}}
                                {{--                                                                            href="#">طراحی وب</a></li>--}}
                                {{--                                            <li class="list-inline-item"><a class="btn btn-outline-light btn-sm"--}}
                                {{--                                                                            href="#">برنامه نویسی</a></li>--}}
                                {{--                                            <li class="list-inline-item"><a class="btn btn-outline-light btn-sm"--}}
                                {{--                                                                            href="#">داده کاوی</a></li>--}}
                                {{--                                        </ul>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                <!-- Tags END -->
                            </div><!-- Row End -->
                        </div>
                    </div>
                    <!-- Right sidebar END -->

                </div><!-- Row END -->
            </div>
        </section>
    </main>
@endsection
