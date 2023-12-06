@extends('layouts.admin-app')
@section('content')

  <!-- Container -->
  <section class="container" style="min-height: 600px;">
  <a type="button" class="mt-3 btn btn-outline-primary btn-rounded" href="{{url('/create-admin')}}" data-mdb-ripple-init  data-mdb-ripple-color="dark">New Admin</a>

  <h1 class="text-center mt-5 mb-5">Admin List</h1>
  <table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>role</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $admin)
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <div>
            <p class="fw-bold mb-1">{{$admin->name}}</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">{{$admin->email}}</p>
      </td>
      <td>
        <span> {{$admin->role}}</span>
      </td>
      <td>
        <a href="{{url('/admin/edit/'.$admin->id)}}" type="button" class="btn btn-link btn-sm btn-rounded">Edit</a>
        <a type="button" href="{{url('/admin/delete/'.$admin->id)}}" class="btn btn-link btn-sm text-danger btn-rounded">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
  </section> 
@endsection