@extends('layouts.app')

@section('title-block')Updated version @endsection

@section('content')
<h1>Updated version</h1>

<form action="{{ route('contact-update-submit', $data->id) }}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" value="{{$data->name}}" placeholder="Your name" id="name" class="form-control">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" value="{{$data->email}}" placeholder="Your email" id="email" class="form-control">
    </div>

    <div class="form-group">
        <label for="subject">Purpose</label>
        <input type="text" name="subject" value="{{$data->subject}}" placeholder="Your purpose" id="subject" class="form-control">
    </div>

    <div class="form-group">
        <label for="message">Your message</label>
        <textarea name="message" id="message" placeholder="Your message" class="form-control">{{$data->message}}</textarea>
    </div>

    <button type="submit" class="btn btn-success">Edit</button>
</form>

@endsection

