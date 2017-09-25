@extends('layouts.app')

@section('content')

    @foreach($posts as $post)

        @include('partials.post')

    @endforeach

    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Вперед</a>
        <a class="btn btn-outline-secondary disabled" href="#">Назад</a>
    </nav>

@endsection
