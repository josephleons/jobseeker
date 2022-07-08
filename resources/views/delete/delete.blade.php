{!!Form::open([
'method'=>'DELETE',
'route'=>['delete.delete',$user->id],
'style'=>'display:inline'])!!}

{!! Form::submit('Delete this records !',['class'=>'btn btn-danger'])!!}
{!!Form::close() !!}
