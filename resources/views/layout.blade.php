<!DOCTYPE HTML>
<html>
  <head>
    <title>
      @yield('title')
    </title>
  </head>
  <body>
    <ul>
      <li><a href="{{route('home')}}">Home</a></li>
      <li><a href="{{route('contact')}}">Contact</a></li>
      <li><a href="{{route('posts.index')}}">Blog Post</a></li>
    </ul>
    @yield('content')
  </body>
</html>