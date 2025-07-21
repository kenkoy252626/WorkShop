@if(isset($post))
    <form method="POST" action="{{ url('/post/update/' . $post->id) }}">
        @csrf
        @method('POST') {{-- or PUT if your update route uses PUT --}}
        <textarea name="subject" id="subject">{{ $post->subject }}</textarea>
        <button type="submit">Update</button>
    </form>
@else
    <form action="{{ url('post') }}" method="POST">
        @csrf
        <textarea name="subject" id="subject"></textarea>
        <button type="submit">Post</button>
    </form>
@endif
