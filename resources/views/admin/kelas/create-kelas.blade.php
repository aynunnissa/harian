@extends('admin.layouts.layout')

@section('content')
    <a href="/admin/kelas"><i class="bi bi-arrow-left"></i> back</a>
    <form class="row g-3" method="POST" action="/admin/kelas" enctype="multipart/form-data">
      @csrf
      <div class="mt-4 mb-5 d-flex align-items-center justify-content-between align-items-center">
          <h3 class="fw-bold">Create a Class</h3>
          <button type="submit" class="btn btn-primary w-25">Save</button>
      </div>
      <div class="shadow-sm p-4 mb-3 bg-white rounded">
        <h6 class="fw-bold mb-3">Informasi Pembicara</h6>          
        <div class="col-md-6">
          <label for="inputJudul" class="form-label">Nama Pembicara</label>
          <input type="text" name="nama_pembicara" class="form-control" id="inputJudul">
        </div>
        <div class="col-md-6">
          <label for="inputTopik" class="form-label">Deskripsi Pembicara</label>
          <input type="text" name="deskripsi_singkat_pembicara" class="form-control" id="inputTopik">
        </div>
      </div>
      <div class="shadow-sm p-4 mb-5 bg-white rounded">
        <h6 class="fw-bold mb-3">Informasi Kelas</h6>
        <div class="col-md-12 mb-2">
          <img id="preview-image-before-upload" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif"
              alt="preview image" style="max-height: 250px;">
      </div>
        <div class="col-md-12">
          <label for="inputJudul" class="form-label">Banner</label>
          <input type="file" name="image" id="image">
        </div>
        <div class="col-6">
          <label for="inputTopik" class="form-label">Tema</label>
          <input type="text" name="tema" class="form-control" id="inputTopik">
        </div>
        <div class="col-6">
          <label for="inputState" class="form-label">Tipe</label>
          <select id="inputState" name="tipe" class="form-select">
            <option value="internal">Internal</option>
            <option value="external">External</option>
          </select>
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Judul</label>
          <input type="text" name="judul" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Deskripsi Kelas</label>
          <input type="text" class="form-control" name="deskripsi_singkat" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="col-md-12">
          <label for="inputCity" class="form-label">Poin Materi</label>
          <input type="text" name="poin_materi" class="form-control" id="inputCity">
        </div>
        <div class="col-12">
          <label for="inputZip" class="form-label">Rangkaian Materi</label>
          <input type="text" name="rangkaian_materi" class="form-control" id="inputZip">
        </div>          
      </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
      
        $(document).ready(function (e) {
         
           
           $('#image').change(function(){
                    
            let reader = new FileReader();
         
            reader.onload = (e) => { 
              $('#preview-image-before-upload').attr('src', e.target.result); 
            }
         
            reader.readAsDataURL(this.files[0]); 
           
           });
           
        });
         
        </script>
@endsection