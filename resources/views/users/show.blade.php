@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">

        <div class="col-md-3">

            <div class="card bg-dark text-white border border-light">

                <div class="card-header border-info">Tweets</div>

                <div class="card-body">

                    Twitter API

                </div>

            </div>

        </div>

        <div class="col-md-7">

            <div class="card">

                <div class="card-header">{{ $user -> name }}</div>

                <div class="card-body">

                    @if (session('status'))

                        <div class="alert alert-success" role="alert">

                            {{ session('status') }}

                        </div>

                    @endif

                    <h3 class="border-bottom border-dark">Últimas Publicaciones</h3>

                    <ul>

                        @foreach($posts as $post)

                            <li>

                                <a href="{{ $post -> getUrl() }}">{{ $post -> title }}</a>

                            </li>

                        @endforeach

                    </ul>


            </div>
        </div>
    </div>
</div>
@endsection
