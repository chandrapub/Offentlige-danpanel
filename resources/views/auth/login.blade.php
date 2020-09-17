@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Log ind') }}</div>

                    <div class="card-body">
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif


            <form method="POST" action="{{ route('login') }}">
                
    <!--        <div class="form-group row mb-2">-->
    <!--            <div class="col-md-6 offset-md-4">-->
    <!--                <a href="{{ url('login/facebook') }}" class="btn"-->
    <!--			   style="line-height: .5rem; background:#3B5998; color:white; width: 100%; font-size:.9em;">-->
    <!--				<i class="fa fa-facebook" style="font-size:1.5em;"> <span class="p-2">Fortsæt med Facebook</i></span> </a>-->

    <!--            </div>-->
    <!--        </div>-->
	
	
	   <!--     <div class="form-group row mb-2">-->
		  <!--      <div class="col-md-6 offset-md-4">-->
		  <!--      	<a href="{{ url('login/google') }}" class="btn"-->
			 <!--       style="line-height: .5rem; background:#DD4B39; color:white; width: 100%; font-size:.9em;">-->
				<!--    <i class="fa fa-google-plus" style="font-size:1.5em;"> <span class="p-2">Fortsæt med Google</i></span> </a>-->
		  <!--      </div>-->
	
	   <!--     </div>-->
    <!--<p class="col-md-6 offset-md-4" style="text-align:center;">Eller</p>-->
                        
                            @csrf
                            <!--<div class="form-group row">-->
                            <!--    <label for="email"-->
                            <!--           class="col-md-4 col-form-label text-md-right">Profil Type</label>-->

                            <!--    <div class="col-md-6">-->
                            <!--        <select name="account_type" id="" class="form-control">-->
                            <!--            <option value="">Vælg</option>-->
                            <!--            <option value="private">Privat</option>-->
                            <!--            <option value="business">Erhverv</option>-->
                            <!--            <option value="government">Offentlige</option>-->
                            <!--        </select>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Adresse') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Adgangskode') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Husk mig') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group  row mb-3">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Log ind') }}
                                    </button>
                                    <!--<span class="emarkerInLogin"><a href="https://certifikat.emaerket.dk/danpanel.dk?fbclid=IwAR2VDaxwELCwtxtC_xBNCEEf-V1JRRzknI1VgWITjoM3vFm7Cf1MZI_Xrh0" target = "_blank">-->
                                    <!--        <img src="{{asset('assets/site/assets/images/icons/e-market-06.png')}}"-->
                                    <!--             width="100px" alt="e-mærket">-->
                                    <!--        </a>-->
                                    <!--</span>-->
                                    @if (Route::has('password.request'))
                                        <p><a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Glemt din adgangskode?') }}
                                            </a>
                                        </p>
                                    @endif
                                    	
                                    
                                </div>
                            </div>


                            <!--<div class="form-group row mb-2">-->
                            <!--    <div class="col-md-6 offset-md-4">-->
                            <!--        <p>Eller log ind med</p>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!--<div class="form-group row mb-2">-->
                            <!--    <div class="col-md-6 offset-md-4">-->
                            <!--        <a href="{{ url('login/facebook') }}"-->
                            <!--           class="btn btn-outline-primary btn-block btn-social-icon btn-facebook"><i-->
                            <!--                class="fa fa-facebook"></i>Log ind med Facebook</a>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!--<div class="form-group row mb-2">-->
                            <!--    <div class="col-md-6 offset-md-4">-->
                            <!--        <a href="{{ url('login/github') }}"-->
                            <!--           class="btn btn-outline-dark btn-block btn-block btn-social-icon btn-facebook"><i-->
                            <!--                class="fa fa-facebook"></i>Log ind med Github</a>-->
                            <!--    </div>-->
                            <!--</div>-->

                            <!--<div class="form-group row mb-2">-->
                            <!--    <div class="col-md-6 offset-md-4">-->
                            <!--        <a href="{{ url('login/google') }}"-->
                            <!--           class="btn btn-outline-danger btn-block btn-block btn-social-icon btn-facebook"><i-->
                            <!--                class="fa fa-facebook"></i>Log ind med Gmail</a>-->
                            <!--    </div>-->
                            <!--</div>-->


                            {{--                            <div class="form-group">--}}
                            {{--                                <label class="col-md-4 control-label">Or login with</label>--}}
                            {{--                                <div class="col-md-8 col-md-offset-2">--}}
                            {{--                                                                <a href="{{ url('login/facebook') }}" class="btn btn-social-icon btn-facebook"><i--}}
                            {{--                                                                        class="fa fa-facebook"></i> Facebook</a>--}}
                            {{--                                    <a href="{{ url('login/google') }}" class="btn btn-social-icon btn-google-plus"><i--}}
                            {{--                                            class="fa fa-google-plus"></i> Google</a>--}}
                            {{--                                    <a href="{{ url('login/github') }}" class="btn btn-social-icon btn-github"><i--}}
                            {{--                                            class="fa fa-github"></i> Github</a>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
