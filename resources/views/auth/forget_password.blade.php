@extends('auth/index')
@section('content')
    <main>
        <section class="p-0 d-flex align-items-center position-relative overflow-hidden">

            <div class="container-fluid">
                <div class="row">
                    <!-- left -->
                    <div
                        class="col-12 col-lg-6 d-md-flex align-items-center justify-content-center bg-primary bg-opacity-10 vh-lg-100">
                        <div class="p-3 p-lg-5">
                            <!-- Title -->
                            <div class="text-center">
                                <h2 class="fw-bold fs-3">به بزرگترین انجمن ما خوش آمدید</h2>
                                <p class="mb-0 h6 fw-light">بیایید امروز چیز جدیدی یاد بگیریم!</p>
                            </div>
                            <!-- SVG Image -->
                            <img src="{{asset('assets/images/element/02.svg')}}" class="mt-5" alt="">
                            <!-- Info -->
                            <div class="d-sm-flex mt-5 align-items-center justify-content-center">
                                <ul class="avatar-group mb-2 mb-sm-0">
                                    <li class="avatar avatar-sm"><img class="avatar-img rounded-circle"
                                                                      src="{{asset('assets/images/avatar/01.jpg')}}"
                                                                      alt="avatar">
                                    </li>
                                    <li class="avatar avatar-sm"><img class="avatar-img rounded-circle"
                                                                      src="{{asset('assets/images/avatar/02.jpg')}}"
                                                                      alt="avatar">
                                    </li>
                                    <li class="avatar avatar-sm"><img class="avatar-img rounded-circle"
                                                                      src="{{asset('assets/images/avatar/03.jpg')}}"
                                                                      alt="avatar">
                                    </li>
                                    <li class="avatar avatar-sm"><img class="avatar-img rounded-circle"
                                                                      src="{{asset('assets/images/avatar/04.jpg')}}"
                                                                      alt="avatar">
                                    </li>
                                </ul>
                                <!-- Content -->
                                <p class="mb-0 h6 fw-light ms-0 ms-sm-3"> بیش از 100 دانشجو به ما پیوستند، حالا نوبت
                                    شماست.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Right -->
                    <div class="col-12 col-lg-6 d-flex justify-content-center">
                        <div class="row my-5">
                            <div class="col-sm-10 col-xl-12 m-auto">

                                <!-- Title -->
                                <span class="mb-0 fs-1">🤔</span>
                                <h1 class="fs-4">فراموشی رمز عبور</h1>
                                <h5 class="fw-light mb-4">برای دریافت رمز عبور جدید، آدرس ایمیل خود را وارد کنید.</h5>

                                <!-- Form START -->


                                @if(Session::has('success'))
                                    <span style="color: #0a966c">
                            {!! Session::get('success') !!}
                        </span>
                                @endif
                                <form method="post">
                                    @csrf
                                    <!-- Email -->
                                    <div class="mb-4">
                                        <label for="exampleInputEmail1" class="form-label">ایمیل *</label>
                                        <div class="input-group input-group-lg">
                                            <span
                                                class="input-group-text bg-light rounded-start border-0 text-secondary px-3"><i
                                                    class="bi bi-envelope-fill"></i></span>
                                            <input type="email" class="form-control border-0 bg-light rounded-end ps-1"
                                                   placeholder="***@gmail.com" id="exampleInputEmail1" name="email">
                                        </div>
                                        @error('email')
                                        <span style="color: red">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <!-- Button -->
                                    <div class="align-items-center">
                                        <div class="d-grid">
                                            <button class="btn btn-primary mb-0" type="submit">تایید</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- Form END -->
                            </div>
                        </div> <!-- Row END -->
                    </div>
                </div> <!-- Row END -->
            </div>
        </section>
    </main>
@endsection
