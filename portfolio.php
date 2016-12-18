<?php 
	$pageTitle = "Portfolio";
?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	<title>Portfolio</title>
</head>

<body>
	<div class="container">

<h1>Portfolio</h1>

<a class="cd-nav-trigger cd-text-replace" href="#primary-nav">Menu<span aria-hidden="true" class="cd-icon"></span></a>
	
	<div class="cd-projects-container">
		<ul class="cd-projects-previews">
			<li>
				<a href="#0">
					<div class="cd-project-title">
						<h2>Lab 06</h2>
						<p>New York City</p>
					</div>
				</a>
			</li>

			<li>
				<a href="#0">
					<div class="cd-project-title">
						<h2>Lab 09</h2>
						<p>Jill Stein</p>
					</div>
				</a>
			</li>
			
			<li>
				<a href="#0">
					<div class="cd-project-title">
						<h2>Project 01</h2>
						<p>Sports</p>
					</div>
				</a>
			</li>

			<li>
				<a href="#0">
					<div class="cd-project-title">
						<h2>Project 02</h2>
						<p>Computers</p>
					</div>
				</a>
			</li>
			
		</ul> <!-- .cd-projects-previews -->

		<ul class="cd-projects">
			<li>
				<div class="preview-image">
					<div class="cd-project-title">
						<h2>Lab 06</h2>
						<p>NYC is a place and this lab features some information on it.</p>
					</div> 
				</div>

				<div class="cd-project-info">
					<p>
						The purpose of this lab was to test our use of SMACCS. More importantly, look at these neat columns! I can make columns with CSS. Pretty impressive, I know. <a href="urcsc170.org/abarker/lab06/index.php">Check it out.</a>
					</p>
					<img src="images/lab06.png" alt="screenshot of lab 6">
				</div> <!-- .cd-project-info -->
			</li>

			<li>
				<div class="preview-image">
					<div class="cd-project-title">
						<h2>Lab 09</h2>
						<p>Jill Stein isn't our president elect, but here's why her website said she should have been.</p>
					</div> 
				</div>

				<div class="cd-project-info">
					<p>
						In this lab we showed our abilities to make a long and scrolly homepage, as well as show our ability to use the F and Z patterns of website design. Turns out those are scientifically proven to be the best or something. Look at how the colors match the campgain colors. That's some good design. Also if you look at Jill Stein's actual campaign website, it's pretty terrible. This one is probably better. <a href="urcsc170.org/abarker/lab09/index.html">Check it out.</a>
					</p>
					</p>
					<img src="images/lab09.png" alt="screenshot of lab 9">
				</div> <!-- .cd-project-info -->
			</li>

			<li>
				<div class="preview-image">
					<div class="cd-project-title">
						<h2>Project 01</h2>
						<p>Sports are fun! Let's learn about them.</p>
					</div> 
				</div>

				<div class="cd-project-info">
					<p>
						This was a group project.  We learned how to do web deisgn with a team. It sure was an interesting time.  Also this is how I learned how to use GitHub. It's a pretty neat tool.  The website has a lot of features including use and customization of the CSS framework Materialize. Also purple. <a href="urcsc170.org/abarker/project01/index.php">Check it out.</a>
					</p>
					</p>
					<img src="images/project01.png" alt="screenshot of project 1">
				</div> <!-- .cd-project-info -->
			</li>


			<li>
				<div class="preview-image">
					<div class="cd-project-title">
						<h2>Project 02</h2>
						<p>We redid someone else's website.</p>
					</div> 
				</div>

				<div class="cd-project-info">
					<p>
						This was also a group project.  We redid a different group in the class' website to make it better. They told us what they wanted fixed and we added some fixes of our own. I think we were successful in that endeavor. <a href="urcsc170.org/abarker/project02/index.php">Check it out.</a>
					</p>
					</p>
					<img src="images/project02.png" alt="screenshot of project 2">
				</div> <!-- .cd-project-info -->
			</li>	
		</ul> <!-- .cd-projects -->

		<button class="scroll cd-text-replace">Scroll</button>
	</div> <!-- .cd-project-container -->

	<nav class="cd-primary-nav" id="primary-nav">
		<ul>
			<li class="cd-label">Navigation</li>
			<li <?php if ($pageTitle == 'Homepage') echo 'class="active"'; ?>><a href="index.php">Home</a></li>
			<li <?php if ($pageTitle == 'Portfolio') echo 'class="active"'; ?>><a href="portfolio.php">Portfolio</a></li>
			<li <?php if ($pageTitle == 'Contact Form') echo 'class="active"'; ?>><a href="contact-form.php">Contact</a></li>
		</ul>
	</nav> <!-- .cd-primary-nav -->


<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->

</body>
<?php 
	include "inc/footer.inc";
?>

