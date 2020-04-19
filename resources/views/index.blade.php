<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{csrf_token()}}">
    <!-- Refresh after all slides to update data -->
    <meta http-equiv="refresh" content="49; URL={{Request::url()}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <title>'Free' beer</title>
</head>

<body>

<div class="carousel slide" data-ride="carousel" data-pause="false" data-interval="7000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="slide-container slide-character d-flex">
                <h1 class="slide-character-title">The average festival visitor</h1>
                <div class="slide-character-left d-flex align-items-center justify-content-center">
                    <div class="slide-character-left-image-container">
                        <div class="slide-character-left-location text-center">
                            <h1>{{$location}}</h1>
                        </div>
                        <img class="slide-character-left-image" src="{{asset('/img/output/'.$emotion.'-'.$gender.'.png')}}" alt="Average person">        
                    </div>
                </div>
                <div class="slide-character-right d-flex justify-content-end">
                    <div class="slide-character-right-content d-flex flex-column">
                        @foreach($values as $value)
                            <h2>{{$value->expression->name}}</h2>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: {{$value->avg_val*100}}%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{number_format($value->avg_val*100, 2)}}%</div>
                            </div>
                        @endforeach
                        <div class="d-flex justify-content-between mt-2">
                            <h2>Age: <b>{{number_format($age)}}</b></h2>
                            <h2>Gender: <b>{{$gender}}</b></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="slide-container slide-2 d-flex">
                <h1 class="slide-2-title">HOW DO WE KNOW?</h1>
                <div class="slide-2-left">
                    <img class="h-100" src="{{asset('/img/face.jpg')}}" alt="">
                </div>
                <div class="slide-2-right">
                    <div class="slide-2-right-content d-flex flex-column justify-content-end">
                        <p class="slide-2-right-text text-white">
                            By using face recognition, we can
                            collect all sorts of data based on
                            the features of a face.
                        </p>
                        <p class="slide-2-right-text text-yellow">
                            Faces like yours, found in
                            photographs available on the
                            internet.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="slide-container slide-3 d-flex flex-column align-items-center justify-content-center">
                <div class="slide-3-content text-center">
                    <p>It was <span class="text-yellow">you</span> who sent us these pictures</p>
                    <p class="mt-5">Did you really want that...</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="slide-container slide-4 d-flex flex-column align-items-center justify-content-center">
                <div class="slide-4-content text-center">
                    <p>... for a free glass of <span class="text-yellow">beer</span>?</p>
                <img class="slide-4-image mt-5" src="{{asset('/img/pint-of-beer.svg')}}" alt="">
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="slide-container slide-5 d-flex flex-column align-items-center justify-content-center">
                <div class="slide-5-content text-center">
                    <p>You pay with your <span class="text-yellow">privacy</span> in everyday life</p>
                    <p class="mt-5 slide-5-text-small">By using apps like <u>Google</u>, <u>Facebook</u>, <u>Twitter</u> and more.</p>
                </div>
            </div>
        </div> 
        <div class="carousel-item">
            <div class="slide-container slide-6 d-flex flex-column align-items-center justify-content-center">
                <div class="slide-6-content text-center">
                    <p>Based on your actions, companies make <span class="text-yellow">assumptions</span> about you</p>
                    <p class="mt-5">and use or sell this <span class="text-yellow">'self-composed'</span> data.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item last-slide">
            <div class="slide-container slide-7 d-flex flex-column align-items-center justify-content-center">
                <div class="slide-7-content text-center">
                    <p>Are <span class="text-yellow">you</span> already doing something against it?</p>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>