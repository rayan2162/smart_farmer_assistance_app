@extends('layouts.app')

@section('carousel')
    @component('components.hero')
        @slot('backgroundImage', 'https://images.unsplash.com/photo-1626984232613-f20f15589bee?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')
        @slot('title', 'Edit & Update Notice')
        @slot('leadText', 'Modify the details of your notice.')
        @slot('description', 'Update the title, file, and publish date of the notice.')
    
        @section('heroContent')
            
        <div class="col-md-8">
            <form action="{{ route('notice.update', $notice->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="title">Notice Title</label>
                    <div class="col-sm-8">
                        <input style="border: #4B6F44 solid" type="text" class="form-control" id="title" name="title" value="{{ $notice->title }}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="file">Notice File (PDF)</label>
                    <div class="col-sm-8">
                        <input style="border: #4B6F44 solid" type="file" class="form-control" id="file" name="file" accept="application/pdf">
                        <a href="{{ asset('storage/notices/' . $notice->file) }}" target="_blank">Current File</a>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label style="font-size: 1.15em" class="col-sm-4 col-form-label text-white" for="publish_date">Publish Date</label>
                    <div class="col-sm-8">
                        <input style="border: #4B6F44 solid" type="date" class="form-control" id="publish_date" name="publish_date" value="{{ $notice->publish_date }}" required>
                    </div>
                </div>
                
                <br>

                <button type="submit" class="btn" style="background:#4B6F44; color:white">Update</button>
            </form>
        </div>
        @endsection
    @endcomponent
@endsection

@section('footer')
    @include('layouts.footerShortPage')
@endsection
