@extends('admin.layouts.layout')

@section('content')
  <a href="/admin/users" style="text-decoration: none"><i class="bi bi-arrow-left"></i> back</a>
  <h3 class="fw-bold mb-0 mt-4">{{ Str::title($user->name) }}</h3>
  <p class="fs-6 text-secondary">User ID: {{ $user->id }}</p>
  <div class="row m-0">
    <div class="col-9 p-4 bg-white shadow-sm rounded">
      <h4>Riwayat Kelas</h4>
      <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Tema</th>
              <th scope="col">Judul</th>
              <th scope="col">Pemateri</th>
              {{-- <th scope="col">Deskripsi Singkat</th> --}}
              {{-- <th scope="col">Total Peserta</th> --}}
              <th scope="col"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($kelas as $ikelas)
              <tr>
                <th scope="row">{{ $ikelas->id }}</th>
                <td>{{ $ikelas->tema }}</td>
                <td>{{ $ikelas->judul }}</td>
                <td>{{ $ikelas->nama_pembicara }}</td>
                {{-- <td>{{ Str::of($ikelas->deskripsi_singkat)->limit(150) }}</td> --}}
                {{-- <td>10</td> --}}
                <td><a class="btn btn-success btn-sm" href="{{ '/admin/kelas/'.$ikelas->id }}" role="button"><i class="bi bi-card-text text-white"></i> detail</a></td>
              </tr>
            @endforeach
          </tbody>
      </table>  
    </div>
    <div class="col-3">
      <div class="rounded px-2 py-4 shadow-sm" style="background-color: #015b9a; width: 100%;">
        <div class="d-flex justify-content-center">
          <p class="mb-0 text-white py-2 px-4 bg-white rounded" style="--bs-bg-opacity: .2;"><i class="bi bi-currency-exchange"></i> Reward</p>
        </div>
        <h2 class="my-4 text-white fw-bold text-center">{{ $user->points}} points</h2>
        <p class="text-white text-center fw-lighter" style="font-size: 10px">total poin dari mengikuti kelas</p>
      </div>
      <div class="p-2 bg-white rounded shadow-sm mt-3">
        <p class="fw-semibold mb-0">Alamat email</p>
        <p>{{ $user->email }}</p>
        <p class="fw-semibold mb-0">Jumlah kelas diikuti</p>
        <p>{{ $user->classes_count }}</p>
      </div>
      
    </div>
  </div>
@endsection