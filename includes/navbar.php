<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="javascript:void(0)"><img src='./static/images/logo.jpg' width='50' height='50' alt=''>
        Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="./dashboard.php">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="./tracking.php">Bursary Tracking(status)</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="./applications.php">Applications</a>
            </li>

            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Careers
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Jobs</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Internships</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Attachments</a>


                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Updates(<span>0</span>)</a>
            </li>
            <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Profile
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="javascript:void(0)"><?php echo $fname .' '.$lname; ?></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="./profile.php">Personal Details</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="./education.php">Educational Details</a>
                    <div class=" dropdown-divider">
                    </div>

                    <a class="dropdown-item" href="#">Uploads</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Logout</a>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Contact Us</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link text-danger" href="./logout.php" style="font-size: 18px;">Logout</a>
            </li>
        </ul>

    </div>
</nav>