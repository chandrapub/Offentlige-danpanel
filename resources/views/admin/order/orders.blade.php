@extends('layouts.admin.layout')
@section('head')
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
@endsection
@section('content')
	<div class="content-wrapper">
		<div class="page-header">
			<h3 class="page-title">
				{{$pageTitle}}
			</h3>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
					<li class="breadcrumb-item active" aria-current="page">{{$pageTitle}}</li>
				</ol>
			</nav>
		</div>
		<div class="card">
			<div class="card-body">
				
				@if(Session::has('success'))
					<div class="row">
						<div class="col-md-12 m-auto">
							<p class="alert alert-success">{{ Session::get('success') }}</p>
						</div>
					</div>
				@endif
				
				
				<div class="row">
					<div class="col-12 mt-5">
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Order id</th>
									<th scope="col">Customer Name</th>
									<th scope="col">Email</th>
									<th scope="col">Product Name</th>
									<th scope="col">Category</th>
									<th scope="col">Messages</th>
									<th scope="col">Status</th>
									<th scope="col">Processing Step</th>
									<th scope="col">Ordered At</th>
									<th scope="col">Action</th>
								</tr>
								</thead>
								<tbody>
								@if(!empty($orders))
									@foreach($orders as $order)
										@if($order->customer)
											<tr>
												<td>{{$order->id}}</td>
												<td>{{$order->custom_order_id}}</td>
												<td>{{ $order->customer->name }}</td>
												<td>{{ $order->customer->email }}</td>
												<td>{{$order->product->name}}</td>
												<td>{{$order->product->category->name}}</td>
												<td>
													<a href="{{route('admin.chat',$order->user_id)}}">
														<span class="btn btn-info p-2"><i class="fa fa-inbox "></i></span>
													</a>
												</td>
												
												<td>
												<span
														class="badge badge-{{$order->status ? 'success' : 'danger'}}">{{$order->runningOrderStatus()}}</span>
												</td>
												<td>{{$order->process}}</td>
												<td>{{ $order->created_at->format('m-d-Y H:s:i') }}</td>
												<td><a class="btn btn-primary btn-sm rounded"
												       href="{{route('admin.order.details',$order->id)}}"> View Details</a>
												</td>
											</tr>
										@endif
									@endforeach
								@endif
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('footer')
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	
	<script>
      $(document).ready(function () {
          $('table').DataTable({
              "order": [[0, "desc"]]
          });
      });
	</script>
@endsection