@extends(layouts.app)

@section('content')
<h3>{{$post->title}}</h3>
<div class="well">
    {{$post->body}}
</div>
<small>Written On{{$post->created_at}}</small>
<hr>
<a href="/posts/{{$post->id}}/edit" class="fas fa-edit">edit</a>
@endsection