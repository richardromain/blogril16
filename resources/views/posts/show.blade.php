@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Mon article</div>
                <div class="panel-body">
                    Titre : {{ $post->title }} <br>
                    {{  }}
                    Contenu : {{ $post->content }} <br>
                    Auteur : {{ $post->user->name }} <br>
                    <img src="{{ asset('img/posts/'.$post->picture) }}" alt="{{ $post->picture }}"> <br>

                    <a href="{{ route('posts.edit', $post) }}">Editer mon article</a> <br>
                    <a href="{{ route('posts.destroy', $post) }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();">
                        Supprimer le post
                    </a>

                    <form id="delete-form" action="{{ route('posts.destroy', $post) }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="delete">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
