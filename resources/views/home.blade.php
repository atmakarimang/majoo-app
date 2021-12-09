@extends('layout.main')

@section('halaman')
    <div class="container">
        <div class="row">
          @foreach ($products as $product)  
            <div class="col-md-3 mb-3">  
                <div class="card h-100">  
                    <div class="d-flex justify-content-center p-3">   
                      <img src="{{ $product->image }}">
                    </div>
                    <div class="card-body">
                      <h6 class="card-title text-center">{{ $product->product_name }}</h6> 
                      <h6 class="card-title text-center my-4">Rp. {{ number_format($product->price, 0) }}</h6>
                      <article style="text-align: justify">
                        {!! $product->description !!}
                      </article>
                    </div> 
                    <div class="d-flex flex-row justify-content-center my-3">
                      <a href="#" class="btn btn-dark justify-content-center">Beli</a>
                    </div>
                </div> 
            </div>
          @endforeach  
        </div>
    </div>
@endsection