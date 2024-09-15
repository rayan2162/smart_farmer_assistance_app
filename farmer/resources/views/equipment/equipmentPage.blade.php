@extends('layouts.app')

@section('carousel')
    @component('components.hero')
        @slot('backgroundImage', 'https://images.unsplash.com/photo-1651844848643-5969245142cc?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8ZmFybSUyMGVxdWlwbWVudHxlbnwwfHwwfHx8MA%3D%3D')
        @slot('title', 'Keep your farm running with equipment storage solutions')
        @slot('leadText', 'Keep your farm running smoothly with our reliable equipment storage solutions.')
        @slot('description', ' From tractors to implements, organize your valuable assets. With convenient storage tracking protect your equipment investment and optimize operational efficiency.')
    
        @section('heroContent')
            @include('equipment.equipmentForm')
        @endsection
    @endcomponent
@endsection



@section('content')
<table class="table mt-6" style="border: #4B6F44 solid">
    <thead class="thead" style="background:#4B6F44; color:white; font-weight:bolder">
        <tr>
            {{-- <th scope="col">#</th> --}}
            <th scope="col">Name</th>
            <th scope="col">Type</th>
            <th scope="col">Manufacturer</th>
            <th scope="col">Purchase Date</th>
            <th scope="col">Cost</th>
            <th scope="col">Condition</th>
            <th scope="col">Location</th>
            <th scope="col">Notes</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($equipments as $equipment)
            <tr style="border: #4B6F44 solid">
                {{-- <th scope="row">{{ $equipment->id }}</th> --}}
                <td>{{ $equipment->name }}</td>
                <td>{{ $equipment->type }}</td>
                <td>{{ $equipment->manufacturer }}</td>
                <td>{{ $equipment->purchase_date }}</td>
                <td>${{ number_format($equipment->cost, 2) }}</td>
                <td>{{ $equipment->condition }}</td>
                <td>{{ $equipment->location }}</td>
                <td>{{ $equipment->notes }}</td>
                <td>
                    <a href="{{ route('equipment.edit', $equipment->id) }}" class="btn btn-sm" style="background-color: #4B6F44; color: white">Edit</a>
                    <form action="{{ route('equipment.destroy', $equipment->id) }}" method="POST" style="display:inline;">
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