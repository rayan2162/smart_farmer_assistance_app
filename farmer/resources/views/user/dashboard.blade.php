@extends('layouts.app')


@section('content')

<div class="jumbotron" style="background-image: url('https://images.unsplash.com/photo-1712474727361-e0fb5461086f?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjQxfHxmYXJtZXJzfGVufDB8MHwwfHx8Mg%3D%3D'); background-size: cover; background-position: center; height: 87vh;">
    <div class="row" style="background: rgba(0, 0, 0, 0.5); padding: 20px; border-radius: 10px;">
        <!-- Left Column -->
            <div class="col-md-4" style="padding: 20px; border-radius: 10px;">
                <h1 class="text-white">hello, {{ Auth::user()->name }}</h1>
                <h4 class="text-white">Email: {{ Auth::user()->email }}</h4>
            </div>
        <!-- Right Column -->
        <div class="col-md-8">
            <a class="weatherwidget-io" style="border-radius: 10px" href="https://forecast7.com/en/22d3691d78/chittagong/" data-label_1="CHITTAGONG" data-label_2="WEATHER" data-font="Arial" data-icons="Climacons Animated" data-theme="weather_one" >CHITTAGONG WEATHER</a>
            <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
            </script>
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