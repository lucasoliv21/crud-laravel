@extends('master')

@section('content')

<header>
  <h2 class="flex justify-center text-3xl mb-5 w-screen">CREATE USERS</h2>
</header>

@if (session()->has('message'))
    {{ session('message') }}
@endif


@if ($errors->any())
  <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-5">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form action="{{ route('users.store') }}" method="post">
  @csrf 
  <input type="text" name="name" placeholder="Your name" class="px-4 py-2 mb-4 rounded-lg border border-gray-300 bg-gray-100 text-gray-800 focus:outline-none focus:border-blue-500">
  <input type="text" name="team" placeholder="Your team" class="px-4 py-2 mb-4 rounded-lg border border-gray-300 bg-gray-100 text-gray-800 focus:outline-none focus:border-blue-500">
  <input type="text" name="email" placeholder="Your email" class="px-4 py-2 mb-4 rounded-lg border border-gray-300 bg-gray-100 text-gray-800 focus:outline-none focus:border-blue-500">
  <input type="password" name="password" placeholder="Your password" class="px-4 py-2 mb-4 rounded-lg border border-gray-300 bg-gray-100 text-gray-800 focus:outline-none focus:border-blue-500">
  <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</button>
</form>

@endsection
