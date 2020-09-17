

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
                    <input type="text" class="w3-input w3-border w3-hover-border-black w3-section" name="name" placeholder="Navn">
                    <input type="text" class="w3-input w3-border w3-hover-border-black w3-section" name="email" placeholder="E-mail">
                    <input type="text" class="w3-input w3-border w3-hover-border-black w3-section" name="phonenr" placeholder="Tlf Nr.(max 8 tegn)">

                    <input type="text" id="ean" class="w3-input w3-border w3-hover-border-black w3-section" name="ean" placeholder="EAN Nr" style="display: none">
                    <input type="text" id="cvr" class="w3-input w3-border w3-hover-border-black w3-section" name="cvr" placeholder="CVR Nr" style="display: none">
                    <input type="date" id="fødselsdato" class="w3-input w3-border w3-hover-border-black w3-section" name="fødselsdato" placeholder="yyyy-mm-dd" style="display: none">

                    <input type="password" class="w3-input w3-border w3-hover-border-black w3-section" name="pwd"
                    placeholder="Password">
                    <input type="password" class="w3-input w3-border w3-hover-border-black w3-section" name="pwd-repeat"
                    placeholder="Gentag password">

                    <label>Vil du have nyhedsbreve fra Danpanel?</label>
                    <input type="checkbox" checked value="ja" name="nyhedsbrev">

                    <a href="Vilkår . DP.pdf" target="_blank" class="w3-right">Læs om Vilkår</a><br><br>
                    <a href="Cookie-og-privatlivspolitik.pdf" target="_blank" class="w3-right">Læs om
                        Cookies og
                    Privatpolitik</a><br>

                    <button type="submit" class="btn btn-success rounded-0 mb-3">Opret Bruger</button>
                </form>

                <div class="w3-container w3-border-top w3-padding-16 w3-light-grey w3-round">
                    <button onclick="document.getElementById('signup').style.display='none'" type="button"
                    class="btn btn-danger rounded-0">Cancel</button>
                </div>
            </div>
        </div>
    </div>