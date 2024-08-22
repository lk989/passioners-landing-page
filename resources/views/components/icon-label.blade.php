<p class="label {{ $font ?? 'tajawal-regular' }} my-0">
    <span class="mx-1">
        <img src="{{ asset('img/' . $imgFile . '') }}" height="{{ $iconHeight ?? '18rem' }}" alt="{{ $alt ?? 'icon' }}">
    </span>
     {{ $label }}
</p>