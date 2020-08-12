@extends('layouts.master')
 
@section('content')
    <div class="card" style="width: 270px;margin: 5px">
        <img class="card-img-top" src="{{ Storage::url($game->image)  }}" alt="Card image cap">
        <div class="card-block">
            <h3 class="card-title">{{ $post->title }}</h3>
            <p class="card-text">{{ $post->title }} is published by >{{ $post->writer }}</p>
            
            <a href="/games" class="btn btn-primary">List Games</a>
        </div>
    </div>