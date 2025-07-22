{{ $post->subject }}

<br><br>

@foreach($post->comments  as $comment)
    {{ $comment->content }}<br/>
@endforeach


{!! Form::open(['route' => 'comment.store']) !!}
    {!! Form::textarea('content', old('content')) !!}
    {!! Form::hidden('post_id', $post->id) !!}
    {!! Form::submit('Comment') !!}
{!! Form::close() !!}

