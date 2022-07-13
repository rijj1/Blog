@extends('layout')

@section('title')
{{$data['title']}}
@endsection

@section("content")
{!! $welcome !!} {{$data['content']}}
@endsection
