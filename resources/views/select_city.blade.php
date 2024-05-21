<!DOCTYPE html>
<html>
<head>
    <title>Select City</title>
</head>
<body>
<h1>Select your city</h1>
<ul>
    @foreach ($cities as $city)
        <li><a href="{{ url('/select-city/' . $city->slug) }}">{{ $city->name }}</a></li>
    @endforeach
</ul>
</body>
</html>