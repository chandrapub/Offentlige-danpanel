@extends('layouts.admin.layout')
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
			width: 91%;
			position: relative;
			margin: 10px auto;
		}
		
		.stepwizard-row:before {
			top: 20px;
			bottom: 0;
			position: absolute;
			content: " ";
			width: 100%;
			height: 1px;
			background-color: rgba(86, 61, 124, .15);
			z-order: 0;
		}
		
		.stepwizard-step {
			display: table-cell;
			text-align: center;
			position: relative;
		}
		
		.btn-layout {
			width: 40px;
			height: 40px;
			text-align: center;
			padding: 6px 0;
			font-size: 12px;
			line-height: 31px;
			border-radius: 50%;
			display: block;
			background: #4c4c4c;
			color: #fff;
			text-decoration: none;
		}
		
		.btn-complete {
			background: green;
		}
		
		.btn-process {
			background: green;
		}
	</style>
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
					<div class="col-12">
						<div class="stepwizard text-center">
							<div class="stepwizard-row setup-panel d-flex justify-content-between">
								<div class="stepwizard-step">
									<a href="#step-1"
									   class="btn-layout {{$order->orderStatusClass(1)}}"> 1</a>
									<p>Step 1</p>
								</div>
								<div class="stepwizard-step">
									<a href="#step-2"
									   class="btn-layout {{$order->orderStatusClass(2)}} ">2</a>
									<p>Step 2</p>
								</div>
								<div class="stepwizard-step">
									<a href="#step-3"
									   class="btn-layout {{$order->orderStatusClass(3)}} ">3</a>
									<p>Step 3</p>
								</div>
								<div class="stepwizard-step">
									<a href="#step-4"
									   class="btn-layout {{$order->orderStatusClass(4)}} ">4</a>
									<p>Step 4</p>
								</div>
							</div>
						</div>
						<div class="d-flex justify-content-around ">
							
							@if($order->status)
								@if($order->process > 1)
									<a href="{{route('admin.order.step.change.previous',$order->id)}}"
									   class="btn btn-outline-danger rounded-0">Back To Previous Step</a>
								@endif
								@if($order->process < 4)
									<a href="{{route('admin.order.step.change.next',$order->id)}}"
									   id="{{$order->process == 1 ? "markOrderAsActive" : '' }}"
									   class="btn btn-outline-success rounded-0">
										{{$order->process == 1 ? "Mark Step As Active" : '' }}
										{{$order->process == 2 ? "Mark Step As Complete" : '' }}
										{{$order->process == 3 ? "Mark Order As Complete" : '' }}
									</a>
								@endif
								<a href="{{route('admin.order.file.upload.toggle',$order->id)}}"
								   class="btn btn-outline-{{$order->enableFileUpload ? 'warning' : 'info'}} rounded-0"> {{$order->enableFileUpload ? 'Disable' : 'Enable'}}
									File Upload</a>
							@endif
						</div>
					</div>
					
					
					<div class="col-6 mt-5">
						<div class="card">
							<div class="card-body shadow">
								<h5>Customer Order Info</h5>
								<br>
								<table class="table table-striped">
									<tbody>
									<tr>
										<td>Order ID</td>
										<td>:</td>
										<td> #{{$order->custom_order_id}}</td>
									</tr>
									@if(!empty($order->acceptedAdmin))
										<tr>
											<td>Consultant Name</td>
											<td>:</td>
											<td> {{$order->acceptedAdmin->name}}</td>
										</tr>
									@endif
									
									
									<tr>
										<td>Order Status</td>
										<td>:</td>
										<td> {{$order->runningOrderStatus()}}</td>
									</tr>
									@if(!empty($order->payment_status))
										<tr>
											<td>Payment Status:</td>
											<td>:</td>
											<td> {{ucfirst($order->payment_status)}}</td>
										</tr>
									@endif
									
									@if(!empty($order->payment) && $order->payment->type =='subscription')
										<tr>
											<td>Bank Registration Number:</td>
											<td>:</td>
											<td> {{$order->payment->bank_registration_number}}</td>
										</tr>
									@endif
									
									
									@if(!empty($order->payment) && $order->payment->type =='subscription')
										<tr>
											<td>Bank Account Number:</td>
											<td>:</td>
											<td> {{$order->payment->bank_account_number}}</td>
										</tr>
									@endif
									
									
									@if(!empty($order->payment))
										<tr>
											<td>Accepted At:</td>
											<td>:</td>
											<td> {{$order->payment->created_at->format('d F,Y H:s:i')}}</td>
										</tr>
									@endif
									
									<tr>
										<td>Product Name</td>
										<td>:</td>
										<td> {{$order->product->name}}</td>
									</tr>
									<tr>
										<td>Order ID</td>
										<td>:</td>
										<td>{{$order->product->category->name}}</td>
									</tr>
									<form id="orderPriceFrom" action="{{route('admin.order.price.update',$order->id)}}" method="post">
										{{csrf_field()}}
										<tr>
											<td>Normal Price</td>
											<td>:</td>
											<td>
												@if($order->process == 1)
													<input class="product_price" name="normal_price" type="number" step="0.5"
													       value="{{$order->normal_price}}">
												@else
													{{$order->normal_price}}
												@endif
											
											</td>
										
										</tr>
										<tr>
											<td>Offer Price</td>
											<td>:</td>
											<td>
												@if($order->process == 1)
													<input class="product_price" name="offer_price" type="number" step="0.5"
													       value="{{$order->offer_price}}">
												@else
													{{$order->offer_price}}
												@endif</td>
										</tr>
										<tr>
											<td>Payment Type</td>
											<td>:</td>
											<td>
												@if($order->process == 1)
													<select name="payment_type" id="">
														<option value="one-time">One Time</option>
														<option value="subscription">Subscription</option>
													</select>
												@else
													{{$order->payment_type}}
												@endif
											</td>
										</tr>
										
										<tr>
											<td>Business Partner</td>
											<td>:</td>
											<td>
												@if($order->process == 1)
													<input type="text" name="business_partner">
												@else
													{{$order->business_partner}}
												@endif
											</td>
										</tr>
										
										<tr>
											<td>Price Unit</td>
											<td>:</td>
											<td>
												@if($order->process == 1)
													<select name="unit_type" id="">
														<option value="pcs">Pcs</option>
														<option value="hourly">Hourly</option>
														<option value="weekly">Daily</option>
														<option value="monthly">Weekly</option>
														<option value="weekly">Monthly</option>
														<option value="monthly">Quarterly</option>
														<option value="yearly">Halfyearly</option>
														<option value="yearly">Yearly</option>
													</select>
												@else
													{{$order->unitType()}}
												@endif
											</td>
										</tr>
									</form>
									<tr>
										<td>Order Date</td>
										<td>:</td>
										<td> {{$order->created_at->format('m-d-Y H:s:i')}}</td>
									</tr>
									
									<tr>
										<td>Customer Name</td>
										<td>:</td>
										<td> {{$order->customer->name}}</td>
									</tr>
									<tr>
										<td>Customer Email</td>
										<td>:</td>
										<td> {{$order->customer->email}}</td>
									</tr>
									<tr>
										<td>Phone</td>
										<td>:</td>
										<td> {{$order->customer->phone}}</td>
									</tr>
									<tr>
										<td>Customer Address</td>
										<td>:</td>
										<td> {{$order->customer->address}}</td>
									</tr>
									<tr>
										<td>Account Type</td>
										<td>:</td>
										<td> {{$order->customer->account_type}}</td>
									</tr>
									<tr>
										<td>Date Of Birth</td>
										<td>:</td>
										<td> {{$order->customer->birth_date}}</td>
									</tr>
									<tr>
										<td>Business Name</td>
										<td>:</td>
										<td> {{$order->customer->business_name}}</td>
									</tr>
									<tr>
										<td>CVR Number</td>
										<td>:</td>
										<td> {{$order->customer->cvr_number}}</td>
									</tr>
									<tr>
										<td>EAN Number</td>
										<td>:</td>
										<td> {{$order->customer->ean_number}}</td>
									</tr>
									@if($order->status)
										<tr>
											<td>Cancel Order</td>
											<td>:</td>
											<td><a href="{{route('admin.order.cancel',$order->id)}}"
											       class="btn btn-outline-{{$order->status ? 'danger' : 'success'}} rounded-0"> {{$order->status ? 'Cancel' : ''}}
													Order</a></td>
										</tr>
									@endif
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="col-6 mt-5">
						<div class="card">
							<div class="card-body shadow">
								<h5>Order Details</h5>
								<br>
								<table class="table table-striped">
									<tbody>
									@if(!empty($order->product->checkoutLabel->sagsnummer))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->sagsnummer}}:</td>
											<td scope="col">:</td>
											<td scope="col">{{$order->orderInfo->sagsnummer}}</td>
										</tr>
									@endif
									
									@if(!empty($order->product->checkoutLabel->contact_person))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->contact_person}}:</td>
											<td scope="col">:</td>
											<td scope="col">{{$order->orderInfo->contact_person}}</td>
										</tr>
									@endif
									
									@if(!empty($order->product->checkoutLabel->quantity))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->quantity}}:</td>
											<td scope="col">:</td>
											<td scope="col">{{$order->orderInfo->quantity}}</td>
										</tr>
									@endif
									
									@if(!empty($order->product->checkoutLabel->machine_quantity))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->machine_quantity}}:</td>
											<td scope="col">:</td>
											<td scope="col">{{$order->orderInfo->machine_quantity}}</td>
										</tr>
									@endif
									@if(!empty($order->product->checkoutLabel->number_of_employees))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->number_of_employees}}:
											</td>
											<td scope="col">:</td>
											<td scope="col">{{$order->orderInfo->number_of_employees}}</td>
										</tr>
									@endif
									@if(!empty($order->product->checkoutLabel->no_of_cups))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->no_of_cups}}:</td>
											<td scope="col">:</td>
											<td scope="col">{{$order->orderInfo->no_of_cups}}</td>
										</tr>
									@endif
									@if(!empty($order->product->checkoutLabel->buy))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->buy}}:</td>
											<td scope="col">:</td>
											<td scope="col">{{$order->orderInfo->buy}}</td>
										</tr>
									@endif
									@if(!empty($order->product->checkoutLabel->rent))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->rent}}:</td>
											<td scope="col">:</td>
											<td scope="col">{{$order->orderInfo->rent}}</td>
										</tr>
									@endif
									@if(!empty($order->product->checkoutLabel->select_office))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->select_office}}:</td>
											<td scope="col">:</td>
											<td scope="col">{{ $order->orderInfo->select_office == null ? 'Yes' : 'No'}}</td>
										</tr>
									@endif
									
									@if(!empty($order->product->checkoutLabel->select_institution))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->select_institution}}:</td>
											<td scope="col">:</td>
											<td scope="col">{{$order->orderInfo->select_institution ? 'Yes' : 'No'}}</td>
										</tr>
									@endif
									
									@if(!empty($order->product->checkoutLabel->select_warehouse))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->select_warehouse}}:</td>
											<td scope="col">:</td>
											<td scope="col">{{$order->orderInfo->select_warehouse ? 'Yes' : 'No'}}</td>
										</tr>
									@endif
									
									@if(!empty($order->product->checkoutLabel->select_clinic))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->select_clinic}}:</td>
											<td scope="col">:</td>
											<td scope="col">{{$order->orderInfo->select_clinic ? 'Yes' : 'No'}}</td>
										</tr>
									@endif
									
									@if(!empty($order->product->checkoutLabel->select_construction))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->select_construction}}:
											</td>
											<td scope="col">:</td>
											<td scope="col">{{$order->orderInfo->select_construction ? 'Yes' : 'No'}}</td>
										</tr>
									@endif
									
									
									
									@if(!empty($order->product->checkoutLabel->select_shop))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->select_shop}}:</td>
											<td scope="col">:</td>
											<td scope="col">{{$order->orderInfo->select_shop ? 'Yes' : 'No'}}</td>
										</tr>
									@endif
									
									
									@if(!empty($order->product->checkoutLabel->question_1))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->question_1}}:</td>
											<td scope="col">:</td>
											<td scope="col">{{$order->orderInfo->question_1}}</td>
										</tr>
									@endif
									@if(!empty($order->product->checkoutLabel->question_2))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->question_2}}:</td>
											<td scope="col">:</td>
											<td scope="col">{{$order->orderInfo->question_2}}</td>
										</tr>
									@endif
									@if(!empty($order->product->checkoutLabel->question_3))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->question_3}}:</td>
											<td scope="col">:</td>
											<td scope="col">{{$order->orderInfo->question_3}}</td>
										</tr>
									@endif
									
									@if(!empty($order->product->checkoutLabel->question_4))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->question_4}}:</td>
											<td scope="col">:</td>
											<td scope="col">{{$order->orderInfo->question_4}}</td>
										</tr>
									@endif
									@if(!empty($order->product->checkoutLabel->question_5))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->question_5}}:</td>
											<td scope="col">:</td>
											<td scope="col">{{$order->orderInfo->question_5}}</td>
										</tr>
									@endif
									@if(!empty($order->product->checkoutLabel->question_6))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->question_6}}:</td>
											<td scope="col">:</td>
											<td scope="col">{{$order->orderInfo->question_6}}</td>
										</tr>
									@endif
									@if(!empty($order->product->checkoutLabel->question_7))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->question_7}}:</td>
											<td scope="col">:</td>
											<td scope="col">{{$order->orderInfo->question_7}}</td>
										</tr>
									@endif
									@if(!empty($order->product->checkoutLabel->question_8))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->question_8}}:</td>
											<td scope="col">:</td>
											<td scope="col">{{$order->orderInfo->question_8}}</td>
										</tr>
									@endif
									@if(!empty($order->product->checkoutLabel->question_9))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->question_9}}:</td>
											<td scope="col">:</td>
											<td scope="col">{{$order->orderInfo->question_9}}</td>
										</tr>
									@endif
									@if(!empty($order->product->checkoutLabel->question_10))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->question_10}}:</td>
											<td scope="col">:</td>
											<td scope="col">{{$order->orderInfo->question_10}}</td>
										</tr>
									@endif
									
									
									@if(!empty($order->product->checkoutLabel->budget_per_hour))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->budget_per_hour}}:</td>
											<td scope="col">:</td>
											<td scope="col">{{$order->orderInfo->budget_per_hour}}</td>
										</tr>
									@endif
									@if(!empty($order->product->checkoutLabel->budget_per_week))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->budget_per_week}}:</td>
											<td scope="col">:</td>
											<td scope="col">{{$order->orderInfo->budget_per_week}}</td>
										</tr>
									@endif
									@if(!empty($order->product->checkoutLabel->budget_per_month))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->budget_per_month}}:</td>
											<td scope="col">:</td>
											<td scope="col">{{$order->orderInfo->budget_per_month}}</td>
										</tr>
									@endif
									@if(!empty($order->product->checkoutLabel->budget))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->budget}}:</td>
											<td scope="col">:</td>
											<td scope="col">{{$order->orderInfo->budget}}</td>
										</tr>
									@endif
									@if(!empty($order->product->checkoutLabel->start_date_from_calender))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->start_date_from_calender}}
												:
											</td>
											<td scope="col">:</td>
											<td scope="col">{{$order->orderInfo->start_date_from_calender}}</td>
										</tr>
									@endif
									
									@if(!empty($order->product->checkoutLabel->end_date_from_calender))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->end_date_from_calender}}
												:
											</td>
											<td scope="col">:</td>
											<td scope="col">{{$order->orderInfo->end_date_from_calender}}</td>
										</tr>
									@endif
									
									@if(!empty($order->product->checkoutLabel->meeting_time_stamp))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->meeting_time_stamp}}:</td>
											<td scope="col">:</td>
											<td scope="col">{{$order->orderInfo->meeting_time_stamp}}</td>
										</tr>
									@endif
									
									@if(!empty($order->product->checkoutLabel->end_time_stamp))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->end_time_stamp}}:</td>
											<td scope="col">:</td>
											<td scope="col">{{$order->orderInfo->end_time_stamp}}</td>
										</tr>
									@endif
									
									@if(!empty($order->product->checkoutLabel->description))
										<tr>
											<td scope="col">{{$order->product->checkoutLabel->description}}:</td>
											<td scope="col">:</td>
											<td scope="col">{{$order->orderInfo->description}}</td>
										</tr>
									@endif
									
									
									</tbody>
								
								</table>
								
								<br><br>
								@if($order->files)
									<h5>Uploaded Files</h5>
									<table class="table mb-3 table-striped">
										<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">File Name</th>
											<th scope="col">Uploaded By</th>
											<th scope="col">Download</th>
										</tr>
										</thead>
										<tbody>
										@php
											$i = 1;
										@endphp
										@foreach($order->files as $file)
											<tr>
												<td>{{$i++}}</td>
												<td>{{$file->file}}</td>
												<td>{{$file->user->name}}</td>
												<td>{{$file->created_at->format('d-m-Y H:s:i')}}</td>
												<td><a href="{{asset('product/orders/' . $file->file)}}"
												       download="">Download</a>
												</td>
											</tr>
										@endforeach
										</tbody>
									</table>
								@endif
								<br>
								
								@if($order->enableFileUpload)
									<form action="{{route('admin.upload.order.file',$order->id)}}"
									      enctype="multipart/form-data"
									      method="post">
										{{csrf_field()}}
										<div class="form-group">
											<label for="">Upload File </label>
											<input required type="file" name="orderFile" class="form-control">
										</div>
										
										<div class="form-group">
											<input type="submit" class="btn btn-primary" value="Upload">
										</div>
									</form>
								@endif
							
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('footer')
	<script>
      $(document).ready(function () {
          $('#markOrderAsActive').on('click', function (e) {
              e.preventDefault();
              let url = $(this).attr('href');
              let form = $("#orderPriceFrom");
              let formUrl = form.attr('action');
              let formData = form.serialize();

              $.post(formUrl, formData, function (response) {
                  window.location = url;
              });
          });
      })
	</script>
@endsection