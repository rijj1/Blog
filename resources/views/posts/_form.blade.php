<p>
  <label>Title</label>
  <input type='text' name='title' value="{{old('title',$post->title ?? null)}}"><br>
  <label>Content</label>
  <input type='text' name='content' value="{{old('content',$post->content ?? null)}}"><br>
  @if ($errors->any())
<div style="color:red">

  @foreach ($errors->all() as $error)
      <li>{{$error}}</li>
  @endforeach

</div>
@endif
</p>