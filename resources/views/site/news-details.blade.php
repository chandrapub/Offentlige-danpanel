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
                    <div class="blog-area mt-5 shadow">
                        <div class="row border ml-0 mr-0">
                            <div class="col-md-12">
                                <div class="blog-read-content-area border1 p-3">

                                    <div class="blog-read-img-comment p-2">
                                        <div class="blog-read-img text-center">
                                            <img style="max-width: 100%; height:auto;" class="img-thumbnail"
                                                 src="{{$news->showNewsImage()}}"
                                                 alt="{{$news->title}}">
                                        </div>
                                    </div>
                                    <div class="blog-read-title mt-5 text-center">
                                        <h3>{{$news->title}}</h3>
                                    </div>
                                    <hr>

                                    <div class="blog-description text-center">
                                        <p>{!! $news->description !!}</p>
                                        <div class="date_authore mt-3">
                                            <p>Skrevet af {{ucfirst($news->user->name)}}
                                                in {{$news->created_at->format('d M Y')}}</p>
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
