@if($product->discount > 0)
    <strike><h5 class="mb-0 pb-0">
            Fra {{number_format($product->price,0, ",",".")}},-
            <span class="text-lowercase mb-0 pb-0"
                  style="font-size:16px;">{{$product->price_type}}</span>
        </h5></strike>

    <h5 class="mb-0 pb-0">
        Fra {{number_format($product->price - $product->discount,0, ",",".")}},-
            <span class="text-lowercase mb-0 pb-0"
                style="font-size:16px;">{{$product->price_type}}</span>
    </h5>
@else
    <h5 class="mb-0 pb-0">
        Fra <span style="fot-size:26px;">{{number_format($product->price,0, ",",".")}},- 
        </span><span class="text-lowercase mb-0 pb-0"
                style="font-size:16px;">{{$product->price_type}}</span>
    </h5>
@endif

<p class="text-lowercase m-0 p-0"
   style="font-size:14px;"> {{$product->tax_type}}</p>
