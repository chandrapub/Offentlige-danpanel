
    <!-- login Modal Login/Logout -->
    <div id="login" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom w3-round" style="max-width:600px">
            <div class="w3-center"><br>
                <span onclick="document.getElementById('login').style.display='none'"
                    class="w3-button w3-xlarge w3-transparent w3-display-topright w3-round" title="Close Modal">×</span>
                <img src="Assets/logo-black.png" alt="Logo" style="width:30%" class="w3-margin-top"> </div>
            <?php
			if (!isset( $_SESSION['uid'])) {
				echo '<form class="w3-container" action="includes/login.inc.php" method="POST">
				<div class="w3-section">
					<label><b>Email</b></label>
					<input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Email" name="email" required>
					<label><b>Password</b></label>	
					<input class="w3-input w3-border" type="password" placeholder="Enter Password" name="pwd" required>
					<button class="w3-button w3-block w3-green w3-section w3-padding" name="login-submit" type="submit">Login</button>
					<input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me </div>
			</form>';
			} else if ( isset( $_SESSION[ 'uid' ] ) ) {
				echo '<form class="w3-container" action="includes/logout.inc.php" method="post">
		  	 <h1 class="w3-center">Er du sikker på at du vil logge ud?</h1>
             <button name="login-submit" class="w3-button w3-block w3-green w3-section w3-padding w3-round" type="submit">Log ud</button>
          </form>';
			}
			?>
            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey w3-round">
                <?php if(!isset( $_SESSION[ 'uid' ] )){echo '<span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span> ';} ?>
                <button onclick="document.getElementById('login').style.display='none'" type="button"
                    class="w3-button w3-red w3-round">Cancel</button>
            </div>
        </div>
    </div>
    <!-- signup Modal Opret bruger  -->
    <div id="signup" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom w3-round" style="max-width:600px">
            <div class="w3-center"><br>
                <span onclick="document.getElementById('signup').style.display='none'"
                    class="w3-button w3-xlarge w3-transparent w3-display-topright w3-round" title="Close Modal">×</span>
                <img src="Assets/logo-black.png" alt="Logo" style="width:30%" class="w3-margin-top"> </div>
            <div class="w3-section">
                <form class="w3-container" action="includes/signup.inc.php" method="post">
                    <div class="w3-center w3-padding-">
                        <h3>Vælg afdeling <br> *kun en afdeling må vælges*</h3><br>
                        <div class="choose-signup-btn">
                            <div class="w3-blue w3-round single-signup-btn">
                                <label class="text-siginupform">Offentlig</label>
                                <input class="text-siginupform" type="checkbox" value="offentlig" name="typeofuser"
                                    onclick="myEanHideAndShowFunction()">
                            </div>
                            <div class="w3-blue w3-round single-signup-btn" style="">
                                <label class="text-siginupform">Erhverv</label>
                                <input class="text-siginupform" type="checkbox" value="erhverv" name="typeofuser"
                                    onclick="myCvrHideAndShowFunction()">
                            </div>
                            <div class="w3-blue w3-round single-signup-btn">
                                <label class="text-siginupform">Privat</label>
                                <input class="text-siginupform" type="checkbox" value="privat" name="typeofuser"
                                    onclick="myFødselsDatoHideAndShowFunction()">
                            </div>
                        </div>
                    </div>
                    <?php
					// Here we check if the user already tried submitting data.

					// We check Name.
					if ( !empty( $_GET[ "name" ] ) ) {
						echo '<input type="text" class="w3-input w3-border w3-hover-border-black w3-section" name="name" placeholder="navn" value="' . $_GET[ "name" ] . '">';
					} else {
						echo '<input type="text" class="w3-input w3-border w3-hover-border-black w3-section" name="name" placeholder="navn">';
					}

					// We check e-mail.
					if ( !empty( $_GET[ "email" ] ) ) {
						echo '<input type="text" class="w3-input w3-border w3-hover-border-black w3-section" name="email" placeholder="E-mail" value="' . $_GET[ "email" ] . '">';
					} else {
						echo '<input type="text" class="w3-input w3-border w3-hover-border-black w3-section" name="email" placeholder="E-mail">';
					}
					if ( !empty( $_GET[ "phonenr" ] ) ) {
						echo '<input type="text" class="w3-input w3-border w3-hover-border-black w3-section" name="phonenr" placeholder="Tlf Nr.(max 8 tegn)" value="' . $_GET[ "phonenr" ] . '">';
					} else {
						echo '<input type="text" class="w3-input w3-border w3-hover-border-black w3-section" name="phonenr" placeholder="Tlf Nr.(max 8 tegn)">';
                    }
                    if(!empty($_GET["gadenavn"])){
                        echo '<input type="text" class="w3-input w3-border w3-hover-border-black w3-section" name="Gadenavn, Nr. Og evt. etage/afdeling" placeholder="Address (Gadenavn, Nr. Og evt. etage/afdeling)" vlaue="' .$_GET["gadenavn"].'">';
                    } else{
                        echo '<input type="text" class="w3-input w3-border w3-hover-border-black w3-section" name="Gadenavn, Nr. Og evt. etage/afdeling" placeholder="Address (Gadenavn, Nr. Og evt. etage/afdeling)">';
                    }
                    if(!empty($_GET["postnr"])){
                        echo '<input type="text" class="w3-input w3-border w3-hover-border-black w3-section" name="postnr" placeholder="Post Nr." Value="'.$_GET["postnr"].'">';
                    }else{
                        echo'<input type="text" class="w3-input w3-border w3-hover-border-black w3-section" name="postnr" placeholder="Post Nr.">';
                    }
                    if(!empty($_GET["by"])){
                        echo'<input type="text" class="w3-input w3-border w3-hover-border-black w3-section" name="by" placeholder="by" value="'.$_GET["by"].'">';
                    }else{
                        echo '<input type="text" class="w3-input w3-border w3-hover-border-black w3-section name="by" placeholder="by">';
                    }

                        
                       
					?>
                    <input type="text" id="ean" class="w3-input w3-border w3-hover-border-black w3-section" name="ean"
                        placeholder="EAN Nr" style="display: none"></input>
                    <input type="text" id="cvr" class="w3-input w3-border w3-hover-border-black w3-section" name="cvr"
                        placeholder="CVR Nr" style="display: none"></input>
                    <input type="date" id="fødselsdato" class="w3-input w3-border w3-hover-border-black w3-section"
                        name="fødselsdato" placeholder="yyyy-mm-dd" style="display: none"></input>
                    <input type="password" class="w3-input w3-border w3-hover-border-black w3-section" name="pwd"
                        placeholder="Password">
                    <input type="password" class="w3-input w3-border w3-hover-border-black w3-section" name="pwd-repeat"
                        placeholder="Gentag password">

                    <label>Vil du have nyhedsbreve fra Danpanel?</label>
                    <input type="checkbox" checked value="ja" name="nyhedsbrev">

                    <a href="Vilkår . DP.pdf" target="_blank" class="w3-right">Læs om Vilkår</a><br><br>
                    <a href="Cookie-og-privatlivspolitik.pdf" target="_blank" class="w3-right">Læs om Cookies og
                        Privatpolitik</a><br>

                    <button type="submit" class="w3-button w3-green w3-margin-bottom w3-round"
                        name="signup-submit">Opret Bruger</button>
                </form>

                <div class="w3-container w3-border-top w3-padding-16 w3-light-grey w3-round">
                    <button onclick="document.getElementById('signup').style.display='none'" type="button"
                        class="w3-button w3-red w3-round">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- See Price modal -->
    <div class="w3-row">
        <div id="pricemodalrekruttering" style="display:none" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:100%;  text-align: center;">
                <span onclick="document.getElementById('pricemodalrekruttering').style.display='none'" ;
                    class="w3-button w3-transparent w3-display-topright" title="Close Modal">x</span>
                <img src="Assets/logo-black.png" alt="Logo" style="width:30%; " class="w3-margin-top">
                <h2 style="text-align:center"> Pris tabel</h2>
                <!-- <p style="text-align:center">Resize the browser window to see the effect.</p> -->
                <div class="container-fluid">
                    <div class="row" style="display:flex; justify-content: center;">
                        <div class="col-xs-12 medlem-container w3-center1">
                            <p class="medlem-title">
                                Med Kundekonto</p>
                            <p class="w3-padding medlem-kundekonto-text" style="">Når du
                                logger ind med din kundekonto, kan du samle alle dine løsninger i ét panel hos os, her
                                får du overblikket og en struktureret hverdag med overskud.<br>Du sparer tid og penge
                                ved at anvende DanPanel og dermed opleve den konstruktive udvikling. </p>
                            <p class="medlem-kundekonto-subtitle" style="">Med vores
                                platform kan du: </p>
                            <ul class="Kunekonto-Ulist" style="">
                                <li>
                                    Skabe strukturf
                                </li>
                                <li>
                                    Få mere overskud
                                </li>
                                <li>
                                    Opleve Udvikling
                                </li>
                                <li>
                                    Besparelse på penge, tid og kræfter
                                </li>
                            </ul>

                            <p class="medlem-price" style="">
                                <span>Fra &nbsp</span>20.000<span>,-</span><br><span class="ex-moms" style="">ex moms
                                    <span> </p>
                            <p class="" style="padding:10px;"><a href="#pricemodal" class="log-på-konto"
                                    onclick="document.getElementById('login').style.display='block'; document.getElementById('pricemodalrekruttering').style.display='none';"
                                    style="">Er
                                    du allerede kunde kan du blot logge ind her og få dit tilbud?</a></p>
                        </div>
                        <div class="col-xs-12 uden-medlem-container w3-center1" style="">
                            <p class="uden-medlem-title">
                                Uden Kundekonto</p>
                            <p class="w3-padding uden-kundekonto-text">Hos DanPanel kan du også få
                                et tilbud uden kundekonto. Det har dog en betydning for prisen på vores tilbud, da vores
                                forhandlinger med samarbejdspartnerne muliggør rabatter til de med kundekonto.<br>Det er
                                helt gratis at tilmelde sig og anvende fordelene med vores let betjenelige koncept. </p>
                            <p class="uden-medlem-kundekonto-subtitle">Uden
                                kundekonto betyder at: </p>
                            <ul class="Uden-kunekonto-UList">
                                <li>
                                    Der ikke er rabatter
                                </li>
                                <li>
                                    Aktiviteter ikke opbevares på dit helt eget panel
                                </li>
                                <li>
                                    Der ikke fremsendes særlige kampagner
                                </li>
                                <li>
                                    Du går glip af masse fordele
                                </li>

                            </ul>
                            <p class="btn-price-fåTilbud1" style=""><a href="#" class="fortsaat-uden-konto"
                                    Onclick="document.getElementById('vikarmodal').style.display='block'; document.getElementById('pricemodalrekruttering').style.display='none'"
                                    ; style="">Fortsæt
                                    uden kundekonto</a></p>

                            <p class="uden-medlem-price" style="">
                                <span>Fra &nbsp</span>25.000<span>,-</span><br><span class="ex-moms" style="">ex moms
                                    <span> </p>


                            <p class="" style=""><a href="#" class="opret-kunde-rabat"
                                    onclick="document.getElementById('signup').style.display='block'; document.getElementById('pricemodalrekruttering').style.display='none'"
                                    ; style="">Få kunderabat –
                                    Opret dig gratis</a></p>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div id="pricemodalinterim" style="display:none" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:100%;  text-align: center;">
                <span onclick="document.getElementById('pricemodalinterim').style.display='none'" ;
                    class="w3-button w3-transparent w3-display-topright" title="Close Modal">x</span>
                <img src="Assets/logo-black.png" alt="Logo" style="width:30%; " class="w3-margin-top">
                <h2 style="text-align:center"> Pris tabel</h2>
                <!-- <p style="text-align:center">Resize the browser window to see the effect.</p> -->
                <div class="container-fluid">
                    <div class="row" style="display:flex; justify-content: center;">
                        <div class="col-xs-12 medlem-container w3-center1">
                            <p class="medlem-title">
                                Med Kundekonto</p>
                            <p class="w3-padding medlem-kundekonto-text" style="">Når du
                                logger ind med din kundekonto, kan du samle alle dine løsninger i ét panel hos os, her
                                får du overblikket og en struktureret hverdag med overskud.<br>Du sparer tid og penge
                                ved at anvende DanPanel og dermed opleve den konstruktive udvikling. </p>
                            <p class="medlem-kundekonto-subtitle" style="">Med vores
                                platform kan du: </p>
                            <ul class="Kunekonto-Ulist" style="">
                                <li>
                                    Skabe struktur
                                </li>
                                <li>
                                    Få mere overskud
                                </li>
                                <li>
                                    Opleve Udvikling
                                </li>
                                <li>
                                    Besparelse på penge, tid og kræfter
                                </li>
                            </ul>

                            <p class="medlem-price" style="">
                                <span>Fra &nbsp</span>324<span>,-/time</span><br><span class="ex-moms" style="">ex moms
                                    <span> </p>
                            <p class="" style="padding:10px;"><a href="#pricemodal" class="log-på-konto"
                                    onclick="document.getElementById('login').style.display='block'; document.getElementById('pricemodalinterim').style.display='none';"
                                    style="">Er
                                    du allerede kunde kan du blot logge ind her og få dit tilbud?</a></p>
                        </div>
                        <div class="col-xs-12 uden-medlem-container w3-center1" style="">
                            <p class="uden-medlem-title">
                                Uden Kundekonto</p>
                            <p class="w3-padding uden-kundekonto-text">Hos DanPanel kan du også få
                                et tilbud uden kundekonto. Det har dog en betydning for prisen på vores tilbud, da vores
                                forhandlinger med samarbejdspartnerne muliggør rabatter til de med kundekonto.<br>Det er
                                helt gratis at tilmelde sig og anvende fordelene med vores let betjenelige koncept. </p>
                            <p class="uden-medlem-kundekonto-subtitle">Uden
                                kundekonto betyder at: </p>
                            <ul class="Uden-kunekonto-UList">
                                <li>
                                    Der ikke er rabatter
                                </li>
                                <li>
                                    Aktiviteter ikke opbevares på dit helt eget panel
                                </li>
                                <li>
                                    Der ikke fremsendes særlige kampagner
                                </li>
                                <li>
                                    Du går glip af masse fordele
                                </li>

                            </ul>
                            <p class="btn-price-fåTilbud1" style=""><a href="#" class="fortsaat-uden-konto"
                                    Onclick="document.getElementById('vikarmodal').style.display='block'; document.getElementById('pricemodalinterim').style.display='none'"
                                    ; style="">Fortsæt
                                    uden kundekonto</a></p>

                            <p class="uden-medlem-price" style="">
                                <span>Fra &nbsp</span>333<span>,-/time</span><br><span class="ex-moms" style="">ex moms
                                    <span> </p>


                            <p class="" style=""><a href="#" class="opret-kunde-rabat"
                                    onclick="document.getElementById('signup').style.display='block'; document.getElementById('pricemodalinterim').style.display='none'"
                                    ; style="">Få kunderabat –
                                    Opret dig gratis</a></p>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div id="pricemodalfreelance" style="display:none" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:100%;  text-align: center;">
                <span onclick="document.getElementById('pricemodalfreelance').style.display='none'" ;
                    class="w3-button w3-transparent w3-display-topright" title="Close Modal">x</span>
                <img src="Assets/logo-black.png" alt="Logo" style="width:30%; " class="w3-margin-top">
                <h2 style="text-align:center"> Pris tabel</h2>
                <!-- <p style="text-align:center">Resize the browser window to see the effect.</p> -->
                <div class="container-fluid">
                    <div class="row" style="display:flex; justify-content: center;">
                        <div class="col-xs-12 medlem-container w3-center1">
                            <p class="medlem-title">
                                Med Kundekonto</p>
                            <p class="w3-padding medlem-kundekonto-text" style="">Når du
                                logger ind med din kundekonto, kan du samle alle dine løsninger i ét panel hos os, her
                                får du overblikket og en struktureret hverdag med overskud.<br>Du sparer tid og penge
                                ved at anvende DanPanel og dermed opleve den konstruktive udvikling. </p>
                            <p class="medlem-kundekonto-subtitle" style="">Med vores
                                platform kan du: </p>
                            <ul class="Kunekonto-Ulist" style="">
                                <li>
                                    Skabe struktur
                                </li>
                                <li>
                                    Få mere overskud
                                </li>
                                <li>
                                    Opleve Udvikling
                                </li>
                                <li>
                                    Besparelse på penge, tid og kræfter
                                </li>
                            </ul>

                            <p class="medlem-price" style="">
                                <span>Fra &nbsp</span>360<span>,-/time</span><br><span class="ex-moms" style="">ex moms
                                    <span> </p>
                            <p class="" style="padding:10px;"><a href="#pricemodal" class="log-på-konto"
                                    onclick="document.getElementById('login').style.display='block'; document.getElementById('pricemodalfreelance').style.display='none';"
                                    style="">Er
                                    du allerede kunde kan du blot logge ind her og få dit tilbud?</a></p>
                        </div>
                        <div class="col-xs-12 uden-medlem-container w3-center1" style="">
                            <p class="uden-medlem-title">
                                Uden Kundekonto</p>
                            <p class="w3-padding uden-kundekonto-text">Hos DanPanel kan du også få
                                et tilbud uden kundekonto. Det har dog en betydning for prisen på vores tilbud, da vores
                                forhandlinger med samarbejdspartnerne muliggør rabatter til de med kundekonto.<br>Det er
                                helt gratis at tilmelde sig og anvende fordelene med vores let betjenelige koncept. </p>
                            <p class="uden-medlem-kundekonto-subtitle">Uden
                                kundekonto betyder at: </p>
                            <ul class="Uden-kunekonto-UList">
                                <li>
                                    Der ikke er rabatter
                                </li>
                                <li>
                                    Aktiviteter ikke opbevares på dit helt eget panel
                                </li>
                                <li>
                                    Der ikke fremsendes særlige kampagner
                                </li>
                                <li>
                                    Du går glip af masse fordele
                                </li>

                            </ul>
                            <p class="btn-price-fåTilbud1" style=""><a href="#" class="fortsaat-uden-konto"
                                    Onclick="document.getElementById('vikarmodal').style.display='block'; document.getElementById('pricemodalfreelance').style.display='none'"
                                    ; style="">Fortsæt
                                    uden kundekonto</a></p>

                            <p class="uden-medlem-price" style="">
                                <span>Fra &nbsp</span>370<span>,-/time</span><br><span class="ex-moms" style="">ex moms
                                    <span> </p>


                            <p class="" style=""><a href="#" class="opret-kunde-rabat"
                                    onclick="document.getElementById('signup').style.display='block'; document.getElementById('pricemodalfreelance').style.display='none'"
                                    ; style="">Få kunderabat –
                                    Opret dig gratis</a></p>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div id="pricemodalvikariat" style="display:none" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:100%;  text-align: center;">
                <span onclick="document.getElementById('pricemodalvikariat').style.display='none'" ;
                    class="w3-button w3-transparent w3-display-topright" title="Close Modal">x</span>
                <img src="Assets/logo-black.png" alt="Logo" style="width:30%; " class="w3-margin-top">
                <h2 style="text-align:center"> Pris tabel</h2>
                <!-- <p style="text-align:center">Resize the browser window to see the effect.</p> -->
                <div class="container-fluid">
                    <div class="row" style="display:flex; justify-content: center;">
                        <div class="col-xs-12 medlem-container w3-center1">
                            <p class="medlem-title">
                                Med Kundekonto</p>
                            <p class="w3-padding medlem-kundekonto-text" style="">Når du
                                logger ind med din kundekonto, kan du samle alle dine løsninger i ét panel hos os, her
                                får du overblikket og en struktureret hverdag med overskud.<br>Du sparer tid og penge
                                ved at anvende DanPanel og dermed opleve den konstruktive udvikling. </p>
                            <p class="medlem-kundekonto-subtitle" style="">Med vores
                                platform kan du: </p>
                            <ul class="Kunekonto-Ulist" style="">
                                <li>
                                    Skabe struktur
                                </li>
                                <li>
                                    Få mere overskud
                                </li>
                                <li>
                                    Opleve Udvikling
                                </li>
                                <li>
                                    Besparelse på penge, tid og kræfter
                                </li>
                            </ul>

                            <p class="medlem-price" style="">
                                <span>Fra &nbsp</span>198<span>,-/time</span><br><span class="ex-moms" style="">ex moms
                                    <span> </p>
                            <p class="" style="padding:10px;"><a href="#pricemodal" class="log-på-konto"
                                    onclick="document.getElementById('login').style.display='block'; document.getElementById('pricemodalvikariat').style.display='none';"
                                    style="">Er
                                    du allerede kunde kan du blot logge ind her og få dit tilbud?</a></p>
                        </div>
                        <div class="col-xs-12 uden-medlem-container w3-center1" style="">
                            <p class="uden-medlem-title">
                                Uden Kundekonto</p>
                            <p class="w3-padding uden-kundekonto-text">Hos DanPanel kan du også få
                                et tilbud uden kundekonto. Det har dog en betydning for prisen på vores tilbud, da vores
                                forhandlinger med samarbejdspartnerne muliggør rabatter til de med kundekonto.<br>Det er
                                helt gratis at tilmelde sig og anvende fordelene med vores let betjenelige koncept. </p>
                            <p class="uden-medlem-kundekonto-subtitle">Uden
                                kundekonto betyder at: </p>
                            <ul class="Uden-kunekonto-UList">
                                <li>
                                    Der ikke er rabatter
                                </li>
                                <li>
                                    Aktiviteter ikke opbevares på dit helt eget panel
                                </li>
                                <li>
                                    Der ikke fremsendes særlige kampagner
                                </li>
                                <li>
                                    Du går glip af masse fordele
                                </li>

                            </ul>
                            <p class="btn-price-fåTilbud1" style=""><a href="#" class="fortsaat-uden-konto"
                                    Onclick="document.getElementById('vikarmodal').style.display='block'; document.getElementById('pricemodalvikariat').style.display='none'"
                                    ; style="">Fortsæt
                                    uden kundekonto</a></p>

                            <p class="uden-medlem-price" style="">
                                <span>Fra &nbsp</span>240<span>,-/time</span><br><span class="ex-moms" style="">ex moms
                                    <span> </p>


                            <p class="" style=""><a href="#" class="opret-kunde-rabat"
                                    onclick="document.getElementById('signup').style.display='block'; document.getElementById('pricemodalvikariat').style.display='none'"
                                    ; style="">Få kunderabat –
                                    Opret dig gratis</a></p>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div id="pricemodalkontorplads" style="display:none" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:100%;  text-align: center;">
                <span onclick="document.getElementById('pricemodalkontorplads').style.display='none'" ;
                    class="w3-button w3-transparent w3-display-topright" title="Close Modal">x</span>
                <img src="Assets/logo-black.png" alt="Logo" style="width:30%; " class="w3-margin-top">
                <h2 style="text-align:center"> Pris tabel</h2>
                <!-- <p style="text-align:center">Resize the browser window to see the effect.</p> -->
                <div class="container-fluid">
                    <div class="row" style="display:flex; justify-content: center;">
                        <div class="col-xs-12 medlem-container w3-center1">
                            <p class="medlem-title">
                                Med Kundekonto</p>
                            <p class="w3-padding medlem-kundekonto-text" style="">Når du
                                logger ind med din kundekonto, kan du samle alle dine løsninger i ét panel hos os, her
                                får du overblikket og en struktureret hverdag med overskud.<br>Du sparer tid og penge
                                ved at anvende DanPanel og dermed opleve den konstruktive udvikling. </p>
                            <p class="medlem-kundekonto-subtitle" style="">Med vores
                                platform kan du: </p>
                            <ul class="Kunekonto-Ulist" style="">
                                <li>
                                    Skabe struktur
                                </li>
                                <li>
                                    Få mere overskud
                                </li>
                                <li>
                                    Opleve Udvikling
                                </li>
                                <li>
                                    Besparelse på penge, tid og kræfter
                                </li>
                            </ul>

                            <p class="medlem-price" style="">
                                <span>Fra &nbsp</span>1895<span>,-/mdr</span><br><span class="ex-moms" style="">ex moms
                                    <span> </p>
                            <p class="" style="padding:10px;"><a href="#pricemodal" class="log-på-konto"
                                    onclick="document.getElementById('login').style.display='block'; document.getElementById('pricemodalkontorplads').style.display='none';"
                                    style="">Er
                                    du allerede kunde kan du blot logge ind her og få dit tilbud?</a></p>
                        </div>
                        <div class="col-xs-12 uden-medlem-container w3-center1" style="">
                            <p class="uden-medlem-title">
                                Uden Kundekonto</p>
                            <p class="w3-padding uden-kundekonto-text">Hos DanPanel kan du også få
                                et tilbud uden kundekonto. Det har dog en betydning for prisen på vores tilbud, da vores
                                forhandlinger med samarbejdspartnerne muliggør rabatter til de med kundekonto.<br>Det er
                                helt gratis at tilmelde sig og anvende fordelene med vores let betjenelige koncept. </p>
                            <p class="uden-medlem-kundekonto-subtitle">Uden
                                kundekonto betyder at: </p>
                            <ul class="Uden-kunekonto-UList">
                                <li>
                                    Der ikke er rabatter
                                </li>
                                <li>
                                    Aktiviteter ikke opbevares på dit helt eget panel
                                </li>
                                <li>
                                    Der ikke fremsendes særlige kampagner
                                </li>
                                <li>
                                    Du går glip af masse fordele
                                </li>

                            </ul>
                            <p class="btn-price-fåTilbud1" style=""><a href="#" class="fortsaat-uden-konto"
                                    Onclick="document.getElementById('vikarmodal').style.display='block'; document.getElementById('pricemodalkontorplads').style.display='none'"
                                    ; style="">Fortsæt
                                    uden kundekonto</a></p>

                            <p class="uden-medlem-price" style="">
                                <span>Fra &nbsp</span>2095<span>,-/mdr</span><br><span class="ex-moms" style="">ex moms
                                    <span> </p>


                            <p class="" style=""><a href="#" class="opret-kunde-rabat"
                                    onclick="document.getElementById('signup').style.display='block'; document.getElementById('pricemodalkontorplads').style.display='none'"
                                    ; style="">Få kunderabat –
                                    Opret dig gratis</a></p>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div id="pricemodallagerhotel" style="display:none" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:100%;  text-align: center;">
                <span onclick="document.getElementById('pricemodallagerhotel').style.display='none'" ;
                    class="w3-button w3-transparent w3-display-topright" title="Close Modal">x</span>
                <img src="Assets/logo-black.png" alt="Logo" style="width:30%; " class="w3-margin-top">
                <h2 style="text-align:center"> Pris tabel</h2>
                <!-- <p style="text-align:center">Resize the browser window to see the effect.</p> -->
                <div class="container-fluid">
                    <div class="row" style="display:flex; justify-content: center;">
                        <div class="col-xs-12 medlem-container w3-center1">
                            <p class="medlem-title">
                                Med Kundekonto</p>
                            <p class="w3-padding medlem-kundekonto-text" style="">Når du
                                logger ind med din kundekonto, kan du samle alle dine løsninger i ét panel hos os, her
                                får du overblikket og en struktureret hverdag med overskud.<br>Du sparer tid og penge
                                ved at anvende DanPanel og dermed opleve den konstruktive udvikling. </p>
                            <p class="medlem-kundekonto-subtitle" style="">Med vores
                                platform kan du: </p>
                            <ul class="Kunekonto-Ulist" style="">
                                <li>
                                    Skabe struktur
                                </li>
                                <li>
                                    Få mere overskud
                                </li>
                                <li>
                                    Opleve Udvikling
                                </li>
                                <li>
                                    Besparelse på penge, tid og kræfter
                                </li>
                            </ul>

                            <p class="medlem-price" style="">
                                <span>Fra &nbsp</span>198<span>,-/time</span><br><span class="ex-moms" style="">ex moms
                                    <span> </p>
                            <p class="" style="padding:10px;"><a href="#pricemodal" class="log-på-konto"
                                    onclick="document.getElementById('login').style.display='block'; document.getElementById('pricemodallagerhotel').style.display='none';"
                                    style="">Er
                                    du allerede kunde kan du blot logge ind her og få dit tilbud?</a></p>
                        </div>
                        <div class="col-xs-12 uden-medlem-container w3-center1" style="">
                            <p class="uden-medlem-title">
                                Uden Kundekonto</p>
                            <p class="w3-padding uden-kundekonto-text">Hos DanPanel kan du også få
                                et tilbud uden kundekonto. Det har dog en betydning for prisen på vores tilbud, da vores
                                forhandlinger med samarbejdspartnerne muliggør rabatter til de med kundekonto.<br>Det er
                                helt gratis at tilmelde sig og anvende fordelene med vores let betjenelige koncept. </p>
                            <p class="uden-medlem-kundekonto-subtitle">Uden
                                kundekonto betyder at: </p>
                            <ul class="Uden-kunekonto-UList">
                                <li>
                                    Der ikke er rabatter
                                </li>
                                <li>
                                    Aktiviteter ikke opbevares på dit helt eget panel
                                </li>
                                <li>
                                    Der ikke fremsendes særlige kampagner
                                </li>
                                <li>
                                    Du går glip af masse fordele
                                </li>

                            </ul>
                            <p class="btn-price-fåTilbud1" style=""><a href="#" class="fortsaat-uden-konto"
                                    Onclick="document.getElementById('vikarmodal').style.display='block'; document.getElementById('pricemodallagerhotel').style.display='none'"
                                    ; style="">Fortsæt
                                    uden kundekonto</a></p>

                            <p class="uden-medlem-price" style="">
                                <span>Fra &nbsp</span>240<span>,-/time</span><br><span class="ex-moms" style="">ex moms
                                    <span> </p>


                            <p class="" style=""><a href="#" class="opret-kunde-rabat"
                                    onclick="document.getElementById('signup').style.display='block'; document.getElementById('pricemodallagerhotel').style.display='none'"
                                    ; style="">Få kunderabat –
                                    Opret dig gratis</a></p>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div id="pricemodaldropinkonto" style="display:none" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:100%;  text-align: center;">
                <span onclick="document.getElementById('pricemodaldropinkonto').style.display='none'" ;
                    class="w3-button w3-transparent w3-display-topright" title="Close Modal">x</span>
                <img src="Assets/logo-black.png" alt="Logo" style="width:30%; " class="w3-margin-top">
                <h2 style="text-align:center"> Pris tabel</h2>
                <!-- <p style="text-align:center">Resize the browser window to see the effect.</p> -->
                <div class="container-fluid">
                    <div class="row" style="display:flex; justify-content: center;">
                        <div class="col-xs-12 medlem-container w3-center1">
                            <p class="medlem-title">
                                Med Kundekonto</p>
                            <p class="w3-padding medlem-kundekonto-text" style="">Når du
                                logger ind med din kundekonto, kan du samle alle dine løsninger i ét panel hos os, her
                                får du overblikket og en struktureret hverdag med overskud.<br>Du sparer tid og penge
                                ved at anvende DanPanel og dermed opleve den konstruktive udvikling. </p>
                            <p class="medlem-kundekonto-subtitle" style="">Med vores
                                platform kan du: </p>
                            <ul class="Kunekonto-Ulist" style="">
                                <li>
                                    Skabe struktur
                                </li>
                                <li>
                                    Få mere overskud
                                </li>
                                <li>
                                    Opleve Udvikling
                                </li>
                                <li>
                                    Besparelse på penge, tid og kræfter
                                </li>
                            </ul>

                            <p class="medlem-price" style="">
                                <span>Fra &nbsp</span>995<span>,-/mdr</span><br><span class="ex-moms" style="">ex moms
                                    <span> </p>
                            <p class="" style="padding:10px;"><a href="#pricemodal" class="log-på-konto"
                                    onclick="document.getElementById('login').style.display='block'; document.getElementById('pricemodaldropinkonto').style.display='none';"
                                    style="">Er
                                    du allerede kunde kan du blot logge ind her og få dit tilbud?</a></p>
                        </div>
                        <div class="col-xs-12 uden-medlem-container w3-center1" style="">
                            <p class="uden-medlem-title">
                                Uden Kundekonto</p>
                            <p class="w3-padding uden-kundekonto-text">Hos DanPanel kan du også få
                                et tilbud uden kundekonto. Det har dog en betydning for prisen på vores tilbud, da vores
                                forhandlinger med samarbejdspartnerne muliggør rabatter til de med kundekonto.<br>Det er
                                helt gratis at tilmelde sig og anvende fordelene med vores let betjenelige koncept. </p>
                            <p class="uden-medlem-kundekonto-subtitle">Uden
                                kundekonto betyder at: </p>
                            <ul class="Uden-kunekonto-UList">
                                <li>
                                    Der ikke er rabatter
                                </li>
                                <li>
                                    Aktiviteter ikke opbevares på dit helt eget panel
                                </li>
                                <li>
                                    Der ikke fremsendes særlige kampagner
                                </li>
                                <li>
                                    Du går glip af masse fordele
                                </li>

                            </ul>
                            <p class="btn-price-fåTilbud1" style=""><a href="#" class="fortsaat-uden-konto"
                                    Onclick="document.getElementById('vikarmodal').style.display='block'; document.getElementById('pricemodaldropinkonto').style.display='none'"
                                    ; style="">Fortsæt
                                    uden kundekonto</a></p>

                            <p class="uden-medlem-price" style="">
                                <span>Fra &nbsp</span>1095<span>,-/mdr</span><br><span class="ex-moms" style="">ex moms
                                    <span> </p>


                            <p class="" style=""><a href="#" class="opret-kunde-rabat"
                                    onclick="document.getElementById('signup').style.display='block'; document.getElementById('pricemodaldropinkonto').style.display='none'"
                                    ; style="">Få kunderabat –
                                    Opret dig gratis</a></p>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div id="pricemodallukketkontor" style="display:none" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:100%;  text-align: center;">
                <span onclick="document.getElementById('pricemodallukketkontor').style.display='none'" ;
                    class="w3-button w3-transparent w3-display-topright" title="Close Modal">x</span>
                <img src="Assets/logo-black.png" alt="Logo" style="width:30%; " class="w3-margin-top">
                <h2 style="text-align:center"> Pris tabel</h2>
                <!-- <p style="text-align:center">Resize the browser window to see the effect.</p> -->
                <div class="container-fluid">
                    <div class="row" style="display:flex; justify-content: center;">
                        <div class="col-xs-12 medlem-container w3-center1">
                            <p class="medlem-title">
                                Med Kundekonto</p>
                            <p class="w3-padding medlem-kundekonto-text" style="">Når du
                                logger ind med din kundekonto, kan du samle alle dine løsninger i ét panel hos os, her
                                får du overblikket og en struktureret hverdag med overskud.<br>Du sparer tid og penge
                                ved at anvende DanPanel og dermed opleve den konstruktive udvikling. </p>
                            <p class="medlem-kundekonto-subtitle" style="">Med vores
                                platform kan du: </p>
                            <ul class="Kunekonto-Ulist" style="">
                                <li>
                                    Skabe struktur
                                </li>
                                <li>
                                    Få mere overskud
                                </li>
                                <li>
                                    Opleve Udvikling
                                </li>
                                <li>
                                    Besparelse på penge, tid og kræfter
                                </li>
                            </ul>

                            <p class="medlem-price" style="">
                                <span>Fra &nbsp</span>1995<span>,-/mdr</span><br><span class="ex-moms" style="">ex moms
                                    <span> </p>
                            <p class="" style="padding:10px;"><a href="#pricemodal" class="log-på-konto"
                                    onclick="document.getElementById('login').style.display='block'; document.getElementById('pricemodallukketkontor').style.display='none';"
                                    style="">Er
                                    du allerede kunde kan du blot logge ind her og få dit tilbud?</a></p>
                        </div>
                        <div class="col-xs-12 uden-medlem-container w3-center1" style="">
                            <p class="uden-medlem-title">
                                Uden Kundekonto</p>
                            <p class="w3-padding uden-kundekonto-text">Hos DanPanel kan du også få
                                et tilbud uden kundekonto. Det har dog en betydning for prisen på vores tilbud, da vores
                                forhandlinger med samarbejdspartnerne muliggør rabatter til de med kundekonto.<br>Det er
                                helt gratis at tilmelde sig og anvende fordelene med vores let betjenelige koncept. </p>
                            <p class="uden-medlem-kundekonto-subtitle">Uden
                                kundekonto betyder at: </p>
                            <ul class="Uden-kunekonto-UList">
                                <li>
                                    Der ikke er rabatter
                                </li>
                                <li>
                                    Aktiviteter ikke opbevares på dit helt eget panel
                                </li>
                                <li>
                                    Der ikke fremsendes særlige kampagner
                                </li>
                                <li>
                                    Du går glip af masse fordele
                                </li>

                            </ul>
                            <p class="btn-price-fåTilbud1" style=""><a href="#" class="fortsaat-uden-konto"
                                    Onclick="document.getElementById('vikarmodal').style.display='block'; document.getElementById('pricemodallukketkontor').style.display='none'"
                                    ; style="">Fortsæt
                                    uden kundekonto</a></p>

                            <p class="uden-medlem-price" style="">
                                <span>Fra &nbsp</span>2195<span>,-/mdr</span><br><span class="ex-moms" style="">ex moms
                                    <span> </p>


                            <p class="" style=""><a href="#" class="opret-kunde-rabat"
                                    onclick="document.getElementById('signup').style.display='block'; document.getElementById('pricemodallukketkontor').style.display='none'"
                                    ; style="">Få kunderabat –
                                    Opret dig gratis</a></p>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div id="pricemodalhtmlcssphp" style="display:none" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:100%;  text-align: center;">
                <span onclick="document.getElementById('pricemodalhtmlcssphp').style.display='none'" ;
                    class="w3-button w3-transparent w3-display-topright" title="Close Modal">x</span>
                <img src="Assets/logo-black.png" alt="Logo" style="width:30%; " class="w3-margin-top">
                <h2 style="text-align:center"> Pris tabel</h2>
                <!-- <p style="text-align:center">Resize the browser window to see the effect.</p> -->
                <div class="container-fluid">
                    <div class="row" style="display:flex; justify-content: center;">
                        <div class="col-xs-12 medlem-container w3-center1">
                            <p class="medlem-title">
                                Med Kundekonto</p>
                            <p class="w3-padding medlem-kundekonto-text" style="">Når du
                                logger ind med din kundekonto, kan du samle alle dine løsninger i ét panel hos os, her
                                får du overblikket og en struktureret hverdag med overskud.<br>Du sparer tid og penge
                                ved at anvende DanPanel og dermed opleve den konstruktive udvikling. </p>
                            <p class="medlem-kundekonto-subtitle" style="">Med vores
                                platform kan du: </p>
                            <ul class="Kunekonto-Ulist" style="">
                                <li>
                                    Skabe struktur
                                </li>
                                <li>
                                    Få mere overskud
                                </li>
                                <li>
                                    Opleve Udvikling
                                </li>
                                <li>
                                    Besparelse på penge, tid og kræfter
                                </li>
                            </ul>

                            <p class="medlem-price" style="">
                                <span>Fra &nbsp</span>329<span>,-/time</span><br><span class="ex-moms" style="">ex moms
                                    <span> </p>
                            <p class="" style="padding:10px;"><a href="#pricemodal" class="log-på-konto"
                                    onclick="document.getElementById('login').style.display='block'; document.getElementById('pricemodalhtmlcssphp').style.display='none';"
                                    style="">Er
                                    du allerede kunde kan du blot logge ind her og få dit tilbud?</a></p>
                        </div>
                        <div class="col-xs-12 uden-medlem-container w3-center1" style="">
                            <p class="uden-medlem-title">
                                Uden Kundekonto</p>
                            <p class="w3-padding uden-kundekonto-text">Hos DanPanel kan du også få
                                et tilbud uden kundekonto. Det har dog en betydning for prisen på vores tilbud, da vores
                                forhandlinger med samarbejdspartnerne muliggør rabatter til de med kundekonto.<br>Det er
                                helt gratis at tilmelde sig og anvende fordelene med vores let betjenelige koncept. </p>
                            <p class="uden-medlem-kundekonto-subtitle">Uden
                                kundekonto betyder at: </p>
                            <ul class="Uden-kunekonto-UList">
                                <li>
                                    Der ikke er rabatter
                                </li>
                                <li>
                                    Aktiviteter ikke opbevares på dit helt eget panel
                                </li>
                                <li>
                                    Der ikke fremsendes særlige kampagner
                                </li>
                                <li>
                                    Du går glip af masse fordele
                                </li>

                            </ul>
                            <p class="btn-price-fåTilbud1" style=""><a href="#" class="fortsaat-uden-konto"
                                    Onclick="document.getElementById('vikarmodal').style.display='block'; document.getElementById('pricemodalhtmlcssphp').style.display='none'"
                                    ; style="">Fortsæt
                                    uden kundekonto</a></p>

                            <p class="uden-medlem-price" style="">
                                <span>Fra &nbsp</span>347<span>,-/time</span><br><span class="ex-moms" style="">ex moms
                                    <span> </p>


                            <p class="" style=""><a href="#" class="opret-kunde-rabat"
                                    onclick="document.getElementById('signup').style.display='block'; document.getElementById('pricemodalhtmlcssphp).style.display='none'"
                                    ; style="">Få kunderabat –
                                    Opret dig gratis</a></p>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div id="pricemodallogodesign" style="display:none" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:100%;  text-align: center;">
                <span onclick="document.getElementById('pricemodallogodesign').style.display='none'" ;
                    class="w3-button w3-transparent w3-display-topright" title="Close Modal">x</span>
                <img src="Assets/logo-black.png" alt="Logo" style="width:30%; " class="w3-margin-top">
                <h2 style="text-align:center"> Pris tabel</h2>
                <!-- <p style="text-align:center">Resize the browser window to see the effect.</p> -->
                <div class="container-fluid">
                    <div class="row" style="display:flex; justify-content: center;">
                        <div class="col-xs-12 medlem-container w3-center1">
                            <p class="medlem-title">
                                Med Kundekonto</p>
                            <p class="w3-padding medlem-kundekonto-text" style="">Når du
                                logger ind med din kundekonto, kan du samle alle dine løsninger i ét panel hos os, her
                                får du overblikket og en struktureret hverdag med overskud.<br>Du sparer tid og penge
                                ved at anvende DanPanel og dermed opleve den konstruktive udvikling. </p>
                            <p class="medlem-kundekonto-subtitle" style="">Med vores
                                platform kan du: </p>
                            <ul class="Kunekonto-Ulist" style="">
                                <li>
                                    Skabe struktur
                                </li>
                                <li>
                                    Få mere overskud
                                </li>
                                <li>
                                    Opleve Udvikling
                                </li>
                                <li>
                                    Besparelse på penge, tid og kræfter
                                </li>
                            </ul>

                            <p class="medlem-price" style="">
                                <span>Fra &nbsp</span>198<span>,-/time</span><br><span class="ex-moms" style="">ex moms
                                    <span> </p>
                            <p class="" style="padding:10px;"><a href="#pricemodal" class="log-på-konto"
                                    onclick="document.getElementById('login').style.display='block'; document.getElementById('pricemodallogodesign').style.display='none';"
                                    style="">Er
                                    du allerede kunde kan du blot logge ind her og få dit tilbud?</a></p>
                        </div>
                        <div class="col-xs-12 uden-medlem-container w3-center1" style="">
                            <p class="uden-medlem-title">
                                Uden Kundekonto</p>
                            <p class="w3-padding uden-kundekonto-text">Hos DanPanel kan du også få
                                et tilbud uden kundekonto. Det har dog en betydning for prisen på vores tilbud, da vores
                                forhandlinger med samarbejdspartnerne muliggør rabatter til de med kundekonto.<br>Det er
                                helt gratis at tilmelde sig og anvende fordelene med vores let betjenelige koncept. </p>
                            <p class="uden-medlem-kundekonto-subtitle">Uden
                                kundekonto betyder at: </p>
                            <ul class="Uden-kunekonto-UList">
                                <li>
                                    Der ikke er rabatter
                                </li>
                                <li>
                                    Aktiviteter ikke opbevares på dit helt eget panel
                                </li>
                                <li>
                                    Der ikke fremsendes særlige kampagner
                                </li>
                                <li>
                                    Du går glip af masse fordele
                                </li>

                            </ul>
                            <p class="btn-price-fåTilbud1" style=""><a href="#" class="fortsaat-uden-konto"
                                    Onclick="document.getElementById('vikarmodal').style.display='block'; document.getElementById('pricemodallogodesign').style.display='none'"
                                    ; style="">Fortsæt
                                    uden kundekonto</a></p>

                            <p class="uden-medlem-price" style="">
                                <span>Fra &nbsp</span>240<span>,-/time</span><br><span class="ex-moms" style="">ex moms
                                    <span> </p>


                            <p class="" style=""><a href="#" class="opret-kunde-rabat"
                                    onclick="document.getElementById('signup').style.display='block'; document.getElementById('pricemodallogodesign').style.display='none'"
                                    ; style="">Få kunderabat –
                                    Opret dig gratis</a></p>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div id="pricemodalsem" style="display:none" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:100%;  text-align: center;">
                <span onclick="document.getElementById('pricemodalsem').style.display='none'" ;
                    class="w3-button w3-transparent w3-display-topright" title="Close Modal">x</span>
                <img src="Assets/logo-black.png" alt="Logo" style="width:30%; " class="w3-margin-top">
                <h2 style="text-align:center"> Pris tabel</h2>
                <!-- <p style="text-align:center">Resize the browser window to see the effect.</p> -->
                <div class="container-fluid">
                    <div class="row" style="display:flex; justify-content: center;">
                        <div class="col-xs-12 medlem-container w3-center1">
                            <p class="medlem-title">
                                Med Kundekonto</p>
                            <p class="w3-padding medlem-kundekonto-text" style="">Når du
                                logger ind med din kundekonto, kan du samle alle dine løsninger i ét panel hos os, her
                                får du overblikket og en struktureret hverdag med overskud.<br>Du sparer tid og penge
                                ved at anvende DanPanel og dermed opleve den konstruktive udvikling. </p>
                            <p class="medlem-kundekonto-subtitle" style="">Med vores
                                platform kan du: </p>
                            <ul class="Kunekonto-Ulist" style="">
                                <li>
                                    Skabe struktur
                                </li>
                                <li>
                                    Få mere overskud
                                </li>
                                <li>
                                    Opleve Udvikling
                                </li>
                                <li>
                                    Besparelse på penge, tid og kræfter
                                </li>
                            </ul>

                            <p class="medlem-price" style="">
                                <span>Fra &nbsp</span>4000<span>,-/mdr for 5 time</span><br><span class="ex-moms"
                                    style="">ex moms
                                    <span> </p>
                            <p class="" style="padding:10px;"><a href="#pricemodal" class="log-på-konto"
                                    onclick="document.getElementById('login').style.display='block'; document.getElementById('pricemodalsem').style.display='none';"
                                    style="">Er
                                    du allerede kunde kan du blot logge ind her og få dit tilbud?</a></p>
                        </div>
                        <div class="col-xs-12 uden-medlem-container w3-center1" style="">
                            <p class="uden-medlem-title">
                                Uden Kundekonto</p>
                            <p class="w3-padding uden-kundekonto-text">Hos DanPanel kan du også få
                                et tilbud uden kundekonto. Det har dog en betydning for prisen på vores tilbud, da vores
                                forhandlinger med samarbejdspartnerne muliggør rabatter til de med kundekonto.<br>Det er
                                helt gratis at tilmelde sig og anvende fordelene med vores let betjenelige koncept. </p>
                            <p class="uden-medlem-kundekonto-subtitle">Uden
                                kundekonto betyder at: </p>
                            <ul class="Uden-kunekonto-UList">
                                <li>
                                    Der ikke er rabatter
                                </li>
                                <li>
                                    Aktiviteter ikke opbevares på dit helt eget panel
                                </li>
                                <li>
                                    Der ikke fremsendes særlige kampagner
                                </li>
                                <li>
                                    Du går glip af masse fordele
                                </li>

                            </ul>
                            <p class="btn-price-fåTilbud1" style=""><a href="#" class="fortsaat-uden-konto"
                                    Onclick="document.getElementById('vikarmodal').style.display='block'; document.getElementById('pricemodalsem').style.display='none'"
                                    ; style="">Fortsæt
                                    uden kundekonto</a></p>

                            <p class="uden-medlem-price" style="">
                                <span>Fra &nbsp</span>5000<span>,-/mdr for 5 time</span><br><span class="ex-moms"
                                    style="">ex moms
                                    <span> </p>


                            <p class="" style=""><a href="#" class="opret-kunde-rabat"
                                    onclick="document.getElementById('signup').style.display='block'; document.getElementById('pricemodalsem').style.display='none'"
                                    ; style="">Få kunderabat –
                                    Opret dig gratis</a></p>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div id="pricemodalseo" style="display:none" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:100%;  text-align: center;">
                <span onclick="document.getElementById('pricemodalseo').style.display='none'" ;
                    class="w3-button w3-transparent w3-display-topright" title="Close Modal">x</span>
                <img src="Assets/logo-black.png" alt="Logo" style="width:30%; " class="w3-margin-top">
                <h2 style="text-align:center"> Pris tabel</h2>
                <!-- <p style="text-align:center">Resize the browser window to see the effect.</p> -->
                <div class="container-fluid">
                    <div class="row" style="display:flex; justify-content: center;">
                        <div class="col-xs-12 medlem-container w3-center1">
                            <p class="medlem-title">
                                Med Kundekonto</p>
                            <p class="w3-padding medlem-kundekonto-text" style="">Når du
                                logger ind med din kundekonto, kan du samle alle dine løsninger i ét panel hos os, her
                                får du overblikket og en struktureret hverdag med overskud.<br>Du sparer tid og penge
                                ved at anvende DanPanel og dermed opleve den konstruktive udvikling. </p>
                            <p class="medlem-kundekonto-subtitle" style="">Med vores
                                platform kan du: </p>
                            <ul class="Kunekonto-Ulist" style="">
                                <li>
                                    Skabe struktur
                                </li>
                                <li>
                                    Få mere overskud
                                </li>
                                <li>
                                    Opleve Udvikling
                                </li>
                                <li>
                                    Besparelse på penge, tid og kræfter
                                </li>
                            </ul>

                            <p class="medlem-price" style="">
                                <span>Fra &nbsp</span>4000<span>,-/mdr for 5 time</span><br><span class="ex-moms"
                                    style="">ex moms
                                    <span> </p>
                            <p class="" style="padding:10px;"><a href="#pricemodal" class="log-på-konto"
                                    onclick="document.getElementById('login').style.display='block'; document.getElementById('pricemodalseo').style.display='none';"
                                    style="">Er
                                    du allerede kunde kan du blot logge ind her og få dit tilbud?</a></p>
                        </div>
                        <div class="col-xs-12 uden-medlem-container w3-center1" style="">
                            <p class="uden-medlem-title">
                                Uden Kundekonto</p>
                            <p class="w3-padding uden-kundekonto-text">Hos DanPanel kan du også få
                                et tilbud uden kundekonto. Det har dog en betydning for prisen på vores tilbud, da vores
                                forhandlinger med samarbejdspartnerne muliggør rabatter til de med kundekonto.<br>Det er
                                helt gratis at tilmelde sig og anvende fordelene med vores let betjenelige koncept. </p>
                            <p class="uden-medlem-kundekonto-subtitle">Uden
                                kundekonto betyder at: </p>
                            <ul class="Uden-kunekonto-UList">
                                <li>
                                    Der ikke er rabatter
                                </li>
                                <li>
                                    Aktiviteter ikke opbevares på dit helt eget panel
                                </li>
                                <li>
                                    Der ikke fremsendes særlige kampagner
                                </li>
                                <li>
                                    Du går glip af masse fordele
                                </li>

                            </ul>
                            <p class="btn-price-fåTilbud1" style=""><a href="#" class="fortsaat-uden-konto"
                                    Onclick="document.getElementById('vikarmodal').style.display='block'; document.getElementById('pricemodalseo').style.display='none'"
                                    ; style="">Fortsæt
                                    uden kundekonto</a></p>

                            <p class="uden-medlem-price" style="">
                                <span>Fra &nbsp</span>5000<span>,-/mdr for 5 time</span><br><span class="ex-moms"
                                    style="">ex moms
                                    <span> </p>


                            <p class="" style=""><a href="#" class="opret-kunde-rabat"
                                    onclick="document.getElementById('signup').style.display='block'; document.getElementById('pricemodalseo').style.display='none'"
                                    ; style="">Få kunderabat –
                                    Opret dig gratis</a></p>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        
        <div id="pricemodaltekstforfatning" style="display:none" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:100%;  text-align: center;">
                <span onclick="document.getElementById('pricemodaltekstforfatning').style.display='none'" ;
                    class="w3-button w3-transparent w3-display-topright" title="Close Modal">x</span>
                <img src="Assets/logo-black.png" alt="Logo" style="width:30%; " class="w3-margin-top">
                <h2 style="text-align:center"> Pris tabel</h2>
                <!-- <p style="text-align:center">Resize the browser window to see the effect.</p> -->
                <div class="container-fluid">
                    <div class="row" style="display:flex; justify-content: center;">
                        <div class="col-xs-12 medlem-container w3-center1">
                            <p class="medlem-title">
                                Med Kundekonto</p>
                            <p class="w3-padding medlem-kundekonto-text" style="">Når du
                                logger ind med din kundekonto, kan du samle alle dine løsninger i ét panel hos os, her
                                får du overblikket og en struktureret hverdag med overskud.<br>Du sparer tid og penge
                                ved at anvende DanPanel og dermed opleve den konstruktive udvikling. </p>
                            <p class="medlem-kundekonto-subtitle" style="">Med vores
                                platform kan du: </p>
                            <ul class="Kunekonto-Ulist" style="">
                                <li>
                                    Skabe struktur
                                </li>
                                <li>
                                    Få mere overskud
                                </li>
                                <li>
                                    Opleve Udvikling
                                </li>
                                <li>
                                    Besparelse på penge, tid og kræfter
                                </li>
                            </ul>

                            <p class="medlem-price" style="">
                               <span>Fra &nbsp</span>1600<span>,-/mdr for 4 artikler</span><br><span class="ex-moms" style="">ex moms
                                    <span> </p>
                            <p class="" style="padding:10px;"><a href="#pricemodal" class="log-på-konto"
                                    onclick="document.getElementById('login').style.display='block'; document.getElementById('pricemodaltekstforfatning').style.display='none';"
                                    style="">Er
                                    du allerede kunde kan du blot logge ind her og få dit tilbud?</a></p>
                        </div>
                        <div class="col-xs-12 uden-medlem-container w3-center1" style="">
                            <p class="uden-medlem-title">
                                Uden Kundekonto</p>
                            <p class="w3-padding uden-kundekonto-text">Hos DanPanel kan du også få
                                et tilbud uden kundekonto. Det har dog en betydning for prisen på vores tilbud, da vores
                                forhandlinger med samarbejdspartnerne muliggør rabatter til de med kundekonto.<br>Det er
                                helt gratis at tilmelde sig og anvende fordelene med vores let betjenelige koncept. </p>
                            <p class="uden-medlem-kundekonto-subtitle">Uden
                                kundekonto betyder at: </p>
                            <ul class="Uden-kunekonto-UList">
                                <li>
                                    Der ikke er rabatter
                                </li>
                                <li>
                                    Aktiviteter ikke opbevares på dit helt eget panel
                                </li>
                                <li>
                                    Der ikke fremsendes særlige kampagner
                                </li>
                                <li>
                                    Du går glip af masse fordele
                                </li>

                            </ul>
                            <p class="btn-price-fåTilbud1" style=""><a href="#" class="fortsaat-uden-konto"
                                    Onclick="document.getElementById('vikarmodal').style.display='block'; document.getElementById('pricemodaltekstforfatning').style.display='none'"
                                    ; style="">Fortsæt
                                    uden kundekonto</a></p>

                            <p class="uden-medlem-price" style="">
                                <span>Fra &nbsp</span>1998<span>,-/mdr for 4 artikler</span><br><span class="ex-moms" style="">ex moms
                                    <span> </p>


                            <p class="" style=""><a href="#" class="opret-kunde-rabat"
                                    onclick="document.getElementById('signup').style.display='block'; document.getElementById('pricemodaltekstforfatning).style.display='none'"
                                    ; style="">Få kunderabat –
                                    Opret dig gratis</a></p>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div id="pricemodalvedligeholdelse" style="display:none" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:100%;  text-align: center;">
                <span onclick="document.getElementById('pricemodalvedligeholdelse').style.display='none'" ;
                    class="w3-button w3-transparent w3-display-topright" title="Close Modal">x</span>
                <img src="Assets/logo-black.png" alt="Logo" style="width:30%; " class="w3-margin-top">
                <h2 style="text-align:center"> Pris tabel</h2>
                <!-- <p style="text-align:center">Resize the browser window to see the effect.</p> -->
                <div class="container-fluid">
                    <div class="row" style="display:flex; justify-content: center;">
                        <div class="col-xs-12 medlem-container w3-center1">
                            <p class="medlem-title">
                                Med Kundekonto</p>
                            <p class="w3-padding medlem-kundekonto-text" style="">Når du
                                logger ind med din kundekonto, kan du samle alle dine løsninger i ét panel hos os, her
                                får du overblikket og en struktureret hverdag med overskud.<br>Du sparer tid og penge
                                ved at anvende DanPanel og dermed opleve den konstruktive udvikling. </p>
                            <p class="medlem-kundekonto-subtitle" style="">Med vores
                                platform kan du: </p>
                            <ul class="Kunekonto-Ulist" style="">
                                <li>
                                    Skabe struktur
                                </li>
                                <li>
                                    Få mere overskud
                                </li>
                                <li>
                                    Opleve Udvikling
                                </li>
                                <li>
                                    Besparelse på penge, tid og kræfter
                                </li>
                            </ul>

                            <p class="medlem-price" style="">
                                <span>Fra &nbsp</span>198<span>,-/time</span><br><span class="ex-moms" style="">ex moms
                                    <span> </p>
                            <p class="" style="padding:10px;"><a href="#pricemodal" class="log-på-konto"
                                    onclick="document.getElementById('login').style.display='block'; document.getElementById('pricemodalvedligeholdelse').style.display='none';"
                                    style="">Er
                                    du allerede kunde kan du blot logge ind her og få dit tilbud?</a></p>
                        </div>
                        <div class="col-xs-12 uden-medlem-container w3-center1" style="">
                            <p class="uden-medlem-title">
                                Uden Kundekonto</p>
                            <p class="w3-padding uden-kundekonto-text">Hos DanPanel kan du også få
                                et tilbud uden kundekonto. Det har dog en betydning for prisen på vores tilbud, da vores
                                forhandlinger med samarbejdspartnerne muliggør rabatter til de med kundekonto.<br>Det er
                                helt gratis at tilmelde sig og anvende fordelene med vores let betjenelige koncept. </p>
                            <p class="uden-medlem-kundekonto-subtitle">Uden
                                kundekonto betyder at: </p>
                            <ul class="Uden-kunekonto-UList">
                                <li>
                                    Der ikke er rabatter
                                </li>
                                <li>
                                    Aktiviteter ikke opbevares på dit helt eget panel
                                </li>
                                <li>
                                    Der ikke fremsendes særlige kampagner
                                </li>
                                <li>
                                    Du går glip af masse fordele
                                </li>

                            </ul>
                            <p class="btn-price-fåTilbud1" style=""><a href="#" class="fortsaat-uden-konto"
                                    Onclick="document.getElementById('vikarmodal').style.display='block'; document.getElementById('pricemodalvedligeholdelse').style.display='none'"
                                    ; style="">Fortsæt
                                    uden kundekonto</a></p>

                            <p class="uden-medlem-price" style="">
                                <span>Fra &nbsp</span>240<span>,-/time</span><br><span class="ex-moms" style="">ex moms
                                    <span> </p>


                            <p class="" style=""><a href="#" class="opret-kunde-rabat"
                                    onclick="document.getElementById('signup').style.display='block'; document.getElementById('pricemodalvedligeholdelse').style.display='none'"
                                    ; style="">Få kunderabat –
                                    Opret dig gratis</a></p>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div id="pricemodalwebdesign" style="display:none" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:100%;  text-align: center;">
                <span onclick="document.getElementById('pricemodalwebdesign').style.display='none'" ;
                    class="w3-button w3-transparent w3-display-topright" title="Close Modal">x</span>
                <img src="Assets/logo-black.png" alt="Logo" style="width:30%; " class="w3-margin-top">
                <h2 style="text-align:center"> Pris tabel</h2>
                <!-- <p style="text-align:center">Resize the browser window to see the effect.</p> -->
                <div class="container-fluid">
                    <div class="row" style="display:flex; justify-content: center;">
                        <div class="col-xs-12 medlem-container w3-center1">
                            <p class="medlem-title">
                                Med Kundekonto</p>
                            <p class="w3-padding medlem-kundekonto-text" style="">Når du
                                logger ind med din kundekonto, kan du samle alle dine løsninger i ét panel hos os, her
                                får du overblikket og en struktureret hverdag med overskud.<br>Du sparer tid og penge
                                ved at anvende DanPanel og dermed opleve den konstruktive udvikling. </p>
                            <p class="medlem-kundekonto-subtitle" style="">Med vores
                                platform kan du: </p>
                            <ul class="Kunekonto-Ulist" style="">
                                <li>
                                    Skabe struktur
                                </li>
                                <li>
                                    Få mere overskud
                                </li>
                                <li>
                                    Opleve Udvikling
                                </li>
                                <li>
                                    Besparelse på penge, tid og kræfter
                                </li>
                            </ul>

                            <p class="medlem-price" style="">
                                <span>Fra &nbsp</span>4000<span>,-</span><br><span class="ex-moms"
                                    style="">ex moms
                                    <span> </p>
                            <p class="" style="padding:10px;"><a href="#pricemodal" class="log-på-konto"
                                    onclick="document.getElementById('login').style.display='block'; document.getElementById('pricemodalwebdesign').style.display='none';"
                                    style="">Er
                                    du allerede kunde kan du blot logge ind her og få dit tilbud?</a></p>
                        </div>
                        <div class="col-xs-12 uden-medlem-container w3-center1" style="">
                            <p class="uden-medlem-title">
                                Uden Kundekonto</p>
                            <p class="w3-padding uden-kundekonto-text">Hos DanPanel kan du også få
                                et tilbud uden kundekonto. Det har dog en betydning for prisen på vores tilbud, da vores
                                forhandlinger med samarbejdspartnerne muliggør rabatter til de med kundekonto.<br>Det er
                                helt gratis at tilmelde sig og anvende fordelene med vores let betjenelige koncept. </p>
                            <p class="uden-medlem-kundekonto-subtitle">Uden
                                kundekonto betyder at: </p>
                            <ul class="Uden-kunekonto-UList">
                                <li>
                                    Der ikke er rabatter
                                </li>
                                <li>
                                    Aktiviteter ikke opbevares på dit helt eget panel
                                </li>
                                <li>
                                    Der ikke fremsendes særlige kampagner
                                </li>
                                <li>
                                    Du går glip af masse fordele
                                </li>

                            </ul>
                            <p class="btn-price-fåTilbud1" style=""><a href="#" class="fortsaat-uden-konto"
                                    Onclick="document.getElementById('vikarmodal').style.display='block'; document.getElementById('pricemodalwebdesign').style.display='none'"
                                    ; style="">Fortsæt
                                    uden kundekonto</a></p>

                            <p class="uden-medlem-price" style="">
                                <span>Fra &nbsp</span>5000<span>,-</span><br><span class="ex-moms"
                                    style="">ex moms
                                    <span> </p>


                            <p class="" style=""><a href="#" class="opret-kunde-rabat"
                                    onclick="document.getElementById('signup').style.display='block'; document.getElementById('pricemodalwebdesign').style.display='none'"
                                    ; style="">Få kunderabat –
                                    Opret dig gratis</a></p>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div id="pricemodalwordpress" style="display:none" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:100%;  text-align: center;">
                <span onclick="document.getElementById('pricemodalwordpress').style.display='none'" ;
                    class="w3-button w3-transparent w3-display-topright" title="Close Modal">x</span>
                <img src="Assets/logo-black.png" alt="Logo" style="width:30%; " class="w3-margin-top">
                <h2 style="text-align:center"> Pris tabel</h2>
                <!-- <p style="text-align:center">Resize the browser window to see the effect.</p> -->
                <div class="container-fluid">
                    <div class="row" style="display:flex; justify-content: center;">
                        <div class="col-xs-12 medlem-container w3-center1">
                            <p class="medlem-title">
                                Med Kundekonto</p>
                            <p class="w3-padding medlem-kundekonto-text" style="">Når du
                                logger ind med din kundekonto, kan du samle alle dine løsninger i ét panel hos os, her
                                får du overblikket og en struktureret hverdag med overskud.<br>Du sparer tid og penge
                                ved at anvende DanPanel og dermed opleve den konstruktive udvikling. </p>
                            <p class="medlem-kundekonto-subtitle" style="">Med vores
                                platform kan du: </p>
                            <ul class="Kunekonto-Ulist" style="">
                                <li>
                                    Skabe struktur
                                </li>
                                <li>
                                    Få mere overskud
                                </li>
                                <li>
                                    Opleve Udvikling
                                </li>
                                <li>
                                    Besparelse på penge, tid og kræfter
                                </li>
                            </ul>

                            <p class="medlem-price" style="">
                                <span>Fra &nbsp</span>2000<span>,-</span><br><span class="ex-moms"
                                    style="">ex moms
                                    <span> </p>
                            <p class="" style="padding:10px;"><a href="#pricemodal" class="log-på-konto"
                                    onclick="document.getElementById('login').style.display='block'; document.getElementById('pricemodalwordpress').style.display='none';"
                                    style="">Er
                                    du allerede kunde kan du blot logge ind her og få dit tilbud?</a></p>
                        </div>
                        <div class="col-xs-12 uden-medlem-container w3-center1" style="">
                            <p class="uden-medlem-title">
                                Uden Kundekonto</p>
                            <p class="w3-padding uden-kundekonto-text">Hos DanPanel kan du også få
                                et tilbud uden kundekonto. Det har dog en betydning for prisen på vores tilbud, da vores
                                forhandlinger med samarbejdspartnerne muliggør rabatter til de med kundekonto.<br>Det er
                                helt gratis at tilmelde sig og anvende fordelene med vores let betjenelige koncept. </p>
                            <p class="uden-medlem-kundekonto-subtitle">Uden
                                kundekonto betyder at: </p>
                            <ul class="Uden-kunekonto-UList">
                                <li>
                                    Der ikke er rabatter
                                </li>
                                <li>
                                    Aktiviteter ikke opbevares på dit helt eget panel
                                </li>
                                <li>
                                    Der ikke fremsendes særlige kampagner
                                </li>
                                <li>
                                    Du går glip af masse fordele
                                </li>

                            </ul>
                            <p class="btn-price-fåTilbud1" style=""><a href="#" class="fortsaat-uden-konto"
                                    Onclick="document.getElementById('vikarmodal').style.display='block'; document.getElementById('pricemodalwordpress').style.display='none'"
                                    ; style="">Fortsæt
                                    uden kundekonto</a></p>

                            <p class="uden-medlem-price" style="">
                                <span>Fra &nbsp</span>2750<span>,-</span><br><span class="ex-moms"
                                    style="">ex moms
                                    <span> </p>


                            <p class="" style=""><a href="#" class="opret-kunde-rabat"
                                    onclick="document.getElementById('signup').style.display='block'; document.getElementById('pricemodalwordpress').style.display='none'"
                                    ; style="">Få kunderabat –
                                    Opret dig gratis</a></p>
                        </div>

                    </div>

                </div>
            </div>
        </div>


        <div id="pricemodalkaffelosninger" style="display:none" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:100%;  text-align: center;">
                <span onclick="document.getElementById('pricemodalkaffelosninger').style.display='none'" ;
                    class="w3-button w3-transparent w3-display-topright" title="Close Modal">x</span>
                <img src="Assets/logo-black.png" alt="Logo" style="width:30%; " class="w3-margin-top">
                <h2 style="text-align:center"> Pris tabel</h2>
                <!-- <p style="text-align:center">Resize the browser window to see the effect.</p> -->
                <div class="container-fluid">
                    <div class="row" style="display:flex; justify-content: center;">
                        <div class="col-xs-12 medlem-container w3-center1">
                            <p class="medlem-title">
                                Med Kundekonto</p>
                            <p class="w3-padding medlem-kundekonto-text" style="">Når du
                                logger ind med din kundekonto, kan du samle alle dine løsninger i ét panel hos os, her
                                får du overblikket og en struktureret hverdag med overskud.<br>Du sparer tid og penge
                                ved at anvende DanPanel og dermed opleve den konstruktive udvikling. </p>
                            <p class="medlem-kundekonto-subtitle" style="">Med vores
                                platform kan du: </p>
                            <ul class="Kunekonto-Ulist" style="">
                                <li>
                                    Skabe struktur
                                </li>
                                <li>
                                    Få mere overskud
                                </li>
                                <li>
                                    Opleve Udvikling
                                </li>
                                <li>
                                    Besparelse på penge, tid og kræfter
                                </li>
                            </ul>

                            <p class="medlem-price" style="">
                                <span>Fra &nbsp</span>2.5<span>,-/kop</span><br><span class="ex-moms"
                                    style="">ex moms
                                    <span> </p>
                            <p class="" style="padding:10px;"><a href="#pricemodal" class="log-på-konto"
                                    onclick="document.getElementById('login').style.display='block'; document.getElementById('pricemodalkaffelosninger').style.display='none';"
                                    style="">Er
                                    du allerede kunde kan du blot logge ind her og få dit tilbud?</a></p>
                        </div>
                        <div class="col-xs-12 uden-medlem-container w3-center1" style="">
                            <p class="uden-medlem-title">
                                Uden Kundekonto</p>
                            <p class="w3-padding uden-kundekonto-text">Hos DanPanel kan du også få
                                et tilbud uden kundekonto. Det har dog en betydning for prisen på vores tilbud, da vores
                                forhandlinger med samarbejdspartnerne muliggør rabatter til de med kundekonto.<br>Det er
                                helt gratis at tilmelde sig og anvende fordelene med vores let betjenelige koncept. </p>
                            <p class="uden-medlem-kundekonto-subtitle">Uden
                                kundekonto betyder at: </p>
                            <ul class="Uden-kunekonto-UList">
                                <li>
                                    Der ikke er rabatter
                                </li>
                                <li>
                                    Aktiviteter ikke opbevares på dit helt eget panel
                                </li>
                                <li>
                                    Der ikke fremsendes særlige kampagner
                                </li>
                                <li>
                                    Du går glip af masse fordele
                                </li>

                            </ul>
                            <p class="btn-price-fåTilbud1" style=""><a href="#" class="fortsaat-uden-konto"
                                    Onclick="document.getElementById('vikarmodal').style.display='block'; document.getElementById('pricemodalkaffelosninger').style.display='none'"
                                    ; style="">Fortsæt
                                    uden kundekonto</a></p>

                            <p class="uden-medlem-price" style="">
                            <span>Fra &nbsp</span>2.9<span>,-/kop</span><br><span class="ex-moms"
                                    style="">ex moms
                                    <span> </p>


                            <p class="" style=""><a href="#" class="opret-kunde-rabat"
                                    onclick="document.getElementById('signup').style.display='block'; document.getElementById('pricemodalkaffelosninger').style.display='none'"
                                    ; style="">Få kunderabat –
                                    Opret dig gratis</a></p>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        
        <div id="pricemodalkaffe" style="display:none" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:100%;  text-align: center;">
                <span onclick="document.getElementById('pricemodalkaffe').style.display='none'" ;
                    class="w3-button w3-transparent w3-display-topright" title="Close Modal">x</span>
                <img src="Assets/logo-black.png" alt="Logo" style="width:30%; " class="w3-margin-top">
                <h2 style="text-align:center"> Pris tabel</h2>
                <!-- <p style="text-align:center">Resize the browser window to see the effect.</p> -->
                <div class="container-fluid">
                    <div class="row" style="display:flex; justify-content: center;">
                        <div class="col-xs-12 medlem-container w3-center1">
                            <p class="medlem-title">
                                Med Kundekonto</p>
                            <p class="w3-padding medlem-kundekonto-text" style="">Når du
                                logger ind med din kundekonto, kan du samle alle dine løsninger i ét panel hos os, her
                                får du overblikket og en struktureret hverdag med overskud.<br>Du sparer tid og penge
                                ved at anvende DanPanel og dermed opleve den konstruktive udvikling. </p>
                            <p class="medlem-kundekonto-subtitle" style="">Med vores
                                platform kan du: </p>
                            <ul class="Kunekonto-Ulist" style="">
                                <li>
                                    Skabe struktur
                                </li>
                                <li>
                                    Få mere overskud
                                </li>
                                <li>
                                    Opleve Udvikling
                                </li>
                                <li>
                                    Besparelse på penge, tid og kræfter
                                </li>
                            </ul>

                            <p class="medlem-price" style="">
                               <span>Fra &nbsp</span>139<span>,-/kg</span><br><span class="ex-moms" style="">ex moms
                                    <span> </p>
                            <p class="" style="padding:10px;"><a href="#pricemodal" class="log-på-konto"
                                    onclick="document.getElementById('login').style.display='block'; document.getElementById('pricemodalkaffe').style.display='none';"
                                    style="">Er
                                    du allerede kunde kan du blot logge ind her og få dit tilbud?</a></p>
                        </div>
                        <div class="col-xs-12 uden-medlem-container w3-center1" style="">
                            <p class="uden-medlem-title">
                                Uden Kundekonto</p>
                            <p class="w3-padding uden-kundekonto-text">Hos DanPanel kan du også få
                                et tilbud uden kundekonto. Det har dog en betydning for prisen på vores tilbud, da vores
                                forhandlinger med samarbejdspartnerne muliggør rabatter til de med kundekonto.<br>Det er
                                helt gratis at tilmelde sig og anvende fordelene med vores let betjenelige koncept. </p>
                            <p class="uden-medlem-kundekonto-subtitle">Uden
                                kundekonto betyder at: </p>
                            <ul class="Uden-kunekonto-UList">
                                <li>
                                    Der ikke er rabatter
                                </li>
                                <li>
                                    Aktiviteter ikke opbevares på dit helt eget panel
                                </li>
                                <li>
                                    Der ikke fremsendes særlige kampagner
                                </li>
                                <li>
                                    Du går glip af masse fordele
                                </li>

                            </ul>
                            <p class="btn-price-fåTilbud1" style=""><a href="#" class="fortsaat-uden-konto"
                                    Onclick="document.getElementById('vikarmodal').style.display='block'; document.getElementById('pricemodalkaffe').style.display='none'"
                                    ; style="">Fortsæt
                                    uden kundekonto</a></p>

                            <p class="uden-medlem-price" style="">
                            <span>Fra &nbsp</span>149<span>,-/kg</span><br><span class="ex-moms" style="">ex moms
                                    <span> </p>


                            <p class="" style=""><a href="#" class="opret-kunde-rabat"
                                    onclick="document.getElementById('signup').style.display='block'; document.getElementById('pricemodalkaffe').style.display='none'"
                                    ; style="">Få kunderabat –
                                    Opret dig gratis</a></p>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div id="pricemodalte" style="display:none" class="w3-modal">
            <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:100%;  text-align: center;">
                <span onclick="document.getElementById('pricemodalte').style.display='none'" ;
                    class="w3-button w3-transparent w3-display-topright" title="Close Modal">x</span>
                <img src="Assets/logo-black.png" alt="Logo" style="width:30%; " class="w3-margin-top">
                <h2 style="text-align:center"> Pris tabel</h2>
                <!-- <p style="text-align:center">Resize the browser window to see the effect.</p> -->
                <div class="container-fluid">
                    <div class="row" style="display:flex; justify-content: center;">
                        <div class="col-xs-12 medlem-container w3-center1">
                            <p class="medlem-title">
                                Med Kundekonto</p>
                            <p class="w3-padding medlem-kundekonto-text" style="">Når du
                                logger ind med din kundekonto, kan du samle alle dine løsninger i ét panel hos os, her
                                får du overblikket og en struktureret hverdag med overskud.<br>Du sparer tid og penge
                                ved at anvende DanPanel og dermed opleve den konstruktive udvikling. </p>
                            <p class="medlem-kundekonto-subtitle" style="">Med vores
                                platform kan du: </p>
                            <ul class="Kunekonto-Ulist" style="">
                                <li>
                                    Skabe struktur
                                </li>
                                <li>
                                    Få mere overskud
                                </li>
                                <li>
                                    Opleve Udvikling
                                </li>
                                <li>
                                    Besparelse på penge, tid og kræfter
                                </li>
                            </ul>

                            <p class="medlem-price" style="">
                                <span>Fra &nbsp</span>15<span>,-/pakke</span><br><span class="ex-moms" style="">ex moms
                                    <span> </p>
                            <p class="" style="padding:10px;"><a href="#pricemodal" class="log-på-konto"
                                    onclick="document.getElementById('login').style.display='block'; document.getElementById('pricemodalte').style.display='none';"
                                    style="">Er
                                    du allerede kunde kan du blot logge ind her og få dit tilbud?</a></p>
                        </div>
                        <div class="col-xs-12 uden-medlem-container w3-center1" style="">
                            <p class="uden-medlem-title">
                                Uden Kundekonto</p>
                            <p class="w3-padding uden-kundekonto-text">Hos DanPanel kan du også få
                                et tilbud uden kundekonto. Det har dog en betydning for prisen på vores tilbud, da vores
                                forhandlinger med samarbejdspartnerne muliggør rabatter til de med kundekonto.<br>Det er
                                helt gratis at tilmelde sig og anvende fordelene med vores let betjenelige koncept. </p>
                            <p class="uden-medlem-kundekonto-subtitle">Uden
                                kundekonto betyder at: </p>
                            <ul class="Uden-kunekonto-UList">
                                <li>
                                    Der ikke er rabatter
                                </li>
                                <li>
                                    Aktiviteter ikke opbevares på dit helt eget panel
                                </li>
                                <li>
                                    Der ikke fremsendes særlige kampagner
                                </li>
                                <li>
                                    Du går glip af masse fordele
                                </li>

                            </ul>
                            <p class="btn-price-fåTilbud1" style=""><a href="#" class="fortsaat-uden-konto"
                                    Onclick="document.getElementById('vikarmodal').style.display='block'; document.getElementById('pricemodalte').style.display='none'"
                                    ; style="">Fortsæt
                                    uden kundekonto</a></p>

                            <p class="uden-medlem-price" style="">
                            <span>Fra &nbsp</span>25<span>,-/pakke</span><br><span class="ex-moms" style="">ex moms
                                    <span> </p>


                            <p class="" style=""><a href="#" class="opret-kunde-rabat"
                                    onclick="document.getElementById('signup').style.display='block'; document.getElementById('pricemodalte').style.display='none'"
                                    ; style="">Få kunderabat –
                                    Opret dig gratis</a></p>
                        </div>

                    </div>

                </div>
            </div>
        </div>

   

    </div>



    <!-- Vikar og Rekruttering modal -->
    <div class="w3-row"> </div>
    <div id="vikarmodal" style="display: none" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="width:50%">
            <div class="w3-center"><br>
                <span onclick="document.getElementById('vikarmodal').style.display='none'"
                    class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
                <img src="Assets/logo-black.png" alt="Logo" style="width:30%" class="w3-margin-top"> </div>
            <div class="w3-section w3-animate-opacity" id="main">
                <!-- view for create vikar og rekruttering -->
                <form class="w3-container w3-animate-opacity" action="includes/createvikarrekrutteringorder.inc.php"
                    method="post">


                    <h4 class="w3-center">Vikar og Rekruttering</h4>

                    <label>Navnet på virksomheden</label>
                    <input name="virksomhedsnavn" class="w3-border w3-input">

                    <label>Kontaktperson</label>
                    <input name="kontaktperson" class="w3-border w3-input">

                    <label>Sagsnummer</label>
                    <input name="sagsnr" class="w3-border w3-input">

                    <label>Beskrivelse</label><br>
                    <textarea name="beskrivelse" cols="85" rows="4"></textarea><br>


                    <label>Antal</label>
                    <input name="antal" class="w3-border w3-input">

                    <label>Type af Opgave</label>
                    <input name="typeafopgave" class="w3-border w3-input">

                    <label>Varighed</label>
                    <input name="varighed" class="w3-border w3-input">

                    <label>Mødetid</label>
                    <input name="moedetid" type="time" class="w3-border w3-input">

                    <label>Opgaveadresse</label>
                    <input name="opgaveadresse" class="w3-border w3-input">

                    <label>Firma adresse</label>
                    <input name="firmaadresse" class="w3-border w3-input">

                    <label>Faktura Email</label>
                    <input name="fakturaemail" class="w3-border w3-input">

                    <label>*Ikke obligatorisk* EAN Nummer</label>
                    <input name="ean" class="w3-border w3-input">

                    <label> *Ikke obligatorisk* Hjemmeside </label>
                    <input name="website" class="w3-border w3-input">
                    <?php 
					if(isset($_SESSION['cvr'])){
						$cvr = $_SESSION['cvr'];
					}
					?>
                    <a href="#"
                        onClick="window.open('https://pbs-erhverv.dk/LS/?id=0&pbs=3054924174722e473d2f8dadb5b0b924&dbnr=<?php echo $uid;?>&cvr=<?php echo $cvr;?>&knmin=&knmax=','LSTilmeld','resizable=no,toolbar=no,scrollbars=no,menubar=no,location=no,status=yes,width=375,height=500');return false;">LeverandørService
                        online tilmelding</a>

                    <button class="w3-input w3-border w3-round w3-hover-border-black w3-section w3-green" type="submit"
                        name="createvikar-submit">Bestil</button>
                </form>
                <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                    <button onclick="document.getElementById('vikarmodal').style.display='none'" type="button"
                        class="w3-button w3-red">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Alarm og Overvågning modal -->
    


    <!-- Digitalisering modal -->
    <div class="w3-row"> </div>
    <div id="digitaliseringmodal" style="display: none" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:50%">
            <div class="w3-center"><br>
                <span onclick="document.getElementById('digitaliseringmodal').style.display='none'"
                    class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
                <img src="Assets/logo-black.png" alt="Logo" style="width:30%" class="w3-margin-top"> </div>
            <div class="w3-section w3-animate-opacity" id="main">
                <!-- view for digitalisering -->
                <form class="w3-container w3-animate-opacity" action="includes/createdigitaliseringorder.inc.php"
                    method="post">
                    <div class="w3-center w3-margin-top"><a
                            class="w3-border w3-green w3-hover-blue w3-large w3-padding w3-round-large"
                            onClick="document.getElementById('digitaliseringmodal').style.display='none';document.getElementById('main').style.display='block'">
                            Tilbage til udvalg </a><br><br></div>

                    <h4 class="w3-center">Digitalisering</h4>

                    <label>Kontaktperson</label>
                    <input name="kontaktperson" class="w3-border w3-input">

                    <label>Sagsnummer</label>
                    <input name="sagsnr" class="w3-border w3-input">

                    <label>Beskrivelse</label><br>
                    <textarea name="beskrivelse" cols="85" rows="4"></textarea><br>

                    <label>Firma adresse</label>
                    <input name="firmaadresse" class="w3-border w3-input">

                    <label>Faktura Email</label>
                    <input name="fakturaemail" class="w3-border w3-input">

                    <label>*Ikke obligatorisk* EAN Nummer</label>
                    <input name="ean" class="w3-border w3-input">

                    <label> *Ikke obligatorisk* Hjemmeside </label>
                    <input name="website" class="w3-border w3-input">
                    <?php 
					if(isset($_SESSION['cvr'])){
						$cvr = $_SESSION['cvr'];
					}
					?>
                    <a href="#"
                        onClick="window.open('https://pbs-erhverv.dk/LS/?id=0&pbs=3054924174722e473d2f8dadb5b0b924&dbnr=<?php echo $uid;?>&cvr=<?php echo $cvr;?>&knmin=&knmax=','LSTilmeld','resizable=no,toolbar=no,scrollbars=no,menubar=no,location=no,status=yes,width=375,height=500');return false;">LeverandørService
                        online tilmelding</a>

                    <button class="w3-input w3-border w3-round w3-hover-border-black w3-section w3-green" type="submit"
                        name="createvikar-submit">Bestil</button>
                </form>
                <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                    <button onclick="document.getElementById('digitaliseringmodal').style.display='none'" type="button"
                        class="w3-button w3-red">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Rengøring modal -->
    <div class="w3-row"> </div>
    <div id="rengøringmodal" style="display: none" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:50%">
            <div class="w3-center"><br>
                <span onclick="document.getElementById('rengøringmodal').style.display='none'"
                    class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
                <img src="Assets/logo-black.png" alt="Logo" style="width:30%" class="w3-margin-top"> </div>
            <div class="w3-section w3-animate-opacity" id="main">
                <!-- view for rengøring-->
                <form class="w3-container w3-animate-opacity" action="includes/createrengoeringorder.inc.php"
                    method="post">
                    <div class="w3-center w3-margin-top"><a
                            class="w3-border w3-green w3-hover-blue w3-large w3-padding w3-round-large"
                            onClick="document.getElementById('rengøringmodal').style.display='none';document.getElementById('main').style.display='block'">
                            Tilbage til udvalg </a><br><br></div>

                    <h4 class="w3-center">Rengøring</h4>

                    <label>Kundenavn</label>
                    <input name="virksomhedsnavn" class="w3-border w3-input">

                    <label>Kontaktperson</label>
                    <input name="kontaktperson" class="w3-border w3-input">

                    <label>Sagsnummer</label>
                    <input name="sagsnr" class="w3-border w3-input">

                    <label>Beskrivelse</label><br>
                    <textarea name="beskrivelse" cols="85" rows="4"></textarea><br>

                    <label>Kvadratmeter</label>
                    <input name="kvadratmeter" class="w3-border w3-input">

                    <label>Type af Opgave</label>
                    <input name="typeafopgave" class="w3-border w3-input">

                    <label>Nuværende adresse</label>
                    <input name="opgaveadresse" class="w3-border w3-input">

                    <label> *Ikke obligatorisk* Hjemmeside </label>
                    <input name="website" class="w3-border w3-input">
                    <?php 
					if(isset($_SESSION['cvr'])){
						$cvr = $_SESSION['cvr'];
					}
					?>
                    <a href="#"
                        onClick="window.open('https://pbs-erhverv.dk/LS/?id=0&pbs=3054924174722e473d2f8dadb5b0b924&dbnr=<?php echo $uid;?>&cvr=<?php echo $cvr;?>&knmin=&knmax=','LSTilmeld','resizable=no,toolbar=no,scrollbars=no,menubar=no,location=no,status=yes,width=375,height=500');return false;">LeverandørService
                        online tilmelding</a>

                    <button class="w3-input w3-border w3-round w3-hover-border-black w3-section w3-green" type="submit"
                        name="createvikar-submit">Bestil</button>
                </form>
                <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                    <button onclick="document.getElementById('rengøringmodal').style.display='none'" type="button"
                        class="w3-button w3-red">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Erhverv modal -->
    <div class="w3-row"> </div>
    <div id="lejemålmodal" style="display: none" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:50%">
            <div class="w3-center"><br>
                <span onclick="document.getElementById('lejemålmodal').style.display='none'"
                    class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
                <img src="Assets/logo-black.png" alt="Logo" style="width:30%" class="w3-margin-top"> </div>
            <div class="w3-section w3-animate-opacity" id="main">
                <!-- view for erhvervlejemål-->
                <form class="w3-container w3-animate-opacity" action="includes/createerhvervslejemaalorder.inc.php"
                    method="post">
                    <div class="w3-center w3-margin-top"><a
                            class="w3-border w3-green w3-hover-blue w3-large w3-padding w3-round-large"
                            onClick="document.getElementById('lejemålmodal').style.display='none';document.getElementById('main').style.display='block'">
                            Tilbage til udvalg </a><br><br></div>

                    <h4 class="w3-center">Erhvervlejemål</h4>

                    <label>Navnet på virksomheden</label>
                    <input name="virksomhedsnavn" class="w3-border w3-input">

                    <label>Kontaktperson</label>
                    <input name="kontaktperson" class="w3-border w3-input">

                    <label>Sagsnummer</label>
                    <input name="sagsnr" class="w3-border w3-input">

                    <label>Beskrivelse</label><br>
                    <textarea name="beskrivelse" cols="85" rows="4"></textarea><br>

                    <label>Kvadratmeter</label>
                    <input name="kvadratmeter" class="w3-border w3-input">

                    <label>Hvor søger du lokaler?</label>
                    <input name="typeaflokale" class="w3-border w3-input">

                    <label>Budget</label>
                    <input name="budget" class="w3-border w3-input">

                    <label>Nuværende firma adresse</label>
                    <input name="firmaadresse" class="w3-border w3-input">

                    <label> *Ikke obligatorisk* Hjemmeside </label>
                    <input name="website" class="w3-border w3-input">
                    <?php 
					if(isset($_SESSION['cvr'])){
						$cvr = $_SESSION['cvr'];
					}
					?>
                    <a href="#"
                        onClick="window.open('https://pbs-erhverv.dk/LS/?id=0&pbs=3054924174722e473d2f8dadb5b0b924&dbnr=<?php echo $uid;?>&cvr=<?php echo $cvr;?>&knmin=&knmax=','LSTilmeld','resizable=no,toolbar=no,scrollbars=no,menubar=no,location=no,status=yes,width=375,height=500');return false;">LeverandørService
                        online tilmelding</a>


                    <button class="w3-input w3-border w3-round w3-hover-border-black w3-section w3-green" type="submit"
                        name="createvikar-submit">Bestil</button>
                </form>
                <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                    <button onclick="document.getElementById('lejemålmodal').style.display='none'" type="button"
                        class="w3-button w3-red">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Kørebog modal -->
    <div class="w3-row"> </div>
    <div id="kørebogmodal" style="display: none" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:50%">
            <div class="w3-center"><br>
                <span onclick="document.getElementById('kørebogmodal').style.display='none'"
                    class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
                <img src="Assets/logo-black.png" alt="Logo" style="width:30%" class="w3-margin-top"> </div>
            <div class="w3-section w3-animate-opacity" id="main">
                <!-- view for kørebog -->
                <form class="w3-container w3-animate-opacity" action="includes/createkoerebogorder.inc.php"
                    method="post">
                    <div class="w3-center w3-margin-top"><a
                            class="w3-border w3-green w3-hover-blue w3-large w3-padding w3-round-large"
                            onClick="document.getElementById('kørebogmodal').style.display='none';document.getElementById('main').style.display='block'">
                            Tilbage til udvalg </a><br><br></div>

                    <h4 class="w3-center">Kørebog</h4>

                    <label>Kontaktperson</label>
                    <input name="kontaktperson" class="w3-border w3-input">

                    <label>Sagsnummer</label>
                    <input name="sagsnr" class="w3-border w3-input">

                    <label>Beskrivelse</label><br>
                    <textarea name="beskrivelse" cols="85" rows="4"></textarea><br>

                    <label>Antal køretøjer</label>
                    <input name="antal" class="w3-border w3-input">

                    <label>Book et uforpligtende møde</label>
                    <input name="møde" type="datetime-local" class="w3-border w3-input">

                    <label>Firma adresse</label>
                    <input name="firmaadresse" class="w3-border w3-input">

                    <label> *Ikke obligatorisk* Hjemmeside </label>
                    <input name="website" class="w3-border w3-input">
                    <?php 
					if(isset($_SESSION['cvr'])){
						$cvr = $_SESSION['cvr'];
					}
					?>
                    <a href="#"
                        onClick="window.open('https://pbs-erhverv.dk/LS/?id=0&pbs=3054924174722e473d2f8dadb5b0b924&dbnr=<?php echo $uid;?>&cvr=<?php echo $cvr;?>&knmin=&knmax=','LSTilmeld','resizable=no,toolbar=no,scrollbars=no,menubar=no,location=no,status=yes,width=375,height=500');return false;">LeverandørService
                        online tilmelding</a>

                    <button class="w3-input w3-border w3-round w3-hover-border-black w3-section w3-green" type="submit"
                        name="createvikar-submit">Bestil</button>
                </form>
                <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                    <button onclick="document.getElementById('kørebogmodal').style.display='none'" type="button"
                        class="w3-button w3-red">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Kaffeløsning modal -->
    <div class="w3-row"> </div>
    <div id="kaffeløsningmodal" style="display: none" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:50%">
            <div class="w3-center"><br>
                <span onclick="document.getElementById('kaffeløsningmodal').style.display='none'"
                    class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
                <img src="Assets/logo-black.png" alt="Logo" style="width:30%" class="w3-margin-top"> </div>
            <div class="w3-section w3-animate-opacity" id="main">
                <!-- view for kaffeløsnig -->
                <form class="w3-container w3-animate-opacity" action="includes/createkaffeloesningorder.inc.php"
                    method="post">
                    <div class="w3-center w3-margin-top"><a
                            class="w3-border w3-green w3-hover-blue w3-large w3-padding w3-round-large"
                            onClick="document.getElementById('kaffeløsningmodal').style.display='none';document.getElementById('main').style.display='block'">
                            Tilbage til udvalg </a><br><br></div>

                    <h4 class="w3-center">Kaffe Løsning</h4>

                    <label>Sags Nr.</label>
                    <input required name="sagsnr" class="w3-border w3-input">

                    <label>Nuværende løsning</label>
                    <select required class="w3-section w3-input w3-border w3-hover-border-blue" name="currentsolution">
                        <option style="display: none" disabled selected value class="w3-bar-item w3-button">Vælg
                            nuværende løsning</option>
                        <option class="w3-bar-item w3-button" value="købt">Købt</option>
                        <option class="w3-bar-item w3-button" value="leaset">Leaset</option>
                        <option class="w3-bar-item w3-button" value="lejet ">Lejet</option>
                        <option class="w3-bar-item w3-button" value="kopaftale">kopaftale</option>
                    </select>

                    <label>Hvad giver de pr. Mdr?</label>
                    <textarea name="amountprmonth" cols="100" rows="4"></textarea><br>

                    <label>Hvormange mdr. er der tilbage på deres nuværende aftale?</label><br>
                    <textarea name="monthleft" cols="100" rows="4"></textarea><br>

                    <label>Hvor meget kaffe og øvrige ingredienser (kakao, granulat) køber de pr. Mdr.? </label>
                    <textarea name="amountofcoffeprmonth" cols="100" rows="4"></textarea><br>

                    <label>Hvad er deres pris pr. kg. Kaffe og hvad giver de for de evt. for øvrige ingredienser
                    </label>
                    <textarea name="priceprkgcoffe" cols="100" rows="4"></textarea><br>

                    <label>Hvilken fremtidig løsning kunne du være interesseret i?</label>
                    <select required class="w3-section w3-input w3-border w3-hover-border-blue" name="futuresolution">
                        <option style="display: none" disabled selected value class="w3-bar-item w3-button">Vælg
                            fremtidig løsning</option>
                        <option class="w3-bar-item w3-button" value="hele bønner">Hele bønner</option>
                        <option class="w3-bar-item w3-button" value="formalet kaffe">Formalet kaffe</option>
                        <option class="w3-bar-item w3-button" value="friskmælk ">Friskmælk</option>
                        <option class="w3-bar-item w3-button" value="mælke granulat">mælke granulat</option>
                    </select>

                    <?php 
					if(isset($_SESSION['cvr'])){
						$cvr = $_SESSION['cvr'];
					}
					?>
                    <a href="#"
                        onClick="window.open('https://pbs-erhverv.dk/LS/?id=0&pbs=3054924174722e473d2f8dadb5b0b924&dbnr=<?php echo $uid;?>&cvr=<?php echo $cvr;?>&knmin=&knmax=','LSTilmeld','resizable=no,toolbar=no,scrollbars=no,menubar=no,location=no,status=yes,width=375,height=500');return false;">LeverandørService
                        online tilmelding</a>

                    <button class="w3-input w3-border w3-round w3-hover-border-black w3-section w3-green" type="submit"
                        name="createvikar-submit">Bestil</button>
                </form>
                <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                    <button onclick="document.getElementById('kørebogmodal').style.display='none'" type="button"
                        class="w3-button w3-red">Cancel</button>
                </div>
            </div>
        </div>
    </div>