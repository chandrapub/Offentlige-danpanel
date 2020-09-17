@extends('layouts.admin.layout')

@section('content')
    <style>
        .btn.btn-sm {
            padding: 5px;
            font-size: 14px;
        }
    </style>
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                All Categories
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Categories</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 ">
                <div class="card">
                    <div class="card-body">
                        @if(Session::has('success'))
                            <div class="row">
                                <div class="col-12 m-auto">
                                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                                </div>
                            </div>
                        @endif

                        @if(isset($category))
                        <!-- TODO:: To update category -->
                            <form action="{{route('category.update',$category->id)}}" method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="PUT">
                                <div class="form-group">
                                    <label for="">Category Name</label>
                                    <input autocomplete="off" type="text" required class="form-control"
                                           value="{{$category->name}}"
                                           name="name">
                                </div>

                                @php

                                        @endphp
                                <h5 class="mt-4 mb-4">Who can access this category?</h5>
                                <div class="form-group">
                                    <input {{$category->categoryUserAccessChecked('private')}} type="checkbox"
                                           name="user_access[]" value="private">
                                    <label for="">Private</label>
                                </div>
                                <div class="form-group">
                                    <input {{$category->categoryUserAccessChecked('business')}}  type="checkbox"
                                           name="user_access[]" value="business">
                                    <label for="">Business</label>
                                </div>
                                <div class="form-group">
                                    <input {{$category->categoryUserAccessChecked('government')}}  type="checkbox"
                                           name="user_access[]" value="government">
                                    <label for="">Government</label>
                                </div>
                                <div class="form-group">
                                    <label for="">Video Url</label>
                                    <input type="text" value="{{$category->video_url}}" class="form-control" name="video_url">
                                </div>
                                <div class="form-group">
                                    <label for="">Header Contents</label>
                                    <textarea name="header_contents" class="form-control" cols="30"
                                              rows="10">{{$category->header_contents}}</textarea>
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Update Category">
                                </div>
                            </form>
                        @else
                        <!-- TODO:: To create new Category -->
                            <form action="{{route('category.store')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="">Category Name</label>
                                    <input autocomplete="off" type="text" required class="form-control" name="name">
                                </div>
                                <h5 class="mt-4 mb-4">Who can access this category?</h5>
                                <div class="form-group">
                                    <input type="checkbox" name="user_access[]" value="private">
                                    <label for="">Private</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="user_access[]" value="business">
                                    <label for="">Business</label>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="user_access[]" value="government">
                                    <label for="">Government</label>
                                </div>

                                <div class="form-group">
                                    <label for="">Video Url</label>
                                    <input type="text"  class="form-control" name="video_url">
                                </div>
                                <div class="form-group">
                                    <label for="">Header Contents</label>
                                    <textarea name="header_contents" class="form-control" cols="30"
                                              rows="10"></textarea>
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Create New Category">
                                </div>
                            </form>
                        @endif

                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 ">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">User Access</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach($categories as $cat)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$cat->name}}</td>
                                    <td>{{$cat->user_access}}</td>
                                    <td><a href="{{route('category.edit',$cat->id)}}" class="btn btn-sm btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <form method="POST"
                                              action="{{route('category.destroy',$cat->id)}}">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <input onClick="return confirm('Are you sure you want to delete the Category?')"
                                                   type="submit" class="btn btn-sm btn-danger"
                                                   value="Delete">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @if (isset($errors) && count($errors) > 0)
            <div class="row">
                <div class="col-12 col-md-6 m-auto">
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