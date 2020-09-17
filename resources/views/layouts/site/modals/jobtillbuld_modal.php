  <!-- Jobtilbud modal -->
<div id="jobtilbudmodal" style="display: none" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:50%">
            <div class="w3-center"><br>
                <span onclick="document.getElementById('jobtilbudmodal').style.display='none'"
                    class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span> <img
                    src="Assets/logo-black.png" alt="Logo" style="width:30%" class="w3-margin-top"> </div>
            <div class="w3-section w3-animate-opacity" id="main">
                <!-- view for Jobtilbud -->
                <form class="w3-container w3-animate-opacity" action="includes/createjobtilbudorder.inc.php"
                    method="post">
                    <div class="w3-center w3-margin-top"><a
                            class="w3-border w3-green w3-hover-blue w3-large w3-padding w3-round-large"
                            onClick="document.getElementById('jobtilbudmodal').style.display='none';document.getElementById('main').style.display='block'">
                            Tilbage til udvalg </a><br><br></div>

                    <h4 class="w3-center">Jobtilbud</h4>

                    <label>Sagsnummer</label>
                    <input required name="sagsnr" class="w3-border w3-input">

                    <label>Adresse</label>
                    <input required name="adresse" class="w3-border w3-input">

                    <label>Stilling</label>
                    <input required name="stilling" class="w3-border w3-input">

                    <label>Book et møde</label>
                    <input type="datetime-local" name="booketmoede" class="w3-border w3-input">

                    <button class="w3-input w3-border w3-round w3-hover-border-black w3-section w3-green" type="submit"
                        name="createvikar-submit">Bestil</button>
                </form>

                <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                    <button onclick="document.getElementById('jobtilbudmodal').style.display='none'" type="button"
                        class="w3-button w3-red">Cancel</button>
                </div>
            </div>
        </div>
    </div>