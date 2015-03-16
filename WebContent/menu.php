<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php">FTS</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li <?php echo ($page == 'home') ? 'class="active"' : '';?>><a href="home.php">Home</a></li>
            <li <?php echo ($page == 'services') ? 'class="active"' : '';?>><a href="services.php">Services</a></li>
            <li <?php echo ($page == 'rates') ? 'class="active"' : '';?>><a href="rates.php">Rates</a></li>
            <li <?php echo ($page == 'contact') ? 'class="active"' : '';?>><a href="contact.php">Contact</a></li>
            <li <?php echo ($page == 'about') ? 'class="active"' : '';?>><a href="about.php">About</a></li>
            <li <?php echo ($page == 'portfolio') ? 'class="active"' : '';?>><a href="portfolio.php">Portfolio</a></li>
        </ul>
    </div>
  </div>
</nav>
