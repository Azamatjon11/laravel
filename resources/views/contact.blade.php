@extends('layouts.app')

@section('title-block')Contacts @endsection

@section('content')
<h1>Contacts</h1>

<form action="{{ route('contact-form') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Your name" id="name" class="form-control">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Your email" id="email" class="form-control">
    </div>

    <div class="form-group">
        <label for="subject">Purpose</label>
        <input type="text" name="subject" placeholder="Your purpose" id="subject" class="form-control">
    </div>

    <div class="form-group">
        <label for="message">Your message</label>
        <textarea name="message" id="message" placeholder="Your message" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Send</button>
</form>

@endsection

