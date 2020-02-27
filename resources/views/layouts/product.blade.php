@extends('layouts.app')
@section('content')
<div class="row top-15">
    <div class="col">
        <h5>{{$sub_title}}</h5>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="{{asset($image)}}" alt="Card image cap">
                    <div class="card-body">
                    <h4 class="card-title"><a href="{{route('product', ['id' => $id])}}" title="View Product">{{$name}}</a></h4>
                        <p class="card-text">{{$description}}</p>
                        <div class="row">
                            <div class="col">
                                <p class="btn btn-danger btn-block">{{$price}} $</p>
                            </div>
                            <div class="col">
                                <form method="POST" action="{{route('cart.add')}}" class="form-inline my-2 my-lg-0" >
                                    @csrf
                                    <input name="id" type="hidden" value="{{$id}}">
                                    <button class="btn btn-success btn-block" type="submit">Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
