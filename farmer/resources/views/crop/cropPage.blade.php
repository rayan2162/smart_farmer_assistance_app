@extends('layouts.app')

@section('carousel')
    @component('components.hero')
        @slot('backgroundImage', 'https://images.unsplash.com/photo-1558963235-eff20c9f7d99?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8cGFkZHklMjBmaWVsZHxlbnwwfDB8MHx8fDI%3D')
        @slot('title', 'Maximize your farm\'s potential ')
        @slot('leadText', 'Increase your farm\'s productivity with our comprehensive crop management solutions.')
        @slot('description', 'From crop planning to harvest tracking, streamline your operations for increased productivity and profitability. Stay organized and informed and utilize resources. ')
    
        @section('heroContent')
            @include('crop.cropForm')
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
            <th scope="col">Planting Date</th>
            <th scope="col">Harvest Date</th>
            <th scope="col">Quantity</th>
            <th scope="col">Location</th>
            <th scope="col">Notes</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($crops as $crop)
            <tr style="border: #4B6F44 solid">
                {{-- <th scope="row">{{ $crop->id }}</th> --}}
                <td>{{ $crop->name }}</td>
                <td>{{ $crop->type }}</td>
                <td>{{ $crop->planting_date}}</td>
                <td>{{ $crop->harvest_date}}</td>
                <td>{{ $crop->quantity }}</td>
                <td>{{ $crop->location }}</td>
                <td>{{ $crop->notes }}</td>
                <td>
                    <a href="{{ route('crop.edit', $crop->id) }}" class="btn btn-sm" style="background-color: #4B6F44; color: white">Edit</a>
                    <form action="{{ route('crop.destroy', $crop->id) }}" method="POST" style="display:inline;">
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