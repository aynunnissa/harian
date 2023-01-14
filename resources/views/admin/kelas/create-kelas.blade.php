@extends('admin.layouts.layout')

@section('content')
    <a href="/admin/kelas" style="text-decoration: none"><i class="bi bi-arrow-left"></i> back</a>
    <form method="POST" action="/admin/kelas" enctype="multipart/form-data">
      @csrf
      <div class="mt-4 mb-5 d-flex align-items-center justify-content-between align-items-center">
          <h3 class="fw-bold">Create a Class</h3>
          <button type="submit" class="btn btn-primary w-25">Save</button>
      </div>
      <div class="shadow-sm p-4 mx-0 mb-3 row g-3 bg-white rounded">
        <h6 class="fw-bold col-12 mb-0">Informasi Pembicara</h6>          
        <div class="col-md-6">
          <label for="inputSpeaker" class="form-label">Nama Pembicara</label>
          <input type="text" name="nama_pembicara" class="form-control" id="inputSpeaker" placeholder="Masukkan nama pemateri kelas" required>
        </div>
        <div class="col-md-6">
          <label for="inputTopik" class="form-label">Deskripsi Pembicara</label>
          <textarea name="deskripsi_singkat_pembicara" class="form-control" id="inputTopik" placeholder="Profil singkat pemateri" required></textarea>
        </div>
      </div>
      <div class="row g-3 mx-0 shadow-sm p-4 mb-5 mt-3 bg-white rounded">
        <h6 class="col-12 fw-bold mb-3">Informasi Kelas</h6>
        <div class="col-md-12 mb-2">
          <div style="position: relative; display: inline-block">
            <input class="bg-success" style="display: inline-block; cursor: pointer; position:absolute; bottom: 5px; right: 5px; width: 50px; height: 75px; z-index: 5; opacity: 0" type="file" name="image" id="image" required>
            <button class="btn btn-primary" style="cursor: pointer; position: absolute; bottom: 5px; right: 5px; width: 50px; height: 50px"><i class="bi bi-pencil-fill"></i></button>
            <img id="preview-image-before-upload" src="{{asset('/storage/banners/banner.png')}}" alt="preview image" style="max-height: 250px;">
          </div>
        </div>
        <div class="col-md-12">
        </div>
        <div class="col-6">
          <label for="inputTopik" class="form-label">Topik</label>
          <input type="text" name="tema" class="form-control" id="inputTopik" placeholder="ex: sport, dll" required>
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
          <input type="text" name="judul" class="form-control" id="inputAddress" placeholder="Judul kelas" required>
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Deskripsi Kelas</label>
          <textarea class="form-control" name="deskripsi_singkat" id="inputAddress2" placeholder="Sedikit lebih detail mengenai kelas" required></textarea>
        </div>
        <div class="col-md-12">
          <label for="inputCity" class="form-label">Poin Materi</label>
          <input type="text" name="poin_materi" class="form-control" id="inputCity" placeholder="tbc.." required>
        </div>
        <div class="col-12">
          <label for="inputZip" class="form-label">Rangkaian Materi</label>
          <input type="text" name="rangkaian_materi" class="form-control" id="inputZip" placeholder="tbc.." required>
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