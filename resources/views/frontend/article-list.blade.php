
@extends('frontend.layout')
@section('content')
@foreach($posts as $post)
        <article class="entry">

            <div class="entry-img">
                <img src="{{ $post->image }}" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
                <a href="/post/{{ $post->id }}">{{ $post->title }}</a>
            </h2>



            <div class="entry-content">

                <div class="read-more">
                    <a href="/post/{{ $post->id }}">Читать дальше</a>
                </div>
            </div>

        </article><!-- End blog entry -->
@endforeach

@endsection
