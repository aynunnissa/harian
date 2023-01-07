@extends('admin.layouts.layout')

@section('content')
    <h3 class="fw-bold">Data Pengguna</h3>
    <div class="p-2 bg-white">
        
        <h6 class="fw-bold mb-0">Nama</h6>
        <p>{{ $user->name }}</p>
    </div>

    <h3 class="fw-bold mt-4">Riwayat Kelas</h3>
    <div class="p-2 bg-white">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Tema</th>
                <th scope="col">Judul</th>
                <th scope="col">Pemateri</th>
                <th scope="col">Deskripsi Singkat</th>
                <th scope="col">Total Peserta</th>
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
                  <td>{{ Str::of($ikelas->deskripsi_singkat)->limit(150) }}</td>
                  <td>10</td>
                  <td><a class="btn btn-success btn-sm" href="#" role="button">detail</a> </td>
                </tr>
              @endforeach
            </tbody>
        </table>
    </div>
@endsection