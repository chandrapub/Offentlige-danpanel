@extends('layouts.admin.layout')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Create New Product
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('product.index')}}">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">New Product</li>
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
                        <form action="{{route('product.store')}}" enctype="multipart/form-data" method="post">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Product Name(*)</label>
                                        <input type="text" class="form-control" name="product[name]">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Category(*)</label>
                                        <select name="product[category_id]" class="form-control" id="">
                                            <option value="" selected disabled="">Select</option>
                                            @if(!empty($categories))
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Sub Category</label>
                                        <select name="product[sub_category_id]" class="form-control" id="">
                                            <option value=""
                                                    selected>Select
                                            </option>
                                            @if(!empty($categories))
                                                @foreach($categories as $category)
                                                    <optgroup label="{{$category->name}}">
                                                        @foreach($category->subCategories as $subCategory)
                                                            <option value="{{$subCategory->id}}">{{$subCategory->name}}</option>
                                                        @endforeach
                                                    </optgroup>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Type(*)</label>
                                        <input type="text" class="form-control" name="product[type]">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Tax Type(*)</label>
                                        <select class="form-control" name="product[tax_type]">
                                            <option value="inkl. moms">inkl. moms</option>
                                            <option value="ex. moms">ex. moms</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Price(*)</label>
                                        <input type="number" step="0.01" class="form-control" name="product[price]">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Price Type</label>
                                        <input type="text" class="form-control"
                                               name="product[price_type]">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Discount(*)</label>
                                        <input type="text" class="form-control" name="product[discount]">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Stock(*)</label>
                                        <input type="number" step="0.01" class="form-control" name="product[stock]">
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Product Image(*)</label>
                                        <input type="file" class="dropify" name="image">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Product Short Description(*)</label>
                                        <textarea name="product[short_description]" id="" cols="30"
                                                  rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Product Description(*)</label>
                                        <textarea name="product[description]" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-block btn-primary"
                                               value="Create New Product">
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
