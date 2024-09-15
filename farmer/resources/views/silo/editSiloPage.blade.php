@extends('layouts.app')

@section('carousel')
    @component('components.hero')
        @slot('backgroundImage', 'https://images.unsplash.com/photo-1457414104202-9d4b4908f285?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cGlsZSUyMG9mJTIwc2Fja3N8ZW58MHwwfDB8fHwy')
        @slot('title', 'Edit & Update Silo')
        @slot('leadText', 'Edit and update your silo information.')
        @slot('description', ' ')
    
        @section('heroContent')
            
        <div class="col-md-8">
            <form action="{{ route('silo.update', $silo->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="name">Silo Name</label>
                    <div class="col-sm-8">
                        <input style="border: #4B6F44 solid" type="text" class="form-control" id="name" name="name" value="{{ $silo->name }}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="type">Silo Type</label>
                    <div class="col-sm-8">
                        <input style="border: #4B6F44 solid" type="text" class="form-control" id="type" name="type" value="{{ $silo->type }}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="capacity">Capacity</label>
                    <div class="col-sm-8">
                        <input style="border: #4B6F44 solid" type="number" step="0.01" class="form-control" id="capacity" name="capacity" value="{{ $silo->capacity }}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="location">Location</label>
                    <div class="col-sm-8">
                        <input style="border: #4B6F44 solid" type="text" class="form-control" id="location" name="location" value="{{ $silo->location }}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="material">Material</label>
                    <div class="col-sm-8">
                        <input style="border: #4B6F44 solid" type="text" class="form-control" id="material" name="material" value="{{ $silo->material }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="notes">Notes</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="notes" name="notes" rows="3">{{ $silo->notes }}</textarea>
                    </div>
                </div>

                <br>

                <button type="submit" class="btn" style="background:#4B6F44; color:white">Update</button>
            </form>

            <form action="{{ route('silo.destroy', $silo->id) }}" method="POST" style="margin-top: 20px;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>

        </div>

        @endsection
    @endcomponent
@endsection


@section('footer')
    @include('layouts.footerShortPage')
@endsection
