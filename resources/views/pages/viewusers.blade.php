  
@extends('layout.app')
@section('content')
@section('title', 'All Users')

<table class="table">
  <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Currency</th>
        <th>Rate</th>
        <th>View</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->currency}}</td>
            <td>{{$user->rate}}</td>
            <td><a href="{{ route('view.user', $user->id)}}">View User</a></td>
        </tr>
    @endforeach
  </tbody>
</table>






@endsection
