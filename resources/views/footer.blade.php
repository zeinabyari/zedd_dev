@php
 $socials = \App\Models\Social::all();
    @endphp

<footer class="bg-dark p-3">
    <div class="container">
        <div class="row align-items-center">
            <!-- Widget -->
            <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
                <!-- Logo START -->
                <a href="{{ route('home') }}"> <img class="h-30px" src="{{ Voyager::image(setting('site.logo')) }}" alt="logo"> </a>
            </div>

            <!-- Widget -->
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="text-center text-white">
                    تمامی حقوق برای این سایت محفوظ می باشد
{{--                    <a href="https://www.rtl-theme.com/" target="_blank" class="text-reset btn-link">راست چین</a>--}}
                </div>
            </div>
            <!-- Widget -->
            <div class="col-md-4">
                <!-- Rating -->
                <ul class="list-inline mb-0 text-center text-md-end">
                    @foreach($socials as $social)
                        <li class="list-inline-item ms-2">
                            <a class="btn  btn-sm shadow px-2 text-facebook" href="{{ $social->link }}">
                                <img src="{{ Voyager::image($social->icon) }}" class="h-40px" alt="{{ $social->name }}">
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>
