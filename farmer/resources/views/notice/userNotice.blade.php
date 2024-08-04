@extends('layouts.app')

@section('carousel')
    @component('components.hero')
        @slot('backgroundImage', 'https://images.unsplash.com/photo-1626984232613-f20f15589bee?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')
        @slot('title', 'Stay Informed with Latest Notices')
        @slot('leadText', 'Keep up-to-date with important announcements and information.')
        @slot('description', 'Access and manage notices effectively for your farm operations.')
    
        @section('heroContent')
        @endsection
    @endcomponent
@endsection

@section('content')
<table class="table mt-6" style="border: #4B6F44 solid">
    <thead class="thead" style="background:#4B6F44; color:white; font-weight:bolder">
        <tr>
            <th style="border: #4B6F44 solid" scope="col">Notice Title</th>
            <th style="border: #4B6F44 solid" scope="col">PDF File</th>
            <th style="border: #4B6F44 solid" scope="col">Publish Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach($notices as $notice)
            <tr style="border: #4B6F44 solid">
                <td style="border: #4B6F44 solid" >{{ $notice->title }}</td>
                <td><a href="{{ asset('storage/notices/' . $notice->file) }}" target="_blank"  style="border: #4B6F44 solid" >View PDF</a></td>
                <td  style="border: #4B6F44 solid" >{{ $notice->publish_date }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('footer')
    @include('layouts.footerLongPage')
@endsection
