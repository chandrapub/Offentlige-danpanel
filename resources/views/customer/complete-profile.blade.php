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

                <div class="form">
                    <form method="POST" action="{{ route('customer.profile.update',$user->id) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="role"
                                   class="col-md-4 col-form-label text-md-right">Profil Type</label>
                            <div class="col-md-6">
                                <select name="account_type" required class="form-control" id="account_type">
                                    <option value="" selected disabled>Vælg</option>
                                    <option value="private">Privat</option>
                                    <option value="business">Erhverv</option>
                                    <option value="government">Offentlige</option>
                                </select>
                            </div>
                        </div>
                        <div class=" selected-output-field">

                        </div>


                        <div class="form-group row">
                            <label for="role"
                                   class="col-md-4 col-form-label text-md-right">Adresse</label>
                            <div class="col-md-6">
                                <input type="text" name="address" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role"
                                   class="col-md-4 col-form-label text-md-right">Post nr.</label>
                            <div class="col-md-6">
                                <input type="text" name="zip_code" class="form-control">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="role"
                                   class="col-md-4 col-form-label text-md-right">By</label>
                            <div class="col-md-6">
                                <input type="text" name="city" class="form-control">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="role"
                                   class="col-md-4 col-form-label text-md-right">Telefon</label>
                            <div class="col-md-6">
                                <input type="text" name="phone" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Opret') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>

    </div>
@endsection

@section('footer')
    <script src="{{asset('js/resgistration-account-type.js')}}"></script>
@endsection
