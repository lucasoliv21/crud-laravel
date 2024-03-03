@extends('master')

@section('content')


<div class="text-xl font-bold">
  <h2>User: {{ $user->name }}</h2>
  <h2>Team: {{ $user->team }}</h2>
  <h2>Email: {{ $user->email }}</h2>
</div>

<form action="{{ route('users.destroy',['user' => $user->id]) }}" method="post">
  @csrf
  <input type="hidden" name="_method" value="DELETE">
  <button class="bg-red-500 hover:bg-red-700 text-white font-bold mt-3 py-2 px-4 rounded" type="submit">Delete</button>

</form>

@endsection
