@extends('master')

@section('content')
<header>
<h2 class="flex justify-center text-3xl  w-screen">Home</h2>
</header>
  <h1 class="text-3xl ">
    Plataforma de cadastro de usuários
  </h1>
  <div class="mt-4">
    <a href="{{ route('users.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">List users</a>
  </div>

@endsection
