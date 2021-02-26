@extends('layouts.app')
@section('title-block')Contacts@endsection
@section('content')
    <h1>Contact</h1>

    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contact-form')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Enter your name</label>
            <input type="text" name="name" placeholder="Enter your name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Enter your Email</label>
            <input type="text" name="email" placeholder="Enter your Email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control" placeholder="Enter your message"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Send</button>
    </form>
@endsection
