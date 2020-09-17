@extends('layouts.admin.layout')

@section('content')
    <style>
        .btn.btn-sm {
            padding: 5px;
            font-size: 14px;
        }

        table {
            table-layout: fixed;
        }
    </style>
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                All Sub Categories
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sub Categories</li>
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

                        @if(isset($subCategory))
                        <!-- TODO:: To Update old Sub Subcategory -->
                            <form action="{{route('sub-category.update',$subCategory->id)}}"
                                  enctype="multipart/form-data" method="post">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="PUT">
                                <div class="form-group">
                                    <label for="">Sub Category Name</label>
                                    <input autocomplete="off" type="text" required class="form-control"
                                           value="{{$subCategory->name}}"
                                           name="name">
                                </div>

                                <div class="form-group">
                                    <label for="">Select Category</label>
                                    <select name="category_id" class="form-control" required>
                                        <option value="{{$subCategory->category->id}}">{{$subCategory->category->name}}</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="">Sub Category Priority</label>
                                    <input autocomplete="off" type="text" required class="form-control"
                                           value="{{$subCategory->priority}}"
                                           name="priority">
                                </div>
                                <div class="form-group">
                                    <label for="">Sub Category Background Color</label>
                                    <input autocomplete="off" type="text" class="form-control"
                                           value="{{$subCategory->bgColor}}"
                                           name="bgColor">
                                </div>
                                <div class="form-group">
                                    <label for="">Sub Category Icon</label>
                                    <input autocomplete="off" type="file" class="form-control"
                                           value="{{$subCategory->icon}}"
                                           name="icon">
                                </div>


                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Update Category">
                                </div>
                            </form>

                        @else
                        <!-- TODO:: To create new Sub Subcategory -->
                            <form action="{{route('sub-category.store')}}" enctype="multipart/form-data" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="">Sub Category Name</label>
                                    <input autocomplete="off" type="text" required class="form-control" name="name">
                                </div>

                                <div class="form-group">
                                    <label for="">Select Category</label>
                                    <select name="category_id" class="form-control" required>
                                        <option value="">Select</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="">Sub Category Priority</label>
                                    <input autocomplete="off" type="text" required class="form-control"
                                           name="priority">
                                </div>
                                <div class="form-group">
                                    <label for="">Sub Category Background Color</label>
                                    <input autocomplete="off" type="text" class="form-control"
                                           name="bgColor">
                                </div>
                                <div class="form-group">
                                    <label for="">Sub Category Icon</label>
                                    <input autocomplete="off" type="file" class="form-control"
                                           name="icon">
                                </div>


                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Create Sub Category">
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 ">
                <div class="card">
                    <div class="card-body">

                        @foreach($categories as $category)
                            <table class="table table-striped table-bordered" style="margin-top: 20px">
                                <thead>
                                <tr>
                                    <th scope="col" width="10%">#</th>
                                    <th scope="col" width="30%">{{$category->name}}</th>
                                    <th scope="col" width="15%">Color</th>
                                    <th scope="col" width="15%">Priority</th>
                                    <th scope="col" width="15%">Icon</th>
                                    <th scope="col" width="15%"></th>
                                    <th scope="col" width="15%"></th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach($category->subCategories as $cat)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$cat->name}}</td>
                                        <td>{{$cat->bgColor}}</td>
                                        <td>{{$cat->priority}}</td>
                                        <td><img src="/product/icons/{{$cat->icon}}" style="width: 32px !important;height: 32px !important;"
                                                 alt=""></td>
                                        <td><a href="{{route('sub-category.edit',$cat->id)}}"
                                               class="btn btn-sm btn-primary">Edit</a>
                                        </td>
                                        <td>
                                            <form method="POST"
                                                  action="{{route('sub-category.destroy',$cat->id)}}">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <input onClick="return confirm('Are you sure you want to delete the Sub Category?')"
                                                       type="submit" class="btn btn-sm btn-danger"
                                                       value="Delete">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endforeach
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
