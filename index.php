

    <!-- Navigation -->
    <?php 
        include "inc/top-part.inc.php";
    	include "inc/nav.inc";
    ?>

    <!-- <nav class="main-menu">
        <ul>
            <li><a href="#first">Jill</a></li>
            <li><a href="#second">Platform</a></li>
            <li><a href="#third">Colophon</a></li>
        </ul>
    </nav> -->


    <!-- Top Section -->
    <section id="first">
        <div class="container">

        	<div class="z-area1">
            	<h1><a href="#first"><img class="logo" src="images/logo.png" alt="logo"></a></h1>
            </div>
            <div class="z-area2">
            	<a href="#platform">Read More About Stein's Platform</a>
            </div>
            <div class="background-photo">
                <img src="images/background.jpg" alt="jill">
            </div>
            <div class="z-area3">
                <p>Support Jill Stein's people-powered campaign! 
                Join with thousands of your neighbors to build the momentum for real change. Support Jill Stein's people-powered campaign today! Any amount you give will go to support the candidate who puts people, planet, and peace over profit—every time.
                </p>
            </div>
            <div class="z-area4">
                <a href="http://www.jill2016.com/donate">Donate Now!</a>
            </div>



            <div class="content">

                

            </div><!-- .content -->

       </div><!-- .container -->

    </section>

    <!-- Second Section -->
    <section id="second">
        <div class="container">

            <div class="f-area1">
                <h1><a href="#second"><img class="logo" src="images/logo.png" alt="logo"></a></h1>
            </div> <!-- f-area1 -->

            <div class="f-area2">
                <nav class="platform-menu">
                    <ul>
                        <li><a href="#climate">Climate</a></li>
                        <li><a href="#poverty">Poverty</a></li>
                        <li><a href="#health">Health</a></li>
                    </ul>
                </nav>
            </div> <!-- f-area2 -->
                <h2>Platform For the 2016 Presidentital Campaign</h2>
    

            <div class="content">
                <div class="f-area3">
                    
                    <div class="platform-idea">

                        <h3 id="climate">Climate Action: Protecting Mother Earth and Humanity</h3>

                        <img class="thumb" src="images/earth.png" alt="earth">


                        <p>Enact an emergency Green New Deal to turn the tide on climate change, revive the economy and make wars for oil obsolete. Initiate a WWII-scale national mobilization to halt climate change, the greatest threat to humanity in our history.
                        </p>
                
                    </div> <!--platform-idea -->

                    <div class="platform-idea">

                        <h3 id="poverty">End Poverty</h3>

                        <img class="thumb" src="images/hands.jpg" alt="hands">

                            <p>
                                Guarantee economic human rights, including access to food, water, housing, and utilities, with effective anti-poverty programs to ensure every American a life of dignity. Establish the right to a living wage job.Reform public assistance to be a true safety net that empowers participants and provides a decent standard of living.
                            </p>

                    </div> <!--platform-idea -->

                    <div class="platform-idea">

                        <h3 id="health">Health Care as a Right</h3>

                        <img class="thumb" src="images/healthcare.png" alt="healthcare">

                            <p>
                                Establish an improved “Medicare for All” single-payer public health program to provide everyone with quality health care, at huge savings by eliminating the $400 billion annually spent on  the paperwork and bureaucracy of health insurance.</p>

                    </div> <!--platform-idea -->

                </div><!--f-area3 -->

                <div class="f-area4">
                    <img src="images/jill-point.jpg" alt="Jill Stein pointing">
                    <p> Jill Stein points in the air like she just don't care. Alternatively, she might be about to drop the hottest mixtape of all time</p>
                </div> <!-- f-area4 -->

            </div><!-- .content -->

       </div><!-- .container -->

    </section>

 <!-- Third Section -->
    <section id="third">
        <div class="container">

            <h1>Colophon</h1>

            

                <div class="column1">
                    <div class="card">
                        <img src="images/alizah.jpg" alt="alizah">
                        <h2>Alizah</h2>
                        <p>Gathered content, worked on layout, made design and aesthetic decisions.</p>
                    </div>
                </div>

                <div class="column2">
                    <div class="card">
                        <img src="images/fus.jpg" alt="jacob">
                        <h2>Jacob</h2>
                        
                            <p>Chose topic, gathered content, worked on layout, was generally annoying.<p>
                        
                    </div>
                </div>
                <div class="sources">
                    <p>The majority of the content for this website was taken from <a href="http://jill2016.com">Jill Stein's Campaign Website</a></p>

                </div>
            

       </div><!-- .container -->

    </section>

<!-- Use the following JavaScript code to do the smooth-scroll thing on the internal links -->
<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>
// From:    Smooth Scrolling by CHRIS COYIER, updated JANUARY 31, 2016
//          https://css-tricks.com/snippets/jquery/smooth-scrolling
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 250);
        return false;
      }
    }
  });
});
</script>

</body>

</html>
