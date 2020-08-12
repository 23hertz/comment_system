@extends('layouts.master')
 
@section('content')

    <div class="row">
     <div class="col-md-9" style="margin:4px auto;">


      @foreach($posts as $post)
      <div class="card  mb-3">
        <div class="card-header card-title"><h5><a href="/posts/{{$post->id}}"> {{ $post->title }}</a></h5> </div>
          
            <div class="card-body text-success">
                <p class="card-text">{{ $post->body }}</p>

            </div>
            <a href="/posts/{{ $post->id}}" class="btn btn-primary btn-md" style="width:150px;margin-left:12px;margin-bottom:10px">Learn More</a>

        <div class="card-footer bg-transparent border"> Written by <b>{{ $post->writer }}</b> {{ $post->created_at->diffForHumans()}}</div>
      </div>
      @endforeach

      <div class="addreview">
        <div class="card-block">
            <form method="POST" action="/posts/{{ $post->id }}/comments">
            {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="body" class="form-control" placeholder="Add a review!"></textarea>
                </div>
 
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add a review!</button>
                </div>

                
            </form>
        </div>
    </div>

      </div>
    </div>

    
    @endsection
    
