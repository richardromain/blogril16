@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Fiche utilisateur</div>
                <div class="panel-body">
                    Nom : {{ $user->name }} <br>
                    Email : {{ $user->email }} <br>
                    <a href="{{ route('users.edit', $user) }}">Editer mon utilisateur</a> <br>
                    <a href="{{ route('users.destroy', $user) }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();">
                        Supprimer l'utilisateur
                    </a>

                    <form id="delete-form" action="{{ route('users.destroy', $user) }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="delete">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
