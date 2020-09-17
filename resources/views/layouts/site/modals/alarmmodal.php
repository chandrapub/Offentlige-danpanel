<div id="alarmmodal" style="display: none" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:50%">
            <div class="w3-center"><br>
                <span onclick="document.getElementById('alarmmodal').style.display='none'"
                    class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
                <img src="Assets/logo-black.png" alt="Logo" style="width:30%" class="w3-margin-top"> </div>
            <div class="w3-section w3-animate-opacity" id="main">
                <!-- view for alarm og overvågning -->
                <form class="w3-container w3-animate-opacity" action="includes/createalarmovervaagningorder.inc.php"
                    method="post">
                    <div class="w3-center w3-margin-top"><a
                            class="w3-border w3-green w3-hover-blue w3-large w3-padding w3-round-large"
                            onClick="document.getElementById('alarmmodal').style.display='none';document.getElementById('main').style.display='block'">
                            Tilbage til udvalg </a><br><br></div>

                    <h4 class="w3-center">Alarm og Overågning</h4>

                    <label>Kontaktperson</label>
                    <input name="kontaktperson" class="w3-border w3-input">

                    <label>Sikkerhedscheck</label>
                    <input name="sikkerhedscheck" type="datetime-local" class="w3-input w3-border w3-hover-border-black"
                        type="datetime" style="border: 0px">

                    <label>Sagsnummer</label>
                    <input name="sagsnr" class="w3-border w3-input">

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
                    <button onclick="document.getElementById('alarmmodal').style.display='none'" type="button"
                        class="w3-button w3-red">Cancel</button>
                </div>
            </div>
        </div>
    </div>