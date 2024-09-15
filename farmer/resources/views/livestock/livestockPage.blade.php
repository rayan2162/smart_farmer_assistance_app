@extends('layouts.app')

@section('carousel')
    @component('components.hero')
        @slot('backgroundImage', 'https://images.unsplash.com/photo-1441122456239-401e92b73c65?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')
        @slot('title', 'Enhance the health and performance of your livestock')
        @slot('leadText', 'Enhance the well-being and productivity of your livestock with our comprehensive management solutions.')
        @slot('description', 'Monitor health metrics, track feeding schedules with our applcation. With advanced analytics manage your livestock for maximum profitability.')
    
        @section('heroContent')
            @include('livestock.livestockForm')
        @endsection
    @endcomponent
@endsection



@section('content')
<table class="table mt-6" style="border: #4B6F44 solid">
    <thead class="thead" style="background:#4B6F44; color:white; font-weight:bolder">
        <tr>
            <th scope="col">Animal Type</th>
            <th scope="col">Breed</th>
            <th scope="col">Quantity</th>
            <th scope="col">Age</th>
            <th scope="col">Gender</th>
            <th scope="col">Health Status</th>
            <th scope="col">Date Acquired</th>
            <th scope="col">Location</th>
            <th scope="col">Notes</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($livestocks as $livestock)
            <tr style="border: #4B6F44 solid">
                <td>{{ $livestock->animal_type }}</td>
                <td>{{ $livestock->breed }}</td>
                <td>{{ $livestock->quantity }}</td>
                <td>{{ $livestock->age }}</td>
                <td>{{ $livestock->gender }}</td>
                <td>{{ $livestock->health_status }}</td>
                <td>{{ $livestock->date_acquired }}</td>
                <td>{{ $livestock->location }}</td>
                <td>{{ $livestock->notes }}</td>
                <td>
                    <a href="{{ route('livestock.edit', $livestock->id) }}" class="btn btn-sm" style="background-color: #4B6F44; color: white">Edit</a>
                    <form action="{{ route('livestock.destroy', $livestock->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection

@section('footer')
    @include('layouts.footerLongPage')
@endsection