@foreach($locations as $location)
{{$location->name}}: {{$location->scans->count()}} <br>
@endforeach()