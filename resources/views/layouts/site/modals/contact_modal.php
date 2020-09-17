<!-- id02 Modal kontakt os -->
    <div id="id02" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
            <div class="w3-center"><br>
                <span onclick="document.getElementById('id02').style.display='none'"
                    class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span> <img
                    src="Assets/logo-black.png" alt="Logo" style="width:30%" class="w3-margin-top"> </div>
            <div class="w3-center w3-padding-64" id="contact"> <span
                    class="w3-xlarge w3-bottombar w3-border-green w3-padding-16">Kontakt Os</span> </div>
            <form class="w3-container" action="includes/contactform.inc.php" method="post">
                <div class="w3-section">
                    <label>Navn</label>
                    <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Name"
                        required>
                </div>
                <div class="w3-section">
                    <label>Email</label>
                    <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Email"
                        required>
                </div>
                <div class="w3-section">
                    <label>Tlf Nr.(max 8 tegn)</label>
                    <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Tlf"
                        required>
                </div>
                <div class="w3-section">
                    <label>Emne</label>
                    <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="Subject" required>
                </div>
                <div class="w3-section">
                    <label>Besked</label>
                    <textarea class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="Message"
                        required></textarea>
                </div>
                <button type="submit" name="contact-submit" class="w3-button w3-green">Send</button>
            </form>
            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                <button onclick="document.getElementById('id02').style.display='none'" type="button"
                    class="w3-button w3-red">Cancel</button>
            </div>
        </div>
    </div>