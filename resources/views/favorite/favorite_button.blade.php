@if (Auth::user()->is_favorite($micropost->id))
  {!! Form::open(['route' => ['Micropost.unfavorite', $micropost->id], 'method' => 'delete']) !!}
    {!! Form::submit('Unfavorite', ['class' =>"btn btn-denger btn-xs"]) !!}
  {!! Form::close() !!}
@else
  {!! Form::open(['route' => ['Micropost.favorite', $micropost->id]]) !!}
    {!! Form::submit('favorite', ['class' =>"btn btn-primary btn-xs"]) !!}
  {!! Form::close() !!}
@endif
