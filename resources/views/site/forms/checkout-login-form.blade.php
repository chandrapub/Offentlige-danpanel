<style>
/*.login-formula{*/
/*    width:80%; text-align:center; margin:auto;*/
/*}*/
@media only screen and (max-width: 768px) {
    .fb-login{
        width: 90%!important;
    }
    .google-login{
        width: 90%!important;
    }
    /*.login-formula{*/
    /*width:100%; text-align:center; margin:auto;*/
}
}
</style>
<div class="col-md-12 text-center">
    <!--<p class="" style="font-size:2.5rem">Log ind</p>-->
    <!--<br>-->
</div>
<form method="POST" action="{{ route('login.customer') }}">
<div class="w3-center" style="">
 <!--   <div class="form-group row mb-2">-->
	<!--	<div class="col-md-12">-->
	<!--		<a href="{{ url('login/facebook') }}" class="btn fb-login"-->
	<!--		   style="line-height: .5rem; background:#3B5998; color:white; width: 65%; font-size:.9em;">-->
	<!--			<i class="fa fa-facebook" style="font-size:1.5em;"> <span class="p-2">Fortsæt med Facebook</i></span> </a>-->
		
	<!--	</div>-->
	<!--</div>-->
	
	
	<!--<div class="form-group row mb-2">-->
	<!--	<div class="col-md-12">-->
	<!--		<a href="{{ url('login/google') }}" class="btn google-login"-->
	<!--		style="line-height: .5rem; background:#DD4B39; color:white; width: 65%; font-size:.9em;">-->
	<!--			<i class="fa fa-google-plus" style="font-size:1.5em;"> <span class="p-2">Fortsæt med Google</i></span> </a>-->
	<!--	</div>-->
	
	<!--</div>-->
 <!--   <p style="text-align:center;">Eller</p>-->
    @csrf
    <!--<div class="form-group row">-->
    <!--    <div class="col-md-12">-->
    <!--        <select name="account_type" id="" class="form-control">-->
    <!--            <option value="">Profiltype</option>-->
    <!--            <option value="private">Privat</option>-->
    <!--            <option value="business">Erhverv</option>-->
    <!--            <option value="government">Offentlige</option>-->
    <!--        </select>-->
    <!--    </div>-->
    <!--</div>-->
    <div class="form-group row">


        <div class="col-md-12">

            <input id="email" type="email"
                   class="form-control @error('email') is-invalid @enderror"
                   name="email"
                   value="{{ old('email') }}" placeholder="Email" required
                   autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-12">
            <input id="password" type="password"
                   class="form-control @error('password') is-invalid @enderror"
                   name="password"
                   required placeholder="Adgangskode" autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
    </div>

    <div class="form-group row mb-0">
        <div class="col-md-4 m-auto">
            <button type="submit" class="btn btn-block btn-success">
                {{ __('Log ind') }}
            </button>
        </div>
    </div>

    <div class="form-group row  mt-2">
        <div class="col-md-12">
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Glemt din adgangskode?') }}
                </a>

                <a class="btn btn-link" href="{{ route('register') }}">
                    <span style="color: #000">Opret en gratis Kundekonto </span>{{ __('Opret profil') }}
                </a>
                <!--<a	href="https://certifikat.emaerket.dk/danpanel.dk?fbclid=IwAR2VDaxwELCwtxtC_xBNCEEf-V1JRRzknI1VgWITjoM3vFm7Cf1MZI_Xrh0" target = "_blank">-->
                <!--    <img src="{{asset('assets/site/assets/images/icons/e-market-06.png')}}" width="100px" alt="e-mærket">-->
                <!--</a>-->
            @endif
        </div>
    </div>
</div>
</form>