<nav class="navbar navbar-expand-md">
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <button class="navbar-toggler bg-primary rounded-circle p-0" type="button">
                    <span class="navbar-toggler-icon pt-1 me-auto me-lg-0"><img src="{{ asset('img/icons/menu.png') }}" width="14" alt=""></span>
                </button>
                <a class="navbar-brand ms-2" href="#"><img src="{{asset('img/logo.svg')}}" width="160" alt=""></a>
            </div>
            <div class="d-flex align-items-center justify-content-end">
                <button class="navbar-toggler">
                    <x-nav-icon iconPath="icons/globe.png" margin="m-0"/>
                </button>
                <button class="navbar-toggler bg-primary text-white tajawal-regular px-3 py-1 fs-7">دخول</button>
            </div>
        </div>
        <div id="navbarNav" class="collapse navbar-collapse tajawal-medium">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <x-nav-link-dropdown id="freelancers" label="البحث عن فريلانسرز" :dropdownItems="['فريلانسر ١', 'فريلانسر ٢']"/>
                <x-nav-link-dropdown id="projects" label="البحث عن مشاريع" :dropdownItems="['مشروع ١', 'مشروع ٢']"/>
                <x-nav-link-dropdown id="enablement" :dropdownItems="['باشنور ١', 'باشنور ٢']">
                    <x-slot name="label">
                        تمكين باشنورز <span class="bg-danger px-2 py-1 tajawal-bold rounded-4 m-1 text-white">جديد</span>
                    </x-slot>
                </x-nav-link-dropdown>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#">باقات ومنتجات</a>
                </li>
            </ul>
            <div class="text-center">
                <x-nav-icon iconPath="icons/globe.png"/>
                <x-nav-icon iconPath="icons/search.png"/>
                <x-nav-icon iconPath="icons/bell.png"/>
                <x-nav-icon iconPath="icons/envelope.png" :notification="true"/>
                <img src="{{'img/icons/profile.png'}}" width="36" class="rounded-circle p-1 border border-2 border-dark ms-4" alt="">
            </div>
        </div>
    </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function () {
    
    const toggleButton = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.getElementById('navbarNav');

    toggleButton.addEventListener('click', function () {
        navbarCollapse.classList.toggle('show');
    });

    var dropdownToggles = document.querySelectorAll('.dropdown-toggle');

    dropdownToggles.forEach(function (toggle) {
        toggle.addEventListener('click', function (event) {
            event.preventDefault();
            var dropdownMenu = this.nextElementSibling;
            dropdownMenu.classList.toggle('show');
        });
    });

    document.addEventListener('click', function (e) {
        var dropdowns = document.querySelectorAll('.dropdown-menu.show');
        dropdowns.forEach(function (dropdown) {
            if (!dropdown.previousElementSibling.contains(e.target)) {
                dropdown.classList.remove('show');
            }
        });
    });

});
</script>
