@extends('layouts.app')

@section('content')
    <h1>Designs List</h1>

    <ul>
        @foreach ($designs as $design)
            <li>{{ $design->name }}</li>
            <!-- Display other design details as needed -->
        @endforeach
    </ul>
@endsection
