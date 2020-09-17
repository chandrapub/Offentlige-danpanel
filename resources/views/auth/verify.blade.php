@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tak fordi du har oprettet en bruger på DanPanel! ') }}</div>

                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                            {{ __('Et bekræftelseslink er tilsendt din e-mailadresse.') }}
                    </div>
                    <!--@if (session('resent'))-->
                    <!--    <div class="alert alert-success" role="alert">-->
                    <!--        {{ __('Et bekræftelseslink er tilsendt din e-mailadresse.') }}-->
                    <!--    </div>-->
                    <!--@endif-->

                    {{ __('Vi værdsætter hver enkelt bruger på vores portal og tilstræber os efter at yde den bedste service for vore kunder. Vi ser frem til at servicere dig på bedst mulige måde og glæder os til at behandle dine bestillinger.') }}
                    <!-- {{ __('Hvis du ikke har modtaget e-mailen kan du anmode om en ny.') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
		                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Klik her for at anmode om et nyt bekræftelseslink.') }}</button>.
	                </form> -->
                </div>
        </div>
    </div>
</div>
@endsection
