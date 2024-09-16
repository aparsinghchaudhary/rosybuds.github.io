<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rosy Buds Bal Batika Higher Secondary School</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/global.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
    <link rel="icon" href="img/icon.png" class="">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
        /* Preloader styles */
        #preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: black;
    z-index: 9999;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: opacity 1s ease, visibility 1s ease; /* Adjusted duration for fade-out */
}

.fade-out {
    opacity: 0;
    visibility: hidden;
}

        .container {
            --uib-size: 80px;
            --uib-color: white;
            --uib-speed: 1.4s;
            --uib-bg-opacity: .1;
            height: var(--uib-size);
            width: var(--uib-size);
            transform-origin: center;
            overflow: visible;
        }

        .car {
            fill: none;
            stroke: var(--uib-color);
            stroke-dasharray: 15, 85;
            stroke-dashoffset: 0;
            stroke-linecap: round;
            animation: travel var(--uib-speed) linear infinite;
            will-change: stroke-dasharray, stroke-dashoffset;
            transition: stroke 0.5s ease;
        }

        .track {
            stroke: var(--uib-color);
            opacity: var(--uib-bg-opacity);
            transition: stroke 0.5s ease;
        }

        @keyframes travel {
            0% {
                stroke-dashoffset: 0;
            }
            100% {
                stroke-dashoffset: -100;
            }
        }

        /* Main content styles */
        #main-content {
            display: none; /* Initially hidden */
        }

        /* Fade-in effect for preloader */
        .fade-out {
            opacity: 0;
            visibility: hidden;
        }
    </style>
</head>
<body>
    <!-- Preloader HTML -->
    <div id="preloader">
        <svg 
            class="container" 
            x="0px" 
            y="0px" 
            viewBox="0 0 40 40" 
            height="100" 
            width="100" 
            preserveAspectRatio="xMidYMid meet">
            <path 
                class="track" 
                fill="none" 
                stroke-width="4" 
                pathLength="100" 
                d="M29.76 18.72c0 7.28-3.92 13.6-9.84 16.96c-2.88 1.68-6.24 2.64-9.84 2.64c-3.6 0-6.88-0.96-9.76-2.64c0-7.28 3.92-13.52 9.84-16.96c2.88-1.68 6.24-2.64 9.76-2.64s6.88 0.96 9.76 2.64c5.84 3.36 9.76 9.68 9.84 16.96c-2.88 1.68-6.24 2.64-9.76 2.64c-3.6 0-6.88-0.96-9.84-2.64c-5.84-3.36-9.76-9.68-9.76-16.96c0-7.28 3.92-13.6 9.76-16.96c5.84 3.36 9.76 9.68 9.76 16.96z"/>
            <path 
                class="car" 
                fill="none" 
                stroke-width="4" 
                pathLength="100" 
                d="M29.76 18.72c0 7.28-3.92 13.6-9.84 16.96c-2.88 1.68-6.24 2.64-9.84 2.64c-3.6 0-6.88-0.96-9.76-2.64c0-7.28 3.92-13.52 9.84-16.96c2.88-1.68 6.24-2.64 9.76-2.64s6.88 0.96 9.76 2.64c5.84 3.36 9.76 9.68 9.84 16.96c-2.88 1.68-6.24 2.64-9.76 2.64c-3.6 0-6.88-0.96-9.84-2.64c-5.84-3.36-9.76-9.68-9.76-16.96c0-7.28 3.92-13.6 9.76-16.96c5.84 3.36 9.76 9.68 9.76 16.96z"/>
        </svg>
    </div>

    <!-- Main content -->

    <script>
     // JavaScript to handle the preloader fade-out
window.addEventListener('load', () => {
    const preloader = document.getElementById('preloader');
    const mainContent = document.getElementById('main-content');
    
    setTimeout(() => {
        preloader.classList.add('fade-out'); // Add class to start fade-out transition
        setTimeout(() => {
            preloader.style.display = 'none'; // Hide the preloader after fade-out
            mainContent.style.display = 'block'; // Show main content
        }, 1000); // Match the transition time of the preloader fade-out
    }, 5000); // Stay visible for 5 seconds
});
    </script>

    <!-- Main content -->
    <section id="top">
        <div class="container-fluid p-0">
            <div class="row top_1 m-0">
                <div class="col-md-4">
                    <div class="top_1l clearfix pt-4 pb-4">
                        <ul class="mb-0">
                            <li class="d-inline-block me-3"><a class="text-white" href="https://www.facebook.com/profile.php?id=61553864685731"><i class="fa fa-facebook fs-5"></i></a></li>
                            <li class="d-inline-block me-3"><a class="text-white" href="https://www.youtube.com/@ROSYBUDSOFFICIAL"><i class="fa fa-youtube fs-5"></i></a></li>
                            <li class="d-inline-block me-3"><a class="text-white" href="#"><i class="fa fa-instagram fs-5"></i></a></li>
                            <li class="d-inline-block"><a class="text-white" href="#"><i class="fa fa-dribbble fs-5"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="top_1r px-5">
                        <div class="top_1ri auta row">
                            <div class="col-md-4">
                                <div class="top_1ril">
                                    <span class="col_oran fs-2 float-start lh-1 me-3"><i class="fa fa-phone"></i></span>
                                    <h6 class="text-white lh-base">Call Now<br>
                                        <a class="text-white fw-bold" href="#">+082-540075 | 082-540597 | 082-540523</a>
                                    </h6>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="top_1ril">
                                    <span class="col_oran fs-2 float-start lh-1 me-3"><i class="fa fa-envelope"></i></span>
                                    <h6 class="text-white lh-base">Email Now<br>
                                        <a class="text-white fw-bold" href="mailto:rosybuds.school.lamahi@gmail.com">send mail to the school.</a>
                                    </h6>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="top_1ril">
                                    <span class="col_oran fs-2 float-start lh-1 me-2"><i class="fa fa-map-marker"></i></span>
                                    <h6 class="text-white lh-base">Address<br>
                                        <a style="font-size: 12px;" class="text-white fw-bold" href="https://maps.app.goo.gl/rV8wzWHo7Yh3T3Li7">Lamahi -05 Municipality, Lumbini Province, Dang</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // JavaScript to hide preloader after 30 seconds
        setTimeout(function() {
            document.getElementById('preloader').style.display = 'none';
        }, 3000); // 30000 milliseconds = 30 seconds
    </script>