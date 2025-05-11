<footer>
        <div class="Fcolumn"><br>
            <p>775 S. FRONT STREET
                <br>
                PHILADELPHIA PA 19147
                <br>
                215-271-9300</p>
        </div>
        <div class="Fcolumn">
            <br>
            <p><b>Store Hours</b></p>
            <div class="Fcolumn2">
                    <div class="left">
                <p><i>Mon. - Thurs.
                <br>
                Fri.
                <br>
                Sat. - Sun.
                    </i></p></div>
                    <div class="right">
                <br>
                <p><i>4pm - 12am
                <br>
                11am - 12am
                <br>
                9am - 12am
                    </i></p></div>
            </div>
        </div>
        
        <div class="Fcolumn">
            <p>Follow us on social media!</p><br>
                <a href="https://www.facebook.com/CatahoulaPhilly/" target="_blank"><img src="images/facebook.png" height=69px></a>
            
                <a href="https://twitter.com/catahoulaphilly" target="_blank"><img src="images/twitter.png" height=69px></a>
            
                <a href="https://www.instagram.com/catahoula_restaurant/" target="_blank"><img src="images/instagram.png" height=69px></a>
            
                <a href="https://www.pinterest.com/catahoulap/" target="_blank"><img src="images/pinterest.png" height=69px></a>
        </div>
        <div class="edu">
        <p>The images and content used on this website are for educational purpose only.</p>
        <!-- <p>Original site: <a href="http://catahoulaphilly.com/">http://catahoulaphilly.com/</a></p></div> -->
        <p>Original site (Archive): <a href="https://web.archive.org/web/20210410144424/http://catahoulaphilly.com/" target="_blank">https://web.archive.org/web/20210410144424/http://catahoulaphilly.com/</a></p></div>
    </footer>

    <!--According menu and javascript stuff-->
    <div class="button_container" id="toggle"><span class="top"></span><span class="middle"></span><span class="bottom"></span></div>
    <div class="overlay" id="overlay">
      <nav class="overlay-menu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="menus.php">Menus</a></li>
          <li><a href="specials.php">Specials</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
    </div>
    <!--end overlay-->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>$('#toggle').click(function() {
   $(this).toggleClass('active');
   $('#overlay').toggleClass('open');
  });
    </script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
    /* Pre-document load */ 
	/* Preload */ 
	$(".accordion > .module > .body").hide(); 
	$(".accordion > .module:first-child > .body").show(); 

/* Post-document load */ 
	$(document).ready(function(){ 
		/* Events */ 
			$(".accordion > .module > .head").click(function(event){ 
				// $(".accordion > .module").toggleClass("active"); 
				$(".accordion > .module > .head").not(this).each(function(){
					$(this).parent( ".module" ).removeClass("active"); 
					$(this).siblings(".body").slideUp("fast"); 
				}); 
				$(this).parent( ".module" ).toggleClass("active");
				$(this).siblings(".body").slideToggle("fast"); 
			}); 
	}); 
    </script> 