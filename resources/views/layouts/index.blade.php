@extends('layouts.app')

@section('content')
<div class="row top-15">
    <div class="col">
        <h5>{{$sub_title}}</h5>
        <div class="row">
        @foreach($products as $product)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="{{asset($product->getImage())}}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title"><a href="product.html" title="View Product">{{$product->name}}</a></h4>
                        <p class="card-text">{{$product->description}}</p>
                        <div class="row">
                            <div class="col">
                                <p class="btn btn-danger btn-block">{{$product->price}} $</p>
                            </div>
                            <div class="col">
                                <form method="POST" action="{{route('cart.add')}}" class="form-inline my-2 my-lg-0" >
                                    @csrf
                                    <input name="id" type="hidden" value="{{$product->id}}">
                                    <button class="btn btn-success btn-block" type="submit">Add to cart</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
