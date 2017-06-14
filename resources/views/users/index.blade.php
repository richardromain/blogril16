@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if(count($users) > 0)
                    <table class="table table-bordered">
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ route('users.show', $user) }}">Voir</a></li>
                                            <li><a href="{{ route('users.edit', $user) }}">Modifier</a></li>
                                            <li>
                                                <a href="{{ route('users.destroy', $user) }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('delete-form').submit();">
                                                    Supprimer
                                                </a>

                                                <form id="delete-form" action="{{ route('users.destroy', $user) }}" method="POST" style="display: none;">
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