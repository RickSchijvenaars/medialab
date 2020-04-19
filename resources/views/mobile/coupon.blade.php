<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <title>'Free' beer</title>
</head>

<body>
    <div class="mobile-container d-flex flex-column justify-content-center align-items-center">
        <span class="mobile-title-large mobile-text text-center">
            Get your beer at the bar with this coupon
        </span>
        <img class="mobile-beer-center mt-5" src="{{asset('img/pint-of-beer.svg')}}">    
        <img class="mobile-qr mt-5" src="{{asset('img/qr-code.png')}}">    
    </div>
    <img class="mobile-beer-top" src="{{asset('img/beer.svg')}}">
    <img class="mobile-beer-bottom" src="{{asset('img/beer-2.svg')}}">
</body>

</html>