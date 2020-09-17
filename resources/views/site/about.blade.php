@extends('layouts.site.layout')



<style>
/* .video-file {
    position: fixed;
    max-height: 500px;
    min-width: 100%;
    object-fit: fill;
} */


.om-headline-img {
    max-width: 50%;
    margin-bottom: 2em;
}

.om-perskektiver-img {
    max-width: 70%;
    margin-bottom: 2em;
}

.om-vilkar-img {
    max-width: 35%;
    margin-bottom: 1em;
}

.om-member-logo {
    /* width: 50%; */
    /* height: 5em; */
    /* margin: 3em 0em; */
    padding: 2em;
}

.om-member-logo-pc {
    width: 60%;
}

.om-member-logo-mob {
    display: none !important;
}

.fa-chevron-up {
    transition: .3s transform ease-in-out;
    color: green;
}

.collapsed .fa-chevron-up {
    transform: rotate(180deg);
}

img.icon-img {
    max-width: 45px;
    vertical-align: middle;
}

.aboutBodyMargin {
    margin: 0 20rem;
}

.om-vores-team-img {
    max-width: 15%;
    margin-bottom: 2em;
}

@media only screen and (max-width: 768px) {

    .aboutBodyMargin {
        margin: 0 0rem;
    }

    .om-headline-img {
        width: 100% !important;
        height: auto;
        text-align: center;
    }

    .om-perskektiver-img {
        max-width: 100%;
        margin-bottom: 2em;
    }

    .om-vores-team-img {
        max-width: 40%;
        margin-bottom: 2em;
    }

    .om-member-logo-mob {
        display: block !important;
    }

    .om-member-logo-pc {
        display: none;
    }
}

</style>
@section('body')
<!-- navabr end -->
<div class="video-container">
    <video class="video-file" autoplay loop muted>
        <source src="{{asset('assets/site/assets/images/om.mov')}}" type="video/mp4">
    </video>
</div>

<!-- Start DanPanel  -->
<div class="w3-row w3-padding" style="margin-top:2rem" id="dan-concept">
    <h3 class="wow fadeInDown w3-center mt-30">Dan Panel</h3>
    <div class="w3-padding w3-left aboutBodyMargin">
        <p class="w3-text-black standrad-text wow zoomIn">
            Vi er en socialpædagogisk virksomhed udviklet med baggrund i mere end 25 års pædagogisk erfaring inden for
            det socialpædagogiske felt.
        </p>
        <p class="w3-text-black standrad-text wow zoomIn">
            Huset består af et team af socialpædagoger med forskellige nationaliteter, supervisor og filosof.
        </p>
        <p class="w3-text-black standrad-text wow zoomIn">
            Alle er uddannede indenfor deres virkefelt og med flere års erfaring i arbejdet med andre mennesker.
        </p>
        <p class="w3-text-black standrad-text wow zoomIn">
            Alle har eller får muligheden for relevante efteruddannelseskurser.
        </p>
        <p class="w3-text-black standrad-text wow zoomIn">
            Arbejdsopgaver vi beskæftiger os med:
        <ul>
            <li class="wow zoomIn">Familiebehandling. </li>
            <li class="wow zoomIn">Kontaktperson forløb. </li>
            <li class="wow zoomIn">Støtte forløb.</li>
            <li class="wow zoomIn">Mentor ordning. </li>
            <li class="wow zoomIn">Overvåget samvær.</li>
        </ul>
        </p>

    </div>
</div>

<!-- End Dan Panel -->

<!-- Start Perspektiver i pædagogik & specialpædagogisk. -->

<div class="w3-row w3-padding" id="dan-concept">
    <h3 class="wow fadeInDown w3-center">Perspektiver i pædagogik & specialpædagogisk.</h3>
    <div class="w3-padding w3-left aboutBodyMargin">
        <p class="w3-text-black standrad-text wow zoomIn">
            Vores mange års erfaring i arbejdet med mennesker inden for pædagogik & specialpædagogisk har lært os, at
            den metode der fungerer for det ene menneske, ikke nødvendigvis virker for den andet.
        </p>
        <p class="w3-text-black standrad-text wow zoomIn">
            Derfor arbejder vi alle bl.a. med udgangspunkt i nedenstående 5 perspektiver.
        </p>
        <p class="w3-center wow fadeInDown">
            <img class="om-perskektiver-img"
                src="{{asset('assets/site/assets/images/Offentlige-Model-De-5-perspektiver.png')}}">
        </p>
    </div>
</div>

<!-- End Perspektiver i pædagogik & specialpædagogisk. -->

<!-- Start Trin til en positiv forandring -->

<div class="w3-row w3-padding" id="dan-concept">
    <h3 class="wow fadeInDown w3-center">Trin til en positiv forandring</h3>
    <div class="w3-padding w3-left aboutBodyMargin">
        <p class="w3-text-black standrad-text wow zoomIn">
            Hos DanPanel tror vi på, at alle mennesker er eksperter i deres eget liv, men med en og de allerede besidder
            det, der skal til for at kunne bane vejen frem mod en bedre fremtid.
        </p>
        <p class="w3-text-black standrad-text wow zoomIn">
            Hvis strategier og handlemønstre utallige gange opleves som negativ og uhensigtsmæssig, og hverdagen for
            borgeren kan virke som kaos, kan det være svært at se mulighederne for en positiv fremtid for den enkelte
            borger.
        </p>
        <p class="w3-text-black standrad-text wow zoomIn">
            Med udgangspunkt i ovenstående er det vores formål med en pædagogisk indsats og ydelse gennem f.eks.
            Familiebehandling, Terapi, Mentor ordning mm. at arbejde målrettet sammen med borgeren frem mod det endelige
            mål.
        </p>
        <p class="w3-text-black standrad-text wow zoomIn">
            Der kan for en periode være behov for professionel hjælp udefra
            for bedre at kunne se de fremtidige muligheder og løsninger, der altid findes.
        </p>
        <p class="w3-text-black standrad-text wow zoomIn">
            I vores arbejde observerer vi den enkelte borgers problemer og taler dette som et ”must”.
            Gennem løsningsfokuserede samtaler er formålet at støtte borgeren i at leve med de vilkår, de er omgivet af,
            samtidig med de bliver støttet i at tage det første skridt mod en anden og positiv fremtid.
        </p>
        <p class="w3-text-black standrad-text wow zoomIn">
            Sammen med omsorg, støtte og tillid bliver borgeren mere og mere opmærksom på egne ressourcer, og de
            kompetencer de allerede besidder, således at der kan arbejdes frem mod at borgeren igen med
            egen formåen mestre i eget liv. Dermed vil borgeren igen klare sin dagligdag uden professionel støtte.
        </p>
    </div>
</div>
<!-- end Trin til en positiv forandring -->

<!-- Start Vi arbejder ud fra essentielle værdier -->

<div class="w3-row w3-padding" id="dan-concept">
    <div class="w3-left aboutBodyMargin">
        <p class="w3-center wow fadeInDown">
            <img class="om-headline-img" src="{{asset('assets/site/assets/images/Offentlige-Model-4-vardier.png')}}">
        </p>
        <ul>
            <li class="wow zoomIn">
                <p> <strong>Respekt. </strong></p>
                <p>Vi behandler alle mennesker som ligeværdige uanset kulturelle, religiøses eller sociale forskelle.
                    Vi tror på at alle har ressourcer og kompetencer. </p>
            </li>
            <li class="wow zoomIn">
                <p> <strong>Tilgængelighed.</strong></p>
                <p>Vi er tilstede hos de enkelte borgere, når behovet opstår, og vi er fleksible og kan altid kontaktes
                    å telefon. Hvis akutte tilfælde eller behovet for fysisk tilstedeværelse opstår hos borgeren, har vi
                    muligheden til at være til rådighed 24/7. Ellers arbejdes der efter en nøje tilrettelagt
                    arbejdsplan, som tilgodeser
                    den handleplan, der er lagt fra kommunens side og ud fra den enkelte opgave og dennes borgere. </p>
            </li>
            <li class="wow zoomIn">
                <p> <strong>Anvendelighed. </strong></p>
                <p>Teori og metode tilpasser vi vores relations arbejde, så det er direkte anvendeligt for den enkelte
                    borger.
                    Vi vægter ligeledes de praktiske opgaver, som kan være svære at omsætte for den enkelt borger som et
                    vigtigt element i vores arbejde. Borgeren ser, oplever og prøver selv de arbejdsmetoder af, som vi
                    udfører, og derigennem får den oplevelse,
                    som ved fælles hjælp kan implanteres i deres dagligdag og blive en succes. </p>
            </li>
            <li class="wow zoomIn">
                <p class=""> <strong>Kvalitet sikring. </strong></p>
                <ul class="wow zoomIn">Vi varetager:
                    <li class="wow zoomIn">Familiebehandling </li>
                    <li class="wow zoomIn">Kontaktpersonforløb </li>
                    <li class="wow zoomIn">Praktisk / pædagogisk ordning </li>
                    <li class="wow zoomIn">Overvåget samvær </li>
                    <li class="wow zoomIn">Mentorordning </li>
                </ul>
                <p class="wow zoomIn">Vi fokuserer på faglighed, relevant uddannelse, og menneskelige kvalifikationer i
                    vores ansættelser.
                </p>
                <p class="wow zoomIn">Alle modtager supervision. </p>
                <p class="wow zoomIn">Børne og straffeattest bliver indhentet på alle medarbejdere.</p>
                <p class="wow zoomIn">DanPanel har en koordinator til hver enkelt opgave. Koordinatorens ansvar er bl.a
                    at
                    sørge for det rigtige match mellem borgeren og den enkelte konsulent, som skal arbejde med borgeren.
                </p>
                <p class="wow zoomIn">Det er også koordinators rolle hver uge at lave opfølgning af sagen gennem fælles
                    mål, kommunikation
                    og skriftligt arbejde. </p>
                <p class="wow zoomIn">Koordinator står også for det skriftlige arbejde til kommunerne og overholdelse af
                    deadlines. </p>
                <p class="wow zoomIn">Der bliver ugentligt opdateret via vores platform på de enkelte sager og til den
                    enkelte
                    socialrådgiver. </p>
                <p class="wow zoomIn">Statusrapporter bliver udarbejdet hver 6. måned som standard ellers efter nærmere
                    aftale med den
                    enkelte socialrådgiver og aftaler i handlingsplanen. </p>
            </li>
        </ul>
    </div>
</div>

<!-- end Vi arbejder ud fra essentielle værdier -->

<!--Vores team section start-->

<div class="w3-row w3-padding aboutBodyMargin" id="vores-team">

    <h3 class="wow fadeInDown w3-center">Vores team</h3>
    <p style="height:15px"></p>
    <div class="w3-padding">
        <p class="w3-center">
            <img class="om-vores-team-img" src="{{asset('assets/site/assets/images/team.png')}}">
        </p>
        <p class="w3-text-black standrad-text wow zoomIn">
            Hos DanPanel for offentlige arbejder vi i teams med hver vores ekspertise og faglighed. Vi tror på, at
            vi kan yde en dedikeret samt professionel service ved at matche hver enkelt kommune med kvalificeret
            mandskab efter behovet. Teamet har årelange erfaringer inden for felterne, som vedrører socialhjælp,
            familiehjælp, rådgivning mm. og en masse kompetencer, der gør, at vi kan imødekomme jeres behov på bedst
            mulige måde. Vores fokus er dig, din kommune og jeres borgere.
            <br>
        </p>
        <p class="w3-center">
            <a data-toggle="collapse" class="collapsed" href="#readmoreKonceptetBag">Læs mere
                <p class="w3-center"><span style="color:#007BFF" class="fa fa-chevron-up" aria-hidden="true"></span></p>
            </a>
        </p>
        <p id="readmoreKonceptetBag" class="collapse w3-text-black standrad-text wow zoomIn">
            Vores personale med speciale inden for det offentlige felt har mere end 37 års erhvervserfaring. Vi er
            mere end behjælpelige med at finde en skræddersyet løsning, som passer lige netop jer. Alt for at yde en
            tilfredsstillende service og løfte jeres aktiviteter i den positive retning.

            <br>
        </p>
    </div>
</div>

<!--Vores team section end-->

<!-- <div class="w3-container w3-center"><a href="#processenBagDan" class="w3-hover-opacity-off"><img
            src="{{asset('assets/site/assets/images/arrow-down.png')}}"
            class="w3-animate-fading w3-circle w3-margin-bottom arrow-icon"></a>
</div> -->


<!--I den gode sags tjeneste section start-->

<div class="w3-row w3-padding aboutBodyMargin">
    <h3 class="wow fadeInDown w3-center">I den gode sags tjeneste</h3>
    <p style="height:15px"></p>
    <div class="col-xs-12">
        <p class="w3-center">
            <img class="om-vores-team-img" src="{{asset('assets/site/assets/images/Ikon-til-dem-vi-stotter.png')}}">
        </p>
        <p class="w3-text-black w3-left standrad-text wow zoomIn">
            Hos DanPanel er vi glade for at bidrage til sager, vi føler er vore hjerter nær ved at støtte op omkring
            flere sager og tiltag. Hos DanPanel tror vi på, at vi i fællesskab kan formå at gøre underværker ved at
            opretholde håbet. I den gode sags tjeneste har vi valgt at støtte:

            <br><br><br>
        </p>
        <p class="w3-center">
            <img class="om-member-logo-pc" src="{{asset('assets/site/assets/images/Dem-vi-stotter.png')}}">
        </p>
    </div>

    <div class="row om-member-logo-mob" style="padding:0em 3em;">
        <div class="col-sm-4">
            <img class="img-fluid om-member-logo"
                src="{{asset('assets/site/assets/images/Danpanel-om-os-kraaftens-bekaampelse.png')}}">
        </div>
        <div class="col-sm-4">
            <img class="img-fluid om-member-logo"
                src="{{asset('assets/site/assets/images/Danpanel-om-os-stafet-for-livet.png')}}">
        </div>
        <div class="col-sm-4">
            <img class="img-fluid om-member-logo"
                src="{{asset('assets/site/assets/images/DanPanel-om-os-taand-et-hab.png')}}">
        </div>
        <br>
    </div>
</div>

<!--I den gode sags tjeneste section end-->


<div class="w3-padding-16"></div>



@endsection