<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{csrf_token()}}">
    <title>Face Recognition</title>
</head>

<body>

    <br>
    @foreach($locations as $location)
        {{$location->name}}: {{$location->scans->count()}} <br>
    @endforeach

    <ul>
        @foreach($values as $value)
            <li>{{$value->expression->name}} : {{number_format($value->avg_val * 100, 2)}}%</li>
        @endforeach
    </ul>

    <h1>{{number_format($age)}} Jaren jong</h1>
</body>

</html>