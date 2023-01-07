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
    <div class="p-2 bg-white">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
    </div>
@endsection