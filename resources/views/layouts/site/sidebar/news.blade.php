@php
    $newses = \App\News::where('status',1)->orderBy('created_at','desc')->get();
@endphp
@if($newses->count() > 0)
    <div class="right_sidebar_news mt-2">
        <h4 class="text-center p-3" style="background:#e0e0d1;">Nyheder</h4>
        <div id="list-example" class="list-group">
            @foreach($newses as $news)
                <a href="{{route('site.news.details',$news->slug)}}"
                   class="list-group-item mt-2 text-black  p-2 rounded-0">
                    <marquee>{{$news->title}}</marquee>
                </a>
            @endforeach
        </div>
    </div>
@endif
