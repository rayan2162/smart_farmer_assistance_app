@extends('layouts.app')

@section('carousel')
    @component('components.hero')
        @slot('backgroundImage', 'https://images.unsplash.com/photo-1558963235-eff20c9f7d99?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8cGFkZHklMjBmaWVsZHxlbnwwfDB8MHx8fDI%3D')
        @slot('title', 'Edit & Update ')
        @slot('leadText', 'Edit and update your agro-forestry information.')
        @slot('description', ' ')
    
        @section('heroContent')
            
        <div class="col-md-8">
            <form action="{{ route('agroforestry.update', $agroforestry->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="name">AgroForestry Name</label>
                    <div class="col-sm-8">
                        <input style="border: #4B6F44 solid" type="text" class="form-control" id="name" name="name" value="{{ $agroforestry->name }}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="type">AgroForestry Type</label>
                    <div class="col-sm-8">
                        <input style="border: #4B6F44 solid" type="text" class="form-control" id="type" name="type" value="{{ $agroforestry->type }}" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="planting_date">Planting Date</label>
                    <div class="col-sm-8">
                        <input style="border: #4B6F44 solid" type="date" class="form-control" id="planting_date" name="planting_date" value="{{ $agroforestry->planting_date }}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="harvest_date">Harvest Date</label>
                    <div class="col-sm-8">
                        <input style="border: #4B6F44 solid" type="date" class="form-control" id="harvest_date" name="harvest_date" value="{{ $agroforestry->harvest_date }}">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="quantity">Quantity</label>
                    <div class="col-sm-8">
                        <input style="border: #4B6F44 solid" type="number" class="form-control" id="quantity" name="quantity" value="{{ $agroforestry->quantity }}" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="location">Location</label>
                    <div class="col-sm-8">
                        <input style="border: #4B6F44 solid" type="text" class="form-control" id="location" name="location" value="{{ $agroforestry->location }}" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="notes">Notes</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="notes" name="notes" rows="3">{{ $agroforestry->notes }}</textarea>
                    </div>
                </div>

                <br>

                <button type="submit" class="btn" style="background:#4B6F44; color:white">Update</button>
            </form>

            <form action="{{ route('agroforestry.destroy', $agroforestry->id) }}" method="POST" style="margin-top: 20px;">
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
