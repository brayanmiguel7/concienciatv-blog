@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1 class="mb-2 text-white">Últimas Publicaciones</h1>

            @foreach($posts as $post)

                <div class="card mb-2">

                    <div class="card-header">

                        <a href="{{ $post -> getUrl() }}">{{ $post -> id }}. {{ $post -> title }}</a>

                    </div>

                    <div class="card-body">

                        <p>{{ $post -> content }}</p>

                    </div>

                    <div class="card-footer">

                        Autor:

                        <a href="{{ url('periodistas/'.$post -> user_id) }}">{{ $post -> user -> name }}</a>

                    </div>

                </div>

            @endforeach

            <div class="col-10 ml-auto">

                {{ $posts -> links() }}

            </div>

        </div>
    </div>
</div>
@endsection
