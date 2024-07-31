@extends('layouts.app')


@section('content')

<div class="container mt-5">
    <h1 class="mb-4">All Approved Users</h1>
    @if($users->isEmpty())
        <p>No approved users found.</p>
    @else
        <table style="border: #4B6F44 solid" class="table table-bordered">
            <thead>
                <tr>
                    <th style="border: #4B6F44 solid">Name</th>
                    <th style="border: #4B6F44 solid">Email</th>
                    <th style="border: #4B6F44 solid">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr style="border: #4B6F44 solid">
                        <td style="border: #4B6F44 solid">{{ $user->name }}</td>
                        <td style="border: #4B6F44 solid">{{ $user->email }}</td>
                        <td style="border: #4B6F44 solid">
                            <!-- Edit button -->
                            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-sm" style="background-color: #4B6F44; color: white">Edit</a>
                            
                            <!-- Delete button -->
                            <form method="POST" action="{{ route('admin.users.destroy', $user->id) }}" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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