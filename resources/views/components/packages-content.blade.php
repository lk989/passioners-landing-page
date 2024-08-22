<section class="text-dark row">
    <div class="col-lg-9 p-lg-5 p-3 tajawal-medium">
        {{ $mainContent }}
    </div>
    <div class="col-lg-3 d-none d-lg-flex flex-lg-column justify-content-center p-5 bg-light-blue">
        <h5 class="tajawal-medium">{{ $descriptionTitle??'' }}</h5>
        <h6 class="tajawal-regular">{{ $description??'' }}</h6>
    </div>
</section>