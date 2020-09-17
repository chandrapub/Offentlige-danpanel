
<style>
#book_meeting{
opacity:;
top:250;
right:50;
display:none;
position:fixed;
/* background-color:#313131; */
overflow:auto;
border:1px black;
}

</style>

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