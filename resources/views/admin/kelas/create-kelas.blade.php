@extends('admin.layouts.layout')

@section('content')
    <a href="/admin/kelas"><i class="bi bi-arrow-left"></i> back</a>
    <div class="mt-4 mb-5 d-flex align-items-center justify-content-between align-items-center">
        <h3 class="fw-bold">Create a Class</h3>
        <a href="#" class="btn btn-primary w-25" role="button">Save</a>
    </div>
    <div class="shadow-sm p-4 mb-3 bg-white rounded">
        <h6 class="fw-bold mb-3">Informasi Pembicara</h6>
        <form class="row g-3">
            <div class="col-md-12 mb-2">
                <img id="preview-image-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
                    alt="preview image" style="max-height: 250px;">
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input type="file" name="image" placeholder="Choose image" id="image">
                      @error('image')
                      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                      @enderror
                </div>
            </div>

            <div class="col-md-6">
              <label for="inputJudul" class="form-label">Nama Pembicara</label>
              <input type="text" class="form-control" id="inputJudul">
            </div>
            <div class="col-md-6">
              <label for="inputTopik" class="form-label">Deskripsi Pembicara</label>
              <input type="text" class="form-control" id="inputTopik">
            </div>
        </form>
    </div>
    <div class="shadow-sm p-4 mb-5 bg-white rounded">
        <h6 class="fw-bold mb-3">Informasi Kelas</h6>
        <form class="row g-3">
            <div class="col-md-6">
              <label for="inputJudul" class="form-label">Judul</label>
              <input type="text" class="form-control" id="inputJudul">
            </div>
            <div class="col-md-6">
              <label for="inputTopik" class="form-label">Topik</label>
              <input type="text" class="form-control" id="inputTopik">
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Address</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="col-12">
              <label for="inputAddress2" class="form-label">Address 2</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-md-6">
              <label for="inputCity" class="form-label">City</label>
              <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
              <label for="inputState" class="form-label">Tipe</label>
              <select id="inputState" class="form-select">
                <option selected>Internal</option>
                <option>External</option>
              </select>
            </div>
            <div class="col-md-2">
              <label for="inputZip" class="form-label">Zip</label>
              <input type="text" class="form-control" id="inputZip">
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
      
        $(document).ready(function (e) {
         
           
           $('#image').change(function(){
                    
            let reader = new FileReader();
         
            reader.onload = (e) => { 
                alert("ada");
              $('#preview-image-before-upload').attr('src', e.target.result); 
            }
         
            reader.readAsDataURL(this.files[0]); 
           
           });
           
        });
         
        </script>
@endsection