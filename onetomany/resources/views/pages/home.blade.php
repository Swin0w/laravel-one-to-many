@extends('layouts.main-layout')
@section('content')
<ul>
    @foreach ($posts as $post)
        <li>
            <h3>{{$post -> title}}</h3>
            <p>{{$post -> text}}</p>
            <p>
                <b>TAG: </b>{{$post -> tag -> name}}<br>
                {{$post -> tag -> description}}
            </p>
            <p>
                <b>Dettagli:</b><br>
                <b>Likes: </b>{{$post -> detail -> likes}}
                <b>Argomento: </b>{{$post -> detail -> argument}}
            </p>
        </li>             
    @endforeach

</ul>
    
@endsection