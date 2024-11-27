<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.awaikenthemes.com/html-preview/avenix/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Oct 2024 17:31:07 GMT -->
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Awaiken">
	<!-- Page Title -->
    <title>St'Anthony Church -Mayura place</title>
	<!-- Favicon Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
	<!-- Google Fonts Css-->
	<link rel="preconnect" href="../../../fonts.googleapis.com/index.html">
    <link rel="preconnect" href="../../../fonts.gstatic.com/index.html" crossorigin>
    <link href="../../../fonts.googleapis.com/css2fd00.css?family=Fira+Sans+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
	<!-- Bootstrap Css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<!-- SlickNav Css -->
	<link href="css/slicknav.min.css" rel="stylesheet">
	<!-- Swiper Css -->
	<link rel="stylesheet" href="css/swiper-bundle.min.css">
	<!-- Font Awesome Icon Css-->
	<link href="css/all.css" rel="stylesheet" media="screen">
	<!-- Animated Css -->
	<link href="css/animate.css" rel="stylesheet">
	<!-- Magnific Popup Core Css File -->
	<link rel="stylesheet" href="css/magnific-popup.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<!-- Mouse Cursor Css File -->
	<link rel="stylesheet" href="css/mousecursor.css">
    <!-- Audio Css File -->
	<link rel="stylesheet" href="css/plyr.css">
    <script src="https://cdn.emailjs.com/dist/email.min.js"></script>
    <!-- SweetAlert CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<!-- Flatpickr CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<!-- Flatpickr JS -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>


<!-- SweetAlert JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>


	<!-- Main Custom Css -->
	<link href="css/custom.css" rel="stylesheet" media="screen">
</head>
<body>
<?php


// Database connection
// $host = '162.214.201.218';
// $db = 'stantho2_church';
// $user = 'stantho2_root'; // Replace with your database username
// $pass = '#Minuka#2024';

$host = 'localhost';
$db = 'church_donations';
$user = 'root'; // Replace with your database username
$pass = '';


$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch total bricks donated
$result = $conn->query("SELECT SUM(bricks_donated) as total_bricks FROM donors");
$data = $result->fetch_assoc();
$total_bricks_donated = $data['total_bricks'] ?? 0; // Default to 0 if no donations

// Calculate remaining bricks
$total_bricks_goal = 100000;
$remaining_bricks = $total_bricks_goal - $total_bricks_donated;

$conn->close();
?>
    <!-- Preloader Start -->

	<!-- Preloader End -->

    <!-- Header Start -->
<header class="main-header">
		<div class="header-sticky">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<!-- Logo Start -->
                     <style>
                        /* General styles for navbar-brand */
                        .navbar-brand h3 {
                            color: white;
                            font-size: 20px; /* Ensure font size is consistent */
                            text-align: center;
                            max-width: 100%; /* Default to full width for other devices */
                            margin: 0 auto;
                        }

                        /* Mobile-specific styles */
                        @media (max-width: 768px) {
                            .navbar-brand h3 {
                                font-size: 16px; /* Adjust font size for smaller screens */
                                max-width: 90%; /* Set a maximum width for mobile */
                                word-wrap: break-word; /* Break long text to avoid overflow */
                            }
                        }

                     </style>
                        <a class="navbar-brand" href="index.php">
                            <h3 >St.Anthony's Church- Mayura place</h3>
                        </a>
					<!-- Logo End -->

					<!-- Main Menu Start -->
					<div class="collapse navbar-collapse main-menu" style="margin-right:20px;">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav mr-auto" id="menu">
                                <li class="nav-item "><a class="nav-link" href="index.html">Home</a>
                                   
                                </li>       
                                
                                <li class="nav-item "><a class="nav-link" href="gallery.html">Gallery</a>
                                   
                                </li>     
                               
                                
                                <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
                                <li class="nav-item highlighted-menu"><a class="nav-link" href="#">donate now</a></li>                               
                            </ul>
                        </div>
                        <!-- Let’s Start Button Start -->
                        <div class="header-btn d-inline-flex">
                            <a class="btn-default" href="#donate-section" >Donate Now</a>
                        </div>
                        <!-- Let’s Start Button End -->
					</div>
					<!-- Main Menu End -->
					<div class="navbar-toggle"></div>
				</div>
			</nav>
			<div class="responsive-menu"></div>
		</div>
	</header>
	<!-- Header End -->

    <!-- Hero Section Start -->
    <div class="hero parallaxie" >
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <!-- Hero Content Start -->
                <div class="hero-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">make a difference today</h3>
                        <h1 class="text-anime-style-2" data-cursor="-opaque">
                            <span style="color:red;">Buy a Brick </span> and lend your hand
                        </h1>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">
                            Our aim is to join hands with the 100,000 devotees of St. Anthony and invite them to donate a single brick, priced at Rs. 1000/- to collect the required funds.
                        </p>
                    </div>
                    <!-- Section Title End -->

                    <h2 class="wow fadeInUp" style="color: white;">
                        <span style="margin-right:20px; color:red;">
                            <a href="#donate-section" style="color:red;">Bricks Left</a>
                        </span>
                        <span class="counter"><?php echo $remaining_bricks; ?></span>/100,000
                    </h2>
                </div>
                <!-- Hero Content End -->
            </div>
        </div>
    </div>
    <div class="section-title" style="text-align: center; margin-top:50px;">
        <h3 class="wow fadeInUp">Watch the renovation project</h3>
    </div>
    <div class="video-play-button" style="margin-top:40px; margin-left:25px;">
        <a href="javascript:void(0);" data-cursor-text="Play" onclick="showModal()">
            <i class="fa-solid fa-play"></i>
        </a>
    </div>

    <!-- Modal Structure for Video -->
    <div id="videoModal" class="modal" style="display: none;">
        <div class="modal-content">
            <span class="close-button" onclick="closeModal()">&times;</span>
            <video id="videoPlayer" controls>
                <source src="./St Anthony's Church - Mayura Place.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <div style="text-align:center; margin-top:59px; margin-bottom:30px;">
        <div class="wow fadeInUp">
            <a class="btn-default" href="#donate-section">Donate Now</a>
        </div>
    </div>
 

    <div  class="hero-content" style="text-align:center; color:white; margin-top:10px; padding:15px;">
        <p> <span style="font-weight:bold; color:white; margin-right:15px;">Bank No :</span>DFCC Bank</p>
        <p><span style="font-weight:bold; color:white; margin-right:15px;">Bank Branch :</span>Wellawatte</p>
        <p><span style="font-weight:bold; color:white; margin-right:15px;">Account Name :</span>St. Anthony’s Church Building Project</p>
        <p><span style="font-weight:bold; color:white; margin-right:15px;">Account Number :</span>1020 4887 3119</p>
        

     </div>

    <!-- Bank Details Section -->
     
</div>



<style>
    .bank-details {
    margin-top: 30px;
    text-align: center;
    color: #ffffff;
    font-size: 16px;
    line-height: 1.8;
}

.bank-details strong {
    color: #ff0000; /* Highlighted text in red */
}

    .modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.8);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1000;
    }

    .modal-content {
        position: relative;
        max-width: 1000px;
        width: 1000px;
        padding: 15px;
        background-color: #fff;
        border-radius: 8px;
        text-align: center;
    }

    .close-button {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 24px;
        color: #333;
        cursor: pointer;
    }

    video {
        width: 100%;
        height: auto;
        border-radius: 4px;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        function showModal() {
            const modal = document.getElementById('videoModal');
            const video = document.getElementById('videoPlayer');
            modal.style.display = 'flex';
            video.play(); // Start playing the video
        }

        function closeModal() {
            const modal = document.getElementById('videoModal');
            const video = document.getElementById('videoPlayer');
            modal.style.display = 'none';
            video.pause(); // Pause the video when closing the modal
            video.currentTime = 0; // Reset video to the start
        }

        window.showModal = showModal;
        window.closeModal = closeModal;
    });
</script>



	<!-- Hero Section End -->

   
	<!-- Scrolling Ticker Section End -->

    <!-- About Us Section Start -->
<div class="about-us" >
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- About Image Start -->
                <div class="about-image">
                    <div class="about-img-1">
                        <figure class="image-anime reveal">
                            <img src="images/Church-new.PNG" alt="">
                        </figure> 
                    </div>
                </div>
                <!-- About Image End -->
            </div>

            <div class="col-lg-6">
                <!-- About Content Start -->
                <div class="about-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">about us</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">About St. Anthony's Church, Mayura Place</h2>
                        
                        <!-- Shortened content with hidden full text -->
                        <p class="wow fadeInUp" data-wow-delay="0.25s" id="about-text">
                            Since 1969, St. Anthony’s Church in Mayura Place has been a beacon of faith, unity, and community service for all who seek spiritual guidance. Our journey began with the vision of Rt. Rev. Msgr. Manik Muthukumar, who saw the need for a new place of worship for parishioners living far from St. Lawrence's Church in Wellawatte. Built to honor St. Anthony, our church opened its doors in 1991, providing a dedicated place of worship for the Tamil-speaking Catholic community and the surrounding neighborhood.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.25s" id="more-text" style="display: none; opacity: 0;">
                            St. Anthony’s Church – Mayura Place. It was as far back as in 1969 that late Rt. Rev. Msgn. Manik Muthukumar, former Parish Priest of St Lawrence’s Church Wellawatte, realized the need to create a new mission to cater for the spiritual needs of parishioners living far away in areas like Mills Quarters, Mayura Place, and others. The church was built and dedicated to St. Anthony at Mayura Place, Wellawatte on government-granted land. <br><br>
                            The church was blessed and inaugurated as a place of worship on October 22, 1991, by Archbishop Rt. Rev. Dr. Nicholas Marcus Fernando. Since then, it has served the Tamil-speaking Catholic community and others in the area, promoting harmony among diverse religious communities. Today, under the leadership of Very Rev Fr. Nihal Ivan Perera, we continue to strive for community unity and spiritual guidance. "May St. Antony be a beacon of light and power to all of us and our advocate before our Lord Jesus Christ."
                        </p>
                    </div>
                    <!-- Section Title End -->

                    <!-- About Us Footer Start with Read More Button -->
                    <div class="about-us-footer wow fadeInUp" data-wow-delay="1s">
                        <button id="read-more-btn" onclick="toggleContent()" class="btn-default">Read More</button>
                    </div>
                    <!-- About Us Footer End -->
                </div>
                <!-- About Content End -->
            </div>
        </div>
    </div>
</div>

<script>
    function toggleContent() {
        const moreText = document.getElementById("more-text");
        const readMoreBtn = document.getElementById("read-more-btn");

        if (moreText.style.display === "none" || moreText.style.opacity === "0") {
            moreText.style.display = "block";
            setTimeout(() => { moreText.style.opacity = "1"; }, 10); // small delay for smooth transition
            readMoreBtn.textContent = "Read Less";
        } else {
            moreText.style.opacity = "0";
            setTimeout(() => { moreText.style.display = "none"; }, 500); // matches transition duration
            readMoreBtn.textContent = "Read More";
        }
    }
</script>

<style>
    #more-text {
        display: none;
        opacity: 0;
        transition: opacity 0.5s ease;
    }
</style>

    <!-- About Us Section End -->

    <!-- Join Worship Section Start -->
    
    <!-- Join Worship Section End -->

    <!-- Our Counter Section Start -->
    <div class="our-counter">
        <div class="container">
            <div class="row counter-box">
                <div class="col-lg-3 col-md-6">
                    <!-- Counter Item Start -->
                    <div class="counter-item">
                        <!-- Counter Title Start -->
                        <div class="counter-title">
                            <h2><span class="counter">35</span>+</h2>
                        </div>
                        <!-- Counter Title End -->
    
                        <!-- Counter Content Start -->
                        <div class="counter-content">
                            <h3>Years of Faith</h3>
                            <p>St. Anthony's Church has been a place of worship for over 50 years, bringing the community together.</p>
                        </div>
                        <!-- Counter Content End -->
                    </div>
                    <!-- Counter Item End -->
                </div>
    
                <div class="col-lg-3 col-md-6">
                    <!-- Counter Item Start -->
                    <div class="counter-item">
                        <!-- Counter Title Start -->
                        <div class="counter-title">
                            <h2><span class="counter">8</span>+</h2>
                        </div>
                        <!-- Counter Title End -->
    
                        <!-- Counter Content Start -->
                        <div class="counter-content">
                            <h3><a href="#Parish-section" style="color:white; "><u>Parish Priests</u>  </a></h3>
                            <p>Led by 8 dedicated priests, each bringing their unique leadership and spiritual guidance.</p>
                        </div>
                        <!-- Counter Content End -->
                    </div>
                    <!-- Counter Item End -->
                </div>
    
                <div class="col-lg-3 col-md-6">
                    <!-- Counter Item Start -->
                    <div class="counter-item">
                        <!-- Counter Title Start -->
                        <div class="counter-title">
                            <h2><span class="counter">25</span>+</h2>
                        </div>
                        <!-- Counter Title End -->
    
                        <!-- Counter Content Start -->
                        <div class="counter-content">
                            <h3> Lay Leadership
                            </h3>
                            <p>Parish Pastoral Council & Other Association
                            Honoring the members who saved and gone for <span><a href="#Parish-section"  style="font-weight:bold; color:white;"><u> internal rest </u></a> </span> and 
                            Recognizing untiring services continued by the active members serving
                            Towards the church mission
                            </p>
                        </div>
                        <!-- Counter Content End -->
                    </div>
                    <!-- Counter Item End -->
                </div>
    
                <div class="col-lg-3 col-md-6">
                    <!-- Counter Item Start -->
                    <div class="counter-item">
                        <!-- Counter Title Start -->
                        <div class="counter-title">
                            <h2><span class="counter">100</span>+</h2>
                        </div>
                        <!-- Counter Title End -->
    
                        <!-- Counter Content Start -->
                        <div class="counter-content">
                            <h3>Devoted Members
                            </h3>
                            <p>More than 300 families with 1000-plus members actively participate in church activities around the areas of Mayura Place, Parkumba Place, Sri Sidhartha Road, Kirulapona & Parmankada.
                                 </p>
                        </div>
                        <!-- Counter Content End -->
                    </div>
                    <!-- Counter Item End -->
                </div>
            </div>
        </div>
    </div>
    
    <!-- Our Counter Section End -->

    <!-- Our Mission Section Start -->
   <div class="our-mission">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="mission-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">our mission</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Our Mission to Serve, <span>Love, and Grow</span></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Mission Content Body Start -->
                        <div class="mission-content-body">
                            <h3 class="wow fadeInUp" data-wow-delay="0.25s">The mission of St. Anthony’s church involves serving the community, witnessing the Christian faith, and sharing the good news of Jesus Christ.</h3>
                            <p class="wow fadeInUp" data-wow-delay="0.5s">The mission of the Church is to proclaim his presence and to serve him where he is to be found. It is why the Catholic Church teaches that we are saved by faith in Christ, but that faith, to be real, must be incarnated in what we do..</p>
                        </div>
                        <!-- Mission Content Body End -->

                        <!-- Mission Content Footer Start -->
                        <div class="mission-content-footer wow fadeInUp" data-wow-delay="0.75s">
                            <a href="contact.html" class="btn-default">contact now</a>
                        </div>
                        <!-- Mission Content Footer End -->
                    </div>
                </div>



                    <div class="col-lg-6">
                        <!-- Mission Image Start -->
                        <div class="mission-image">
                            <!-- Mission Image Start -->
                            <div class="mission-img">
                                
                            </div>
                            <!-- Mission Image End -->

                            <!-- GIF Animation Start -->
                            <div class="mission-gif-animation">
                                <img src="images/church-gif.gif" alt="Church Animation" style="width: 100%; height: auto;">
                            </div>
                            <!-- GIF Animation End -->
                        </div>
                        <!-- Mission Image End -->
                    </div>


            </div>
        </div>
    </div>
    <!-- Our Mission Section End -->
    
    
</div>

<style>
    .donation-section {
    padding: 40px 0;
    background-color: #f8f9fa;
}

.brick-counter, .bank-details {
    padding: 20px;
    background: #fff;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    text-align: center;
}

.brick-counter h2, .bank-details h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.brick-count h1 {
    font-size: 48px;
    color: #dc3545;
    margin: 20px 0;
}

.bank-info {
    list-style: none;
    padding: 0;
}

.bank-info li {
    font-size: 18px;
    margin-bottom: 8px;
}

</style>


    <div class="about-us" id="home-about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- About Image Start -->
                    <div class="about-image">
                        <div class="about-img-1">
                            <figure class="image-anime reveal">
                                <img src="images/Churchimg-2.png" alt="">
                            </figure>
                        </div>

                        <div class="about-img-2">
                            <figure class="image-anime reveal">
                                <img src="images/churchimg3.png" alt="">
                            </figure>
                        </div>
                    </div>
                    <!-- About Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- About Content Start -->
                    <div class="about-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Renovation Project</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">St. Anthony's Church, Mayura Place - Building Fundraising</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s"> After 35 years of anticipation, we are thrilled that God has answered our prayers, and now we are ready to build a beautiful new church. We invite all 100,000 devotees of St. Anthony to join us by donating a single brick, priced at Rs. 1000/-, to help us reach our fundraising goal.</p>
                           
                        </div>
                        <!-- Section Title End -->

                        <!-- About Content List Start -->
                        <div class="about-content-body">
                            <!-- About List Item Start -->
                            <div class="about-list-item wow fadeInUp">
                                <div class="icon-box">
                                    <img src="images/icon-about-list-1.svg" alt="">
                                </div>
                                <div class="about-list-item-content">
                                    <h3 style="margin-bottom:10px">Project Goals</h3>
                                    <p>To create a modern, spacious place of worship that will serve future generations and inspire our community.</p>
                                </div>
                            </div>
                            <!-- About List Item End -->

                            <!-- About List Item Start -->
                            <div class="about-list-item wow fadeInUp" data-wow-delay="0.25s">
                                <div class="icon-box">
                                    <img src="images/icon-about-list-2.svg" alt="">
                                </div>
                                <div class="about-list-item-content">
                                    <h3 style="margin-bottom:10px">Project Timeline</h3>
                                    <p>From ground-breaking to completion, we will share key milestones and updates on construction progress.</p>
                                </div>
                            </div>
                            <!-- About List Item End -->

                            <!-- About List Item Start -->
                            <div class="about-list-item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="icon-box">
                                    <img src="images/icon-about-list-3.svg" alt="">
                                </div>
                                <div class="about-list-item-content">
                                    <h3 style="margin-bottom:10px">Budget Overview</h3>
                                    <p>Funds needed are outlined in our BOQ. Each Rs. 1000/- donation helps buy a brick, bringing us closer to our vision.</p>
                                    
                                </div>
                            </div>
                            <!-- About List Item End -->

                            <!-- About List Item Start -->
                            <div class="about-list-item wow fadeInUp" data-wow-delay="0.75s">
                                <div class="icon-box">
                                    <img src="images/icon-about-list-4.svg" alt="">
                                </div>
                                <div class="about-list-item-content">
                                    <h3 style="margin-bottom:10px">Progress Updates</h3>
                                    <p>We will share photos and updates to show how your contributions make a difference in building our church.</p> 
                                </div>
                            </div>
                            <!-- About List Item End -->
                        </div>
                        <!-- About Content List End -->


                        <!-- About Us Footer Start -->
                        <div class="about-us-footer wow fadeInUp" data-wow-delay="1s">
                            <a href="church doc.pdf " class="btn-default" target="_blank">BOQ</a>
                        </div>

                        <!-- About Us Footer End -->
                    </div>
                    <!-- About Content End -->
                </div>
            </div>
        </div>
    </div>

    <style>
.donation-section {
  text-align: center;
  margin: 0 auto;
  padding: 20px;
  margin-bottom: 100px;
}

.section-title1 {
  font-size: 3.2em; /* Increases the title size */
  color: #333;
  margin-bottom: 70px; /* Adds more space below the title */
}

.table-wrapper {
  max-width: 800px; /* Increased table width */
  max-height: 400px;
  margin: 0 auto;
  overflow-y: auto;
  border: 1px solid #ddd;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Adds subtle shadow */
}

.donors-table {
  width: 100%;
  border-collapse: collapse;
}

.donors-table th, .donors-table td {
  padding: 15px;
  font-size: 1.2em;
  border: 1px solid #ddd; /* Adds gray border to cells */
}

.donors-table th {
  background-color: #fe6035; /* Sets header background color */
  color: #fff; /* Sets header text color to white for contrast */
  text-align: left;
}

.donors-table td {
  color: #333;
}

.donors-table td:first-child {
  text-align: left; /* Left-aligns the donor names */
}

.donors-table td:last-child {
  text-align: center; /* Centers the "Bricks Donated" values */
}


    </style>

<?php
// Database connection settings
// $host = '162.214.201.218';
// $db = 'stantho2_church';
// $user = 'stantho2_root'; // Replace with your database username
// $pass = '#Minuka#2024';

$host = 'localhost';
$db = 'church_donations';
$user = 'root'; // Replace with your database username
$pass = '';


// Create a new database connection
$conn = new mysqli($host, $user, $pass, $db);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch donor names and bricks donated
$query = "SELECT donor_name, bricks_donated FROM donors";
$result = $conn->query($query);

// Close the database connection when done
$conn->close();
?>

<!-- HTML section for the donation table -->
<section class="donation-section">
    <h2 class="section-title1">Our Generous Donors</h2>
    <div class="table-wrapper">
        <table class="donors-table">
            <thead>
                <tr>
                    <th>Donor Name</th>
                    <th>Bricks Donated</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Check if there are any results and populate the table rows
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . htmlspecialchars($row['donor_name']) . "</td><td>" . htmlspecialchars($row['bricks_donated']) . "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>No donors found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</section>



    <div class="donate-now parallaxie" id="donate-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-4">
                    <div class="intro-video-box">
                        <!-- Video Play Button Start -->
                        
                        <!-- Video Play Button End -->
                    </div>
                    
                   
                    
                    <!-- Updated CSS for Modal and Fullscreen PDF View -->
                    <style>
                    .pdf-modal {
                        display: none;
                        position: fixed;
                        top: 0;
                        left: 0;
                        width: 100vw;  /* Full viewport width */
                        height: 100vh;  /* Full viewport height */
                        background-color: rgba(0, 0, 0, 0.8);
                        z-index: 1000;
                        overflow: hidden; /* Ensures no additional scrollbars */
                    }
                    .pdf-modal .close {
                        position: absolute;
                        top: 10px;
                        right: 20px;
                        color: #fff;
                        font-size: 30px;
                        font-weight: bold;
                        cursor: pointer;
                        z-index: 1001; /* Ensures close button is above iframe */
                    }
                    .pdf-iframe {
                        width: 100vw;
                        height: 100vh;
                        border: none;
                    }
                    </style>
                    
                    <!-- JavaScript for Modal -->
                    <script>
                    function showModal() {
                        document.getElementById('pdfModal').style.display = 'block';
                    }
                    function closeModal() {
                        document.getElementById('pdfModal').style.display = 'none';
                    }
                    </script>
                    
                    
                </div>

                <div class="col-lg-6 col-md-8">
                    <!-- Donate Box Start -->
                    <div class="donate-box">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Join Us in Building St. Anthony’s Church</h3>
                           <h2 class="text-anime-style-2" data-cursor="-opaque">‘Buy a Brick’ and Lend a Hand</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">After 35 years of long waiting, we are very happy today, that God has answered our prayers, and now we are ready to build this beautiful church. Our aim is to join hands with the 100,000 devotees of St. Anthony and invite them to donate a single brick, priced at Rs. 1000/-, to collect the required funds. We humbly request the kind support from all those who wish to be part of this blessed project. Please buy a brick and lend your hand.</p>
                        </div>
                        <!-- Section Title End -->
                        <style>
                            .loading-spinner {
                                display: none; /* Hidden by default */
                                position: fixed;
                                left: 50%;
                                top: 50%;
                                transform: translate(-50%, -50%);
                                z-index: 1000; /* Make sure it's on top of everything */
                            }
                        
                            .loading-spinner div {
                                width: 40px;
                                height: 40px;
                                border: 4px solid rgba(0, 0, 0, 0.3);
                                border-top: 4px solid #3498db;
                                border-radius: 50%;
                                animation: spin 1s linear infinite;
                            }
                        
                            @keyframes spin {
                                0% { transform: rotate(0deg); }
                                100% { transform: rotate(360deg); }
                            }
                        </style>

                    
                        <div class="donate-form wow fadeInUp" data-wow-delay="0.5s">
                            <form id="donateForm" action="donation.php" method="POST" onsubmit="submitDonation(event)">

                                <!-- Full Name Input -->
                                <div class="form-group mb-4">
                                    <input type="text" name="fullName" class="form-control" placeholder="Full Name" required>
                                </div>
                    
                                <!-- Contact Number Input -->
                                <div class="form-group mb-4">
                                    <input type="tel" name="contactNumber" class="form-control" placeholder="Contact Number" required>
                                </div>
                    
                                <!-- Preferred Time to Contact Input -->
                                 
                                <div class="form-group mb-4">
                                    <input type="text" id="preferredTime" name="preferredTime" class="form-control" placeholder="Preferred Time to Contact" required>
                                </div>
                                
                    
                                <!-- Email Address Input -->
                                <div class="form-group mb-4">
                                    <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                                </div>
                    
                                <!-- No. of Bricks Required Input -->
                                <div class="form-group mb-4">
                                    <input type="number" name="noOfBricks" class="form-control" placeholder="No. of Bricks Required" min="1" required>
                                </div>
                    
                                <!-- Address Input -->
                                <div class="form-group mb-4">
                                    <input type="text" name="address" class="form-control" placeholder="Address" required>
                                </div>
                    
                                <!-- Country Input -->
                                <div class="form-group mb-4">
                                    <input type="text" name="country" class="form-control" placeholder="Country" required>
                                </div>
                    
                                <!-- Parish/Church Input -->
                                <div class="form-group mb-4">
                                    <input type="text" name="parish" class="form-control" placeholder="Parish/Church" required>
                                </div>
                    
                                <!-- Donation Amount Input with Rs Currency -->
                                
                    
                                <!-- Submit Button -->
                                <div class="form-group-btn">
                                    <button type="submit" class="btn-default">donate now</button>
                                </div>
                            </form>
                        </div>

                        <!-- Loading Spinner -->
                            <div class="loading-spinner" id="loadingSpinner">
                                <div></div>
                            </div>

                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                            <script>
                                function submitDonation(event) {
                                    event.preventDefault(); // Prevent default form submission
                            
                                    // Show loading spinner
                                    document.getElementById('loadingSpinner').style.display = 'block';
                            
                                    const formData = new FormData(document.getElementById('donateForm'));
                            
                                    fetch('donation.php', {
                                        method: 'POST',
                                        body: formData
                                    })
                                    .then(response => response.text())
                                    .then(result => {
                                        // Hide loading spinner
                                        document.getElementById('loadingSpinner').style.display = 'none';
                            
                                        if (result === 'Success') {
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Thank you!',
                                                text: 'One of the Parish will contact you soon!!..',
                                                confirmButtonText: 'OK'
                                            });
                                            document.getElementById('donateForm').reset(); // Reset form
                                        } else {
                                            Swal.fire({
                                                icon: 'error',
                                                title: 'Oops...',
                                                text: 'Something went wrong. Please try again later.',
                                            });
                                        }
                                    })
                                    .catch(error => {
                                        // Hide loading spinner on error
                                        document.getElementById('loadingSpinner').style.display = 'none';
                                        console.error('Error:', error);
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Oops...',
                                            text: 'Something went wrong. Please try again later.',
                                        });
                                    });
                                }
                            </script>
                    </div>
                    
                    <!-- JavaScript to Display Alert -->
                    <script>
                        function showThankYouAlert() {
                            alert("Thank you for your generosity! One of our parish members will contact you soon.");
                            return false; // Prevents actual form submission
                        }
                    </script>
                    
                    <!-- Donate Box End -->
                </div>

                <script>
                    // Initialize EmailJS
                    (function(){
                        emailjs.init("YOUR_USER_ID"); // Replace with your EmailJS user ID
                    })();
                
                    function sendEmail(event) {
                        event.preventDefault(); // Prevent the default form submission
                
                        // Get form values
                        const form = document.getElementById('donateForm');
                        const formData = new FormData(form);
                        const data = {
                            fullName: formData.get('fullName'),
                            contactNumber: formData.get('contactNumber'),
                            preferredTime: formData.get('preferredTime'),
                            email: formData.get('email'),
                            noOfBricks: formData.get('noOfBricks'),
                            address: formData.get('address'),
                            country: formData.get('country'),
                            parish: formData.get('parish'),
                        };
                
                        // Send email using EmailJS
                        emailjs.send("YOUR_SERVICE_ID", "YOUR_TEMPLATE_ID", data)
                            .then((response) => {
                                console.log('SUCCESS!', response.status, response.text);
                                // Show SweetAlert success message
                                swal({
                                    title: "Thank You!",
                                    text: "One of our parish members will contact you soon.",
                                    icon: "success",
                                    button: "OK",
                                });
                                form.reset(); // Reset form after submission
                            }, (error) => {
                                console.log('FAILED...', error);
                                // Show SweetAlert error message
                                swal({
                                    title: "Oops!",
                                    text: "There was an issue with your submission. Please try again later.",
                                    icon: "error",
                                    button: "OK",
                                });
                            });
                    }
                
                    // Initialize flatpickr
                    flatpickr("#preferredTime", {
                        enableTime: true,
                        dateFormat: "Y-m-d H:i", // Format for the date and time
                        minDate: "today", // Prevent selecting past dates
                        time_24hr: true, // Use 24-hour format
                    });
                </script>




                
                
            </div>
        </div>
    </div>
    <section class="parish-priests" id="Parish-section">
    <!-- Current Parish Priests -->
    <div class="current-priests">
        <h2>Current Parish Priests</h2>
        <ul class="priest-list current">
            <li>Rt. Rev. Msgn. Manik Muthukumar</li>
            <li>Rev. Fr. Cyril Perera (OMI)</li>
            <li><li>Rev. Fr. Cyril Perera</li></li>
            <li>Rev. Fr. Bob Rodrigo (OMI)</li>
            <li>Very Rev. Fr. Nagaratnam Manokumaran    </li>
            <li>Very Rev. Fr. Clement Roziro</li>
            <li>Very Rev. Fr. Nihal Iven Perera </li>
        </ul>
    </div>

    <!-- Past Parish Priests -->
    <div class="past-priests">
        <h2>Past Parish Priests</h2>
        <ul class="priest-list past">
            <li>Mr. B J Joseph (1st PPC SEC.)</li>
            <li>Rev. Sr. Miriam</li>
            <li>Mrs. Rani Croos</li>
            <li>Mr. P T Rahael</li>
            <li>Mr. & Mrs. Dias</li>
            <li>Mr. & Mrs. Aloysius</li>
            <li>Mr. Ambrose</li>
            
        </ul>
    </div>
</section>




<style>
/* General Section Styling */
.parish-priests {
    padding: 50px;
    background-color: #f9f9f9;
    text-align: center;
}

.current-priests, .past-priests {
    margin-bottom: 40px;
}

h2 {
    font-size: 28px;
    color: #333;
    text-transform: uppercase;
    margin-bottom: 20px;
}

/* Priest List Styling */
.priest-list {
    list-style-type: none;
    padding: 0;
    font-size: 18px;
    margin: 0 auto;
    max-width: 600px;
}

/* Current Priests Styling */
.priest-list.current li {
    background: #ffa500; /* Bright Orange */
    color: #fff;
    margin-bottom: 10px;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
}

/* Past Priests Styling */
.priest-list.past li {
    background: #ffe5b4; /* Light Orange */
    color: #333;
    margin-bottom: 10px;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
}

/* Hover Effects */
.priest-list li:hover {
    background-color: #f3f3f3;
    transition: background-color 0.3s ease;
}


</style>


    <div class="our-event">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="event-image">
                        <figure class="image-anime reveal">
                            <img src="images/church img4.jpg" alt="Holy Mass Schedule">
                        </figure>
                    </div>
                </div>
    
                <div class="col-lg-6">
                    <div class="event-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Our Holy Mass Schedule</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Join Us for Worship <span>and Community</span></h2>
                        </div>
                        <!-- Section Title End -->
    
                        <!-- Event Body Start -->
                        <div class="event-body">
                            <!-- Event Item Start -->
                            <div class="event-item wow fadeInUp">
                                <div class="icon-box">
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                                <div class="event-item-content">
                                    <p>Tuesday - Novena to St. Anthony and Holy Mass at 6:00 PM</p>
                                </div>
                            </div>
                            <!-- Event Item End -->
    
                            <!-- Event Item Start -->
                            <div class="event-item wow fadeInUp" data-wow-delay="0.25s">
                                <div class="icon-box">
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                                <div class="event-item-content">
                                    <p>First Tuesday - Special Healing Service and Holy Mass at 6:00 PM</p>
                                </div>
                            </div>
                            <!-- Event Item End -->
    
                            <!-- Event Item Start -->
                            <div class="event-item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="icon-box">
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                                <div class="event-item-content">
                                    <p>Sunday - Holy Mass at 8:45 AM</p>
                                </div>
                            </div>
                            <!-- Event Item End -->
    
                            <!-- Event Item Start -->
                            <div class="event-item wow fadeInUp" data-wow-delay="0.75s">
                                <div class="icon-box">
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                                <div class="event-item-content">
                                    <p>Sunday - English Holy Mass at 11:30 AM</p>
                                </div>
                            </div>
                            <!-- Event Item End -->
                        </div>
                        <!-- Event Body End -->
    
                        <!-- Event Footer Start -->
                        <div class="event-footer">
                            <p class="wow fadeInUp" data-wow-delay="1s">Join us for our Holy Mass services as we come together in faith, prayer, and community. We welcome everyone to experience the joy and peace that worship brings.</p>
                        </div>
                        <!-- Event Footer End -->
    
                        <!-- Event Btn Start -->
                        
                        <!-- Event Btn End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    

 
   
    <footer class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- About Footer Start -->
                    <div class="about-footer">
                        <!-- Footer Logo Start -->
                        <div class="footer-logo">
                        <h3 style="color:white;">St.Anthony's Church</h3>
                        </div>
                        <!-- Footer Logo End -->

                        <!-- About Footer Content Start -->
                        <div class="about-footer-content">
                            <p>Since 1969, St. Anthony’s Church has served as a haven of faith and unity, welcoming all in Mayura Place.</p>
                        </div>
                        <!-- Footer Social Links Start -->
                        <div class="footer-social-links">
                            <ul>
                                <li><a href="https://www.facebook.com/stanthonysmayuraplace/about/?_rdr"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <!-- <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>                                                                 -->
                            </ul>
                        </div>
                        <!-- Footer Social Links End -->
                        
                    </div>
                    <!-- About Footer End -->
                </div>
                
                <div class="col-lg-2 col-md-3 col-6">
                    <!-- About Links Start -->
                   
                    <!-- About Links End -->
                </div>

                <div class="col-lg-3 col-md-4 col-6">
                    <!-- About Links Start -->
                    
                    <!-- About Links End -->
                </div>

                <div class="col-lg-3 col-md-5">
                    <!-- About Links Start -->
                    <div class="footer-contact">
                        <h3>contact</h3>
                        <!-- Footer Contact Details Start -->
                        <div class="footer-contact-details">
                            <!-- Footer Info Box Start -->
                            <div class="footer-info-box">
                                <div class="icon-box">
                                    <img src="images/icon-phone.svg" alt="">
                                </div>
                                <div class="footer-info-box-content">
                                    <p>+94 77 756 6025 </p>
                                </div>                                
                            </div>
                            <!-- Footer Info Box End -->

                            <!-- Footer Info Box Start -->
                            <div class="footer-info-box">
                                <div class="icon-box">
                                    <img src="images/icon-mail.svg" alt="">
                                </div>
                                <div class="footer-info-box-content">
                                    <p>sacmayuraplace@gmail.com</p>
                                </div>
                            </div>
                            <!-- Footer Info Box End -->

                            <!-- Footer Info Box Start -->
                            <div class="footer-info-box">
                                <div class="icon-box">
                                    <img src="images/icon-location.svg" alt="">
                                </div>
                                <div class="footer-info-box-content">
                                    <p>St Anthonys Catholic Church,
                                        Mayura Place,
                                        Colombo 06.</p>
                                </div>                                
                            </div>
                            <!-- Footer Info Box End -->
                        </div>
                        <!-- Footer Contact Details End -->
                    </div>
                    <!-- About Links End -->
                </div>
            </div>

            <!-- Footer Copyright Section Start -->
            <div class="footer-copyright">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <!-- Footer Copyright Start -->
                        <div class="footer-copyright-text">
                            <p>Copyright 2024 Idearigs. All Rights Reserved.</p>
                        </div>
                        <!-- Footer Copyright End -->
                    </div>

                    
                </div>
            </div>
            <!-- Footer Copyright Section End -->
        </div>
     </footer>
    <!-- Footer End -->

    <!-- Jquery Library File -->
    <script src="js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap js file -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Validator js file -->
    <script src="js/validator.min.js"></script>
    <!-- SlickNav js file -->
    <script src="js/jquery.slicknav.js"></script>
    <!-- Swiper js file -->
    <script src="js/swiper-bundle.min.js"></script>
    <!-- Counter js file -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Magnific js file -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- SmoothScroll -->
    <script src="js/SmoothScroll.js"></script>
    <!-- Parallax js -->
    <script src="js/parallaxie.js"></script>
    <!-- MagicCursor js file -->
    <script src="js/gsap.min.js"></script>
    <script src="js/magiccursor.js"></script>
    <!-- Text Effect js file -->
    <script src="js/SplitText.js"></script>
    <script src="js/ScrollTrigger.min.js"></script>
    <!-- YTPlayer js File -->
    <script src="js/jquery.mb.YTPlayer.min.js"></script>
    <!-- Audio js File -->
    <script src="js/plyr.js"></script>
    <!-- Wow js file -->
    <script src="js/wow.js"></script>
    <!-- Main Custom js file -->
    <script src="js/function.js"></script>
	<script src="../../assets/js/theme-panel.js"></script>
</body>

<!-- Mirrored from demo.awaikenthemes.com/html-preview/avenix/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Oct 2024 17:31:07 GMT -->
</html>