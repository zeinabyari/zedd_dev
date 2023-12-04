@extends('index')
@section('meta')
    <title>{{ $course->title }} - zedd dev</title>
    <meta name="description" content="{{ $course->title }} - {{ $course->meta_desc }}">

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [
                {
                    "@type": "ListItem",
                    "position": 1,
                    "name": "خانه",
                    "item": "{{ url('/') }}"
                },
                {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "دوره‌ها",
                    "item": "{{ url('/courses') }}"
                },
                {
                    "@type": "ListItem",
                    "position": 3,
                    "name": "{{ $course->title }}",
                    "item": "{{ url('/courses/' . $course->slug) }}"
                }
            ]
        }

    </script>

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Course",
            "name": "{{ $course->title }}",
            "description": "{{ $course->description }}",
            "url": "{{ url('/courses/' . $course->slug) }}",
            "provider": {
                "@type": "Organization",
                "name": "zedd dev"
            },
            "inLanguage": "fa",
            "courseCode": "{{ $course->code }}",
            "datePublished": "{{ $course->created_at->toIso8601String() }}",
            "dateModified": "{{ $course->updated_at->toIso8601String() }}",
            "image": "{{ Voyager::image($course->video_poster) }}",
            "author": {
                "@type": "Person",
                "name": "{{ $course->teacher->name }}"
            }
        }
    </script>
@endsection

@section('content')
    <main>
        <section class="pt-3 pt-xl-5">
            <div class="container" data-sticky-container>
                <div class="row g-4">
                    <div class="d-flex ">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb breadcrumb-dots mb-0">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">صفحه اصلی</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('courses') }}">دوره ها</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $course->title }}</li>
                            </ol>
                        </nav>
                    </div>

                    <div class="col-xl-8">
                        <div class="row g-4">

                            <div class="col-12">
                                <h1 class="fs-3">{{ $course->title }}</h1>
                                <p>{!!  $course->description !!}</p>
                            </div>
                            @if($course->video)
                                <div class="col-12 position-relative">
                                    <div class="video-player rounded-3">
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
                                    </div>
                                </div>
                            @endif
                            <div class="col-12">
                                <div class="card border">
                                    <div class="card-header border-bottom">
                                        <h2 class="mb-0 fs-5">توضیحات دوره</h2>
                                    </div>

                                    <div class="card-body">
                                        {!!  $course->description2 !!}

                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="card border rounded-3">
                                    <div class="card-header border-bottom">
                                        <h3 class="mb-0 fs-5">جلسات دوره</h3>
                                    </div>

                                    <div class="card-body">
                                        <div class="row g-5">
                                            <div class="col-12">

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
                                                        <a href="{{ $lesson->video }}"
                                                           class="btn btn-sm btn-success mb-0">پخش</a>
                                                    </div>
                                                    <hr>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div data-sticky data-margin-top="80" data-sticky-for="768">
                            <div class="row g-4">
                                <div class="col-md-6 col-xl-12">
                                    <div class="card card-body border p-4">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="text-success mb-0">رایگان</h3>
                                            <div class="dropdown">
                                                <a href="#" class="btn btn-sm btn-light rounded mb-0 small"
                                                   role="button" id="dropdownShare" data-bs-toggle="dropdown"
                                                   aria-expanded="false">
                                                    <i class="fas fa-fw fa-share-alt"></i>
                                                </a>
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
                                                    {{  $course->hour }}
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
                                        {{--                                        <hr>--}}

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

                            </div><!-- Row End -->
                        </div>
                    </div>
                    <!-- Right sidebar END -->

                </div><!-- Row END -->
            </div>
        </section>
    </main>
@endsection
