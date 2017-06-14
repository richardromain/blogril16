@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label for="title">Titre</label>
                    <input type="text" class="form-control" id="title" name="title">

                    @if ($errors->has('title'))
                        <span class="help-block">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                    <label for="content">Contenu</label>
                    <textarea name="content" class="form-control" id="content"></textarea>
                    @if ($errors->has('content'))
                        <span class="help-block">
                            <strong>{{ $errors->first('content') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="picture">Image</label>
                    <input type="file" id="picture" name="image">
                </div>
                <button type="submit" class="btn btn-default">Enregistrer</button>
            </form>
        </div>
    </div>
@endsection