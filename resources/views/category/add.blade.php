@extends('layouts.layout')

@section('title')
Ajouter une category
@endsection

@section('content')
<div class="container">
    <h1>Ajouter une catégorie</h1>

    <form method="post" action="{{route('categoryStore')}}">
        @csrf
        <div class="from-control">
            <label>Nom de la catégorie</label>
            <input type="text" required class="form-control" name="name">
        </div>
        <button class="btn btn-primary">Ajouter</button>
    </form>
</div>

@endsection