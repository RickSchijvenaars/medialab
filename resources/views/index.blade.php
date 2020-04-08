<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{csrf_token()}}">

    <script src="{{asset('js/app.js')}}"></script>

    <script defer src="{{asset('face-recognition/face-api.min.js')}}"></script>
    <script defer src="{{asset('face-recognition/script.js')}}"></script>
    <title>Face Recognition</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column
        }
        
        img {
            max-height: 400px;
        }
    </style>
</head>

<body>
    <input type="file" id="input">
    <img id="img" src="">
</body>

</html>