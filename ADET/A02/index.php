<?php

$page = "home";

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case "home":
            $page = "home";
            break;
        case "trainers":
            $page = "trainers";
            break;
        case "highLights":
            $page = "highLights";
            break;
        default:
            header("Location: ?page=home");
            break;
    }
} else {
    header("Location: ?page=home");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EveryWhere Fitness</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/Logo.png">
</head>

<style>
    .hover-zoom {
        transition: transform 0.3s ease-in-out;
    }

    .hover-zoom:hover {
        transform: scale(1.05);
    }

    body {
        font-family: 'Poppins', sans-serif;

    }

    .vignette-img {
        position: relative;
        display: block;
        width: 100%;
        height: auto;
        box-shadow: inset 0 0 100px 30px rgba(0, 0, 0, 0.6);
    }

    .nav-item .btn1 {
        position: relative;
        text-decoration: none;
    }

    .nav-item .btn1::after {
        content: '';
        position: absolute;
        left: 50%;
        bottom: 0;
        transform: translateX(-50%);
        width: 0%;
        height: 3px;
        background-color: #F57C00;
        transition: width 0.3s ease;
    }

    .nav-item .btn1:hover::after {
        width: 60%;
        /* or 100% if you want a full underline */
    }

    #navbar {
        transition: top 0.3s;
    }
</style>



<body>
    <nav class="navbar navbar-expand-lg" style="background-color:rgb(255, 255, 255);">
        <div class="container">
            <a class="navbar-brand fw-bold" style="color: #F57C00">EVERYWHERE FITNESS</a>

            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarContent">
                <div class="d-flex justify-content-lg-end w-100 align-items-center">
                    <ul class="navbar-nav flex-lg-row text-center mx-auto">
                        <li class="nav-item">
                            <a href="?page=home" type="button" class="btn1 px-5 text-dark fw-bolder">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="?page=trainers" type="button" class="btn1 px-5 text-dark fw-bolder">Trainers</a>
                        </li>
                        <li class="nav-item">
                            <a href="?page=highLights" type="button"
                                class="btn1 px-5 text-dark fw-bolder">Highlights</a>
                        </li>
                    </ul>

                    <div class="ms-lg-3 mt-3 me-5 mt-lg-0">
                        <button type="button" class="btn me-3 text-white border-0 rounded-0"
                            style="background-color: #F57C00">Sign In</button>
                        <button type="button" class="btn text-white border-0 rounded-0"
                            style="background-color: #F57C00">Try for free</button>
                    </div>
                </div>
            </div>
        </div>
    </nav>


    <?php include("shared/". $page . ".php"); ?>


    <footer class="container-fluid py-3" style="background-color:rgb(43, 42, 42);">
        <div class="row container mx-auto">
            <div class="col-6 col-md-2">
                <h5 class="fw-bolder text-white">COMPANY</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Careers</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Privacy Policy</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">DMCA Policy</a></li>
                    <li class="nav-item mb-2"><a href="#" class="navtext-white text-white">Terms & Condition</a>
                    </li>
                </ul>
            </div>

            <div class="col-6 col-md-2">
                <h5 class="fw-bolder text-white">GYMS</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Find a Gym</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">View All Gyms</a>
                    </li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Own A Gym</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Franchise Login</a>
                    </li>
                </ul>
            </div>

            <div class="col-6 col-md-2">
                <h5 class="fw-bolder text-white ">MEMBERS</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Contact Us</a></li>
                </ul>
            </div>

            <div class="col-md-5 offset-md-1 mb-3">
                <div class="fw-bolder text-white" style="font-size: 3rem;">WELLNESS <BR>STARTS WITHIN</div>
                <div class="fw-light fs-5 text-white">join us now and have the oppotunity of a lifetime.</div>
            </div>
        </div>
        <div class="text-white text-center py-4 border-top">© 2025 Company, Inc. All rights
            reserved.
        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>

        <script>
  let lastScrollTop = 0;
  const navbar = document.getElementById("navbar");

  window.addEventListener("scroll", function() {
    let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
    
    if (currentScroll > lastScrollTop) {
      // Scrolling down
      navbar.style.top = "-80px"; // Adjust this value to match your navbar's height
    } else {
      // Scrolling up
      navbar.style.top = "0"; // Navbar will appear
    }
    
    lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // For Mobile or negative scrolling
  });
</script>

</body>

</html>