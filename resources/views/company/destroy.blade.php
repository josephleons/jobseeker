{!!Form::open([
    'method'=>'DELETE',
    'route'=>['destroy.destroy',$company->id],
    'style'=>'display:inline'])!!}
    
    {!! Form::submit('Delete this records !',['class'=>'btn btn-danger'])!!}
    {!!Form::close() !!}
    