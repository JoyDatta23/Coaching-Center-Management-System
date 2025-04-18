<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="image/4.logo.PNG" alt="Image" width="130" height="100">
            
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNa" aria-controls="navbarNa" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNa">
            <ul class="navbar-nav">
                <li class="nav-item">
                   <p1 style="color:white">WELCOME &nbsp; <?php echo $username; ?> &nbsp;</p1><!-- ekhane user name thakbe -->
                </li>


            </ul>
            <ul class="navbar-nav mx-auto"> <!-- Center align the links -->
                <li class="nav-item <?php if ($currentPage == 'teacherview') echo 'active'; ?>">
                    <a class="nav-link" href='teacherview.php'>Home</a>
                </li>
                <li class="nav-item <?php if ($currentPage == 'schedule') echo 'active'; ?>">
                    <a class="nav-link" href="schedule.php">Schedule</a>
                </li>
                <li class="nav-item <?php if ($currentPage == 'coursetrack') echo 'active'; ?>">
                    <a class="nav-link" href="coursetrack.php">Course Track</a>
                </li>
                <li class="nav-item  <?php if ($currentPage == 'teachersettings') echo 'active'; ?> ">
                    <a class="nav-link" href="teachersettings.php">Settings</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Logout</a>
                </li>
            </ul>
        </div>
</nav>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
    <ul class="navbar-nav mx-auto">
        <li class="nav-item">
            <a class="nav-link" href="https://www.facebook.com">
                <i class="fab fa-facebook-f"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://www.youtube.com">
                <i class="fab fa-youtube"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="https://www.twitter.com">
                <i class="fab fa-twitter"></i>
            </a>
        </li>
    </ul>
</nav>