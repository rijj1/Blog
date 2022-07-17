@extends('layout')

@section('title')
Edit Posts
@endsection

@section("content")
<form method='POST' action="{{route('posts.update',['post'=>$post->id])}}">
@csrf
@method('PUT')

@include('posts._form')

<button type="submit">Update</button>
</form>
@endsection
