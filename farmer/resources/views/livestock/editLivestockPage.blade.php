@extends('layouts.app')

@section('carousel')
    @component('components.hero')
        @slot('backgroundImage', 'https://images.unsplash.com/photo-1441122456239-401e92b73c65?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')
        @slot('title', 'Edit & Update ')
        @slot('leadText', 'Edit and update your livestock information.')
        @slot('description', ' ')
    
        @section('heroContent')
            
        <div class="col-md-8">
            <form action="{{ route('livestock.update', $livestock->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="animal_type">Animal Type</label>
                    <div class="col-sm-8">
                        <input style="border: #4B6F44 solid" type="text" class="form-control" id="animal_type" name="animal_type" value="{{ $livestock->animal_type }}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="breed">Breed</label>
                    <div class="col-sm-8">
                        <input style="border: #4B6F44 solid" type="text" class="form-control" id="breed" name="breed" value="{{ $livestock->breed }}" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="quantity">Quantity</label>
                    <div class="col-sm-8">
                        <input style="border: #4B6F44 solid" type="number" class="form-control" id="quantity" name="quantity" value="{{ $livestock->quantity }}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="age">Age</label>
                    <div class="col-sm-8">
                        <input style="border: #4B6F44 solid" type="text" class="form-control" id="age" name="age" value="{{ $livestock->age }}" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="gender">Gender</label>
                    <div class="col-sm-8">
                        <input style="border: #4B6F44 solid" type="text" class="form-control" id="gender" name="gender" value="{{ $livestock->gender }}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="health_status">Health Status</label>
                    <div class="col-sm-8">
                        <input style="border: #4B6F44 solid" type="text" class="form-control" id="health_status" name="health_status" value="{{ $livestock->health_status }}">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="date_acquired">Date Acquired</label>
                    <div class="col-sm-8">
                        <input style="border: #4B6F44 solid" type="date" class="form-control" id="date_acquired" name="date_acquired" value="{{ $livestock->date_acquired }}" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="location">Location</label>
                    <div class="col-sm-8">
                        <input style="border: #4B6F44 solid" type="text" class="form-control" id="location" name="location" value="{{ $livestock->location }}" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="notes">Notes</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="notes" name="notes" rows="3">{{ $livestock->notes }}</textarea>
                    </div>
                </div>

                <br>

                <button type="submit" class="btn" style="background:#4B6F44; color:white">Update</button>
            </form>

            <form action="{{ route('livestock.destroy', $livestock->id) }}" method="POST" style="margin-top: 20px;">
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
