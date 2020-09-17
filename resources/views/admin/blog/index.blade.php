@extends('layouts.admin.layout')
@section('head')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Blogs table
            </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">All Blogs</li>
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


                <div class="row">
                    <div class="col-12">
                        <div class="create-btn text-right">
                            <a href="{{route('blog.create')}}"
                               class="btn btn-primary">Post New Blog</a><br>
                        </div>
                    </div>
                    <div class="col-12 mt-5">

                        <div id="order-listing_wrapper"
                             class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                            <div class="table-responsive">
                                <table class="table  no-footer" role="grid"
                                       aria-describedby="order-listing_info">
                                    <thead>
                                    <tr role="row">
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Sub Category</th>
                                        <th>Clicks</th>
                                        <th>Added By</th>
                                        <th>Created At</th>
                                        <th>Edit</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @if($blogs->count() > 0)
                                        @foreach($blogs as $blog)
                                            <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$blog->title}}</td>
                                                <td><img src="/blog/images/{{$blog->image}}" alt="{{$blog->title}}"
                                                         style="width: 32px !important;height: 32px !important;"></td>
                                                <td>{{optional($blog->subCategory)->name }}</td>
                                                <td>{{$blog->clicks}}</td>
                                                <td>{{$blog->user->name}}</td>
                                                <td>{{ $blog->created_at->format('m-d-Y H:s:i') }}</td>
                                                <td>
                                                    <a href="{{route('blog.edit',$blog->id)}}"
                                                       class="btn btn-primary rounded-0">
                                                        Edit
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{route('admin.blog.status.toggle',$blog->id)}}"
                                                       class="btn btn-{{$blog->status ? 'warning' : 'success'}} rounded-0">{{$blog->status ? 'Archive' : 'Active'}}</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function () {
            $('table').DataTable({
                "order": [[0, "desc"]]
            });
        });
    </script>
@endsection
