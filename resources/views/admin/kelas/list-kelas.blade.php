@extends('admin.layouts.layout')

@section('content')
@if ($message = Session::get('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
<div class="d-flex align-items-center justify-content-between align-items-center">
  <div>
      <h3 class="fw-bold">Kelas</h3>
      <p class="text-secondary mb-0">10 entries found</p>
  </div>
  <a href="kelas/create" class="btn btn-primary" role="button"><i class="bi bi-plus-lg"></i> Create new entry</a>
</div>
<div class="mt-4 p-2 bg-white">
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
              <td>
                <form action="{{ URL::to('/admin/kelas/' . $ikelas->id) }}" method="POST" onsubmit="return confirm('{{ 'Are you sure you want to Delete kelas ' . $ikelas->judul . '?'  }}');">
                  <div class="hstack gap-4">
                    <a class="btn btn-success btn-sm" href="#" role="button">detail</a>
                    <a href="{{ URL::to('/admin/kelas/' . $ikelas->id . '/edit') }}"><i class="bi bi-pencil-fill text-secondary"></i> </a>
                    @csrf
                    @method('DELETE')
                    {{-- <a href=""><i class="bi bi-trash-fill text-danger"></i></a> --}}
                    <button type="submit" class="border-0 bg-transparent"><i class="bi bi-trash-fill text-danger"></i></button>
                  </div>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection