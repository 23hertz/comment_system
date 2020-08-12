@extends('layouts.master')
 
@section('content')

<h2>Add Post</h2>
 
 <form method="post" action="/posts">
     {{ csrf_field() }}
     <div class="form-group row">
         <label for="titleid" class="col-sm-3 col-form-label">Post Title</label>
         <div class="col-sm-9">
             <input name="title" type="text" class="form-control" id="titleid" placeholder="Game Title" required
                    value="{{ old('title') }}">
         </div>
     </div>

     <div class="form-group row">
         <label for="publisherid" class="col-sm-3 col-form-label">Post content</label>
         <div class="form-group">
            <textarea name="body" cols="100" class="form-control" placeholder="What is on your mind!"></textarea>
         </div>
     </div>

     <div class="form-group row" hidden>
         <label for="titleid" class="col-sm-3 col-form-label">Post Title</label>
         <div class="col-sm-9">
             <input name="writer" type="text" class="form-control" id="titleid" placeholder="Game Title"
                    value="{{  auth()->user()->name }}">
         </div>
     </div>

     
   
     <div class="form-group row">
         <div class="offset-sm-3 col-sm-9">
             <button type="submit" class="btn btn-primary">Submit Post</button>
         </div>
     </div>
     @include('partials.formerrors')
 </form>

 @endsection