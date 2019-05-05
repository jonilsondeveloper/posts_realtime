@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Postagens em Tempo Real</div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                        <hr>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                        <hr>
                    @endif

                    <form action="{{ route('posts.store') }}" method="post" id="form_new_post">
                        @csrf
                        <div class="form-group">
                            <label for="new_post">Nova Mensagem</label>
                            <textarea class="form-control" name="new_post" id="new_post" cols="83" rows="4" value="{{ old('new_message') }}" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Enviar Posts</button>
                    </form>


                    <br>
                    <hr>
                    <br>

                    <!-- @if (count($posts) > 0)
                        <ul class="list-group" id="posts_list">
                            @foreach ($posts as $post)
                                <li class="list-group-item">
                                    <p class="font-weight-bold">{{ $post->text }}</p>
                                </li>
                                <li class="list-group-item">
                                    <p class="font-weight-bold">{{ $post->text }}</p>
                                    <p class="font-italic">
                                        Autor: {{ $post->user->name }}
                                    </p>
                                    <p class="font-italic">
                                        Data e Hora: {{ date("d/m/Y - H:i:s", strtotime($post->data_time)) }}
                                    </p>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        Nenhuma mensagem salva!
                    @endif -->
                    <ul class="list-group" id="posts_list">

                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
