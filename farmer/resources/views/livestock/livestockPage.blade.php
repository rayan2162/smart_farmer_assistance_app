@extends('layouts.app')

@section('carousel')
    @component('components.hero')
        @slot('backgroundImage', 'https://images.unsplash.com/photo-1441122456239-401e92b73c65?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')
        @slot('title', 'Enhance the health and performance of your livestock')
        @slot('leadText', 'Enhance the well-being and productivity of your livestock with our comprehensive management solutions.')
        @slot('description', 'Monitor health metrics, track feeding schedules with our applcation. With advanced analytics manage your livestock for maximum profitability.')
    
        @section('heroContent')
            @include('layouts.demoForm')
        @endsection
    @endcomponent
@endsection



@section('content')
    @include('./demoText')
@endsection