@extends('layout.app')

@section('content')
   <x-carousel />

   {{-- about section --}}
   <x-about />

   {{-- programe section --}}
   <x-programe />

   {{-- class section --}}
   <x-classes />

   {{-- facts section --}}
   <x-facts />

   {{-- teams section --}}
   <x-team />

   {{-- testimonial section --}}
   <x-testimonial />

   {{-- blog section --}}
   <x-blog />
@endsection