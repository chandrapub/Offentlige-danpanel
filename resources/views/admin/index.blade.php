@extends('layouts.admin.layout')
@section('content')

    <style>
        .card.card-statistics {
            background: linear-gradient(85deg, #178e7df0, #525252);

            color: #ffffff;
        }
    </style>
    <div class="main-panel" style="width: 100% !important;">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    Dashboards
                </h3>
            </div>
            <div class="row grid-margin">
                <div class="col-12">
                    <div class="card card-statistics">
                        <div class="card-body">
                            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">

                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fab fa-trello menu-icon mr-2"></i>
                                        Total Products
                                    </p>
                                    @php
                                        $totalProducts = \App\Product::all()->count();
                                    @endphp
                                    <h2>{{$totalProducts}}</h2>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fab fa-wpforms menu-icon mr-2"></i>
                                        Total Orders
                                    </p>
                                    @php
                                        $totalOrders = \App\Order::all()->count();
                                    @endphp
                                    <h2>{{$totalOrders}}</h2>

                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-hourglass-half mr-2"></i>
                                        Active Orders
                                    </p>
                                    @php
                                        $activeOrders = \App\Order::whereStatus(1)->where('process', '!=', 4)->where('process', '!=', 1)->get()->count();
                                    @endphp
                                    <h2>{{$activeOrders}}</h2>

                                </div>

                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fas fa-users mr-2"></i>
                                        Total Customers
                                    </p>
                                    @php
                                        $activeCustomers = \App\User::whereRole('customer')->get()->count();
                                    @endphp
                                    <h2>{{$activeCustomers}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{--            <div class="row">--}}
            {{--                <div class="col-md-12 grid-margin stretch-card">--}}
            {{--                    <div class="card">--}}
            {{--                        <div class="card-body">--}}
            {{--                            <h4 class="card-title">Recent Activities</h4>--}}
            {{--                            <div class="mt-5">--}}
            {{--                                <div class="timeline">--}}

            {{--                                    @php--}}
            {{--                                        $i = 1;--}}
            {{--                                    @endphp--}}
            {{--                                    @foreach($logs as $log)--}}
            {{--                                        <div class="timeline-wrapper {{ $i % 2 == 0 ? 'timeline-inverted timeline-wrapper-warning' : 'timeline-wrapper-success' }} ">--}}
            {{--                                            <div class="timeline-badge"></div>--}}
            {{--                                            <div class="timeline-panel">--}}
            {{--                                                <div class="timeline-heading">--}}
            {{--                                                    <h6 class="timeline-title"><b>{{$log->title}}</b></h6>--}}
            {{--                                                </div>--}}
            {{--                                                <div class="timeline-body">--}}
            {{--                                                    <p>--}}
            {{--                                                        {{$log->body}}--}}
            {{--                                                    </p>--}}
            {{--                                                </div>--}}
            {{--                                                <div class="timeline-footer d-flex align-items-center">--}}
            {{--                                                    <span class="ml-auto font-weight-bold">{{ $log->created_at->diffForHumans() }}</span>--}}
            {{--                                                </div>--}}
            {{--                                            </div>--}}
            {{--                                        </div>--}}

            {{--                                        @php--}}
            {{--                                            $i++;--}}
            {{--                                        @endphp--}}
            {{--                                    @endforeach--}}
            {{--                                </div>--}}
            {{--                            </div>--}}

            {{--                            <div class="view-all-logs text-center">--}}
            {{--                                <a href="{{route('admin.logs')}}" class="btn btn-default text-success">View All Logs</a>--}}
            {{--                            </div>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>


        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <!-- partial -->
    </div>
@endsection