@extends('layouts.template')

@section('content')

<h1>Un nouveau projet</h1>

<div class="container">
            <form method="POST" action="/add" enctype="multipart/form-data"> 
                @csrf
                <input type="text" name="titre" placeholder="Titre du projet" />
                <br>
                <input type="text" name="url" placeholder="Url du bg" />
                <br>
                <input type="submit" />
            </form> 
</div>


<!--    
        <label for="avatar">Choose a profile picture:</label>
        <input type="file" name="avatar" accept="image/png, image/jpeg">
-->

@endsection