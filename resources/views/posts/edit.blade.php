@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="{{ route('posts.update', $post) }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
                </div>
                <div class="form-group">
                    <label for="content">Contenu</label>
                    <textarea name="content" class="form-control" id="content">{{ $post->content }}</textarea>
                </div>
                <button type="submit" class="btn btn-default">Mettre à jour</button>
            </form>
        </div>
    </div>
@endsection