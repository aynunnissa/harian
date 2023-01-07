@extends('admin.layouts.layout')

@section('content')
    <a href="/admin/users"><i class="bi bi-arrow-left"></i> back</a>
    <form method="POST" action="{{ URL::to('/admin/users/' . $user->id) }}" autocomplete="off">
      <div class="mt-4 mb-5 d-flex align-items-center justify-content-between align-items-center">
        <h3 class="fw-bold">{{ $user->name }}</h3>
        <button type="submit" class="btn btn-primary w-25">Update</button>
      </div>
      <div class="shadow-sm px-4 py-5 mb-5 bg-white rounded">
        <div class="row g-3">
            @method('PUT')
            @csrf
          <div class="col-12">
              <label for="inputFullName" class="form-label">Fullname</label>
              <input type="text" value="{{ $user->name }}" name="name" class="form-control" id="inputFullName" required>
            </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" value="{{ $user->email}}" class="form-control" id="inputEmail4" name="email">
          </div>
        </div>
      </div>
    </form>
@endsection