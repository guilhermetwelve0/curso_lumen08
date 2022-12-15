@extends('site.master')
@section('content')
<h2>Posts</h2>
   @foreach ($posts as $post)
      <li> <a href="/post/{{ $post->slug }}">{{ $post->title }} - <small>{{ $post->user->firstName}} {{ $post -> user->lastName }}</small></a></li>
   @endforeach
@stop

