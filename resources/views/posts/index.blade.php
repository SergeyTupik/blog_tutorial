@extends('layouts.app')

@section('content')

    @foreach($posts as $post)

        @include('partials.post')

    @endforeach

    {{ $posts->links() }}

@endsection
