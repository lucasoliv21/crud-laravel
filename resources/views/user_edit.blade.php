@extends('master')

@section('content')

<header>
  <h2 class="flex justify-center text-3xl mb-5 w-screen">EDIT USERS</h2>
</header>

@if (session()->has('message'))
    {{ session('message') }}
@endif


<form action="{{ route('users.update',['user' => $user->id]) }}" method="post">
  @csrf 
  <input type="hidden" name="_method" value="PUT">
  <input type="text" name="name" value="{{ $user->name }}" class="px-4 py-2 mb-4 rounded-lg border border-gray-300 bg-gray-100 text-gray-800 focus:outline-none focus:border-blue-500">
  <input type="text" name="team" value="{{ $user->team }}" class="px-4 py-2 mb-4 rounded-lg border border-gray-300 bg-gray-100 text-gray-800 focus:outline-none focus:border-blue-500">
  <input type="text" name="email" value="{{ $user->email }}" class="px-4 py-2 mb-4 rounded-lg border border-gray-300 bg-gray-100 text-gray-800 focus:outline-none focus:border-blue-500">
  <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
</form>

@endsection
