@foreach($posts as $post)
    <h1>{{ $post->title }}</h1>
    <img src="{{$post->image}}" alt="">
@endforeach
