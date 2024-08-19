<footer>
    <img src="{{ asset('img/logo.svg') }}" width="200rem" class="m-4" alt="logo">
    <div class="row">
        <div class="col-lg-6">
            @include('partials/footer-links')
        </div>
        <div class="col-lg-6">
            <div class="d-flex align-items-center">
                <div class="bg-white shadow-sm">
                    <div class="p-lg-5 p-3">
                        <h2 class="tajawal-extrabold text-dark">تطبيق باشنورز</h2>
                        <p class="tajawal-regular text-gray">أصبح التواصل الآن أسهل مع تطبيق باشنورز!</p>
                        <div class="d-flex gap-lg-4 gap-2">
                            <x-download-btn iconPath="icons/apple.png" platform="App Store"/>
                            <x-download-btn iconPath="icons/google-play.png" platform="Google Play"/>
                        </div>
                    </div>
                </div>
                <div class="d-none d-lg-flex align-items-center ms-lg-n5">
                    <img src="{{asset('img/phone.png')}}" height="220" alt="" style="object-fit: contain;">
                </div>
            </div>
        </div>
    </div>
</footer>