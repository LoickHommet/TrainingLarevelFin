@extends('layouts.layout')


@section('title')
{{$training->name}}
@endsection

@section('content')
<h1>Bienvenue sur notre formation</h1>

<div class="row bg-light m-3 p-3">
    <div class="col-6">
        <h3>{{$training->name}}</h3>
        <p class="mb-5">{{$training->description}}</p>
        <br>
        
    </div>
    <div class="button my-3">
        <a href=" {{route('traininglist')}} " class="btn btn-warning">
            Retour a la liste
        </a>        
    </div>
</div>
    <h1>Chapitre :</h1>
    
    @if(sizeof($training->chapters) > 0)
   

    @foreach ($training->chapters as $chap)
    <div class="row bg-light m-3 p-3">
        <h3>{{$chap->name}}</h3>
        <br>
        <p> Le chapitre dure :{{$chap->time}} h </p>
        <br>
        <p> {{$chap->content}} </p> 
        
    </div>
    @endforeach   
@else
<p>Il n'y a pas de chapitre dans cette foramtion </p>
@endif


@endsection



