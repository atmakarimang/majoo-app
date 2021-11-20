@extends('dashboard.layout.main')

@section('halaman')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Input New Product</h1>
    </div>

    <div class="col-lg-8"> 
        <form action="/dashboard/product" method="POST" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="product_name" class="form-label">Product Name</label> 
              <input type="text" class="form-control @error('product_name') is-invalid @enderror" id="product_name" name="product_name" value="{{ old('product_name') }}" required autofocus> 
              @error('product_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror  
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label> 
                @error('description')
                  <p class="text-danger">{{ $message }}</p>   
                @enderror
                <input id="description" type="hidden" name="description" value="{{ old('description') }}">
                <trix-editor input="description"></trix-editor>
            </div>
            <div class="mb-3"> 
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id"> 
                    @foreach ($categories as $cat)
                        @if (old('category_id') == $cat->id) 
                            <option value="{{ $cat->id }}" selected>{{ $cat->name }}</option>
                        @else
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label> 
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}" required> 
                @error('price')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
                @enderror  
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror 
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div> 
    <script> 
        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        })

        function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFRevent){
                imgPreview.src = oFRevent.target.result;
            }
        }
    </script>
@endsection