@extends('layouts.app')


@section('content')

<div class="container mt-5">
    <h1 class="mb-4">Unapproved Users</h1>
    @if($users->isEmpty())
        <p>No unapproved users found.</p>
    @else
        <table class="table table-bordered"  style="border: #4B6F44 solid">
            <thead>
                <tr>
                    <th style="border: #4B6F44 solid">Name</th>
                    <th style="border: #4B6F44 solid">Email</th>
                    <th style="border: #4B6F44 solid">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td  style="border: #4B6F44 solid">{{ $user->name }}</td>
                        <td  style="border: #4B6F44 solid">{{ $user->email }}</td>
                        <td  style="border: #4B6F44 solid">
                            <form method="POST" action="{{ route('admin.users.approve', $user->id) }}">
                                @csrf
                                <button type="submit" class="btn" style="background-color: #4B6F44; color: white">Approve</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

@endsection


@section('footer')
    @include('layouts.footerShortPage')
@endsection