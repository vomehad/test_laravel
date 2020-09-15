@extends('layouts.app')

@section('title-block')
    Contacts
@endsection

@section('content')
    <h1>Contact page</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('contact-form') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="name">Insert name</label>
            <input type="text" name="name" placeholder="insert" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="insert email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">theme</label>
            <input type="text" name="subject" placeholder="insert" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <input type="text" name="message" placeholder="insert" id="message" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">send</button>
    </form>
@endsection
