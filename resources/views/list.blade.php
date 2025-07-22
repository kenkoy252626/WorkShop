<a href="{{ url('post/create') }}">Create New Post</a>
<br/><br/>

@foreach($posts as $post)
    {{ $post->subject }}
    {!! Html::link('post/'.$post->id, 'View') !!}
    {!! Html::link('post/'.$post->id.'/edit', 'Edit') !!}
    
  {!! Form::open(['url' => ['post/delete', $post->id], 'method' => 'DELETE']) !!}
    {!! Form::submit('Delete') !!}
{!! Form::close() !!}

    <br/>
@endforeach
