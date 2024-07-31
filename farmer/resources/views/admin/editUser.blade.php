@extends('layouts.app')


@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Edit User</h1>
        <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required style="border: #4B6F44 solid">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required style="border: #4B6F44 solid">
            </div>
            <button type="submit" class="btn" style="background-color: #4B6F44; color:white">Update</button>
        </form>
    </div>

    @endsection


    @section('footer')
        @include('layouts.footerShortPage')
    @endsection
