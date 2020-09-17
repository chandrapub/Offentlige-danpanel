@extends('layouts.customer.layout')

@section('head')
    <style>
        .stepwizard-step p {
            margin-top: 10px;
        }

        .stepwizard-row {
            display: table-row;
        }

        .stepwizard {
            display: table;
            width: 100%;
            position: relative;
        }

        .stepwizard-row:before {
            top: 14px;
            bottom: 0;
            position: absolute;
            content: " ";
            width: 100%;
            height: 1px;
            background-color: #ccc;
            z-order: 0;
        }

        .stepwizard-step {
            display: table-cell;
            text-align: center;
            position: relative;
        }

        .btn-circle {
            width: 40px;
            height: 40px;
            text-align: center;
            padding: 6px 0;
            font-size: 12px;
            line-height: 31px;
            border-radius: 15px;
            display: block;
            background: #ccc;
        }
        
    @media only screen and (max-width: 768px){
        .order-col-mob{
            display:none;
        }
        
    }
    </style>

@endsection
@section('body')
    <div class="col-lg-8 pb-5">

        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th class="order-col-mob" scope="col">#</th>
                        <th scope="col">Ordre ID</th>
                        <th scope="col">Titel</th>
                        <th class="order-col-mob" scope="col">Kategori</th>
                        <th scope="col">Pris</th>
                        <th class="order-col-mob" scope="col">Trin</th>
                        <!--<th scope="col">Action</th>-->
                    </tr>
                    </thead>
                    <tbody>
                    @if(!empty($orders))
                        @foreach($orders as $order)
                            <tr>
                                <td class="order-col-mob">{{$order->id}}</td>
                                <td>{{$order->custom_order_id}}</td>
                                <td>{{$order->product->name}}</td>
                                <td class="order-col-mob">{{$order->product->category->name}}</td>
                                <td>{{$order->price}}</td>
                                <td class="order-col-mob">{{$order->process}}</td>
                                <td class="btn btn-primary btn-sm rounded m-2" style="height:auto; line-height:10px;"><a style="color:black; text-decoration:none;"  
                                       href="{{route('customer.order.details',$order->id)}}"> Se ordredetaljer</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection