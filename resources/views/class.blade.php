@extends('layout.app')

@section('content')
     <!-- Hero Start -->
     <div class="container-fluid bg-primary p-5 bg-hero mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-2 text-uppercase text-white mb-md-4">Classes</h1>
                <a href="{{route('index')}}" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                <a href="{{route('class')}}" class="btn btn-light py-md-3 px-md-5">Classes</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    {{-- class section --}}
   <x-classes />

@endsection