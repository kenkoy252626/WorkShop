<a href="{{ url('post/create') }}">Create New Post</a>
<br/><br/>

@foreach($posts as $post)
    {{ $post->subject }}<br/>
    <a href="{{ url('post/' . $post->id . '/edit') }}">Edit</a>
    <form method="POST" action="{{ url('/post/delete/' . $post->id) }}">
        @csrf
        <button type="submit">Delete</button>
    </form>
    <br/>
@endforeach
