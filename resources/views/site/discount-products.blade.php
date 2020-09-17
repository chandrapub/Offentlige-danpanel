@extends('layouts.site.layout')

@section('head')
    <style>
        .customize-sub-category-header {
            display: flex;
            justify-content: flex-start;
            padding: 10px 10px;
            background-color: #1E3E87;
            width: 100%;
        }

        .video-file {
            position: fixed;
            max-height: 500px;
            min-width: 100%;
            object-fit: fill;
        }

    </style>
@stop

@section('body')
    <!-- navabr end -->
    <div class="video-container">
        <video class="video-file" autoplay="" loop="" muted="">
            <source src="https://danpanel.dk/assets/site/assets/images/privat.mov" type="video/mp4">
        </video>
    </div>
    <div class="m-15" style="margin:20px 10%; test-align:center;">
        {{--        {!! $productCategory[0]->header_contents !!}--}}
    </div>
    <div class="w3-animate-opacity">
        <div class="container-fluid" style="background:#fff; padding: 20px 0%;">
            <div class="row">
                <div class="col-md-3 col-lg-3">
                    <div class="catagory_offer_right_sidebar">
                        @include('layouts.site.sidebar.news')
                        @include('layouts.site.sidebar.offers')
                    </div>
                </div>


                <div class="col-md-6 col-lg-6">
                    <div class="blog-area">
{{--                        <div class="offerProduct-search-area mb-4">--}}
                        {{--                            <div class="row">--}}
                        {{--                                <div class="col-md-6 offset-md-3 col-lg-6 offset-lg-3">--}}
                        {{--                                    <input type="text" class="form-control rounded-pill text-center"--}}
                        {{--                                           placeholder="søg">--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        @foreach($subCategories as $subCategory)
                            @if($subCategory->discountProducts->count() > 0)
                                <div class="row mt-5">
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
                                    @foreach($subCategory->discountProducts as $product)
                                        <div class="w3-half">
                                            <div class="offerProduct-single">
                                                <ul class="w3-ul w3-border w3-center w3-hover-shadow pb-5">
                                                    <img class="w3-card-4 w3-margin-top w3-margin-bottom w3-round"
                                                         src="{{$product->showProductImage()}}"
                                                         alt="{{$product->name}}"
                                                         style="width: 80%;">

                                                    <div class="wow zoomIn m-3">
                                                        <div class="offerProduct-content">
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
                                                                        Få tilbud
                                                                    </a>
                                                                @elseif(empty($product->price) && !empty($product->name) )
                                                                    <a class="m-2 order-now btn-fåTilbud"
                                                                       style="border-radius: px;"
                                                                       href="{{route('site.product.checkout.page',$product->name)}}">
                                                                        Kontakt os
                                                                    </a>
                                                                @else
                                                                    <div class="m- order-now btn-fåTilbud product-query"
                                                                         style="border-radius: px; text-transform: none;">
                                                                        Bliv partner
                                                                    </div>
                                                                @endif

                                                                <div data-prodcut="{{$product->id}}"
                                                                     class="m-2 callProdcutDetailsModal btn-fåTilbud"
                                                                     style="border-radius: 4px; text-transform: none;">
                                                                    Læs mere
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </ul>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="col-md-3 col-lg-3">
                    @include('layouts.site.sidebar.blog')
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
                var product = $(this).data('prodcut');
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


    <script>
        $('.blog_catagory_single').on('click', function (event) {
            let icon = $(this).children('.adv_sing_close_icon');
            if (icon.hasClass('fa-caret-down')) {
                icon.removeClass('fa-caret-down');
                icon.addClass('fa-caret-up');
            } else {
                icon.removeClass('fa-caret-up');
                icon.addClass('fa-caret-down');
            }
            event.preventDefault();
            $(this).parent().children('.blog_sub_catagory').slideToggle('100');
        });

    </script>

@endsection
