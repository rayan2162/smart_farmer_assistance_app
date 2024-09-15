@extends('layouts.app')

@section('carousel')
    @component('components.hero')
        @slot('backgroundImage', 'https://images.unsplash.com/photo-1651844848643-5969245142cc?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8ZmFybSUyMGVxdWlwbWVudHxlbnwwfHwwfHx8MA%3D%3D')
        @slot('title', 'Edit & Update ')
        @slot('leadText', 'Edit and update your equipment information.')
        @slot('description', ' ')
    
        @section('heroContent')
            
        <div class="col-md-8">
            <form action="{{ route('equipment.update', $equipment->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="name">Equipment Name</label>
                    <div class="col-sm-8">
                        <input style="border: #4B6F44 solid" type="text" class="form-control" id="name" name="name" value="{{ $equipment->name }}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="type">Equipment Type</label>
                    <div class="col-sm-8">
                        <input style="border: #4B6F44 solid" type="text" class="form-control" id="type" name="type" value="{{ $equipment->type }}" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="manufacturer">Manufacturer</label>
                    <div class="col-sm-8">
                        <input style="border: #4B6F44 solid" type="text" class="form-control" id="manufacturer" name="manufacturer" value="{{ $equipment->manufacturer }}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="purchase_date">Purchase Date</label>
                    <div class="col-sm-8">
                        <input style="border: #4B6F44 solid" type="date" class="form-control" id="purchase_date" name="purchase_date" value="{{ $equipment->purchase_date }}" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="cost">Cost</label>
                    <div class="col-sm-8">
                        <input style="border: #4B6F44 solid" type="number" step="0.01" class="form-control" id="cost" name="cost" value="{{ $equipment->cost }}" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="condition">Condition</label>
                    <div class="col-sm-8">
                        <input style="border: #4B6F44 solid" type="text" class="form-control" id="condition" name="condition" value="{{ $equipment->condition }}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="location">Location</label>
                    <div class="col-sm-8">
                        <input style="border: #4B6F44 solid" type="text" class="form-control" id="location" name="location" value="{{ $equipment->location }}" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="notes">Notes</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="notes" name="notes" rows="3">{{ $equipment->notes }}</textarea>
                    </div>
                </div>

                <br>

                <button type="submit" class="btn" style="background:#4B6F44; color:white">Update</button>
            </form>

            <form action="{{ route('equipment.destroy', $equipment->id) }}" method="POST" style="margin-top: 20px;">
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
