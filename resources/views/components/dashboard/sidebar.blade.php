@foreach ($navs as $nav)
    <nav class="sidebar-navigation {{ $nav->sideclass ?? '' }}">
        <p class="nav-name">{{ $nav->name ?? '' }}</p>
        <ul>
            @foreach ($nav->links as $link)
                <li @class([
                    'active' => url()->current() === $link->url,
                ])>


                    <a href="{{ $link->url }}" class="navlink {{ $nav->linkclass ?? '' }}">{{ $link->title }}</a>
                </li>
            @endforeach
        </ul>
    </nav>
@endforeach
