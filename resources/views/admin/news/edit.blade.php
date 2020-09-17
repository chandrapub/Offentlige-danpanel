@extends('layouts.admin.layout')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Update News
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('news.index')}}">News</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update News</li>
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
                        <form action="{{route('news.update',$news->id)}}" enctype="multipart/form-data" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PATCH">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">News Title(*)</label>
                                        <input type="text" value="{{$news->title}}" class="form-control"
                                               name="news[title]">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="form-group">
                                                <label for="">News Image(*)</label>
                                                <input type="file" class="dropify" name="image">
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="form-group">
                                                <img src="{{$news->showNewsImage()}}"
                                                     style="max-width: 100%;height: 200px;"
                                                     alt="{{$news->title}}">
                                                <div class="form-group">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">News Description(*)</label>
                                        <textarea name="news[description]" id="" cols="30"
                                                  rows="10">{{$news->description}}</textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-block btn-primary"
                                               value="Update News">
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
