@extends('layouts.app')

@section('carousel')
    @component('components.hero')
        @slot('backgroundImage', 'https://images.unsplash.com/photo-1457414104202-9d4b4908f285?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cGlsZSUyMG9mJTIwc2Fja3N8ZW58MHwwfDB8fHwy')
        @slot('title', 'Efficiently manage your crop storage')
        @slot('leadText', 'Ensure proper storage tracking to preserve crop quality and reduce spoilage.')
        @slot('description', 'By nventory management, streamline your crop management process and protect your harvest investment. ')
    
        @section('heroContent')
            @include('layouts.demoForm')
        @endsection
    @endcomponent
@endsection



@section('content')
    @include('./demoText')
@endsection

@section('footer')
    @include('layouts.footerLongPage')
@endsection