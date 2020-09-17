<div class="right_sidebar_offer shadow">
    <h4 class="text-center p-3" style="background:#e0e0d1;">Tilbud</h4>
    <div id="list-example" class="list-group">
        @foreach($subCategories as $subCategory)
            @if($subCategory->discountProducts->count() > 0)
                <a class="list-group-item-offer mt-2 p-2 text-gray"
                   href="/discount/products#{{$subCategory->name}}">{{$subCategory->name}}
                    ({{$subCategory->discountProducts->count()}})</a>
            @endif
        @endforeach
    </div>
</div>
