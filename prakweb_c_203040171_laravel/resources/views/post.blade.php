
@extends('layout.main')

@section('container')
<article class="mb-5">
    <h2>{{ $post->title }}</h2>
    <p>By. <a class="text-decoration-none" href="#">{{ $post->user->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    {!! $post->body !!}
</article>
<a class="d-block mt-3" href="/blog">back to posts</a>
@endsection


