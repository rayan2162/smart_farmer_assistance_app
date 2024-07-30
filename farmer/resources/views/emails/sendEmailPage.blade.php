@extends('layouts.app')

@section('content')
<div class="container">
    <br><br>
    <h1>Send an Email</h1>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="/send-email" method="POST">
        @csrf
        <div class="form-group">
            <label for="email" style="font-size: 1.5rem">Your Email:</label>
            <input type="email" name="email" class="form-control" required style="border: solid #4B6F44;">
        </div>
        <div class="form-group">
            <label for="message" style="font-size: 1.5rem">Message:</label>
            <textarea name="message" class="form-control" rows="5" required style="border: solid #4B6F44;"></textarea>
        </div>
        <button type="submit" class="btn" style="background-color:  #4B6F44; color: white;">Send</button>
    </form>
</div>
@endsection

@section('footer')
    @include('layouts.footerShortPage')
@endsection