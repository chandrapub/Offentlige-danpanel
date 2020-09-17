@extends('layouts.site.layout')


@section('head')
	
	<style>
	/*	 .customize-sub-category-header {*/
	/*		display: flex;*/
	/*		justify-content: flex-start;*/
	/*		padding: 10px 10px;*/
	/*		background-color: #1E3E87;*/
	/*		width: 100%;*/
	/*	}*/
		
	/*	.video-file {*/
	/*		position: fixed;*/
	/*		max-height: 500px;*/
	/*		min-width: 100%;*/
	/*		object-fit: fill;*/
	/*	}*/
		
	/*	.video-container {*/
	/*		position: relative;*/
	/*	}*/
		
	/*	.slide-video-text {*/
	/*		position: absolute;*/
	/*		top: 50%;*/
	/*		left: 50%;*/
	/*		transform: translate(-50%, -50%);*/
	/*		color: #fff;*/
	/*		font-weight: bold;*/
	/*		background: #00000040;*/
	/*		padding: 20px;*/
	/*		text-align: center;*/
	/*	}*/
		
	/*	.top-video-text {*/
	/*		font-size: 4rem;*/
	/*	}*/

	/*	.product-header-content{*/
	/*		padding:0% 8%; */
	/*		test-align:center;*/
	/*	}*/
		 
	/*	@media only screen and (max-width: 768px) {*/
	/*		 .top-video-text {*/
	/*			font-size: 1.5em;*/
	/*		}*/
			
	/*		.slide-video-text {*/
	/*			left: 10%;*/
	/*			right: 10%;*/
	/*			transform: translate(0%, 0%);*/
	/*		}*/
	/*		.product-header-content{*/
	/*			padding:60% 8% 0% 8%;*/
	/*		} */

	/*	}*/
	</style>
@endsection
@section('body')
	<!-- navabr end -->
	<!--<div class="video-container">-->
	<!--	<video class="video-file" autoplay loop muted>-->
	<!--		<source src="{{$productCategory[0]->video_url}}" type="video/mp4">-->
	<!--	</video>-->
	<!--	<div class="slide-video-text">-->
	<!--		<p class="top-video-text">{{$productCategory[0]->slider_text}}</p>-->
	<!--	</div>-->
	<!--</div>-->
@if($productCategory[0]->name=='Privat')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('assets/site/assets/images/Alarm-slide.png')}}" width=100%;
                alt="category-slide-image">
        </div>

        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('assets/site/assets/images/Videoovervagning-slide.png')}}"
                width=100%; alt="category-slide-image">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('assets/site/assets/images/Mentor-slide.png')}}" width=100%;
                alt="category-slide-image">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="text-center text-white pt-0">
    <p class="slides-caption">Velkommen til DanPanels platform, hvor vi formidler produkter og løsninger til Private
    </p>
</div>


@elseif ($productCategory[0]->name =='Erhverv')

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
    </ol>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('assets/site/assets/images/Videoovervagning-slide.png')}}"
                width=100%; alt="category-slide-image">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('assets/site/assets/images/Digitalisering-slide.png')}}"
                width=100%; alt="category-slide-image">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('assets/site/assets/images/Erhvervslejemal-slide.png')}}"
                width=100%; alt="category-slide-image">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('assets/site/assets/images/Kaffelosninger-slide.png')}}"
                width=100%; alt="category-slide-image">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('assets/site/assets/images/Mandskab-slide.png')}}"
                width=100%; alt="category-slide-image">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('assets/site/assets/images/Mentor-slide.png')}}" width=100%;
                alt="category-slide-image">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('assets/site/assets/images/Tidsregistrering-slide.png')}}"
                width=100%; alt="category-slide-image">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('assets/site/assets/images/Regnskab-slide.png')}}"
                width=100%; alt="category-slide-image">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="text-center text-white pt-0">
    <p class="slides-caption">Velkommen til DanPanels platform, hvor vi formidler produkter og løsninger til Erhverv
    </p>
</div>
@else ($productCategory[0]->name == 'offentlige')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('assets/site/assets/images/Offentlige-home-slide.png')}}"
                width=100%; alt="category-slide-image">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('assets/site/assets/images/Ordninger-slide.png')}}"
                width=100%; alt="category-slide-image">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('assets/site/assets/images/Sociale-ydelser-slide.png')}}"
                width=100%; alt="category-slide-image">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="text-center text-white pt-0">
    <p class="slides-caption">Velkommen til DanPanels platform Offentlige hvor vi hjælper dig, din kommune og din borger.
    </p>
</div>

@endif
  
  
 <div class="container">
    <div class="row">
        <div class="col-md-12 text-center h5">
            @if($productCategory[0]->name=="Privat")
            <p class="">DanPanel er formidler af produkter og løsninger til private på vegne af vores
                samarbejdspartnere. <br> Sådan gør du: </p>
            @elseif($productCategory[0]->name=="Erhverv")
            <p class="">DanPanel er formidler af produkter og løsninger til erhvervsdrivende på vegne af
                vores samarbejdspartnere. <br> Sådan gør du: </p>
            @else($productCategory[0]->name="Offentlige")
            <p class="">DanPanel er i tæt kontakt med kvalificeret mandskab gennem vores samarbejspartnere.  Vi har hjulpet flere borgere og kommuner med at matche de rette personer med de rette kompetancer, således at opgaven/sagen løses på bedst mulige måde.</p>
            @endif
        </div>
    </div>
    <div class="row" style="">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div class="row">
                <div class="col-sm-4 d-flex justify-content-center">
                    <img class="trinImg"
                        src="{{asset('assets/site/assets/images/Trin-1-Udfyld-formular-DanPanel-for-Offentlige.png')}}">
                </div>
                <div class="col-sm-4 d-flex justify-content-center">
                    <img class="trinImg"
                        src="{{asset('assets/site/assets/images/Vi-ringer-dig-op.png')}}">
                </div>
                <div class="col-sm-4 d-flex justify-content-center">
                    <img class="trinImg"
                        src="{{asset('assets/site/assets/images/Trin-3-Vi-matcher-dig-DanPanel-for-Offentlige.png')}}">
                </div>
            </div>
        </div>
        <div class="col-sm-1"></div>
    </div>
    <div class="row pt-4">
        <div class="col-md-12 text-center">
            @if($productCategory[0]->name=="Privat")
            <p class="">DanPanel agerer som formidler og sørger for kontakten mellem samarbejdspartneren og dig. Du vil
                altid få samarbejdspartneren oplyst, når denne giver et tilbud. </p>
            @elseif($productCategory[0]->name=="Erhverv")
            <p class="">DanPanel agerer som formidler og sørger for kontakten mellem samarbejdspartneren og dig. Du vil
                altid få samarbejdspartneren oplyst, når denne giver et tilbud. </p>
            @else($productCategory[0]->name="Offentlige")
            <p class="">Hos DanPanel er din borger i vores fokus.</p>
            <!--    if($subCategories[0]->name=="Ordninger")-->
            <!--<p class="">Hos DanPanel er din borger i vores fokus1.</p>-->
            <!--        else-->
            <!--         <p class="">Hos DanPanel er din borger i vores fokus.</p>-->
            <!--    endif-->
            @endif
        </div>
    </div>

</div>

	
	<!--<div class="product-header-content" style="">-->
	<!--	{!! $productCategory[0]->header_contents !!}-->
	<!--</div>-->
	<div class="enrav-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3 ml-5 mr-5 mt-5">
					<div class="enrav-button text-left" style="position: sticky; top:0">
						@foreach($productCategory[0]->subCategories as $subCategory)
							<a href="#{{$subCategory->name}}"
							   class="btn mb-2 btn-info btn-lg rounded-0"
							   style="width:16rem;">{{$subCategory->name}}</a>
						@endforeach
					</div>
				</div>
				<div class="col-md-7">
					@foreach($productCategory[0]->subCategories as $subCategory)
						
						<div class="enrav-product mt-5">
							<div class="row">
								<div class="col-xs-12 customize-sub-category-header" id="{{$subCategory->name}}"
								     style="background-color: {{$subCategory->bgColor}}">
									@if(!empty($subCategory->icon))
										<img class="rounded-circle"
										     style=" height:40px;width:40px; margin-right: 10px;"
										     src="{{asset('product/icons/'.$subCategory->icon)}}">
									@endif
									<div class="sub-category-header"
									     style=" height:50px; color: white; font-size: 30px;">{{$subCategory->name}}</div>
								</div>
							</div>
							<div class="row">
								<!-- product single -->
								
								@foreach($subCategory->products as $product)
									<div class="w3-quarter1 col-md-6 wow fadeIn" style="hight:18rem;">
										<ul class="w3-ul w3-border w3-center w3-hover-shadow pb-5">
											<img class="w3-card-4 w3-margin-top w3-margin-bottom w3-round"
											     src="{{$product->showProductImage()}}"
											     alt="{{$product->name}}"
											     style="width: 80%;">
											<div class="product-name">
												<div class="product-price">
													<p class="">{{$product->name}}</p>
													@if(!empty($product->price))
														@include('layouts.site.product-price')
													@endif
												
												</div>
												
												<div class="wow zoomIn serviceSubHeadLineText">
													{!! $product->short_description !!}
												</div>
												<div class="tilbudLaasmereContainer">
													
													
													@if(!empty($product->price) && !empty($product->name))
														
														<a class="m-2 order-now btn-fåTilbud"
														   style="border-radius: px; text-transform: none;"
														   href="{{route('site.product.checkout.page',$product->name)}}">
															Kontakt os
														</a>
													@elseif(empty($product->price) && !empty($product->name) )
														<a class="m-2 order-now btn-fåTilbud" style="border-radius: px;"
														   href="{{route('site.product.checkout.page',$product->name)}}">
															Udfyld formular 
														</a>
													@else
														<div class="m-2 order-now btn-fåTilbud product-query"
														     style="border-radius: px; text-transform: none;">Bliv
															partner
														</div>
													@endif
													
													<div data-product="{{$product->id}}"
													     class="m-2 callProdcutDetailsModal btn-fåTilbud"
													     style="border-radius: 4px; text-transform: none;">Læs mere
													</div>
												</div>
										
										</ul>
									</div>
								@endforeach
							</div>
						
						</div>
					
					@endforeach
				</div>
			</div>
		</div>
	</div>
	@include('layouts.site.modals.contact_modal')
	<div id="callBackModal"></div>
@endsection

@section('footer')
	<script>
      $(document).ready(function () {

          $('.product-query').click(function () {
              $("#product-contact-us").show();
          });
          $(document).on('click', '.callProdcutDetailsModal', function () {
              var product = $(this).data('product');
              $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': '{{csrf_token()}}'
                  }
              });

              $.ajax({
                  url: '/modal/product/' + product + '/details',
                  type: "GET",
                  success: function (data) {

                      $('#callBackModal').html(data);
                      $('.bd-example-modal-xl').modal('show').fadeIn();
                  }
              });
          })
      });
	</script>
@endsection
