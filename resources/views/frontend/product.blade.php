@extends('layouts.frontend')

@section('title', 'Products')

@section('content')
<?php //dd(session()->get('cart'))?>

    <div class="container products">

        <div class="row">
            @foreach($medicines as $m)
            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="{{ asset('img/'.$m->image) }}" alt="">
                    <div class="caption">
                        <h4>{{$m->generic_name}}</h4>
                        <p>{{$m->description}}</p>
                        <p><strong>Price: </strong> 567.7$</p>
                        <p class="btn-holder">
                            <a href="{{url('add-to-cart/'.$m->id)}}" 
                            class="btn btn-warning btn-block text-center" role="button">Add to cart</a>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div><!-- End row -->

    </div>

@endsection