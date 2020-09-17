@extends('layouts.admin.layout')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Edit Blog
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('blog.index')}}">Blogs</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Blog</li>
                </ol>
            </nav>
        </div>
        <div class="card">
            <div class="card-body">
                @if(Session::has('success'))
                    <div class="row">
                        <div class="col-md-12 m-auto">
                            <p class="alert alert-success">{{ Session::get('success') }}</p>
                        </div>
                    </div>
                @endif

                @if (isset($errors) && count($errors) > 0)
                    <div class="row">
                        <div class="col-12 col-md-12 m-auto">
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif


                <div class="row">
                    <div class="col-12 col-md-12 m-auto">
                        <form action="{{route('blog.update',$blog->id)}}" enctype="multipart/form-data" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PATCH">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Blog Title(*)</label>
                                        <input type="text" value="{{$blog->title}}" class="form-control"
                                               name="blog[title]">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Sub Category</label>
                                        <select name="blog[sub_category_id]" class="form-control" id="">
                                            <option value=""
                                                    selected>Select
                                            </option>
                                            @if(!empty($categories))
                                                @foreach($categories as $category)
                                                    <optgroup label="{{$category->name}}">
                                                        @foreach($category->subCategories as $subCategory)
                                                            <option value="{{$subCategory->id}}" {{ $subCategory->id == $blog->sub_category_id ? 'selected' :'' }}>{{$subCategory->name}} </option>
                                                        @endforeach
                                                    </optgroup>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="form-group">
                                                <label for="">Blog Image(*)</label>
                                                <input type="file" class="dropify" name="image">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <img src="{{$blog->showBlogImage()}}" 
                                            style="max-width: 100%;height: 200px;"
                                                 alt="{{$blog->title}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Blog Description(*)</label>
                                        <textarea name="blog[description]" id="" cols="30"
                                                  rows="10">{{$blog->description}}</textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-block btn-primary"
                                               value="Post Blog">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer')
    <script>
        /*Summernote editor*/
        if ($("textarea").length) {
            $('textarea').summernote({
                height: 300,
                tabsize: 2
            });
        }

    </script>
@endsection