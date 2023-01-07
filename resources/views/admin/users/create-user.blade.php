@extends('admin.layouts.layout')

@section('content')
    <a href="/admin/users"><i class="bi bi-arrow-left"></i> back</a>
    <div class="mt-4 mb-5 d-flex align-items-center justify-content-between align-items-center">
        <h3 class="fw-bold">Create a User</h3>
        <a href="#" class="btn btn-primary w-25" role="button">Save</a>
    </div>
    <div class="shadow-sm px-4 py-5 mb-5 bg-white rounded">
        <form class="row g-3" autocomplete="off">
            <div class="col-12">
                <label for="inputAddress" class="form-label">Fullname</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
              </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Password</label>
              <input type="password" class="form-control" id="inputPassword4" autocomplete="off">
            </div>
          </form>
    </div>
@endsection