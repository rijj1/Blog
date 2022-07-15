@extends('layout')

@section('title')
Create Posts
@endsection

@section("content")
<form method='POST' action="{{route('posts.store')}}">
@csrf
<p>
  <label>Title</label>
  <input type='text' name='title'><br>
  <label>Content</label>
  <input type='text' name='content'><br>
  <button type="submit">Create</button>
</p>
</form>
@endsection
