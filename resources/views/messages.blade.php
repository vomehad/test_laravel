@extends('layouts.app')

@section('title-block')
    All Messages
@endsection

@section('content')
    <h1>All Messages</h1>
    @foreach($data as $mes)
        <div class="alert alert-info">
            <h3>{{ $mes->subject }}</h3>
            <p> {{ $mes->email }}</p>
            <p><small>{{ $mes->created_at }}</small></p>
            <a href="#"><button class="bet btn-warning">detali</button></a>
        </div>
    @endforeach
@endsection

