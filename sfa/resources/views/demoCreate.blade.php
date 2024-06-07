@extends('layout.main')

@section('navbar')
    @include('layout.navbar')
@endsection


@section('content')
<div id="booking" class="section" style="background-image: url('https://source.unsplash.com/grass-field-with-mountain-range-lajQENYXCdM'); background-size: cover; background-position: center; height:86vh">
    <br><br><br><br>
    <div class="container" style="background: rgba(0, 0, 0, 0.5); padding: 20px; border-radius: 10px;">
    <div class="section-center">
    <div class="container">
    <div class="row">
    <div class="col-md-7 col-md-push-5">
    <div class="booking-cta">
    <h1 style="color:white; font-weight:bold">Make your reservation</h1>
    <p style="color:white;" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi facere, soluta magnam consectetur molestias itaque
    ad sint fugit architecto incidunt iste culpa perspiciatis possimus voluptates aliquid consequuntur cumque quasi.
    Perspiciatis.
    </p>
    </div>
    </div>
    <div class="col-md-4 col-md-pull-7">
    <div class="booking-form">
    <form>
    <div class="form-group">
    <span class="form-label" style="color:white; font-weight:bold">Your Destination</span>
    <input class="form-control" type="text" placeholder="Enter a destination or hotel name">
    </div>
    <div class="form-group">
        <span class="form-label" style="color:white; font-weight:bold">Your Destination</span>
        <input class="form-control" type="text" placeholder="Enter a destination or hotel name">
        </div>
    <div class="form-group" style="color:white; font-weight:bold">
        <span class="form-label">Your Destination</span>
        <input class="form-control" type="text" placeholder="Enter a destination or hotel name">
        </div>
<div class="form-group">
        <span class="form-label" style="color:white; font-weight:bold">Your Destination</span>
        <input class="form-control" type="text" placeholder="Enter a destination or hotel name">
        </div>
    <div class="row">
    <div class="col-sm-6">
    <div class="form-group">
    <span class="form-label" style="color:white; font-weight:bold">Check In</span>
    <input class="form-control" type="date" required>
    </div>
    </div>
    <div class="col-sm-6">
    <div class="form-group">
    <span class="form-label" style="color:white; font-weight:bold">Check out</span>
    <input class="form-control" type="date" required>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-sm-4">
    <div class="form-group">
    <span class="form-label" style="color:white; font-weight:bold">Rooms</span>
    <select class="form-control">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    </select>
    <span class="select-arrow"></span>
    </div>
    </div>
    <div class="col-sm-4">
    <div class="form-group">
    <span class="form-label" style="color:white; font-weight:bold">Adults</span>
    <select class="form-control">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    </select>
    <span class="select-arrow"></span>
    </div>
    </div>
    <div class="col-sm-4">
    <div class="form-group">
    <span class="form-label" style="color:white; font-weight:bold">Children</span>
    <select class="form-control">
    <option>0</option>
    <option>1</option>
    <option>2</option>
    </select>
    <span class="select-arrow"></span>
    </div>
    </div>
    </div>
    <div class="form-btn">
    <button class="btn" style="background: #4B6F44; color:white; font-weight:bold">Check availability</button>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</div>
@endsection