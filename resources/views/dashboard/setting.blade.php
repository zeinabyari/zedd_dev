@extends('index')

@section('content')

    <main>

        <div class="page-content">

            <!-- Top bar END -->

            <div class="page-content-wrapper border">

                <!-- Title -->
                <div class="row">
                    <div class="col-12 mb-3">
                        <h1 class="h3 mb-2 mb-sm-0 fs-4">
                            خوش آمدید
                        </h1>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Left side START -->
                    <div class="col-xl-3">
                        <!-- Tab START -->
                        <ul class="nav nav-pills nav-tabs-bg-dark flex-column">
                            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#tab-1"><i
                                        class="fas fa-user-circle fa-fw me-2"></i>پروفایل</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-2"><i
                                        class="fas fa-cog fa-fw me-2"></i>ویرایش رمز عبور</a></li>
                            {{--                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-3"><i--}}
                            {{--                                        class="fas fa-bell fa-fw me-2"></i>نوتیفیکیشن</a></li>--}}
                            {{--                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-4"><i--}}
                            {{--                                        class="fas fa-user-circle fa-fw me-2"></i>پروفایل</a></li>--}}
                            {{--                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-5"><i--}}
                            {{--                                        class="fas fa-sliders-h fa-fw me-2"></i>شبکه های اجتماعی</a></li>--}}
                            {{--                            <li class="nav-item"><a class="nav-link mb-0" data-bs-toggle="tab" href="#tab-6"><i--}}
                            {{--                                        class="fas fa-envelope-open-text fa-fw me-2"></i>ایمیل</a></li>--}}
                        </ul>
                        <!-- Tab END -->
                    </div>
                    <!-- Left side END -->

                    <!-- Right side START -->
                    <div class="col-xl-9">

                        <!-- Tab Content START -->
                        <div class="tab-content">

                            <!-- Personal Information content START -->
                            <div class="tab-pane show active" id="tab-1">
                                <div class="card shadow">

                                    <!-- Card header -->
                                    <div class="card-header border-bottom">
                                        <h5 class="card-header-title">پروفایل</h5>
                                    </div>

                                    <!-- Card body START -->
                                    <div class="card-body">
                                        <form class="g-4 align-items-center changeAccountDetail" method="post"
                                              action="{{ route('profile_edit') }}" enctype="multipart/form-data">
                                            @csrf

                                            <div
                                                class="col-md-12 d-flex flex-column justify-content-center align-items-center">
                                                <div class="avatar avatar-xxl mx-auto mb-2">
                                                    <img id="profile_image" class="avatar-img rounded-circle"
                                                         src="{{ $client->avatar ? Voyager::image($client->avatar) : asset('assets/images/avatar/main.webp')}}"
                                                         alt="avatar">
                                                </div>
                                                <input type="file" class="file-input" id="imageUpload" name="avatarPicture"
                                                       hidden>
                                                <label for="imageUpload">

                                                    <div class="btn upload-button"> آپلود</div>
                                                </label>
                                                @error('avatarPicture')
                                                <div class="form-text" style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <!-- Input item -->
                                            <div class="col-lg-12 mb-3">
                                                <label class="form-label">نام</label>
                                                <input type="text" class="form-control" placeholder="نام شما"
                                                       value="{{ $client->name }}" name="name">
                                                @error('name')
                                                <div class="form-text" style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>


                                            <!-- Input item -->
                                            <div class="col-lg-12 mb-3">
                                                <label class="form-label">ایمیل</label>
                                                <input type="email" class="form-control" placeholder="xxxx@gmail.com"
                                                       value="{{ $client->email }}" readonly name="email">
                                                @error('name')
                                                <div class="form-text" style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-lg-12">
                                                <label class="form-label">شماره تماس</label>
                                                <input type="number" class="form-control" placeholder="0912 111 22 33"
                                                       value="{{ $client->phone }}" name="phone">
                                                @error('phone')
                                                <div class="form-text" style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>


                                            <!-- Save button -->
                                            <div class="d-sm-flex justify-content-end mt-3">
                                                <button type="submit" class="btn btn-primary mb-0">ذخیره</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Card body END -->

                                </div>
                            </div>
                            <!-- Personal Information content END -->
                            <div class="tab-pane " id="tab-2">
                                <div class="card shadow">

                                    <!-- Card header -->
                                    <div class="card-header border-bottom">
                                        <h5 class="card-header-title">ویرایش رمز عبور</h5>
                                    </div>

                                    <!-- Card body START -->
                                    <div class="card-body">
                                        <form class="g-4 align-items-center changeAccountDetail">

                                            <!-- Input item -->
                                            <div class="col-lg-12">
                                                <label class="form-label">رمز فعلی</label>
                                                <input type="text" class="form-control" placeholder="رمز فعلی">
                                            </div>

                                            <div class="col-lg-12 my-3">
                                                <label class="form-label">رمز جدید</label>
                                                <input type="text" class="form-control" placeholder="رمز جدید">
                                            </div>

                                            <div class="col-lg-12">
                                                <label class="form-label">تکرار رمز جدید</label>
                                                <input type="text" class="form-control" placeholder="تکرار رمز جدید">
                                            </div>


                                            <!-- Save button -->
                                            <div class="d-sm-flex justify-content-end mt-3">
                                                <button type="button" class="btn btn-primary mb-0">ذخیره</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Card body END -->

                                </div>
                            </div>


                        </div>
                        <!-- Tab Content END -->
                    </div>
                    <!-- Right side END -->
                </div> <!-- Row END -->
            </div>
        </div>

    </main>

    <script>

        document.getElementById('imageUpload').addEventListener('change', upload_file, false);

        function upload_file(evt) {

            var files = evt.target.files;

            // Loop through the FileList and render image files as thumbnails.
            for (var i = 0, f; f = files[i]; i++) {

                // Only process image files.
                /*if (!f.type.match('image.*')) {
                    continue;
                }*/

                var reader = new FileReader();

                // Closure to capture the file information.
                reader.onload = (function (theFile) {
                    return function (e) {
                        // Render thumbnail.

                        document.getElementById('profile_image').setAttribute("src", e.target.result);

                        var form = new FormData();

                        const token = "ba63TMCGF20OuI77H7TSoUTQSnUuNDKfd3h2CYst";

                        form.append("_token", token);

                        form.append(evt.target.name, theFile);


                    };
                })(f);

                // Read in the image file as a data URL.
                reader.readAsDataURL(f);
            }

        }


    </script>
@endsection
