@extends('layouts.app')


@section('carousel')
    @include('layouts.caro')
@endsection


@section('content')
    @include('layouts.textArea')
@endsection


@section('jumbotron')
    @include('layouts.jumbo')
@endsection

@section('footer')
    @include('layouts.footerLongPage')
@endsection