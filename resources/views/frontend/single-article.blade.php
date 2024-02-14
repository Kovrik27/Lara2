@extends('frontend.layout')
@section('content')

        <article class="entry">

            <div class="entry-img">
                <img src="{{ $post->image }}" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
                <a href="/article/{{ $post->id }}">{{ $post->title }}</a>
            </h2>



            <div class="entry-content">

                <p>
                  {{ $post->content }}
                </p>
            </div>

        </article><!-- End blog entry -->
@endsection
