@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if(count($posts) > 0)
                    <table class="table table-bordered">
                        <tr>
                            <th>#</th>
                            <th>Titre</th>
                            <th>Auteur</th>
                            <th>Actions</th>
                        </tr>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->user->name }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ route('posts.show', $post) }}">Voir</a></li>
                                            <li><a href="{{ route('posts.edit', $post) }}">Modifier</a></li>
                                            <li>
                                                <a href="{{ route('posts.destroy', $post) }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();">
                                                    Supprimer
                                                </a>

                                                <form id="delete-form" action="{{ route('posts.destroy', $post) }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="_method" value="DELETE">
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                @else
                    <p>Il n'y a pas encore de cartes.</p>
                @endif
            </div>
        </div>
    </div>
@endsection