@extends('layouts.customer.layout')
@section('head')
    <style>
        ul.pagination {
            justify-content: center;
        }

        ul li:last-child, ol li:last-child {
            margin-top: -7px;
        }
    </style>
@endsection
@section('body')
    <div class="col-lg-8 pb-5">
        <div class="card">
            <div class="card-body p-0">
                <!-- Ticket-->
                <div class="col-12">
                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    @foreach($user->chats() as $chat)
                        <div class="blockquote comment mb-4">
                            <div class="d-sm-flex justify-content-between align-items-center">
                                <div class="testimonial-footer">
                                    <div class="testimonial-avatar">
                                        <img src="{{
                                        $chat->fromUser->role == 'customer' ?
                                        asset('assets/customer/img/profile.png') :
                                        asset('assets/admin/images/faces/face5.jpg')
                                        }}"
                                             alt="Comment Author Avatar"/>
                                    </div>
                                    <div class="d-table-cell align-middle pl-2">
                                        <strong> {{$chat->fromUser->name}} </strong> {{$chat->created_at->diffForHumans()}}
                                        <div class="blockquote-footer">
                                            <cite style="white-space: pre;"> {{$chat->message}}</cite>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    {{$user->chats()->links()}}


                    <h3 class="h6 pt-4 pb-2">Læg en besked</h3>
                    <form class="needs-validation" method="post"
                          action="{{route('customer.send.message.to.admin',$user->id)}}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5"
                                      placeholder="Skriv din besked her..." required></textarea>
                            <div class="invalid-tooltip">Skriv din besked her!</div>
                        </div>
                        <div class="d-flex flex-wrap justify-content-between align-items-center">
                            <button class="btn btn-primary my-2" type="submit">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection