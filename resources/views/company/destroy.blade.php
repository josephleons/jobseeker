{!!Form::open([
    'method'=>'DELETE',
    'route'=>['destroy.destroy',$comp->id],
    'style'=>'display:inline'])!!}
    
    {!! Form::submit('Delete this records !',['class'=>'btn btn-danger'])!!}
    {!!Form::close() !!}
    