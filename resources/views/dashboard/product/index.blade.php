@extends('dashboard.layout.main')

@section('halaman')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Product List</h1> 
    </div> 

    @if (session()->has('success'))
      <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
      </div>
    @endif

    <div class="table-responsive">
        <a href="/dashboard/product/create" class="btn btn-primary mb-3">Add New Product</a>
        <table class="table">  
          <thead class="text-center"> 
            <tr>
              <th>#</th>
              <th>Product Name</th>
              <th>Description</th> 
              <th>Price</th> 
              <th>Product Category</th> 
              <th>Image</th>
            </tr> 
          </thead>
          <tbody> 
            @foreach ($products as $key => $product)
              <tr>
                <td>{{ $products->firstItem() + $key }}</td>
                <td class="text-center">{{ $product->product_name }}</td> 
                <td>{!! $product->description !!}</td>  
                <td><b>{{ number_format($product->price,0) }}</b></td>  
                <td class="text-center">
                @php
                  if(!isset($product->category->name)){
                    echo "Kosong";
                  }else {
                    echo $product->category->name;
                  }  
                @endphp
                </td>     
                <td><img src="{{ $product->image }}" class=""></td>  
              </tr>
            @endforeach  
          </tbody>
        </table> 
    </div> 

    <div class="row">
      <div class="col d-flex justify-content-start">
        Showing {{ $products->firstItem() }}
        to {{ $products->lastItem() }}
        of {{ $products->total() }}
      </div>
      <div class="col d-flex justify-content-end"> 
        {{ $products->links() }}
      </div>
    </div>

@endsection