@extends('layouts.customer.layout')

@section('body')
    <div class="col-lg-8 pb-5 d-flex justify-content-between">
        <style>
            .cart-item {
                font-weight: 500;
                max-height: 150px;
                padding: 0px;
            }

            .cart-item .cart-item-product-info {
                padding: 30px;
            }
        </style>
        <div class="cart-item d-md-flex justify-content-between">
            <div class="px-3 my-3">
                <div class="cart-item-product-info text-center">
                    <h5>Igangværende ordrer</h5>
                    <h4>{{auth()->user()->activeOrders->count()}}</h4>
                </div>
            </div>
        </div>
        <div class="cart-item d-md-flex justify-content-between">
            <div class="px-3 my-3">
                <div class="cart-item-product-info text-center">
                    <h5>Arkiverede ordre / arkiv</h5>
                    <h4>{{auth()->user()->completeOrders->count()}}</h4>
                </div>
            </div>
        </div>
        <div class="cart-item d-md-flex justify-content-between">
            <div class="px-3 my-3">
                <div class="cart-item-product-info text-center">
                    <h5>Beskeder</h5>
                    <h4>{{auth()->user()->customerReadMessages()}}</h4>
                </div>
            </div>
        </div>
    </div>
@endsection