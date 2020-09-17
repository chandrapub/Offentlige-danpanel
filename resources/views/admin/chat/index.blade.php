@extends('layouts.admin.layout')
@section('content')

    <style>
        .card.card-statistics {
            background: linear-gradient(85deg, #06b76b, #f5a623);
            color: #ffffff;
        }
        ul.pagination {
            justify-content: center;
            margin-top: 10px;
        }

    </style>
    <div class="main-panel" style="width: 100% !important;">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    Chats
                </h3>
            </div>
            <div class="row grid-margin">
                <div class="col-12">
                    @foreach($user->chats() as $chat)
                        <div class="card shadow mt-3">
                            <div class="card-body">
                                <div class="message-body">
                                    <div class="sender-details d-flex">
                                        <img class="img-sm rounded-circle mr-3"
                                             src="{{asset('assets/admin/images/faces/face5.jpg')}}" alt="">
                                        <div class="details">
                                            <p class="msg-subject pt-2">
                                                <strong>{{$chat->fromUser->name}} </strong> {{$chat->created_at->diffForHumans()}}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="message-content m-3">
                                        <p style="white-space: pre;">{{$chat->message}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                  <div class="text-center">
                      {{$user->chats()->links()}}
                  </div>
                        <div class="card mt-2 shadow">
                        <div class="card-body">
                            <form method="post" action="{{route('admin.send.message.to.customer',$user->id)}}">
                                {{csrf_field()}}

                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif


                                <div class="form-group">
                                    <label for="">Type Message Here..</label>
                                    <textarea required name="message" id="" class="form-control" cols="30"
                                              rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" value="Send Message">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection