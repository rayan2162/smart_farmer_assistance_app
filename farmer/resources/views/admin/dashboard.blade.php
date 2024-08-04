@extends('layouts.app')


@section('content')

<div class="jumbotron" style="background-image: url('https://images.unsplash.com/photo-1553877522-43269d4ea984?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDN8fHxlbnwwfHx8fHw%3D'); background-size: cover; background-position: center; height: 87vh;">
    <div class="row" style="background: rgba(0, 0, 0, 0.5); padding: 20px; border-radius: 10px;">
        <!-- Left Column -->
            <div class="col-md-4" style="padding: 20px; border-radius: 10px;">
                <h1 class="text-white">hello, {{ Auth::user()->name }}</h1>
                <h4 class="text-white">Email: {{ Auth::user()->email }}</h4>
            </div>
        <!-- Right Column -->
        <div class="col-md-8">
        </div>

        {{-- New row --}}
        <div class="row">
            <a class="btn btn-md" href="/send-email" role="button" style="background:#4B6F44; color:white; width:10% ">Talk with us!</a>
        </div>
    </div>
</div>

@endsection


@section('footer')
    @include('layouts.footerShortPage')
@endsection