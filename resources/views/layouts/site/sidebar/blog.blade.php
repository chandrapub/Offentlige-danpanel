<div class="blog-catagory shadow">
    <div class="blog-catagory-heading">
        <h5 class="text-center p-3" style="background:#e0e0d1;">Blogs</h5>
    </div>
    <div class="blog-catagory-item">
        <div class="home_adv_bar">
            <!-- blog catagory single -->
            <!-- blog catagory single -->

            @foreach($subCategories as $subCategory)
                @if($subCategory->blogs->count() > 0)
                    <div class="blog_catagory_singles">
                        <div class="blog_main_catagory blog_catagory_single">
                            <p class="">{{$subCategory->name}} ({{$subCategory->blogs->count()}})</p>
                            <i class="fa fa-caret-down adv_sing_close_icon text-right"></i>
                            <i class="adv_sing_open_icon fas fa-caret-up"></i>
                        </div>

                    <!-- <br> -->
                    <!-- <br> -->
                    <div class="blog_sub_catagory">
                        @foreach($subCategory->blogs as $blog)
                            <a class="list-group-item-offer m-2 pl-3 pt-0 pb-0 text-gray rounded-3"
                               href="{{route('site.blog.details',$blog->slug)}}">{{$blog->title}}</a>
                        @endforeach
                    </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
