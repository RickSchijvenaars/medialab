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
    @foreach($average_expressions as $expression)
        {{$expression}} <br>
    @endforeach
    <br>
    @foreach($locations as $location)
        {{$location->name}}: {{$location->scans->count()}} <br>
    @endforeach
</body>

</html>