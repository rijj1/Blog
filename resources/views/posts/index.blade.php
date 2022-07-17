@extends('layout')

@section('title')
  Blog Posts
@endsection

@section("content")
  {{-- @foreach ($posts as $post)
      <p>
        <h3>{{$post->title}}</h3>
      </p> 
  @endforeach --}}
  
  @forelse ($posts as $post)
  <p>
    <h3>
      <a href={{route('posts.show',['post'=>$post])}}>{{$post->title}}</a>
    </h3>
      <a href="{{route('posts.edit',['post'=>$post->id])}}">Edit</a>
      <form method="POST" action="{{route("posts.destroy",['post'=>$post->id])}}">
        @csrf
        @method('DELETE')
      <input type='submit' value='Delete'>
      </form>
  </p>
  @empty
  <p><h3>No Posts Yet!</h3></p>
  @endforelse

@endsection
