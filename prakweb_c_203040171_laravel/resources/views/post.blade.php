
@extends('layout.main')

@section('container')
<article class="mb-5">
    <h2>{{ $post->title }}</h2>
    <p>By. Agung alfatah in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    {!! $post->body !!}
</article>
<a href="/blog">back to posts</a>
@endsection


