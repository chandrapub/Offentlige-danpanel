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
                    @include('layouts.site.sidebar.blog')
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="blog-area mt-5">
                        <div class="blog-read-title customize-sub-category-header"
                             style="height:50px; color: white; font-size: 20px; background-color: {{$blog->subCategory->bgColor}}">
                            {{$blog->title}}
                        </div>
                        <div class="row border ml-0 mr-0">
                            <div class="col-md-12 col-lg-12">
                                <div class="blog-read-img-comment" style="padding:2% 25%">
                                    <div class="blog-read-img border">
                                        <img style="width: 100%; height:15rem;" src="{{$blog->showBlogImage()}}"
                                             alt="{{$blog->title}}">
                                    </div>
                                </div>

                                <div class="blog-read-content-area border1 p-3">
                                    <div class="blog-description" spellcheck="false">
                                        <p spellcheck="false">{!! $blog->description !!}</p>
                                        <a href="/products/{{$blog->subCategory->category->name}}#{{$blog->subCategory->name}}"
                                           class="btn btn-block btn-outline-info mt-4">Vores produkter</a>
                                        <div class="date_authore mt-3">
                                            <p>Skrevet af {{ucfirst($blog->user->name)}}
                                                in {{$blog->created_at->format('d M Y')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3">
                    <div class="catagory_offer_right_sidebar">
                        @include('layouts.site.sidebar.news')
                        @include('layouts.site.sidebar.offers')
                    </div>
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

    </script>

@endsection
