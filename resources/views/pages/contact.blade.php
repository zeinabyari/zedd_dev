@extends('index')
@section('content')

    <main>
        <!-- =======================
        Page Banner START -->
        <section class="pt-5 pb-0"
                 style="background-image:url(assets/images/element/map.svg); background-position: center left; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-xl-6 text-center mx-auto">
                        <!-- Title -->
                        <h6 class="text-primary">تماس با ما</h6>
                        <h1 class="mb-4 fs-4">ما برای کمک اینجا هستیم!</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
        Page Banner END -->

        <!-- =======================
        Image and contact form START -->
        <section>
            <div class="container">
                <div class="row g-4 g-lg-0 align-items-center">

                    <div class="col-md-6 align-items-center text-center">
                        <!-- Image -->
                        <img src="{{asset('assets/images/element/dev.webp')}}" class="h-600px" alt="">

                        <!-- Social media button -->
                        <div class="d-sm-flex align-items-center justify-content-center mt-2 mt-sm-4">
                            <h5 class="mb-0">اینجا میتونیم با هم در ارتباط باشیم :</h5>
                            <ul class="list-inline mb-0 ms-sm-2">
                                @foreach($socials as $social)
                                    <li class="list-inline-item">
                                        <a class="fs-5 me-1 text-facebook" href="{{ $social->link }}" target="_blank">
{{--                                            <i class="fab fa-fw fa-facebook-square"></i>--}}
                                            <img src="{{ Voyager::image($social->icon) }}" class="h-50px" alt="{{ $social->name }}">

                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Contact form START -->
                    <div class="col-md-6">
                        <!-- Title -->
                        <h2 class="mt-4 mt-md-0 fs-4">با ما در ارتباط باشید</h2>
                        <p>برای درخواست نمایندگی لطفا با بخش فروش شرکت تماس بگیرید یا فرم را پر کنید سپس همکاران ما با
                            شما تماس خواهند گرفت.</p>

                        @if(Session::has('success'))
                            <span style="color: #0a966c">
                            {!! Session::get('success') !!}
                        </span>
                        @endif

                        <form method="post" action="{{ route('contact_post') }}">
                            @csrf
                            <!-- Name -->
                            <div class="mb-4 bg-light-input">
                                <label for="yourName" class="form-label">نام و نام خانوادگی *</label>
                                <input type="text" class="form-control form-control-lg" id="yourName" name="name">
                                @error('name')
                                <span style="color: red">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                            <!-- Email -->
                            <div class="mb-4 bg-light-input">
                                <label for="emailInput" class="form-label">ایمیل *</label>
                                <input class="form-control form-control-lg" id="emailInput" name="email">
                                @error('email')
                                <span style="color: red">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                            <!-- Message -->
                            <div class="mb-4 bg-light-input">
                                <label for="textareaBox" class="form-label">متن درخواست *</label>
                                <textarea class="form-control" id="textareaBox" rows="4" name="description"></textarea>
                                @error('description')
                                <span style="color: red">
                                    {{ $message }}
                                </span>
                                @enderror
                            </div>
                            <!-- Button -->
                            <div class="d-grid">
                                <button class="btn btn-lg btn-primary mb-0" type="submit">ارسال</button>
                            </div>
                        </form>
                    </div>
                    <!-- Contact form END -->
                </div>
            </div>
        </section>
        <!-- =======================
        Image and contact form END -->

        <!-- =======================
        Map START -->
        <!-- =======================
        Map END -->

    </main>

@endsection
