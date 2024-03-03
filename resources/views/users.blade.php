@extends('master')

@section('content')
<div class="w-screen">


  <header>
  <h2 class="flex justify-center text-3xl  w-screen">LISTA DE USUÁRIOS</h2>
  </header>

@if (session()->has('message'))
  {{ session('message') }}
@endif
  <div class="my-5">
    <a href="{{ route('users.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</a>
  </div>

  <ul class="mt-5">
    @foreach ($users as $user)
      <li class="text-xl font-bold ">{{ $user->name }} <br/>
        <a class="text-cyan-500 hover:text-cyan-900 font-normal ml-3" href="{{ route('users.edit',['user' => $user->id]) }}">Edit</a> | 
        <a class="text-rose-500 hover:text-rose-900 font-normal" href="{{ route('users.show', ['user' => $user->id]) }}">Show</a>
      </li>
    @endforeach
  </ul>
</div>

@endsection
