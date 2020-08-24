@extends('front.master')
@section('title','Shop Page')
@section('content')
<main role="main">

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Khmer Online Shopping</h1>
            <p class="lead text-muted">
                <a href="#" class="btn btn-primary">vdoforkhmer.com</a>
                <a href="#" class="btn btn-secondary">khmerdaily.org</a>
            </p>
        </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row">
        @forelse ($products as $product)

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" alt="Card image cap" src="{{URL('images',$product->image)}}">
                <div class="card-body">
                 <p class="card-text">{{$product->pro_name}}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View Product</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Add To Cart</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        @empty
            <h3>No Products</h3>

        @endforelse
       </div>

    </div>

  </main>
@endsection
