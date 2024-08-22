<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="{{$id}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <span class="text-dark mx-1">
            {{$label}}
        </span>
    </a>
    <ul class="dropdown-menu" aria-labelledby="{{$id}}">
        @foreach ($dropdownItems as $item)
            <li><a class="dropdown-item" href="#">{{$item}}</a></li>
        @endforeach
    </ul>
</li>