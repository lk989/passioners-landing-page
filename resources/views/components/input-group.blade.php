<div>
    <p>
        {{$label}}
        @isset($required)
            <span class="text-danger"> *</span>
        @endisset
    </p>
    <div>
        {{$input}}
    </div>
    @isset($details)
        <div class="tajawal-regular text-muted mt-3">
            {{$details}}
        </div>
    @endisset
</div>