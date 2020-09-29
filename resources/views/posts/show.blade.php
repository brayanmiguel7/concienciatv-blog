@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $post -> title }}</div>

                <div class="card-body">
                    @if (session('status'))

                        <div class="alert alert-success" role="alert">

                            {{ session('status') }}

                        </div>

                    @endif

                   {{ $post -> content }}

                </div>

                @can('update', $post)

                    <div class="card-footer">

                        <a href="{{ url('posts/'.$post -> id.'/edit') }}" class="btn btn-primary">Editar Publicación</a>

                    </div>

                @endcan

            </div>
        </div>
    </div>
</div>
@endsection
