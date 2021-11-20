@extends('dashboard.layout.main')

@section('halaman')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Category Name</h1>
    </div>

    <div class="col-lg-8"> 
        <form action="/dashboard/category/{{ $category->id }}" method="POST" class="mb-5" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Category Name</label> 
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $category->name) }}" required autofocus> 
              @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
              @enderror  
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div> 
@endsection