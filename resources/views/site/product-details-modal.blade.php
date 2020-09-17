<div class="modal bd-example-modal-xl show" tabindex="-1" role="dialog"
     aria-labelledby="myExtraLargeModalLabel" aria-modal="true" style="padding-right: 17px;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body pb-5">
                <div class="row m-0 p-0">
                    <div class="col-12 col-lg-7  p-0">
                        <div class="image_overview">
                            <img id="expandedImg" src="{{$product->showProductImage()}}" style="width:100%">
                        </div>
                        <div class="all_image">
                            <div class="row m-0 p-0">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 ml-auto">
                        <div class="art_desc">
                            <h3 class="art_name" style="font-size: 40px">{{$product->name}}</h3>


                            @if(!empty($product->price))
                                @include('layouts.site.product-price')
                            @endif
                            <p style="white-space: pre-line">
                                {!! $product->description !!}
                            </p>
                        </div>

                        @if(!empty($product->price) && !empty($product->name))
                            <div class="art_overview_btn">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <a href="{{route('site.product.checkout.page',$product->name)}}"
                                           class="btn btn-outline-success rounded-0 btn-block mt-3">
                                            Hent tilbud
                                        </a>
                                    </div>
                                    <br>
                                    <br>
                                </div>
                            </div>
                         @elseif(empty($product->price) && !empty($product->name))
                            <div class="art_overview_btn">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <a href="{{route('site.product.checkout.page',$product->name)}}"
                                           class="btn btn-outline-success rounded-0 btn-block mt-3">
                                        Udfyld formular
                                        </a>
                                    </div>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        @else
                            <div class="art_overview_btn">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <a href=""
                                           class="btn btn-outline-success rounded-0 btn-block mt-3">
                                            Bliv partner
                                        </a>
                                    </div>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
