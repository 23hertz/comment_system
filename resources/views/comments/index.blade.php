@extends('layouts.master')
 
@section('content')
 
    @foreach($comments as $comment)
        <div class="col-12 mb-3">
            <div class="card">
                <div class="card-block">
 
                    <p class="card-text">{{ $comment->user->name }} left a <a href="/comments/{{$comment->id}}">review</a>
                        for <a href="/posts/{{ $comment->post->id }}">{{ $comment->post->title }}</a> {{$comment->created_at->diffForHumans()}}
                    </p>
                </div>
            </div>
        </div>
    @endforeach
 
@endsection