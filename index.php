    <?php 
        $pageTitle = "Homepage";
        include "inc/top-part.inc.php";
    ?>
    <link rel="stylesheet" href="css/long-scrolly.css">
    <?php 
        include "inc/nav.inc.php";
    ?>


    <!-- Top Section -->
    <section id="intro">
       <div class = "container">
        	<div class="z-area1">
            	<h1><a href="#intro"><img class="logo" src="images/logo.png" alt="logo"></a></h1>
            </div>

            <div class="z-area2">
            	<a href="#accomplishments">Read More About Alizah's Accomplishments</a>
            </div>

            <div class="background-photo">
                <img src="images/sun holding.jpg" alt="Squishing the sun like I squish a challenge">
            </div>

            <div class="z-area3">
                <p>Alizah is a member of the Class of 2017 at the University of Rochester in Western New York. She is completing a Bachelors of Art in Psychology with clusters in Film and Computer Science. She is also a player on the Women's Ultimate Frisbee Team where she additionally serves as the team's business manager and runs the social media accounts.
                </p>
            </div>

            <div class="z-area4">
                <a href="contact-form.php">Contact Now!</a>
            </div>
        </div> <!---container-->    
    </section>

    <!-- Second Section -->
    <section id="accomplishments">
        <div class = "container">
            <div class="f-area1">
                <h1><a href="#accomplishments"><img class="logo" src="images/logo.png" alt="logo"></a></h1>
            </div> <!-- f-area1 -->

            <!-- <div class="f-area2">
                <nav class="platform-menu">
                    <ul>
                        <li><a href="#psychology">Psychology</a></li>
                        <li><a href="#frisbee">Ultimate Frisbee</a></li>
                        <li><a href="#compsci">Computer Science</a></li>
                    </ul>
                </nav>
            </div> --> <!-- f-area2 -->
                <h2>Look at the neat things I've done!</h2>
    

            <div class="content">
                <div class="f-area3">
                    
                    <div class="platform-idea">

                        <h3 id="psychology">Psychology</h3>

                        <img class="thumb" src="images/professional.png" alt="I'm wearing a blazer please take me seriously">

                        <ul>
                            <li>Maintains a high GPA in her classes for the major</li>
                            <li>Serves as a Research Assitant for a professor on campus</li>
                            <li>Inducted into Psi Chi (International Honors Society for Psychology)</li>
                            <li>Served as a Teaching Assistant for an introductory level Psychology course</li>
                            <li>Certified to conduct research on humans in the Minimal Risk category</li>
                            <li>Can read your mind</li>
                        </ul>
        
                
                    </div> <!--platform-idea -->

                    <div class="platform-idea">

                        <h3 id="frisbee">Ultimate Frisbee</h3>

                        <img class="thumb" src="images/frisbee.jpg" alt="Look at me doing sports I'm so cool">

                            <ul>
                                <li>Has been playing competitively since 2013</li>
                                <li>Position: Handler</li>
                                <li>College Team: University of Rochester EZs</li>
                                <li>Club Team: Providence HOPE</li>
                                <li>Coached a coed youth team for 2 summers</li>
                                <li>Serves as Business Manager for the EZs</li>
                                <li>Maintains social media accounts for the EZs</li>
                                <li>Swears it's a real sport</li>
                            </ul>

                    </div> <!--platform-idea -->

                    <div class="platform-idea">

                        <h3 id="compsci">Computer Science</h3>

                        <img class="thumb" src="images/healthcare.png" alt="healthcare">

                        <ul>
                            <li>Completed a Cluster in Computer Science at the University of Rochester</li>
                            <li>Main area of focus in Web Design and Development</li>
                            <li>Has taken CSC 170 and 174</li>
                            <li>Knowledge in coding HTML, CSS, PHP, JavaScript, and mySQL</li>
                            <li>For examples of websites, check out her <a href="portfolio.php">portfolio</a></li>
                        </ul>

                    </div> <!--platform-idea -->

                </div><!--f-area3 -->

                <div class="f-area4">
                    <img src="images/hiking.jpg" alt="Hiking in Bohemian Switzerland National Park (Can you tell I studied abroad?)">
                    <ul class="hiking">
                        <li>Strengths: Hiking mountains in the Czech Republic</li>
                        <li>Weaknesses: Not squniting when the sun is in my face</li>
                    </ul>
                </div> <!-- f-area4 -->

            </div><!-- .content -->
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

<?php
include 'inc/footer.inc';
?>