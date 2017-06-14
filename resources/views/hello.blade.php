@extends('layouts.app')
@section('title')
    Hello {{ $name }}
@endsection

@section('content')
    <div class="content">
        Hello {{ $name }}, je suis une view !
    </div>
@endsection()
