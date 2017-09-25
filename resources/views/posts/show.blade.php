@extends('layouts.app')

@section('content')

    <h1> {{ $post->title }}</h1>

    <p>{{ $post->body }}</p>
    <hr>

    <div class="comments">
        <ul class="list-group">
            @foreach ($post->comments as $comment)
                <li class="list-group-item">
                    <article>
                        <strong>
                            {{ $comment->created_at->diffForHumans() }}: &nbsp;
                        </strong>
                        {{ $comment->body }}
                    </article>
                </li>
            @endforeach
        </ul>
    </div>
    <hr>
    <div class="card">
        <div class="card-block">
            <form method="POST" action="/posts/{{ $post->id }}/comments">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="body" placeholder="Ваш комментарий" class="form-control" required></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Добавить комментарий</button>
                </div>

            </form>
        </div>
        @include('partials.errors')
    </div>
@endsection