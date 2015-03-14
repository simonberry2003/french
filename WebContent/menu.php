<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="home.php">FTS</a>
        </div>

        <div class="collapse navbar-collapse"
            id="bs-example-navbar-collapse-1">
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
