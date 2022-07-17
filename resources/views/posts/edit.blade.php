@extends('layout')

@section('title')
Edit Posts
@endsection

@section("content")
<form method='POST' action="{{route('posts.update',['post'=>$post->id])}}">
@csrf
@method('PUT')
<p>
  <label>Title</label>
  <input type='text' name='title' value="{{old('title',$post->title)}}"><br>
  <label>Content</label>
  <input type='text' name='content' value="{{old('content',$post->content)}}"><br>
  <button type="submit">Update</button>
</p>
@if ($errors->any())
<div style="color:red">

  @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
  @endforeach

</div>
@endif
</form>
@endsection
