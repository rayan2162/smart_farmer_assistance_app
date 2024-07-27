@extends('layouts.app')

@section('carousel')
    @component('components.hero')
        @slot('backgroundImage', 'https://images.unsplash.com/photo-1558963235-eff20c9f7d99?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8cGFkZHklMjBmaWVsZHxlbnwwfDB8MHx8fDI%3D')
        @slot('title', 'Maximize your farm\'s potential ')
        @slot('leadText', 'Increase your farm\'s productivity with our comprehensive crop management solutions.')
        @slot('description', 'From crop planning to harvest tracking, streamline your operations for increased productivity and profitability. Stay organized and informed and utilize resources. ')
    
        @section('heroContent')
            @include('layouts.demoForm')
        @endsection
    @endcomponent
@endsection



@section('content')
    @include('./demoText')
@endsection