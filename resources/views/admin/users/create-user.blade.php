@extends('admin.layouts.layout')

@section('content')
    <a href="/admin/users"><i class="bi bi-arrow-left"></i> back</a>
    <form method="POST" action="/admin/users" autocomplete="off">
      <div class="mt-4 mb-5 d-flex align-items-center justify-content-between align-items-center">
        <h3 class="fw-bold">Create a User</h3>
        <button type="submit" class="btn btn-primary w-25">Save</button>
      </div>
      <div class="shadow-sm px-4 py-5 mb-5 bg-white rounded">
        <div class="row g-3">
          @csrf
          <div class="col-12">
              <label for="inputFullName" class="form-label">Fullname</label>
              <input type="text" name="name" class="form-control" id="inputFullName" placeholder="John doe" required>
            </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="john.doe@gmail.com" name="email">
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword4" name="password" autocomplete="off">
          </div>
        </div>
      </div>
    </form>
@endsection