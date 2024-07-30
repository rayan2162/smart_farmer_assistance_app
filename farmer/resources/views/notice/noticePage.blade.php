@extends('layouts.app')

@section('carousel')

    @component('components.hero')
    
        @slot('backgroundImage', 'https://images.unsplash.com/photo-1626984232613-f20f15589bee?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')
        @slot('title', 'Government / Training Notices')
        @slot('leadText', 'Boost your farming expertise with local training programs and workshops.')
        @slot('description', 'Learn the latest management techniques and livestock care from experienced instructors. Stay updated with our notice system and continually improve your skills.')

    @endcomponent
@endsection



@section('content')
    @include('./demoText')
@endsection

@section('footer')
    @include('layouts.footerLongPage')
@endsection