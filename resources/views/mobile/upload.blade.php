<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
    <script defer src="{{asset('face-recognition/face-api.min.js')}}"></script>
    <script defer src="{{asset('face-recognition/script.js')}}"></script>
    <title>'Free' beer</title>
</head>

<body>
    <div class="mobile-container d-flex flex-column justify-content-center align-items-center">
        <span class="mobile-title mobile-text text-center">
            So you want a FREE beer?
        </span>
        <img class="mobile-beer-center mt-3" src="{{asset('img/pint-of-beer.svg')}}">    
        <p class="mobile-text text-center mt-4">
            Just take a picture of yourself at the festival and upload it to us to get your free beer.
        </p>
        <input class="mobile-input" type="file" id="input" accept="image/*" capture="user">
        <label class="mobile-button" for="input">Take Picture</label>
        <img id="loading" class="mobile-loading" src="{{asset('img/loading.gif')}}">
    </div>
    <img class="mobile-beer-top" src="{{asset('img/beer.svg')}}">
    <img class="mobile-beer-bottom" src="{{asset('img/beer-2.svg')}}">
</body>

</html>