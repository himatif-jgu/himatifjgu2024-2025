@extends('layouts.master')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                
                        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                           
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Masukan Title" value="{{ old('title') }}">
                                @error('title')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" name="slug" class="form-control" id="slug" placeholder="Masukan Slug" value="{{ old('slug') }}" readonly>
                              </div>

                              <div class="mb-3">
                                <label for="image" class="form-label">Cover Image</label>
                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                <input class="form-control @error('image_cover') is-invalid @enderror" type="file" id="image" name="image_cover" onchange="previewImage()">
                                @error('image_cover')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                                </div>

                              <div class="mb-3">
                                <label for="image" class="form-label">Post Image</label>
                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                                @error('image')
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                                @enderror
                                </div>

                                
                           
                              <div class="mb-3">
                                <label for="body" class="form-label">Body</label>
                                @error('body')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                                <trix-editor input="body"></trix-editor>
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
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/posts/create/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preveDefault();
    })

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




