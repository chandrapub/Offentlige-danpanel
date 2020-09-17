@extends('layouts.site.layout')

@section('head')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

@endsection

@section('body')

    <div class="view-main mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="card border-0 wow bounceInLeft">

                        <div class="product-overview">
                            <div class="product-img">
                                <img src="{{$product->showProductImage()}}" style="max-width: 100%"
                                     alt="product-imgage">
                            </div>
                            <div class="prodcut-nameandprice mt-3 text-center">
                                <h4 class="product-name">{{$product->name}}</h4>
                                <br>
                                @if(!empty($product->price))
                                    @include('layouts.site.product-price')
                                @endif
                            </div>
                            <div class="product-description text-center">
                                {!! $product->description !!}
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-md-5 ml-auto col-lg-5">
                    <div class="card  wow bounceInRight">
                        <div class="card-body1 shadow1" style="flex: 1 1 auto; padding:0 1.25rem 1rem 1.25rem">
                            @guest
                                <!--<h3 class="text-center">Sådan gør du:</h3>-->
                                <!--<p style="align-items:center">-->
                                <!--    <ol type="1" >-->
                                <!--        <li>Log ind </li>-->
                                <!--        <li>Hent tilbud </li>-->
                                <!--        <li>Accepter/ Afvis </li>-->
                                <!--    </ol>-->
                                <!--</p>-->
                                
                                
                            <div class="card-body shadow m-2">
                                <div style="text-align:center; justify-content:center; margin-bottom:1rem;">
                                    <a style="text-decoration:none;" data-toggle="collapse" class="collapsed" href="#logind">
                                        <p style="" aria-hidden="true">Har du allerede en bruger?</p>
                                        <span style="background-color:#449D44; color:white; padding: .6rem 2rem; border-radius: 5px" aria-hidden="true">Log ind her </span>
                                        <!-- <span class="fa fa-chevron-up"></span> -->
                                    </a>
                                </div>
                                <div id="logind" class="collapse" style="padding:10px;">
                                     @include('site.forms.checkout-login-form')
                                </div>
                            </div>
                            <!--<div class="card-body shadow m-2">-->
                            <!--    <h3 class="text-center">Fortsæt uden login</h3>-->
                            <!--    include('site.forms.checkout-form')-->
                            <!--</div>-->
                            
                            <div id="book_meeting" class="card-body shadow m-2">
                                
                                   
                                    <div class="w3-center" id="contact"> 
                                    <span class="w3-xlarge w3-bottombar w3-border-green w3-padding-16">Fortsæt uden login</span>
                                    </div>
                                    <form class="w3-container w3-white ml-4 mr-4"
                                            action="{{route('site.submit.contact.form')}}" Method="post">
                                            {{csrf_field()}}
                                        <div class="w3-section">
                                            <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" placeholder="Navn" name="name"
                                                   required>
                                        </div>
                                        <div class="w3-section">
                                            <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" placeholder="Email" name="email"
                                                   required>
                                        </div>
                                        <div class="w3-section">
                                            <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" placeholder="Tlf Nr.(max 8 tegn)" name="tlf"
                                                   required>
                                        </div>
                                        <div class="w3-section">
                                            <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" placeholder="Emne" name="subject" required>
                                        </div>
                                        <div class="w3-section">
                                            <textarea class="w3-input w3-border w3-hover-border-black" placeholder="Besked" style="width:100%;" name="message"
                                                      required></textarea>
                                        </div>
                                        <div class="w3-section">
                                            <button type="submit" name="contact-submit" class="w3-button w3-green btn-block">Send</button>
                                        </div>
                                    </form>
                                    <!--<div class="emarkerInLogin" style="margin: 3rem 0rem 1rem; float:right;">-->
                                    <!--    <a href="https://certifikat.emaerket.dk/danpanel.dk?fbclid=IwAR2VDaxwELCwtxtC_xBNCEEf-V1JRRzknI1VgWITjoM3vFm7Cf1MZI_Xrh0" target = "_blank">-->
                                    <!--            <img src="{{asset('assets/site/assets/images/icons/e-market-04.png')}}"-->
                                    <!--                 height="40px" width="150px" alt="e-mærket">-->
                                    <!--    </a>-->
                                    <!--</div>-->
                                </div>

                            
                            
                            @endguest
                            {{--show checkout form--}}
                            @auth
                                @if(auth()->user())
                                
                                <!--if(auth()->user()->isUserAbleToOrderFromThisCategory($product->category->user_access))-->
                                    @include('site.forms.checkout-form')
                                @else
                                    <div class="alert-warning alert"><strong>
                                            Beklager, med denne profiltype har du ikke adgang til at placere en ordre i
                                            denne kategori.</strong><br><br>
                                        Du bedes oprette/eller logge ind med en profiltype med adgang til denne ydelse.
                                        <br>
                                    </div>
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.dateTimePicker').datetimepicker({
                format: 'DD-MM-YYYY HH:mm:ss'
            });

            $('.datepicker').datetimepicker({
                format: 'DD-MM-YYYY'
            });
        })
    </script>
@endsection
