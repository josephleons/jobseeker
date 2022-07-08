{!!Form::open([
    'method'=>'DELETE',
    'route'=>['destroy.destroy',$post->id],
    'style'=>'display:inline'])!!}
    
    {!! Form::submit('Delete this records !',['class'=>'btn btn-danger'])!!}
    {!!Form::close() !!}
    