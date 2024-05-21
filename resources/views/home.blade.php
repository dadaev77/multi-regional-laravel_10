<!DOCTYPE html>
<html>
<head>
    <title>Home - {{ $city->name }}</title>
</head>
<body>
<header>
    <p>Selected city: <strong>{{ $city->name }}</strong></p>
</header>
<h1>City List</h1>
<ul>
    @foreach ($cities as $item)
        <li>
            @if ($item->slug == $city->slug)
                <strong>{{ $item->name }}</strong>
            @else
                <a href="{{ url('/' . $item->slug) }}">{{ $item->name }}</a>
            @endif
        </li>
    @endforeach
</ul>
<nav>
    <ul>
        <li><a href="{{ route('about', ['city' => $city->slug]) }}">About Us</a></li>
        <li><a href="{{ route('news', ['city' => $city->slug]) }}">News</a></li>
    </ul>
</nav>
</body>
</html>