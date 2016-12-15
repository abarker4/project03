<nav>
	<ul>
		<li <?php if ($pageTitle == 'Homepage') echo 'class="active"'; ?>><a href="index.php">Home</a></li>
		<li <?php if ($pageTitle == 'Portfolio') echo 'class="active"'; ?>><a href="portfolio.php">Portfolio</a></li>
		<li <?php if ($pageTitle == 'Contact Form') echo 'class="active"'; ?>><a href="contact-form.php">Contact</a></li>
	</ul>
</nav>