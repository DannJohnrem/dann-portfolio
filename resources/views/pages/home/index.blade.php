@extends('layouts.app')

@section('content')
    <h1 class="text-sm text-red-700">
        yeah, this is a test only!.
    </h1>
    <h1 class="text-3xl font-bold underline color">
        Hello world!dd
      </h1>

      <button onclick="myFunction()" class="relative px-6 py-2 group">
        <span class="absolute inset-0 w-full h-full transition duration-300 ease-out transform translate-x-1 translate-y-1 bg-red-700 group-hover:-translate-x-0 group-hover:-translate-y-0"></span>
        <span class="absolute inset-0 w-full h-full bg-white border-2 border-red-700 group-hover:bg-red-700"></span>
        <span class="relative text-red-700 group-hover:text-red-100"> Click me </span>
    </button>

    <p id="demo"></p>

@endsection
