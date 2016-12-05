<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  	<div class="container">
	    <div class="navbar-header">
      		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        		<span class="sr-only">Toggle navigation</span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
      		</button>
      		<a class="navbar-brand" href="home.php">French Translation Services</a>
    	</div>
		<div id="navbar" class="navbar-collapse collapse">
        	<ul class="nav navbar-nav navbar-right">
            	<li <?php echo ($page == 'about') ? 'class="active"' : '';?>><a href="about.php">About</a></li>
	            <li <?php echo ($page == 'services') ? 'class="active"' : '';?>><a href="services.php">Services</a></li>
	            <li <?php echo ($page == 'translators') ? 'class="active"' : '';?>><a href="translators.php">Translators</a></li>
            	<li <?php echo ($page == 'rates') ? 'class="active"' : '';?>><a href="rates.php">Rates</a></li>
            	<li <?php echo ($page == 'contact') ? 'class="active"' : '';?>><a href="contact.php">Contact</a></li>
            	<li <?php echo ($page == 'portfolio') ? 'class="active"' : '';?>><a href="portfolio.php">Portfolio</a></li>
        	</ul>
    	</div>
  	</div>
</nav>

<!-- Header Carousel -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url('images/image1.jpg');"></div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>

<!-- Script to Activate the Carousel -->
<script>
$('.carousel').carousel({
    interval: 5000 //changes the speed
})
</script>
