@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Opret profil') }}</div>

                    <div class="card-body">

         <!--               <div class="form-group row mb-2">-->
         <!--                   <div class="col-md-6 offset-md-4">-->
         <!--                       <a href="{{ url('login/facebook') }}" class="btn"-->
         <!--       			   style="line-height: .5rem; background:#3B5998; color:white; width: 100%; font-size:.9em;">-->
         <!--       				<i class="fa fa-facebook" style="font-size:1.5em;"> <span class="p-2">Fortsæt med Facebook</i></span> </a>-->
            
         <!--                   </div>-->
         <!--               </div>-->
            	
            	
         <!--   	        <div class="form-group row mb-2">-->
         <!--   		        <div class="col-md-6 offset-md-4">-->
         <!--   		        	<a href="{{ url('login/google') }}" class="btn"-->
         <!--   			        style="line-height: .5rem; background:#DD4B39; color:white; width: 100%; font-size:.9em;">-->
         <!--   				    <i class="fa fa-google-plus" style="font-size:1.5em;"> <span class="p-2">Fortsæt med Google</i></span> </a>-->
         <!--   		        </div>-->
            	
         <!--   	        </div>-->
         <!--<p class="col-md-6 offset-md-4" style="text-align:center;">Eller</p>-->
    
                        <!--<div class="w3-button col-md-6 offset-md-4" style="text-align:center;">-->
                        <!--    <a data-toggle="collapse" class="collapsed btn btn-success rounded-4" href="#signup-form"-->
                        <!--       style="color: #fff; padding:8px; border-radius:4px;">Opret Profil</a>-->
                        <!--</div>-->
                        <!--<br>-->
                        <form style="" class="collapse1" id="signup-form" method="POST"
                              action="{{ route('register.customer') }}">
                            @csrf
                            <div class="form-group row ">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Navn') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Adresse') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
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

                            <!--<div class="form-group row">-->
                            <!--    <label for="role"-->
                            <!--           class="col-md-4 col-form-label text-md-right">Profil Type</label>-->
                            <!--    <div class="col-md-6">-->
                            <!--        <select name="account_type" required class="form-control" id="account_type">-->
                            <!--            <option value="" selected disabled>Vælg</option>-->
                            <!--            <option value="private">Privat</option>-->
                            <!--            <option value="business">Erhverv</option>-->
                            <!--            <option value="government">Offentlige</option>-->
                            <!--        </select>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <div class=" selected-output-field">

                            </div>


                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Adgangskode') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Bekræft Adgangskode') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for=""
                                       class="col-md-4 col-form-label text-md-right"></label>

                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input"
                                               name="subscribeToNewsLetter">
                                        <label class="form-check-label" for="exampleCheck1">Ja tak til special
                                            kampagner, rabatter og konkurrencer fra DanPanel.</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for=""
                                       class="col-md-4 col-form-label text-md-right"></label>
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input required type="checkbox" class="form-check-input"
                                               name="terms_and_condition">
                                        <label class="form-check-label" for="exampleCheck1">Jeg accepterer DanPanels <a
                                                href="{{asset('assets/site/assets/OtherFiles/Handelsbetingelser-og-vilkar-Samlet.pdf')}}"
                                                target="_blank">(handelsbetingelser og vilkår).</a></label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-4">
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
    </div>

    @include('layouts.site.modals.register-terms-and-condiction-modal')
@endsection

@section('footer')
    <script src="{{asset('js/resgistration-account-type.js')}}"></script>
@endsection

