<div class="{{$col ?? 'col-6'}}">
    @foreach ($links as $label)
        <x-footer-link link="#" :linkLabel="$label"/>
    @endforeach
</div>