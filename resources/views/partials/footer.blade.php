<footer>
    <img src="{{ asset('img/logo.svg') }}" width="200rem" class="m-4" alt="logo">
    <div class="row mb-4 mb-lg-1">
        <div class="col-lg-6">
            @include('partials/footer-links')
        </div>
        <div class="col-lg-6">
            <div class="d-flex align-items-center">
                <div class="bg-white shadow-sm flex-grow-1">
                    <div class="p-lg-5 p-3">
                        <h2 class="tajawal-extrabold text-dark">تطبيق باشنورز</h2>
                        <p class="tajawal-regular text-gray">أصبح التواصل الآن أسهل مع تطبيق باشنورز!</p>
                        <div class="d-flex gap-lg-4 gap-2">
                            <x-download-btn iconPath="icons/apple.png" platform="App Store"/>
                            <x-download-btn iconPath="icons/google-play.png" platform="Google Play"/>
                        </div>
                    </div>
                </div>
                <div class="d-none d-lg-flex align-items-center">
                    <img src="{{asset('img/phone.png')}}" height="220" alt="" style="object-fit: contain;">
                </div>
            </div>
            <div class="row my-3">
                <x-partners-logo imgPath="logos/human-resources.png"/>
                <x-partners-logo imgPath="logos/bank.png"/>
                <x-partners-logo imgPath="logos/google.png"/>
                <x-partners-logo imgPath="logos/microsoft.png"/>
            </div>
        </div>
        <div class="d-none d-lg-block">
            <p class="tajawal-regular text-center">&copy; جميع الحقوق محفوظة <strong>شركة الشغف والثراء لخدمات الأعمال</strong></p>
        </div>
    </div>
</footer>