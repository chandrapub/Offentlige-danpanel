<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Danpanel Kunde Oversigt</title>
    <link rel="shortcut icon" type="image/png" href="{{asset('assets/site/assets/images/logo-sign.png')}}">
    <meta name="description" content="Danpanel Customer Dashboard">
    <meta name="author" content="Danpanel">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-TileColor" content="#603cba">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" media="screen" href="{{asset('assets/customer/css/vendor.min.css')}}">
    <link rel="stylesheet" media="screen" href="{{asset('assets/customer/css/theme.min.css')}}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{asset('assets/customer/js/modernizr.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('css/customer/style.css')}}">
    @yield('head')

</head>

<body>
<header class="navbar-wrapper navbar-sticky">
    <div class="d-table-cell align-middle pr-md-3"><a class="navbar-brand mr-1" href="/"><img
                src="{{asset('assets/site/assets/images/logo-black.png')}}"
                alt="DanPanel"/></a></div>
    <div class="d-table-cell w-100 align-middle pl-md-3">
        <div class="navbar justify-content-end justify-content-lg-between">
            <ul class="navbar-nav d-none d-lg-block">
                <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Hjem</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('customer.home')}}">Min oversigt</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('customer.profile')}}">Profil</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('customer.orders')}}">Ordrer</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('customer.chat')}}">Beskeder</a></li>

            </ul>
            <div>
                <a class="btn btn-gradient ml-3 d-none d-xl-inline-block" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">Log ud</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                      style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</header>


<!-- Page Title-->
<div class="page-title d-flex" aria-label="Page title">
    <div class="container text-left align-self-center">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Hjem</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Profil</a>
                </li>
            </ol>
        </nav>
        <h1 class="page-title-heading">{{isset($dashboardHeader) ? $dashboardHeader : ''}}</h1>
        @if(empty(auth()->user()->account_type))
            <div class="alert alert-warning">Bekræft først din profil. <a
                    href="{{route('customer.complete.profile')}}">Klik her</a></div>
        @endif
    </div>
</div>
<!-- Page Content-->
<div class="container-fluid mb-4">
    <div class="row">

        <!-- Profile section -->
        <div class="col-lg-3 pb-5">
            <div class="author-card pb-3">
                <div class="author-card-cover"
                     style="background-image: url({{asset('assets/customer/img/cover.jpg')}});"></div>
                <div class="author-card-profile">
                    <div class="author-card-avatar"><img src="{{asset('assets/customer/img/profile.png')}}"
                                                         alt="Profilbillede">
                    </div>
                    <div class="author-card-details">
                        <br>
                        <h5 class="author-card-name text-lg">{{auth()->user()->name}}</h5>
                        <span class="author-card-position">{{auth()->user()->email}}</span>
                    </div>
                </div>
            </div>
            <div class="wizard">
                <nav class="list-group list-group-flush"><a class="list-group-item" href="account-orders.html">
                        <div class="d-flex justify-content-between align-items-center">
                        </div>
                    </a>
                    <a class="list-group-item {{$page == 'dashboard' ? 'active' : ''}}"
                       href="{{route('customer.home')}}"><i
                            class="fe-icon-user text-muted"></i>Min oversigt</a>
                    <a class="list-group-item {{$page == 'activeOrders' ? 'active' : ''}}"
                       href="{{route('customer.orders')}}">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="fe-icon-tag mr-1 text-muted"></i>
                                <div class="d-inline-block font-weight-medium text-uppercase">Igangværende ordrer</div>
                            </div>
                            <span
                                class="badge badge-{{count(auth()->user()->activeOrders) > 0 ? 'info' : 'secondary'}}">{{count(auth()->user()->activeOrders)}}</span>
                        </div>
                    </a>
                    <a class="list-group-item {{$page == 'completeOrders' ? 'active' : ''}}"
                       href="{{route('customer.complete.orders')}}">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="fe-icon-tag mr-1 text-muted"></i>
                                <div class="d-inline-block font-weight-medium text-uppercase">arkiverede ordre</div>
                            </div>
                            <span
                                class="badge badge-{{count(auth()->user()->completeOrders) > 0 ? 'info' : 'secondary'}}">{{count(auth()->user()->completeOrders)}}</span>
                        </div>
                    </a>

                    <a class="list-group-item {{$page == 'canceledOrders' ? 'active' : ''}}"
                       href="{{route('customer.canceled.orders')}}">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="fe-icon-tag mr-1 text-muted"></i>
                                <div class="d-inline-block font-weight-medium text-uppercase">Anullerede ordrer</div>
                            </div>
                            <span
                                class="badge badge-{{count(auth()->user()->canceledOrders) > 0 ? 'danger' : 'secondary'}}">{{count(auth()->user()->canceledOrders)}}</span>
                        </div>
                    </a>

                    <a class="list-group-item {{$page == 'chat' ? 'active' : ''}}"
                       href="{{route('customer.chat')}}">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="fe-icon-tag mr-1 text-muted"></i>
                                <div class="d-inline-block font-weight-medium text-uppercase">Beskeder</div>
                            </div>
                            <span
                                class="badge badge-{{auth()->user()->customerReadMessages() > 0 ? 'info' : 'secondary'}}">{{auth()->user()->customerReadMessages()}}</span>
                        </div>
                    </a>


                    <a class="list-group-item {{$page == 'profile' ? 'active' : ''}} "
                       href="{{route('customer.profile')}}"><i
                            class="fe-icon-user text-muted"></i>Profil indstillinger
                    </a>

                </nav>
            </div>
        </div>

        <!-- end of profile section -->


        <!-- main body area -->

    @yield('body')

    <!--  end of main body area -->
    </div>
</div>


<footer class="bg-light-dark pt-5">

    <div class="pt-5" style="background-color: #30363d;">
        <div class="container">

            <hr class="hr-light">
            <div class="d-md-flex justify-content-between align-items-center py-4 text-center text-md-left text-white">
                <div class="order-1">
                    <h4 class="text-white">DanPanel</h4>
                    <p>CVR-Nummer: 38362925</p>
                    <p>Info@danpanel.dk</p>
                    <p> Vi svarer inden for 24 timer alle arbejdsdage</p>
                    <p>Farverland 6, 2600 Glostrup</p>
                    <a href="{{asset('assets/site/assets/OtherFiles/Handelsbetingelser-og-vilkar-Samlet.pdf')}}" target="_blank">Handelsbetingelser
            og vilkår 
                    </a>
                </div>
                
                
                <div class="order-3">
                    
                    <p style="padding-left:1em">
                        <a href="https://certifikat.emaerket.dk/danpanel.dk?fbclid=IwAR2VDaxwELCwtxtC_xBNCEEf-V1JRRzknI1VgWITjoM3vFm7Cf1MZI_Xrh0"> <img src="{{asset('assets/site/assets/images/icons/e-market01.png')}}" width="150px" alt="e-mærket"> </a></p>
                    <p><a href="{{asset('assets/site/assets/OtherFiles/Cookie-og-privatlivspolitik-DanPanel.pdf')}}" target="_blank">Privatlivspolitik
                        og Cookies</a>
                    </p>
                </div>
                
                
                
                <div class="order-3">
                    <h4 class="text-white">Kundeservice</h4>
                    <p>Man - Fre fra kl. 09:00 - 15:00</p>
                    <p>hej@danpanel.dk</p>
                    <p> Vi svarer inden for 24 timer alle arbejdsdage</p>
                    <p>+45 32 22 32 03</p>
                </div>
            </div>
            
            <div class="text-white">
                <div class="w3-xlarge" style="text-align:center;">
                    <a href="https://www.facebook.com/DanPanelDK" target="_blank"><i style="color:#007BFC;"
                    class="fa fa-facebook-official fa-2x w3-hover-opacity"></i></a> 
                    <a href="https://www.linkedin.com/company/danpanel/" target="_blank" style="width="150px"><i
                    style="color:#007BFC;" class="fa fa-linkedin fa-2x w3-hover-opacity"></i></a>

                </div>
                 <p class="copyright-text" style="text-align:center">Copyright &copy; 2019 DanPanel Aps. All Right Reserved.</p>
            </div>
            
         </div>
    </div>
</footer>



<!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="fe-icon-chevron-up"></i></a>
<!-- Backdrop-->
<div class="site-backdrop"></div>
<!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
<script src="{{asset('assets/customer/js/vendor.min.js')}}"></script>
<script src="{{asset('assets/customer/js/theme.min.js')}}"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://checkout.dibspayment.eu/v1/checkout.js?v=1"></script>

<script>
    $(document).ready(function () {
        $('table.dataTable').DataTable();
    });
</script>

@yield('footer')
</body>

</html>
