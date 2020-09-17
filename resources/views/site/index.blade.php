<html>
<head>
@extends('layouts.site.layout')

<title>DanPanel kan stille kvalificeret mandskab til at varetage sager for din kommune og hjælpe dine borgere indenfor familiebehandling, støttepersoner, kontaktpersoner, pædagogisk støtte, samvær og unge på efterværn. Vi kan også hjælpe med kognitiv terapi til dine borgere samt til dig og dine kollegaer. Vi matcher jeres behov.</title>
 <link rel="shortcut icon" type="image/png" href="https://offentlige.danpanel.dk/assets/site/assets/images/logo-sign.png">
<meta charset="UTF-8">
<meta name="description" content="DanPanel kan stille kvalificeret mandskab til at varetage sager for din kommune og hjælpe dine borgere indenfor familiebehandling, støttepersoner, kontaktpersoner, pædagogisk støtte, samvær og unge på efterværn. Vi kan også hjælpe med kognitiv terapi til dine borgere samt til dig og dine kollegaer. Vi matcher jeres behov.">

<meta itemprop="name" content="DanPanel kan stille kvalificeret mandskab til at varetage sager for din kommune og hjælpe dine borgere indenfor familiebehandling, støttepersoner, kontaktpersoner, pædagogisk støtte, samvær og unge på efterværn. Vi kan også hjælpe med kognitiv terapi til dine borgere samt til dig og dine kollegaer. Vi matcher jeres behov.">
<meta itemprop="description" content="https://offentlige.danpanel.dk/">
<meta itemprop="image" content="https://offentlige.danpanel.dk/assets/site/assets/images/Offentlige_logo.png">
<meta itemprop="url" content="https://offentlige.danpanel.dk/">
<style>
	
	.overblikket-struk {
		height: 35px;
	}
	
	@media only screen and (max-width: 768px) {
		.overblikket-sub-container {
			width: 100% !important;
		}
		
		.overblikket-struk {
			height: auto !important;
		}
	}
	
	.fa-chevron-up {
		transition: .3s transform ease-in-out;
		color: green;
	}
	
	.collapsed .fa-chevron-up {
		transform: rotate(180deg);
	}
	
	.cookie {
		position: absolute;
		top: 0;
		width: 100%;
	}
	
	.video-container {
		position: relative;
	}
	
	.cookie-close-x {
		position: absolute;
		right: 15px;
		font-weight: bold;
		cursor: pointer;
	}
	
	img.icon-img {
		max-width: 45px;
		vertical-align: middle;
	}
	
	}
	
	.margin-top-left-right {
		margin-top: 100px;
	}
	
	h2 {
		font-family: Arial, Verdana;
		font-weight: 800;
		font-size: 2.5rem;
		color: #091f2f;
	<!-- text-transform: uppercase;
	-->
	}
	
	.accordion-section .panel-default > .panel-heading {
		border: 0;
		background: #f4f4f4;
		padding: 0;
	}
	
	.accordion-section .panel-default .panel-title a {
		display: block;
		font-style: italic;
		font-size: 1.5rem;
	}
	
	.accordion-section .panel-default .panel-title a:after {
		font-family: 'FontAwesome';
		font-style: normal;
		font-size: 3rem;
		content: "\f106";
		/*color: #1f7de2;*/
		float: right;
		margin-top: -12px;
	}
	
	.accordion-section .panel-default .panel-title a.collapsed:after {
		content: "\f107";
	}
	
	.accordion-section .panel-default .panel-body {
		font-size: 1.2rem;
	}
	
	.accordion-section .panel-default .panel-title a {
		color: #444648;
	}
	
	.BannImgMobile {
		display: none;
	}
	
	
	.subcat-icon-sec-mob {
		display: none;
	}
    #book_meeting{
        /* width:50%;
        height:50%; */
        opacity:;
        top:auto;
        bottom:0px;
        right:50;
        display:none;
        position:fixed;
        /* background-color:#313131; */
        overflow:auto;
        border:1px black;
    }

	@media only screen and (max-width: 768px) {
		.homePageBannerImage {
			position: static !important;
		}
		
		.loginOptionHomePage {
			position: static !important;
			/* top: 6rem;  */
			left: 0%;
			margin-top: 2rem;
			width: 100% !important;
			height: auto;
			
		}
		
		.BannImg {
			display: none;
		}
		
		.BannImgMobile {
			display: block;
		}
		
		
		.subcat-icon-sec-desk {
			/* margin:5px; */
			display: none;
		}
		
		.subcat-icon-sec-mob {
			display: block !important;
		}
		
		.om-member-logo-mob {
			display: block !important;
		}
		
		.om-member-logo-pc {
			display: none;
		}
		
		.btn-channel {
			display: none;
		}
	}
	.icon-zoom:hover{
    transform:scale(1.1);
    transition: transform .3s;
}

</style>
</head>


@section('body')
	
	
	<!-- navabr end -->
	<div class="video-container homePageBannerImage" style="position:relative">
		
		<!--<img class="BannImg" src="{{asset('assets/site/assets/images/Forside-billede-til-hjemmeside-2020.png')}}" width=100%;-->
		<!--     alt="font-page-image">-->
		<!--<img class="BannImgMobile" src="{{asset('assets/site/assets/images/DanPanel-forside-billede-mobil-verison.png')}}"-->
		<!--     width=100%;-->
		<!--     alt="font-page-image">-->
		<!--<video class="video-file" autoplay loop muted>-->
	<!--	<source src="{{asset('assets/site/assets/images/Forside.mp4')}}" type="video/mp4">-->
		<!--</video>-->
		{{--@guest--}}
		<!--	<div class="container loginOptionHomePage"-->
		<!--	     style="position:absolute; top: 2rem; left: 25%; width:80%; bottom:-5rem; height:auto;">-->
		<!--		<div class="row justify-content-center">-->
		<!--			<div class="col-md-5 ml-auto col-lg-5">-->
		<!--				<div class="card  wow bounceInRight">-->
		<!--					<div class="card-body shadow">-->
		<!--						{{--@include('site.forms.checkout-login-form')--}}
								
		<!--						{{--show checkout form--}}-->
		<!--					</div>-->
		<!--				</div>-->
		<!--			</div>-->
		<!--		</div>-->
		<!--	</div>-->
		{{--@endguest--}}
		
	<!--<div class="video-container1">-->
        <video class="video-file" autoplay loop muted controls>
            <source src="{{asset('assets/site/assets/videos/Video.mp4')}}" type="video/mp4">
        </video>
    <!--</div>-->
		
	<!--<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">-->
 <!--       <ol class="carousel-indicators">-->
 <!--           <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>-->
 <!--           <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>-->
 <!--           <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>-->
            
 <!--       </ol>-->
        
 <!--       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">-->
 <!--           <ol class="carousel-indicators">-->
 <!--               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>-->
 <!--               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>-->
 <!--           </ol>-->
 <!--       <div class="carousel-inner">-->
 <!--           <div class="carousel-item active">-->
 <!--               <img class="d-block w-100" src="{{asset('assets/site/assets/images/Offentlige-home-slide.png')}}"-->
 <!--                   width=100%; alt="category-slide-image">-->
 <!--           </div>-->
 <!--           <div class="carousel-item">-->
 <!--               <img class="d-block w-100" src="{{asset('assets/site/assets/images/Ordninger-slide.png')}}"-->
 <!--                   width=100%; alt="category-slide-image">-->
 <!--           </div>-->
 <!--           <div class="carousel-item">-->
 <!--               <img class="d-block w-100" src="{{asset('assets/site/assets/images/Sociale-ydelser-slide.png')}}"-->
 <!--                   width=100%; alt="category-slide-image">-->
 <!--           </div>-->
 <!--       </div>-->
        
        
        

        <!--<div class="carousel-inner">-->
        <!--    <div class="carousel-item active">-->
        <!--        <img class="d-block w-100"-->
        <!--            src="{{asset('assets/site/assets/images/Forside-billede-DanPanel-platform-2020.png')}}" width=100%;-->
        <!--            alt="category-slide-image">-->
        <!--    </div>-->
        <!--    <div class="carousel-item">-->
        <!--        <img class="d-block w-100" src="{{asset('assets/site/assets/images/Videoovervagning-slide.png')}}"-->
        <!--            width=100%; alt="category-slide-image">-->
        <!--    </div>-->
        <!--    <div class="carousel-item">-->
        <!--        <img class="d-block w-100" src="{{asset('assets/site/assets/images/Digitalisering-slide.png')}}"-->
        <!--            width=100%; alt="category-slide-image">-->
        <!--    </div>-->
        <!--    <div class="carousel-item">-->
        <!--        <img class="d-block w-100" src="{{asset('assets/site/assets/images/Erhvervslejemal-slide.png')}}"-->
        <!--            width=100%; alt="category-slide-image">-->
        <!--    </div>-->
        <!--    <div class="carousel-item">-->
        <!--        <img class="d-block w-100" src="{{asset('assets/site/assets/images/Kaffelosninger-slide.png')}}"-->
        <!--            width=100%; alt="category-slide-image">-->
        <!--    </div>-->
        <!--    <div class="carousel-item">-->
        <!--        <img class="d-block w-100" src="{{asset('assets/site/assets/images/Mandskab-slide.png')}}" width=100%;-->
        <!--            alt="category-slide-image">-->
        <!--    </div>-->
        <!--    <div class="carousel-item">-->
        <!--        <img class="d-block w-100" src="{{asset('assets/site/assets/images/Ordninger-slide.png')}}" width=100%;-->
        <!--            alt="category-slide-image">-->
        <!--    </div>-->
        <!--    <div class="carousel-item">-->
        <!--        <img class="d-block w-100" src="{{asset('assets/site/assets/images/Alarm-slide.png')}}" width=100%;-->
        <!--            alt="category-slide-image">-->
        <!--    </div>-->
        <!--    <div class="carousel-item">-->
        <!--        <img class="d-block w-100" src="{{asset('assets/site/assets/images/Sociale-ydelser-slide.png')}}"-->
        <!--            width=100%; alt="category-slide-image">-->
        <!--    </div>-->
        <!--    <div class="carousel-item">-->
        <!--        <img class="d-block w-100" src="{{asset('assets/site/assets/images/Mentor-slide.png')}}" width=100%;-->
        <!--            alt="category-slide-image">-->
        <!--    </div>-->
        <!--    <div class="carousel-item">-->
        <!--        <img class="d-block w-100" src="{{asset('assets/site/assets/images/Tidsregistrering-slide.png')}}"-->
        <!--            width=100%; alt="category-slide-image">-->
        <!--    </div>-->
        <!--    <div class="carousel-item">-->
        <!--        <img class="d-block w-100" src="{{asset('assets/site/assets/images/Regnskab-slide.png')}}" width=100%;-->
        <!--            alt="category-slide-image">-->
        <!--    </div>-->
        <!--</div>-->
        
        
 <!--       <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">-->
 <!--           <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
 <!--           <span class="sr-only">Previous</span>-->
 <!--       </a>-->
 <!--       <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">-->
 <!--           <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
 <!--           <span class="sr-only">Next</span>-->
 <!--       </a>-->
 <!--   </div>-->
		
	<!--	<div class="cookie" style="position:sticky; top:auto; bottom:0; z-index:1; background:rgba(51, 51, 0, 0.6)">-->
	<!--	<img width="32px" src="{{asset('assets/site/assets/images/Cookies-ikon-hvid.png')}}" alt=""> <span>For at give-->
	<!--			dig den bedste oplevelse hos DanPanel anvender vi cookies. Ved at anvende DanPanels platform og klikke rundt-->
	<!--			på vores site accepterer du brugen af cookies.<a-->
	<!--				href="{{asset('assets/site/assets/OtherFiles/Cookie-og-privatlivspolitik-DanPanel.pdf')}}">(Læs mere)-->
	<!--			</a></span>-->
	<!--	<span class="text-right cookie-close-x ml-auto">x</span>-->
	<!--    </div>-->
	<!--</div>-->
	

<div class="hvemDenpanelKonceptContainer">
    <!-- Hvem er DanPanel section start -->
    <div class="container hevmDanpanelContainer" id="dan-concept" style="font-family:roboto;">
        <div class="row">
            <p class="text-center h3 m-auto" style=""> Sådan gør du </p> </br></br></br>
        </div>
        <div class="row h5" style="margin:2rem 0rem">
            <!--<p class="text-center m-auto wow zoomIn" style="">DanPanel er formidler af produkter og løsninger på vegne af vores-->
            <!--    samarbejdspartnere. Du-->
            <!--    kan hente gratis tilbud på vores platform med +50 produkter eller løsninger fordelt på +15-->
            <!--    kategorier.-->
            <!--</p>-->
        </div>
        <div class="row justify-content-md-center d-flex mb-3" style="">
            <div class="col-md-4 col-xs-12 three-subheading-container">
                <div class="p-0 m-0 three-subheading border shadow" style="">
                    <img src="{{asset('assets/site/assets/images/Udfyld-formularen.png')}}" width="100%"
                        height="auto" alt="Hent-tilbud-baggrund-img">
                    <h2 class="three-subheading-title wow bounce" style="">Udfyld formular</h2>
                    <p class="pl-3 pr-3 pt-3 wow zoomIn">Find den løsning du søger  og udfyld formularen. Vi  har kvalificeret mandskab  til at hjælpe det offentlige  og borgere.
                    </p>
                    <!--<p class="pl-3 pr-3 wow zoomIn">Det er gratis at have en kundekonto, og vi opbevarer alt for dig, så du-->
                    <!--    under din profil kan følge med i processen. </p>-->
                </div>
            </div>

            <div class="col-md-4 col-xs-12 three-subheading-container">
                <div class="p-0 m-0 three-subheading border shadow" style="">

                    <img src="{{asset('assets/site/assets/images/Vi-kontakter-dig.png')}}" width="100%"
                        height="auto" height="" alt="Bliv-kontaktet-baggrund-img">

                    <h2 class="three-subheading-title wow bounce">Vi kontakter dig</h2>

                    <p class="pl-3 pr-3 pt-3 wow zoomIn">Vores supervisor med over 37 års erfaring inden for feltet vil kontakte dig med henblik på dit ønske om et tilbud. </p>
                    <!--<p class="pl-3 pr-3 pb-3 wow zoomIn">Herefter vil du blive kontaktet og få oplyst samarbejdspartneren,-->
                    <!--    og dennes uforpligtende tilbud. </p>-->
                </div>

            </div>

            <div class="col-md-4 col-xs-12 p-0 ">
                <div class="p-0 m-0 border shadow three-subheading" style="">
                    <img src="{{asset('assets/site/assets/images/Vi-matcher-dit-behov.png')}}" width="100%"
                        height="auto" alt="Accepter-eller-afvis-baggrund-img">
                    <h2 class="three-subheading-title wow bounce">Vi matcher dit behov</h2>

                    <p class="pl-3 pr-3 pt-3 wow zoomIn">Vi sørger for at matche  dit/jeres behov med kvalifi cerede fagfolk. </p>

                </div>
            </div>

        </div>

        <div class="row justify-content-md-center">
            <div class="col-md-12 shadow p-0 m-0 wow zoomIn" style="">
                <img src="{{asset('assets/site/assets/images/Dit-eget-panel-2-baggrund.png')}}" width="100%"
                    height="auto" alt="Dit-eget-panel-2-baggrund-img">

                <p class="pl-3 pr-3 pt-3 text-center">Vi gør det muligt for dig at samle alt ét sted for at skabe struktur, overskud og udvikling i din   hverdag gennem vores platform. </p>
                <p class="pl-3 pr-3 text-center">Opret en gratis kundekonto allerede i dag og få fri adgang til dit eget panel. Her kan du  nemt vælge og samle alle de ønskede produkter/løsninger, som du har et behov for. </p>
                <p class="pl-3 pr-3 text-center">Vi hjælper gerne med at skræddersy en løsning til dig. </p>
            </div>
        </div>
    </div>
    <!-- Hvem er DanPanel section end -->


    <!-- Vores Koncept i DanPanel section start -->

    <div class="container-fluid voresKonceptContainer" id="dan-concept" style="">
        <div class="container" style="font-family:roboto">
            <div class="row">
                <p class="h3 m-auto text-center text-white voresKonceptSubContainer" style="">Vores Koncept</p>
            </div>
            <div class="row">
                <p class="h5 m-auto text-center text-white voresKonceptText wow zoomIn" style="">DanPanel Group dækker over flere enheder og områder, og en af disse er DanPanel for offentlige. Det er en platform til det pædagogiske arbejdsområde, hvor vi tilbyder arbejdskraft til kommunerne i forhold til pædagogisk indsats overfor social udsatte børn & unge samt deres familier.
                    <br>
                    Vi stiller kvalificeret arbejdskraft til rådighed, der matcher den enkelte sag i kommunen, som denne har bevilliget støtte og hjælp til.
                    <br> <br>

    Vi har flere løsninger og ordninger til kommuner og borgere. Vi har flere års erfaring inden for felterne familiebehandling, kontaktpersoner, støttepersoner, unge på efterværn mm. Vi kan tilbyde kvalificeret mandskab til at varetage og hjælpe dig/din kommune. Du kan læse om vores løsninger og få hjælp til dine sager ved at udfylde formularen. Vores supervisor/en konsulent for det offentlige vil ringe dig op, og herefter vil vi matche dit/jeres behov med kompetente fagfolk.
                </p>
            </div>
            <div class="row">
                <p class="h4 m-auto text-center text-white pt-3">Så simpelt er det:</p>
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-12" style="margin-bottom:10rem;">
                    <img class="" style="position:relative; z-index: 1;"
                        src="{{asset('assets/site/assets/images/Step-1-gron.png')}}" width="20%" height="auto"
                        alt="Step-1-gron-img">
                    <div class="text-center soSimpeltSection" style="">
                        <p class="h5 font-weight-bold wow zoomIn"> Kontakt os eller udfyld formularen </p>
                        <p class="h6 font-weight-bold wow zoomIn"> Fortæl os om opgaven eller
                        beskriv den, så vil vi behandle din forespørgsel</p>
                        <!--<div class="wow zoomIn">-->
                        <!--    <p class="font-weight-bold p-0 m-0" style="">Gratis <img class="" style="margin-left:1rem"-->
                        <!--            src="{{asset('assets/site/assets/images/icons/Check-point-ja-resize.png')}}"-->
                        <!--            width="8%" height="auto" alt="Check-point-gratis-img"> </p>-->
                        <!--    <p class="font-weight-bold p-0 m-0" style="">Enkelt <img class="" style="margin-left:1rem"-->
                        <!--            src="{{asset('assets/site/assets/images/icons/Check-point-ja-resize.png')}}"-->
                        <!--            width="8%" height="auto" alt="Check-point-enkelt-img"> </p>-->
                        <!--    <p class="font-weight-bold p-0 m-0" style="">Hurtigt <img class=""-->
                        <!--            style="margin-left: .7rem"-->
                        <!--            src="{{asset('assets/site/assets/images/icons/Check-point-ja-resize.png')}}"-->
                        <!--            width="8%" height="auto" alt="Check-point-Hurtigt-img"> </p>-->
                        <!--</div>-->
                    </div>
                </div>
                <div class="col-md-4 col-xs-12" style="margin-bottom:10rem;">
                    <img class="" style="position:relative; z-index: 1;"
                        src="{{asset('assets/site/assets/images/Step-2-gron.png')}}" width="20%" height="auto"
                        alt="Step-2-gron-img">
                    <div class="text-center soSimpeltSection" style="">
                        <p class="h5 font-weight-bold wow zoomIn"> Vi ringer dig op</p>
                        <p class="h6 font-weight-bold wow zoomIn"> Du bliver kontaktet af en konsulent</p>
                        <img class="wow zoomIn" style="" src="{{asset('assets/site/assets/images/customer-service.png')}}"
                            width="20%" height="auto" alt="customer-service-img">
                    </div>
                </div>
                <div class="col-md-4 col-xs-12" style="margin-bottom:10rem;">
                    <img class="border1" style="position:relative; z-index: 1;"
                        src="{{asset('assets/site/assets/images/Step-3-gron.png')}}" width="20%" height="auto"
                        alt="Step-3-gron-img">
                    <div class="text-center soSimpeltSection" style="">
                        <p class="h5 font-weight-bold wow zoomIn pl-3"> Vi matcher dig med den rette 
                        kandidat til opgaven </p>
                        <p class="h6 font-weight-bold wow zoomIn"> Efter dialog med dig om opgaven,
                        kompetance som søges mm. vil vi
                        matche dit behov med kvalificeret 
                        mandskab til udførelse </p>
                        <!--<div class="d-flex wow zoomIn" style="justify-content:space-around">-->
                        <!--    <p class="h6 font-weight-bold">Accepter</p>-->
                        <!--    <p class="h6 font-weight-bold">Afvis</p>-->
                        <!--</div>-->

                        <!--<div class="d-flex wow zoomIn" style="justify-content:space-around">-->
                        <!--    <p><img class="" style=""-->
                        <!--            src="{{asset('assets/site/assets/images/icons/Check-point-ja-resize.png')}}"-->
                        <!--            width="20%" height="auto" alt="Check-point-ja"></p>-->
                        <!--    <p class="font-weight-bold text-center">eller </p>-->
                        <!--    <p> <img class="" style=""-->
                        <!--            src="{{asset('assets/site/assets/images/icons/Check-point-nej-resize.png')}}"-->
                        <!--            width="20%" height="auto" alt="Check-point-nej"></p>-->
                        <!--</div>-->
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- Vores Koncept i DanPanel section end -->
</div>

<!-- All Channel section start -->

<!--<div class="container channelContainer-->
<!--" id="channel">-->
<!--    <div class="row">-->
<!--        <div class="col-md-8">-->
<!--            <div class="row">-->
<!--                <div class="col-md-3 col-6 p-2" style="">-->
<!--                    <a href="https://danpanel.dk/products/Erhverv"> <img class="icon-zoom"-->
<!--                            src="{{asset('assets/site/assets/images/icons/Forside-ikon-DanPanel-Erhvervslinje.png')}}"-->
<!--                            width="100%"></a>-->
<!--                </div>-->
<!--                <div class="col-md-3 col-6 p-2">-->
<!--                    <a href="https://danpanel.dk/products/Erhverv#Videooverv%C3%A5gning"> <img class="icon-zoom"-->
<!--                            src="{{asset('assets/site/assets/images/icons/Forside-ikon-Videoovervagning.png')}}"-->
<!--                            width="100%"> </a>-->
<!--                </div>-->
<!--                <div class="col-md-3 col-6 p-2">-->
<!--                    <a href="https://danpanel.dk/products/Erhverv#Tidsregistrering"> <img class="icon-zoom"-->
<!--                            src="{{asset('assets/site/assets/images/icons/Forside-ikon-Tidsregistrering.png')}}"-->
<!--                            width="100%"> </a>-->
<!--                </div>-->
<!--                <div class="col-md-3 col-6 p-2" style="">-->
<!--                    <a href="https://danpanel.dk/products/Erhverv#Erhvervslejem%C3%A5l"> <img class="icon-zoom"-->
<!--                            src="{{asset('assets/site/assets/images/icons/Forside-ikon-Erhvervslejemal.png')}}"-->
<!--                            width="100%"> </a>-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="row">-->
<!--                <div class="col-md-3 col-6 p-2" style="">-->
<!--                    <a href="https://danpanel.dk/products/Erhverv#Digitaliseringspakker"> <img class="icon-zoom"-->
<!--                            src="{{asset('assets/site/assets/images/icons/Forside-ikon-Digitaliseringspakker.png')}}"-->
<!--                            width="100%"></a>-->
<!--                </div>-->
<!--                <div class="col-md-3 col-6 p-2">-->
<!--                    <a href="https://danpanel.dk/products/Erhverv#Online%20markedsf%C3%B8ring"> <img class="icon-zoom"-->
<!--                            src="{{asset('assets/site/assets/images/icons/Forside-ikon-Online-markedsforing.png')}}"-->
<!--                            width="100%"> </a>-->
<!--                </div>-->
<!--                <div class="col-md-3 col-6 p-2">-->
<!--                    <a href="https://danpanel.dk/products/Erhverv#Blogs/Tekstforfatning"> <img class="icon-zoom"-->
<!--                            src="{{asset('assets/site/assets/images/icons/Forside-ikon-Blog.png')}}" width="100%">-->
<!--                    </a>-->
<!--                </div>-->
<!--                <div class="col-md-3 col-6 p-2" style="">-->
<!--                    <a href="https://danpanel.dk/products/Erhverv#Wordpress/Webdesign"> <img class="icon-zoom"-->
<!--                            src="{{asset('assets/site/assets/images/icons/Forside-ikon-Wordpress-Webdesign.png')}}"-->
<!--                            width="100%"> </a>-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="row">-->
<!--                <div class="col-md-3 col-6 p-2" style="">-->
<!--                    <a href="https://danpanel.dk/products/Erhverv#Mandskab"> <img class="icon-zoom"-->
<!--                            src="{{asset('assets/site/assets/images/icons/Forside-ikon-Mandskab.png')}}"-->
<!--                            width="100%"></a>-->
<!--                </div>-->
<!--                <div class="col-md-3 col-6 p-2">-->
<!--                    <a href="https://danpanel.dk/products/Erhverv#Kaffel%C3%B8sninger"> <img class="icon-zoom"-->
<!--                            src="{{asset('assets/site/assets/images/icons/Forside-ikon-Kaffelosninger.png')}}"-->
<!--                            width="100%"> </a>-->
<!--                </div>-->
<!--                <div class="col-md-3 col-6 p-2">-->
<!--                    <a href="https://danpanel.dk/products/Erhverv#Personlig%20udvikling"> <img class="icon-zoom"-->
<!--                            src="{{asset('assets/site/assets/images/icons/Forside-ikon-personlig-udvikling.png')}}"-->
<!--                            width="100%"> </a>-->
<!--                </div>-->
<!--                <div class="col-md-3 col-6 p-2" style="">-->
<!--                    <a href="https://danpanel.dk/products/Erhverv#Regnskab"> <img class="icon-zoom"-->
<!--                            src="{{asset('assets/site/assets/images/icons/Forside-ikon-Regnskab.png')}}" width="100%">-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-md-2">-->
<!--            <div class="row">-->
<!--                <div class="col-md-12 p-2">-->
<!--                    <a href="https://danpanel.dk/products/Offentlige"> <img class="icon-zoom"-->
<!--                            src="{{asset('assets/site/assets/images/icons/Forside-ikon-DanPanel-Offentliglinje.png')}}"-->
<!--                            width="100%"></a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="col-md-12 p-2">-->
<!--                    <a href="https://danpanel.dk/products/Offentlige#Sociale%20ydelser"> <img class="icon-zoom"-->
<!--                            src="{{asset('assets/site/assets/images/icons/Forside-ikon-Sociale-ydelser.png')}}"-->
<!--                            width="100%"> </a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="col-md-12 p-2">-->
<!--                    <a href="https://danpanel.dk/products/Offentlige#Ordninger"> <img class="icon-zoom"-->
<!--                            src="{{asset('assets/site/assets/images/icons/Forside-ikon-Ordninger.png')}}" width="100%">-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

<!--        <div class="col-md-2">-->
<!--            <div class="row">-->
<!--                <div class="col-md-12 p-2">-->
<!--                    <a href="https://danpanel.dk/products/privat"> <img class="icon-zoom"-->
<!--                            src="{{asset('assets/site/assets/images/icons/Forside-ikon-DanPanel-Privatlinje.png')}}"-->
<!--                            width="100%"></a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="col-md-12 p-2">-->
<!--                    <a href="https://danpanel.dk/products/Privat#Elektronik"> <img class="icon-zoom"-->
<!--                            src="{{asset('assets/site/assets/images/icons/Forside-ikon-Elektronik.png')}}" width="100%">-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row">-->
<!--                <div class="col-md-12 p-2">-->
<!--                    <a href="https://danpanel.dk/products/Privat#Karriere"> <img class="icon-zoom"-->
<!--                            src="{{asset('assets/site/assets/images/icons/Forside-ikon-Karriere.png')}}" width="100%">-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!-- All Channel section end -->


<!-- F&Q section container start -->

<div class="hvorforQuestionContainer" style="">
     <!--Hvorfor DanPanel part start -->
    <div class="container-fluid hvorforContainer " id="plans" style="">
        <div class="container" style="">
            <div class="row">
                <p class="h3 m-auto text-center text-white">Hvorfor DanPanel?</p> <br> <br><br>
            </div>
            <div class="row">
                <div class="col-lg-2 d-flex justify-content-center align-items-center">
                    <p><img src="{{asset('assets/site/assets/images/icons/Hvorfor-DanPanel ikon.png')}}" width="100%">
                    </p>
                </div>

                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-right align-items-center mt-2 mb-2 mr-0 pr-0"
                                    style="">
                                    <img class="" style="margin-right:-40px;  z-index:1;"
                                        src="{{asset('assets/site/assets/images/icons/circular-clock.png')}}"
                                        width="25%" height="auto" alt="circular-clock-img">
                                    <p class="hvorforDanpanelText text-center rounded-lg mt-0 mb-0 h6 wow fadeInDown" style="">
                                        <span class="font-weight-bold"> Kort svartid </span> Vi svare dig på dine spørgsmål, forespørgsler mm. inden for 24 timer i hverdagene.</p>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-12 d-flex justify-content-right align-items-center mt-2 mb-2 mr-0 pr-0"
                                    style="">
                                    <img class="" style="margin-right:-40px;  z-index:1;"
                                        src="{{asset('assets/site/assets/images/icons/alarm.png')}}" width="25%"
                                        height="auto" alt="alarm-img">
                                    <p class="hvorforDanpanelText text-center rounded-lg mt-0 mb-0 h6 wow fadeInDown" style="">
                                        <span class="font-weight-bold">Notifikation </span> Du vil ved aktive sager altid blive underrettet, når nyt sker i processen. Log ind på dit panel og få et overblik over alle dine sager samt eventuelle dokumenter og rapporter.</p>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-12 d-flex justify-content-right align-items-center mt-2 mb-2 mr-0 pr-0"
                                    style="">
                                    <img class="" style="margin-right:-40px;  z-index:1;"
                                        src="{{asset('assets/site/assets/images/icons/Kvalificeret-arbejdskraft-ikon.png')}}"
                                        width="25%" height="auto" alt="Ikon til gratis-img">
                                    <p class="hvorforDanpanelText text-center rounded-lg mt-0 mb-0 h6 wow fadeInDown" style="">
                                        <span class="font-weight-bold"> Kvalificeret mandskab </span> Vi anvender kvalificerede og kompetencefulde fagfolk til sager og opgaver, som vore kunder henvender sig med i det offentlige. </p>
                                </div>

                            </div>

                            <!--<div class="row">-->
                            <!--    <div class="col-12 d-flex justify-content-right align-items-center mt-2 mb-2 mr-0 pr-0"-->
                            <!--        style="">-->
                            <!--        <img class="" style="margin-right:-40px;  z-index:1;"-->
                            <!--            src="{{asset('assets/site/assets/images/icons/social-media.png')}}" width="25%"-->
                            <!--            height="auto" alt="social-media-img">-->
                            <!--        <p class="hvorforDanpanelText text-center rounded-lg mt-0 mb-0 h6 wow fadeInDown" style="">-->
                            <!--            <span class="font-weight-bold">Særlige kampagner</span> Vi har løbende samtaler-->
                            <!--            med vores samarbejdspartnere,-->
                            <!--            der-->
                            <!--            giver vores kunder adgang til særlige kampagner. Alt til fordel for dig.</p>-->
                            <!--    </div>-->

                            <!--</div>-->
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-right align-items-center mt-2 mb-2 mr-0 pr-0"
                                    style="">
                                    <img class="" style="margin-right:-40px;  z-index:1;"
                                        src="{{asset('assets/site/assets/images/icons/Supporting.png')}}" width="25%"
                                        height="auto" alt="Supporting-img">
                                    <p class="hvorforDanpanelText text-center rounded-lg mt-0 mb-0 h6 wow fadeInDown" style="">
                                        <span class="font-weight-bold pl-2">Personlig kundekonsulent </span> En personlig konsulent tilknyttes hver sag, som du til hver en tid kan kontakte med henblik på den sociale ydelse som du/din kommune har valgt.</p>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-12 d-flex justify-content-right align-items-center mt-2 mb-2 mr-0 pr-0"
                                    style="">
                                    <img class="" style="margin-right:-40px;  z-index:1;"
                                        src="{{asset('assets/site/assets/images/icons/needle.png')}}" width="25%"
                                        height="auto" alt="One-stop-shop-ikon-img">
                                    <p class="hvorforDanpanelText text-center rounded-lg mt-0 mb-0 h6 wow fadeInDown" style="">
                                        <span class="font-weight-bold">Skræddersyet løsning </span> Vi hjælper gerne med at skræddersy en løsning efter dit/din borgers behov.</p>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-12 d-flex justify-content-right align-items-center mt-2 mb-2 mr-0 pr-0"
                                    style="">
                                    <img class="" style="margin-right:-40px;  z-index:1;"
                                        src="{{asset('assets/site/assets/images/icons/SSL-Ikon.png')}}" width="25%"
                                        height="auto" alt="alarm-img">
                                    <p class="hvorforDanpanelText text-center rounded-lg mt-0 mb-0 h6 wow fadeInDown" style="">
                                        <span class="font-weight-bold">Sikkerhed </span> Vores side er udstyret med SSL (Secure Socket Layer) protokol og vi er ajour med GDPR datapolitikken. Din/borgerens informationer bliver krypteret med SSL og kan derfor ikke aflæses.</p>
                                </div>

                            </div>

                            <!--<div class="row">-->
                            <!--    <div class="col-12 d-flex justify-content-right align-items-center mt-2 mb-2 mr-0 pr-0"-->
                            <!--        style="">-->
                            <!--        <img class="" style="margin-right:-40px;  z-index:1;"-->
                            <!--            src="{{asset('assets/site/assets/images/icons/needle.png')}}" width="25%"-->
                            <!--            height="auto" alt="One-stop-shop-ikon-img">-->
                            <!--        <p class="hvorforDanpanelText text-center rounded-lg mt-0 mb-0 h6 wow fadeInDown" style="">-->
                            <!--            <span class="font-weight-bold">Skræddersyet løsning </span> Vi hjælper gerne med-->
                            <!--            at skræddersy en løsning-->
                            <!--            efter-->
                            <!--            dit-->
                            <!--            behov.</p>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!--end Hvorfor DanPanel part -->

     <!--F&Q section container start -->
    <!--<div class="container-fluid questionsContainer" style="">-->
    <!--    <div class="questionsSubContainer" id="questions" style="">-->
    <!--        <div class="accordion-section clearfix" style="" aria-label="Question Accordions">-->
    <!--            <div class="container">-->
    <!--                <h3 class="text-center ">Ofte stillede spørgsmål</h3>-->
    <!--                <br>-->
    <!--                <div class="panel-group wow zoomIn" id="accordion" style="margin:5rem 1rem" role="tablist"-->
    <!--                    aria-multiselectable="true">-->
    <!--                    <div class="panel panel-default">-->
    <!--                        <div class="panel-heading p-3 mb-3" role="tab" id="heading0">-->
    <!--                            <h3 class="panel-title">-->
    <!--                                <a class="collapsed" role="button" title="" data-toggle="collapse"-->
    <!--                                    data-parent="#accordion" href="#collapse0" aria-expanded="true"-->
    <!--                                    aria-controls="collapse0">-->
    <!--                                    Hvad vil de sige at min kundekonto er gratis?-->
    <!--                                </a>-->
    <!--                            </h3>-->
    <!--                        </div>-->
    <!--                        <div id="collapse0" class="panel-collapse collapse" role="tabpanel"-->
    <!--                            aria-labelledby="heading0">-->
    <!--                            <div class="panel-body px-3 mb-4">-->
    <!--                                <p>DanPanel er en platform, hvor vi formidler produkter og løsninger til vores-->
    <!--                                    kunder på-->
    <!--                                    vegne af vores samarbejdspartnere. Når du opretter en gratis kundekonto hos-->
    <!--                                    os, får-->
    <!--                                    du fri adgang til produkter og løsninger på platformen alt efter den valgte-->
    <!--                                    profil-->
    <!--                                    type. Når du udfylder en formular på et pågældende produkt/ en løsning-->
    <!--                                    videresender-->
    <!--                                    vi den til vores samarbejdspartner. Når denne udarbejder et uforpligtende-->
    <!--                                    tilbud til-->
    <!--                                    dig, får du oplyst samarbejdspartneren og tilbuddet. Herefter kan du-->
    <!--                                    godkende eller-->
    <!--                                    afslå tilbuddet. </p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->

    <!--                    <div class="panel panel-default">-->
    <!--                        <div class="panel-heading p-3 mb-3" role="tab" id="heading1">-->
    <!--                            <h3 class="panel-title">-->
    <!--                                <a class="collapsed" role="button" title="" data-toggle="collapse"-->
    <!--                                    data-parent="#accordion" href="#collapse1" aria-expanded="true"-->
    <!--                                    aria-controls="collapse1">-->
    <!--                                    Hvad menes der med profiltype?-->
    <!--                                </a>-->
    <!--                            </h3>-->
    <!--                        </div>-->
    <!--                        <div id="collapse1" class="panel-collapse collapse" role="tabpanel"-->
    <!--                            aria-labelledby="heading1">-->
    <!--                            <div class="panel-body px-3 mb-4">-->
    <!--                                <p>Profil typen indikere om du er privat-, offentlig- eller erhvervskunde hos-->
    <!--                                    DanPanel.-->
    <!--                                    Vi formidler forskellige produkter og løsninger alt efter den type profil du-->
    <!--                                    har,-->
    <!--                                    hvorfor du med en privat kundekonto, kun kan få tilbud til produkter i-->
    <!--                                    menuen for-->
    <!--                                    private og tilsvarende gælder for offentlige og erhverv. Det skyldes at-->
    <!--                                    nogle-->
    <!--                                    produkter og løsninger er rettet mod bestemte kundetyper. </p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->

    <!--                    <div class="panel panel-default">-->
    <!--                        <div class="panel-heading p-3 mb-3" role="tab" id="heading2">-->
    <!--                            <h3 class="panel-title">-->
    <!--                                <a class="collapsed" role="button" title="" data-toggle="collapse"-->
    <!--                                    data-parent="#accordion" href="#collapse2" aria-expanded="true"-->
    <!--                                    aria-controls="collapse2">-->
    <!--                                    Hvordan bliver jeg faktureret?-->
    <!--                                </a>-->
    <!--                            </h3>-->
    <!--                        </div>-->
    <!--                        <div id="collapse2" class="panel-collapse collapse" role="tabpanel"-->
    <!--                            aria-labelledby="heading2">-->
    <!--                            <div class="panel-body px-3 mb-4">-->
    <!--                                <p>Når vores samarbejdspartner har tilsendt dig et uforpligtende tilbud foregår-->
    <!--                                    faktureringen jer imellem efter de bestemmelser der fremgår i rammeaftalen.-->
    <!--                                    I nogle-->
    <!--                                    tilfælde kan faktureringen ske gennem DanPanel. Du kan til enhver tid under-->
    <!--                                    ”min-->
    <!--                                    profil” se status over dine bestillinger, fuldførte bestillinger,-->
    <!--                                    dokumenter,-->
    <!--                                    rammeaftaler mv. </p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->

    <!--                    <div class="panel panel-default">-->
    <!--                        <div class="panel-heading p-3 mb-3" role="tab" id="heading3">-->
    <!--                            <h3 class="panel-title">-->
    <!--                                <a class="collapsed" role="button" title="" data-toggle="collapse"-->
    <!--                                    data-parent="#accordion" href="#collapse3" aria-expanded="true"-->
    <!--                                    aria-controls="collapse3">-->
    <!--                                    Hvad får jeg ud af at have en gratis kundekonto hos DanPanel?-->
    <!--                                </a>-->
    <!--                            </h3>-->
    <!--                        </div>-->
    <!--                        <div id="collapse3" class="panel-collapse collapse" role="tabpanel"-->
    <!--                            aria-labelledby="heading3">-->
    <!--                            <div class="panel-body px-3 mb-4">-->
    <!--                                <p>Vores koncept er baseret på at formidle løsninger og produkter gennem vores-->
    <!--                                    platform.-->
    <!--                                    Her får du mulighed for at skabe struktur over din hverdag, skabe overskud i-->
    <!--                                    form af-->
    <!--                                    tid og penge, da vi har sørget for at finde de bedste samarbejdspartnere-->
    <!--                                    inden for-->
    <!--                                    de pågældende kategorier, og du vil opleve konstruktiv udvikling.</p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->


    <!--                    <div class="panel panel-default">-->
    <!--                        <div class="panel-heading p-3 mb-3" role="tab" id="heading3">-->
    <!--                            <h3 class="panel-title">-->
    <!--                                <a class="collapsed" role="button" title="" data-toggle="collapse"-->
    <!--                                    data-parent="#accordion" href="#collapse4" aria-expanded="true"-->
    <!--                                    aria-controls="collapse4">-->
    <!--                                    Kan jeg ændre eller opsige min engangsbestilling/ abonnement?-->

    <!--                                </a>-->
    <!--                            </h3>-->
    <!--                        </div>-->
    <!--                        <div id="collapse4" class="panel-collapse collapse" role="tabpanel"-->
    <!--                            aria-labelledby="heading3">-->
    <!--                            <div class="panel-body px-3 mb-4">-->
    <!--                                <p>Du kan til enhver tid kontakte DanPanel med henblik på at ændre ved en-->
    <!--                                    bestilling.-->
    <!--                                    Dog gælder der betingelser for det produkt/den løsning du har valgt. Dette-->
    <!--                                    vil være-->
    <!--                                    specificeret ved produktet/løsningen. Det koster dig ingen penge at have en-->
    <!--                                    kundekonto hos os, men ønsker du at opsige et abonnement, vil skal du blot-->
    <!--                                    kontakte-->
    <!--                                    os, hvorefter vores samarbejdspartner vil sende en formular til udfyldning.-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->


    <!--                    <div class="panel panel-default">-->
    <!--                        <div class="panel-heading p-3 mb-3" role="tab" id="heading3">-->
    <!--                            <h3 class="panel-title">-->
    <!--                                <a class="collapsed" role="button" title="" data-toggle="collapse"-->
    <!--                                    data-parent="#accordion" href="#collapse5" aria-expanded="true"-->
    <!--                                    aria-controls="collapse5">-->
    <!--                                    Hvad er jeres refunderingspolitik?-->

    <!--                                </a>-->
    <!--                            </h3>-->
    <!--                        </div>-->
    <!--                        <div id="collapse5" class="panel-collapse collapse" role="tabpanel"-->
    <!--                            aria-labelledby="heading3">-->
    <!--                            <div class="panel-body px-3 mb-4">-->
    <!--                                <p>Jf. refunderingspolitikken vil denne være specificeret i de pågældende-->
    <!--                                    rammeaftaler-->
    <!--                                    for det enkelte produkt / valgte løsning. </p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->

    <!--                    <div class="panel panel-default">-->
    <!--                        <div class="panel-heading p-3 mb-3" role="tab" id="heading3">-->
    <!--                            <h3 class="panel-title">-->
    <!--                                <a class="collapsed" role="button" title="" data-toggle="collapse"-->
    <!--                                    data-parent="#accordion" href="#collapse6" aria-expanded="true"-->
    <!--                                    aria-controls="collapse6">-->
    <!--                                    Hvad sker der med dokumenter/bestillinger mv. som er tilgængeligt i ”min-->
    <!--                                    profil”,-->
    <!--                                    hvis jeg sletter min kundekonto?-->
    <!--                                </a>-->
    <!--                            </h3>-->
    <!--                        </div>-->
    <!--                        <div id="collapse6" class="panel-collapse collapse" role="tabpanel"-->
    <!--                            aria-labelledby="heading3">-->
    <!--                            <div class="panel-body px-3 mb-4">-->
    <!--                                <p>Din kundekonto er gratis hos os. Hvis du har foretaget bestillinger som er-->
    <!--                                    fuldførte-->
    <!--                                    mv. vil du under ”arkiv” altid kunne finde oplysninger om dine bestillinger-->
    <!--                                    og-->
    <!--                                    tilhørende dokumenter mv. Du kan hente alt data ned på din bærbar/PC, hvis-->
    <!--                                    du vælger-->
    <!--                                    at slette din kundekonto hos os. </p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->


    <!--                    <div class="panel panel-default">-->
    <!--                        <div class="panel-heading p-3 mb-3" role="tab" id="heading3">-->
    <!--                            <h3 class="panel-title">-->
    <!--                                <a class="collapsed" role="button" title="" data-toggle="collapse"-->
    <!--                                    data-parent="#accordion" href="#collapse7" aria-expanded="true"-->
    <!--                                    aria-controls="collapse7">-->
    <!--                                    Hvordan foregår processen?-->
    <!--                                </a>-->
    <!--                            </h3>-->
    <!--                        </div>-->
    <!--                        <div id="collapse7" class="panel-collapse collapse" role="tabpanel"-->
    <!--                            aria-labelledby="heading3">-->
    <!--                            <div class="panel-body px-3 mb-4">-->
    <!--                                <p>Du kan under menu linjen ”Om os” læse mere om hele processen ved at anvende-->
    <!--                                    DanPanels-->
    <!--                                    platform eller blot klikke på dette link (<a href="{{route('site.about')}}">OM-->
    <!--                                        OS</a>)-->
    <!--                                </p>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>-->

    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- F&Q section container end -->
</div>





<!-- Contact us -->
<div class="w3-center w3-padding-32"> <span class="w3-xlarge w3-bottombar w3-border-green w3-padding-16"
        style="top:0; left:0;">Kontakt
        Os</span></div>


@if(Session::has('success'))
<div class="row">
    <div class="col-md-8 m-auto">
        <p class="alert alert-success">{{ Session::get('success') }}</p>
    </div>
</div>
@endif

<div class="container-fluid contact-form-container" style="">
    <div class="w3-container w3-padding-32 w3-theme-l5" id="contactform">
        <div class="w3-row">
            <div class="w3-container contact-container" style="">

                <form class="w3-container w3-card-4 w3-padding-8 w3-white w3-round p-5 wow zoomIn"
                    action="{{route('site.submit.contact.form')}}" Method="post">
                    {{csrf_field()}}
                    <div class="w3-section1 mt-4">
                        <label>Navn</label>
                        <input class="w3-input" type="text" name="name" required placeholder="Dit fulde navn her">
                    </div>
                    <div class="w3-section1 mt-4">
                        <label>Email</label>
                        <input class="w3-input" type="text" name="email" required placeholder="Din mail her">
                    </div>
                    <div class="w3-section1 mt-4">
                        <label>Tlf</label>
                        <input class="w3-input" type="text" name="tlf" required
                            placeholder="Dit tlf nummer her(max 8 tegn)">
                    </div>
                    <div class="w3-section1 mt-4">
                        <label>Emne</label>
                        <input class="w3-input" type="text" name="subject" placeholder="Hvad handler din besked om?">
                    </div>
                    <div class="w3-section1 mt-4">
                        <label>Besked</label>
                        <textarea class="w3-input w3-hover-border-black" style="width:100%;" name="message"
                            required placeholder="Skriv din besked her"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="contact-submit" value="submit"
                            class="w3-button w3-green w3-padding-large w3-center w3-round mt-4" style="width:10rem">
                            Send
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>



<!-- Book meething with us -->
<div id="book_meeting">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom card" style="max-width:400px; height:450px;">
        <div class="w3-center"><br>
            <span onclick="document.getElementById('book_meeting').style.display='none'; 
            document.getElementById('book-meeting-btn').style.display='block'" 
                  class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span> 
                  
        </div>
        <div class="w3-center" id="contact"> <span
                    class="w3-xlarge w3-bottombar w3-border-green w3-padding-16">Book et gratis møde</span>
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
    </div>
</div>

<div>
    <span id="book-meeting-btn" style="position:fixed; right:10; top:auto; bottom:0rem;">

    <a href="#book_meeting"> <img style="width:8rem; height:8rem;" src="assets/site/assets/images/icons/thumbnail_Book-et-gratis-mode-ikon-til-hjemmesiden.png" onclick="document.getElementById('book_meeting').style.display='block'; document.getElementById('book-meeting-btn').style.display='none'">
    </a>
    </span>
</div>


@endsection
@section('footer')
	<script>
      $(".cookie-close-x ").on('click', function () {
          $(".cookie").hide();
      })
	</script>


@endsection


<script type="text/javascript">
    $(document).ready(function () {
        $("#myVideo").on('click', function () {
            location.href = "https://danpanel.dk/om";
        });
    });
</script>
</html>


