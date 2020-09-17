@extends('layouts.customer.layout')

@section('body')
	
	<div class="col-lg-8 pb-5">
		
		
		<div id="dibs-complete-checkout">
		</div>
		
		<div class="row" id="orderDetailsSection">
			<div class="col-12">
				@if(session()->has('success'))
					<div class="alert alert-success">
						{{ session()->get('success') }}
					</div>
				@endif
				@if(session()->has('error'))
					<div class="alert alert-danger">
						{{ session()->get('error') }}
					</div>
				@endif
				<div class="stepwizard col-md-offset-3 text-center">
					<div class="stepwizard-row setup-panel d-flex justify-content-between">
						<div class="stepwizard-step">
							<a href="#step-1"
							   class="btn-layout {{$order->orderStatusClass(1)}}"> 1</a>
							<p>Under behandling</p>
						</div>
						<div class="stepwizard-step">
							<a href="#step-2"
							   class="btn-layout {{$order->orderStatusClass(2)}} ">2</a>
							<p>Godkendt</p>
						</div>
						<div class="stepwizard-step">
							<a href="#step-3"
							   class="btn-layout {{$order->orderStatusClass(3)}} ">3</a>
							<p>Aktiv</p>
						</div>
						<div class="stepwizard-step">
							<a href="#step-4"
							   class="btn-layout {{$order->orderStatusClass(4)}} ">4</a>
							<p>Arkiveret</p>
						</div>
					</div>
				</div>
				<div class="cart-item d-md-flex justify-content-between">
					<div class="px-3 my-3">
						<div class="cart-item-product-info">
							
							<h4 class="cart-item-product-title"><strong>Ordre ID #{{$order->custom_order_id}}</strong>
							</h4>
							<br>
							
							@if(!empty($order->payment_status))
								<h4 class="cart-item-product-title">Betalingsstatus:
									<strong>{{ucfirst($order->payment_status)}}</strong></h4>
								<br>
								<h4 class="cart-item-product-title">Tilbuddet er accepteret ved:
									<strong>{{$order->payment->created_at->format('d F,Y H:s:i')}}</strong></h4>
								<br>
							@endif
							
							
							@if(!empty($order->acceptedAdmin))
								<h4 class="cart-item-product-title">Konsulent navn:
									<strong>{{$order->acceptedAdmin->name}}</strong></h4>
								<br>
							@endif
							<div class="text-lg text-body">Ordre status:
								<strong>{{$order->runningOrderStatus()}}</strong></div>
							<br>
							<div class="text-lg text-body">Titel:
								<strong><span>  {{$order->product->name}}</span></strong></div>
							<br>
							
							<div class="text-lg text-body">Kategori:
								<strong><span> {{$order->product->category->name}}</span></strong>
							</div>
							
							@if(empty($order->acceptedAdmin))
								<br>
								<div class="text-lg text-body">Pris:
									<strong><span> Efter aftale</span></strong>
								</div>
							
							@endif
							<br>
							@if($order->normal_price)
								<div class="text-lg text-body">Normal pris (inkl. moms) :
									<strong><span> {{$order->normal_price}} ,- {{$order->price_type}}</span></strong></div>
								<br>
							@endif
							
							@if($order->offer_price)
								<div class="text-lg text-body">Kampagne pris (inkl. moms) :
									<strong><span> {{$order->offer_price}} ,- {{$order->price_type}}</span></strong></div>
								<br>
							@endif
							
							@if($order->normal_price)
								<div class="text-lg text-body">Betalings type:
									<strong><span> {{$order->payment_type == 'one-time' ? 'Engangsbetaling' : 'Abonnement'}} </span></strong>
								</div>
								<br>
							@endif
							
							@if($order->unitType())
								<div class="text-lg text-body">Betaling:
									<strong><span> {{$order->unitType()}} </span></strong>
								</div>
								<br>
							@endif
							
							@if($order->business_partner)
								<div class="text-lg text-body">Samarbejdspartner:
									<strong><span> {{$order->business_partner}} </span></strong>
								</div>
								<br>
							@endif
							
							<div class="text-lg text-body">Ordre Dato:
								<strong><span>  {{$order->created_at->format('d-m-Y H:s:i')}}</span></strong>
							</div>
						</div>
					</div>
					@if($order->process == 2 && $order->customer_response == null && $order->status == 1)
						<div class="px-3">
							<div class="cart-item-product-info">
								@if($order->offer_price)
									<div class="text-l text-body h4">Din Pris :
										<strong><span> {{$order->offer_price}} ,- {{$order->price_type}}</span></strong></div>
									<br>
								@endif
								
								
								<div class="order-subscription-form" style="display: none">
									<form action="{{route('subscribe.with.bank.info',$order->id)}}" method="post">
										{{csrf_field()}}
										<div class="form-group">
										    <h5>Leverandørservice/Betalingsservice</h5>
											<label for="">Registrerings nr.</label>
											<input maxlength="4" minlength="4" required="" type="text" pattern="[0-9.]+"
											       name="bank_registration_number" class="form-control">
										</div>
										<div class="form-group">
											<label for="">Konto nr. </label>
											<input maxlength="8" minlength="6" required="" type="text" pattern="[0-9.]+"
											       name="bank_account_number" class="form-control">
										</div>
										<div class="form-group text-right ml-auto">
											<input type="submit" value="Send" class="btn btn-primary">
											<button type="button" onClick="history.go(0);" class="btn btn-danger">Afvist</button>
											<a href=""></a>
										</div>
									</form>
								</div>
								<div class="orderAcceptButtons">
									<div class="form-group">
										{{--									<a--}}
										{{--											href="{{route('customer.order.offer.accept',$order->id)}}"--}}
										{{--											class="btn text-white btn-primary">Accepter tilbud</a>--}}
										@if($order->payment_type === 'one-time')
											<button id="CreatePayment" class="btn text-white btn-primary">Accepter tilbud</button>
										@endif
										
										@if($order->payment_type === 'subscription')
											<button id="acceptSubscriptionOffer" class="btn text-white btn-primary">Accepter tilbud</button>
										@endif
									
									</div>
									<div class="form-group">
										<a onclick="return confirm('Er du sikker på, at du vil afvise tilbuddet?');"
										   href="{{route('customer.order.offer.reject',$order->id)}}" class="btn btn-danger">Afvis
											tilbud</a>
									</div>
								</div>
							</div>
						</div>
					@endif
				</div>
			</div>
			<div class="col-6">
				<div class="card">
					<div class="card-body">
						<h5>Ordre detaljer</h5>
						@include('customer.inc.order-info')
					</div>
				</div>
			</div>
			<div class="col-6">
				<div class="card">
					<div class="card-body">
						
						@if($order->files)
							<h5>Vedhæftede filer</h5>
							<table class="table mb-3 table-striped">
								<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Filnavn</th>
									<th scope="col">Uploadet af</th>
									<th scope="col">Hent</th>
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
						<br>
						@if($order->enableFileUpload)
							<form action="{{route('customer.upload.order.file',$order->id)}}"
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

@endsection

@section('footer')
	<script>
		@if($order->payment_type === 'one-time')
    $("#CreatePayment").on('click', function () {
        let button = $(this);
        button.text('Loading Payment Method');
        button.prop('disabled', true);
        $.ajax({
            url: '{{route('create.payment',$order->id)}}',
            data: {
                action: 'createPay'
            },
            dataType: 'json',
            success: function (data) {
                $("div#orderDetailsSection").hide();
                paymentID = JSON.stringify(data);
                var obj = jQuery.parseJSON(paymentID);
                paymentID = obj.paymentId;
                initCheckout(paymentID);
            }
        });
    });

    function initCheckout(paymentID) {
        var checkoutOptions = {
            // checkoutKey: "test-checkout-key-500b92cc5d264cf88f5653ddc7a362d0", // for dev [Required] Test or Live GUID with dashes
            checkoutKey: "live-checkout-key-014b3802470340e090c2e8f0f8295861", // for live [Required] Test or Live GUID with dashes
            paymentId: paymentID, //[required] GUID without dashes
            partnerMerchantNumber: "123456789", //[optional] Number
            containerId: "dibs-complete-checkout", //[optional] defaultValue: dibs-checkout-content
            language: "da-DK", //[optional] defaultValue: en-GB
            theme: { // [optional] - will change defaults in the checkout
                textColor: "blue", // any valid css color
                linkColor: "#bada55", // any valid css color
                panelTextColor: "rgb(125, 125, 125)", // any valid css color
                panelLinkColor: "#0094cf", // any valid css color
                primaryColor: "#0094cf", // any valid css color
                buttonRadius: "50px", // pixel or percentage value
                buttonTextColor: "#fff", // any valid css color
                backgroundColor: "#eee", // any valid css color
                panelColor: "#fff", // any valid css color
                outlineColor: "#444", // any valid css color
                primaryOutlineColor: "#444", // any valid css color   }
            }
        }
        var checkout = new Dibs.Checkout(checkoutOptions);

        //this is the event that the merchant should listen to redirect to the “payment-is-ok” page

        checkout.on('payment-completed', function (response) {
            /*
						Response:
						paymentId: string (GUID without dashes)
						*/
            window.location = '/checkout?paymentId=' + response.paymentId;
        });
    }
		
		@endif
    $(document).on('click', '#acceptSubscriptionOffer', function () {
        $(".order-subscription-form").show();
        $(".orderAcceptButtons").hide();
    })
	</script>


@endsection
