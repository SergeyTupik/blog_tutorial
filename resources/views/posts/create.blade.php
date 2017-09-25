@extends('layouts.app')

@section('content')
    <h1>Опубликовать пост</h1>
    <hr>
    <form method="POST" action="/posts">

        {{ csrf_field() }}

        @include('partials.errors')
        <div class="form-group">
            <label for="title">Заголовок</label>
            <input type="text" class="form-control" id="Title" name="title" required>
        </div>
        <div class="form-group">
            <label for="body">Тело поста</label>
            <textarea class="form-control" id="body" name="body" required></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Опубликовать</button>
        </div>

    </form>
@endsection