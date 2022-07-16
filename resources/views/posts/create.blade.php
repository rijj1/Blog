@extends('layout')

@section('title')
Create Posts
@endsection

@section("content")
<form method='POST' action="{{route('posts.store')}}">
@csrf
<p>
  <label>Title</label>
  <input type='text' name='title' value="{{old('title')}}"><br>
  <label>Content</label>
  <input type='text' name='content' value="{{old('content')}}"><br>
  <button type="submit">Create</button>
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
