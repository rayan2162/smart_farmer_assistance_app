@extends('layouts.app')

@section('content')
<div class="jumbotron" style="background-image: url('https://images.unsplash.com/photo-1558963235-eff20c9f7d99?w=600&amp;auto=format&amp;fit=crop&amp;q=60&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8cGFkZHklMjBmaWVsZHxlbnwwfDB8MHx8fDI%3D'); background-size: cover; background-position: center; height: 80vh;">
    <div class="row" style="background: rgba(0, 0, 0, 0.5); padding: 20px; border-radius: 10px;">
        <!-- Left Column -->
        <div class="col-md-8" style="padding: 20px; border-radius: 10px;">
            <h1 class="display-5 text-white">Update Crop Information</h1>
            <p class="lead text-white">Edit the details of your crop.</p>
            <hr class="my-4 text-dark">
        </div>
        <!-- Right Column -->
        <div class="col-md-4">
            <form action="{{ route('crop.update', $crop->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label text-white" for="name">Crop Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="name" name="name" value="{{ $crop->name }}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label text-white" for="type">Crop Type</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="type" name="type" value="{{ $crop->type }}" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label text-white" for="planting_date">Planting Date</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="planting_date" name="planting_date" value="{{ $crop->planting_date }}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-4 col-form-label text-white" for="harvest_date">Harvest Date</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="harvest_date" name="harvest_date" value="{{ $crop->harvest_date }}">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label text-white" for="quantity">Quantity</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $crop->quantity }}" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label text-white" for="location">Location</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="location" name="location" value="{{ $crop->location }}" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label text-white" for="notes">Notes</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="notes" name="notes" rows="3">{{ $crop->notes }}</textarea>
                    </div>
                </div>

                <br>

                <button type="submit" class="btn" style="background:#4B6F44; color:white">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
