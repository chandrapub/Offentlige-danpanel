@extends('layouts.customer.layout')

@section('head')

@endsection
@section('body')
    <div class="col-lg-8 pb-5">
        <div class="card">
            <div class="card-body">

                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif

                @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif


                <form action="{{route('customer.profile.update',$user->id)}}" method="post">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Navn</label>
                                <input type="text" readonly name="name" value="{{$user->name}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Profil Type</label>
                                <input readonly type="text" value="{{ucfirst($user->account_type)}}"
                                       class="form-control">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Telefon</label>
                                <input type="text" name="phone" value="{{$user->phone}}"
                                       class="form-control">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Adresse</label>
                                <input type="text" name="address" value="{{$user->address}}"
                                       class="form-control">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="">By</label>
                                <input type="text" name="city" value="{{$user->city}}"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Post Nr. </label>
                                <input type="text" name="zip_code" value="{{$user->zip_code}}"
                                       class="form-control">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" readonly name="email" value="{{$user->email}}" class="form-control">
                            </div>
                        </div>

                        @if(!empty($user->birth_date))
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Fødselsdato</label>
                                    <input type="date" readonly name="birth_date" value="{{$user->birth_date}}"
                                           class="form-control">
                                </div>
                            </div>
                        @endif

                        @if(!empty($user->ean_number))
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Ean Nr. </label>
                                    <input type="text" readonly name="ean_number" value="{{$user->ean_number}}"
                                           class="form-control">
                                </div>
                            </div>
                        @endif   @if(!empty($user->business_name))
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Virksomhedsnavn</label>
                                    <input type="text" readonly name="cvr_number" value="{{$user->business_name}}"
                                           class="form-control">
                                </div>
                            </div>
                        @endif
                        @if(!empty($user->cvr_number))
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">CVR Nr. </label>
                                    <input type="text" readonly name="cvr_number" value="{{$user->cvr_number}}"
                                           class="form-control">
                                </div>
                            </div>
                        @endif
                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Nyt Kodeord</label>
                                <input minlength="6" type="text" name="new_password"
                                       class="form-control">
                            </div>
                        </div>


                        <div class="col-6">
                            <div class="form-group">
                                <label for="">Bekræft Kodeord</label>
                                <input minlength="6" type="text" name="confirm_password"
                                       class="form-control">
                            </div>
                        </div>


                        <div class="col-12">
                            <input type="submit" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection