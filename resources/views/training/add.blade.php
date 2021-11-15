@extends('layouts.layout')


@section('title')
Nouvel formation
@endsection

@section('content')

<h1>Ajout d'une nouvel formation</h1>

@if ($errors->any())
<ul class="alert alert-danger">
    @foreach ($errors->all() as $error)
        <li>{{ $error}}</li>
    @endforeach
</ul>

@endif

<form action="{{route('storetraining')}} " method="post" class="row justify-items: center;" enctype="multipart/form-data">
    @csrf
    <div >
        <label for="text" >name</label> :</label>
        <input type="text"  name="name" class="form-control" required>
    </div >
    <div c text-align="center">
        <label for="text" >prix :</label>
        <input type="text"name="price" class="form-control" required>
    </div >
    <div >
        <label for="text"  >Description :</label>
        <textarea type="text" name="description" class="form-control" required> </textarea>
    </div >


    <div class="form-group">
        <label>Image</label>
        <input type="file" class="form-control" required name="image" accept="*">
    </div>
@foreach ($category as $cat )
<div class="form-check form-check-inline">
    <input type="checkbox" class="form-check-input" id="check-{{$cat->id}}" value="{{$cat->id}}" required>
    <label for="check-{{$cat->id}}" class="form-check-label">{{$cat->name}}</label>
</div>  
@endforeach




    <div class="button my-3">
        <button type="submit" class="btn btn-primary">Ajouter</button>
        <a href=" {{route('traininglist')}} " class="btn btn-warning">
            Retour a la liste
        </a>
        
    </div>

    </div>
</form>

@endsection


