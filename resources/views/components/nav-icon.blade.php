<a href="#" class="text-decoration-none {{$margin??'mx-1'}} position-relative">
    <img src="{{ asset('img/' . $iconPath) }}" width="22" alt="">
    @isset($notification)
        <div class="position-absolute bg-danger rounded-circle notification-circle">
        </div>
    @endisset
</a>
