<!-- login Modal Login/Logout -->
    <div id="login" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom w3-round" style="max-width:600px">
            <div class="w3-center"><br>
                <span onclick="document.getElementById('login').style.display='none'"
                    class="w3-button w3-xlarge w3-transparent w3-display-topright w3-round" title="Close Modal">×</span>
                <img src="Assets/logo-black.png" alt="Logo" style="width:30%" class="w3-margin-top"> </div>

                <form class="w3-container" action="includes/login.inc.php" method="POST">
                <div class="w3-section">
                    <label><b>Email</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter Email" name="email" required>
                    <label><b>Password</b></label>  
                    <input class="w3-input w3-border" type="password" placeholder="Enter Password" name="pwd" required>
                    <button class="w3-button w3-block w3-green w3-section w3-padding" name="login-submit" type="submit">Login</button>
                    <input class="w3-check w3-margin-top" type="checkbox" id="remember_me"> <label for="remember_me">Remember me</label> </div>
            </form>
          <div class="w3-container w3-border-top w3-padding-16 w3-light-grey w3-round">
                <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
                <button onclick="document.getElementById('login').style.display='none'" type="button"
                    class="btn btn-danger rounded-0">Cancel</button>
            </div>
        </div>
    </div>