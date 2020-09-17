@foreach($blogs as $blog)
    @if(!empty($blog))
        <div class="blog-area mb-4">
            <div class="row" id="Rekruttering-erhverv">
                <div class="col-xs-12 customize-sub-category-header" id="{{$blog->subCategory->name}}"
                     style="background-color: {{$blog->subCategory->bgColor}}">
                    @if(!empty($blog->subCategory->icon))
                        <img class="rounded-circle"
                             style=" height:40px;width:40px; margin-right: 10px;"
                             src="{{asset('product/icons/'.$blog->subCategory->icon)}}">
                    @endif
                    <div class="sub-category-header"
                         style=" height:50px; color: white; font-size: 30px;">{{$blog->subCategory->name}}</div>
                </div>
            </div>
            <div class="row">

                <div class="shadow">
                    <div class="blog-single">
                        <ul class="w3-ul w3-center w3-hover-shadow pb-5">
                            <img class="w3-card-4 w3-margin-top w3-margin-bottom w3-round"
                                 src="{{$blog->showBlogImage()}}"
                                 style="height:100%; max-width: 80%;">
                            <div class="wow zoomIn m-3">
                                <div class="blog-content">
                                    <h3 class="m-2 mb-5">{{$blog->title}}</h3>
                                    <p class="text-center  p-8"
                                       style="margin:2rem; font-size:15px;">
                                        {!! $blog->description !!}
                                    </p>
                                    <div class="blog-content-button fadeIn">
                                        <a href="{{route('site.blog.details',$blog->slug)}}"
                                           class="btn btn-success rounded-0">Læs mere
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>

    @endif
@endforeach
