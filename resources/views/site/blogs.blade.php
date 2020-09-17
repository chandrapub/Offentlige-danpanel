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
                <div class="col-md-3 col-lg-3 wow zoomIn">
                    @include('layouts.site.sidebar.blog')
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="blog-area">
                        <div class="blog-search-area mb-4">
                            <div class="row">
                                <div class="col-md-6 offset-md-3 col-lg-6 offset-lg-3">
                                    <input type="text" id="searchBlog" name="searchBlog"
                                           class="form-control rounded-pill text-center"
                                           placeholder="søg">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="blogContainer">
                        @foreach($subCategories as $subCategory)
                            @if($subCategory->blogs->count() > 0)
                                <div class="blog-area mb-4">
                                    <div class="row" id="Rekruttering-erhverv">
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
                                        @foreach($subCategory->blogs as $blog)
                                            <div class="w3-half shadow">
                                                <div class="blog-single">
                                                    <ul class="w3-ul w3-center w3-hover-shadow pb-5">
                                                        <img class="w3-card-4 w3-margin-top w3-margin-bottom w3-round"
                                                             src="{{$blog->showBlogImage()}}"
                                                             style="height:100%; width: 80%;">
                                                        <div class="wow zoomIn m-3">
                                                            <div class="blog-content">
                                                                <h3 class="m-2 mb-5">{{$blog->title}}</h3>
                                                                <p class="text-center  p-8"
                                                                   style="margin:2rem; font-size:15px;">
                                                                    {!! $blog->description !!}
                                                                </p>
                                                                <div class="blog-content-button fadeIn">
                                                                    <a href="{{route('site.blog.details',$blog->slug)}}"
                                                                       class="btn btn-success rounded-0"> 
                                                                       <!--<span class="fa fa-chevron-double-up" aria-hidden="true"></span>-->
                                                                       Læs mere
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </ul>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 wow zoomIn">
                    <!--<div class="catagory_offer_right_sidebar">-->
                    <!--    @include('layouts.site.sidebar.news')-->
                    <!--    @include('layouts.site.sidebar.offers')-->
                    <!--</div>-->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')

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


        $(document).ready(function () {
            $("#searchBlog").keyup(function () {
                let searchVal = $(this).val();
                $.ajax({
                    type: 'GET', //THIS NEEDS TO BE GET
                    url: '{{route('site.search.blog')}}',
                    data: {query: searchVal},
                    dataType: 'json',
                    success: function (data) {
                        $("#blogContainer").html(data.html);
                    }, error: function () {
                        console.log(data);
                    }
                });
            })
        })
    </script>

@endsection
