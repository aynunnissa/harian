@extends('admin.layouts.layout')

@section('content')
    <div class="d-flex align-items-center justify-content-between align-items-center">
        <div>
            <h3 class="fw-bold">Users</h3>
            <p class="text-secondary mb-0">10 entries found</p>
        </div>
        <a href="users/create" class="btn btn-primary" role="button"><i class="bi bi-plus-lg"></i> Create new entry</a>
    </div>
    {{-- <div class="mt-4 mb-2"><button class="btn btn-primary btn-sm"><i class="bi bi-download"></i> Export</button></div> --}}
    <div class="p-2 mt-4 bg-white">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Fullname</th>
                <th scope="col">Email</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>
                    <div class="hstack gap-4">
                      <a href="{{ URL::to('/admin/users/' . $user->id . '/edit') }}"><i class="bi bi-pencil-fill text-secondary"></i> </a>
                      <a href=""><i class="bi bi-trash-fill text-danger"></i></a>
                    </div>
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection