@extends('layouts.admin.layout')
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Create New Art Work
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('product.index')}}">Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update Product</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 m-auto">
                <form action="{{route('product.update',$product->id)}}" enctype="multipart/form-data"
                      method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PATCH">

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
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Product Name(*)</label>
                                        <input type="text" class="form-control" name="product[name]"
                                               value="{{$product->name}}">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Category(*)</label>
                                        <select name="product[category_id]" class="form-control" id="">
                                            <option value="{{$product->category->id}}"
                                                    selected>{{$product->category->name}}</option>
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
                                            <option value="{{$product->subCategory->id}}"
                                                    selected>{{$product->subCategory->name}}</option>
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
                                        <input type="text" class="form-control" name="product[type]"
                                               value="{{$product->type}}">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Tax Type(*)</label>
                                        <select class="form-control" name="product[tax_type]">
                                            <option value="inkl. moms" {{$product->tax_type == 'inkl. moms' ? 'selected' : ''}}>
                                                inkl. moms
                                            </option>
                                            <option value="ex. moms" {{$product->tax_type == 'ex. moms' ? 'selected' : ''}}>
                                                ex. moms
                                            </option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Price(*)</label>
                                        <input type="number" step="0.01" class="form-control" name="product[price]"
                                               value="{{$product->price}}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Discount(*)</label>
                                        <input type="text" class="form-control" name="product[discount]"
                                               value="{{$product->discount}}">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Price Type</label>
                                        <input type="text" class="form-control"
                                               name="product[price_type]"
                                               value="{{$product->price_type}}">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Stock(*)</label>
                                        <input type="number" step="0.01" class="form-control" name="product[stock]"
                                               value="{{$product->stock}}">
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="form-group">
                                                <label for="">Product Image(*)</label>
                                                <input type="file" class="dropify" name="image">
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="imsg">
                                                <img src="/product/images/{{$product->image}}"
                                                     class="img-thumbnail img-responsive mt-5 text-center" alt="">
                                            </div>
                                            <input type="hidden" name="product[image]" value="{{$product->image}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Product Short Description(*)</label>
                                        <textarea name="product[short_description]" id="" cols="30"
                                                  rows="10">{{$product->short_description}}</textarea>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="">Product Description(*)</label>
                                        <textarea name="product[description]" id="" cols="30"
                                                  rows="10">{{$product->description}}</textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-body">

                            <h4>Configure Checkout Form</h4>
                            <br><br>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Contact Person</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->contact_person}}"
                                               name="checkoutFrom[contact_person]">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Quantity</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->quantity}}"
                                               name="checkoutFrom[quantity]">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Machine Quantity</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->machine_quantity}}"
                                               name="checkoutFrom[machine_quantity]">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Number of Employees</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->number_of_employees}}"
                                               name="checkoutFrom[number_of_employees]">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">No Of Cups</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->no_of_cups}}"
                                               name="checkoutFrom[no_of_cups]">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Buy</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->buy}}" name="checkoutFrom[buy]">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Rent</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->rent}}" name="checkoutFrom[rent]">
                                    </div>
                                </div>
                                <div class="col-4"></div>
                                <div class="col-12"><br>
                                    <h5>Multiple checkboxes</h5><br></div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Multiple Select: Ex Office</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->select_office}}"
                                               name="checkoutFrom[select_office]">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Multiple Select: Ex Institution</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->select_institution}}"
                                               name="checkoutFrom[select_institution]">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Multiple Select: Ex Warehouse</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->select_warehouse}}"
                                               name="checkoutFrom[select_warehouse]">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Multiple Select: Ex Clinic</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->select_clinic}}"
                                               name="checkoutFrom[select_clinic]">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Multiple Select: Ex Construction</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->select_construction}}"
                                               name="checkoutFrom[select_construction]">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Multiple Select: Ex Shop</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->select_shop}}"
                                               name="checkoutFrom[select_shop]">
                                    </div>
                                </div>

                                <div class="col-12"><br>
                                    <h5>Questions</h5><br></div>


                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Question 1</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->question_1}}"
                                               name="checkoutFrom[question_1]">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Question 2</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->question_2}}"
                                               name="checkoutFrom[question_2]">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Question 3</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->question_3}}"
                                               name="checkoutFrom[question_3]">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Question 4</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->question_4}}"
                                               name="checkoutFrom[question_4]">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Question 5</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->question_5}}"
                                               name="checkoutFrom[question_5]">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Question 6</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->question_6}}"
                                               name="checkoutFrom[question_6]">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Question 7</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->question_7}}"
                                               name="checkoutFrom[question_7]">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Question 8</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->question_8}}"
                                               name="checkoutFrom[question_8]">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Question 9</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->question_9}}"
                                               name="checkoutFrom[question_9]">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Question 10</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->question_10}}"
                                               name="checkoutFrom[question_10]">
                                    </div>
                                </div>

                                <div class="col-12"><br>
                                    <h5>Budget</h5><br></div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Budget: Per hour</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->budget_per_hour}}"
                                               name="checkoutFrom[budget_per_hour]">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Budget: Per Day</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->budget_per_day}}"
                                               name="checkoutFrom[budget_per_day]">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Budget: Per Week</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->budget_per_week}}"
                                               name="checkoutFrom[budget_per_week]">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Budget: Per Month</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->budget_per_month}}"
                                               name="checkoutFrom[budget_per_month]">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Budget</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->budget}}" name="checkoutFrom[budget]">
                                    </div>
                                </div>

                                <div class="col-12"><br>
                                    <h5>Date</h5><br></div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Start Date</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->start_date_from_calender}}"
                                               name="checkoutFrom[start_date_from_calender]">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">End Date</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->end_date_from_calender}}"
                                               name="checkoutFrom[end_date_from_calender]">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Meeting Time</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->meeting_time_stamp}}"
                                               name="checkoutFrom[meeting_time_stamp]">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Meeting End time</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->end_time_stamp}}"
                                               name="checkoutFrom[end_time_stamp]">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="">Comment</label>
                                        <input type="text" class="form-control"
                                               value="{{$product->checkoutLabel->description}}"
                                               name="checkoutFrom[description]">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-block btn-primary"
                                               value="Update Product">
                                    </div>
                                </div>
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
