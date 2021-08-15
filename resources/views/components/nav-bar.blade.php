<a href="{{ $url }}" class="nav-link @if (Request::is($url)) text-warning @else text-white @endif">{{ $slot }}</a>
