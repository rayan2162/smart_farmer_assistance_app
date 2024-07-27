@extends('layouts.app')

@section('carousel')

    @component('components.hero')

        @slot('backgroundImage', 'https://images.unsplash.com/photo-1597714026720-8f74c62310ba?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')

        @slot('title', 'Agroforestry Solutions')

        @slot('leadText', 'Enhance the well-being and productivity of your livestock with our comprehensive management solutions. ')

        @slot('description', 'Enhance your agroforestry with our tailored solutions for tree-based agriculture. Boost productivity and sustainability in orchards, groves, or timber stands using advanced tools and resources. Achieve long-term success with our management application. ')
    
        @section('heroContent')
            @include('layouts.demoForm')
        @endsection

    @endcomponent

@endsection



@section('content')
    @include('./demoText')
@endsection