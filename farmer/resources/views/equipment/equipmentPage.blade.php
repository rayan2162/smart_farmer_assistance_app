@extends('layouts.app')

@section('carousel')
    @component('components.hero')
        @slot('backgroundImage', 'https://images.unsplash.com/photo-1651844848643-5969245142cc?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8ZmFybSUyMGVxdWlwbWVudHxlbnwwfHwwfHx8MA%3D%3D')
        @slot('title', 'Keep your farm running with equipment storage solutions')
        @slot('leadText', 'Keep your farm running smoothly with our reliable equipment storage solutions.')
        @slot('description', ' From tractors to implements, organize your valuable assets. With convenient storage tracking protect your equipment investment and optimize operational efficiency.')
    
        @section('heroContent')
            @include('layouts.demoForm')
        @endsection
    @endcomponent
@endsection



@section('content')
    @include('./demoText')
@endsection