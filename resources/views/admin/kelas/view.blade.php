@extends('admin.layouts.layout')

@section('content')
    <h3 class="fw-bold">Data Kelas</h3>
    <div class="p-2 bg-white">
        
        <h6 class="fw-bold mb-0">Judul Kelas</h6>
        <p>{{ $kelas->judul }}</p>
    </div>

    <h3 class="fw-bold mt-4">Daftar Peserta</h3>
    <div class="p-2 bg-white">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Fullname</th>
                <th scope="col">Email</th>
                <th scope="col">Total Kelas</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
                <tr>
                  <th scope="row">{{ $user->id }}</th>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->classes_count }}</td>
                  <td><a class="btn btn-success btn-sm" href="{{ URL::to('/admin/users/' . $user->id) }}" role="button">detail</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection