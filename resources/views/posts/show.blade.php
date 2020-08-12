<!DOCTYPE html>
<html lang="en">
   <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Post And Comment System</title>
        <link href="/css/app.css" rel="stylesheet">
        <script src="/js/app.js"></script>
    </head> 
    <body>

    <div class="row">
        <div class="col-md-12" style="">

         <div class="card" style="width:370px;margin: 5px">
              <div class="card-block" style="margin-left:10px">
                    <h3 class="card-title">{{ $post->title }}</h3>
                    <p class="card-text">{{ $post->title }} is published by {{$post->writer}}</p>
        
                    <a href="/posts" class="btn btn-primary" style="margin-bottom:10px;">Post List</a>
              </div>
          </div>

          <hr>

        <div class="reviews" style="">
        <h4>Comments</h4>
        <ul class="list-group">
            @foreach($post->comments as $comment)
                <li class="list-group-item">{{ $comment->body }} <small class="text-primary">posted {{$comment->created_at->diffForHumans()}} </small> </li>
            @endforeach
        </ul>
        </div>

        <div class="addreview">
        <div class="card-block">
            <form method="POST" action="/posts/{{ $post->id }}/comments">
            {{ csrf_field() }}

                <div class="form-group">
                    <textarea name="body" class="form-control" placeholder="Add a review!"></textarea>
                </div>

            <input type="text" class="form-control" id="user_ID" name="user_id" value="{{  auth()->user()->id }}" hidden>
        </div>
        
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add a comment!</button>
                </div>

                @include('partials.formerrors')
            </form>
        </div>
    </div>

    </div>

         

        


    
    </body>

</html>