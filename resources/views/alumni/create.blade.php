@extends('layouts.master')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                
                        <form action="{{ route('alumni.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                           
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukan nama" value="{{ old('nama') }}">
                                @error('nama')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="angkatan" class="form-label">Angkatan</label>
                                <input type="number" name="angkatan" class="form-control" id="angkatan" placeholder="Masukan angkatan" value="{{ old('angkatan') }}" >
                              </div>

                              <div class="mb-3">
                                <label for="image" class="form-label">Foto Image</label>
                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                                @error('image')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                                </div>

                            <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                        </form>
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    function previewImage(){
      const image = document.querySelector('#image');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(image.files[0]);

      oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
      }
    }
  
  </script>
@endsection




