<?php
session_start();
include('connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'login') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $remember_me = isset($_POST['remember_me']);

    if (!empty($email) && !empty($password)) {
        $sql = "SELECT user_id, full_name, email, password FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
                                    
            if (password_verify($password, $user['password'])) {
             
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['user_full_name'] = $user['full_name'];
                $_SESSION['user_email'] = $user['email'];

             
                if ($remember_me) {
               
                    setcookie("user_email", $email, time() + (30 * 24 * 60 * 60), "/");
                    setcookie("user_password", $password, time() + (30 * 24 * 60 * 60), "/");
                } else {
                
                    setcookie("user_email", "", time() - 3600, "/");
                    setcookie("user_password", "", time() - 3600, "/");
                }
                $_SESSION['message'] = "Login successful!";
                
               
                header("Location: candidates-dashboard-my-profile.php");
                exit;
            } else {
                $_SESSION['message'] = "Invalid password. Please try again.";
            }
        } else {
            $_SESSION['message'] = "No account found with that email address.";
        }

        $stmt->close();
    } else {
        $_SESSION['message'] = "Please fill in all fields.";
    }
}

  
$conn->close();
$message = "";
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}

?>

<!DOCTYPE html>
<html lang="zxx">
    
<head>
        <!-- Required Meta Tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=== Bootstrap Min CSS ===-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Animate Min CSS -->
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <!--=== remixIcon CSS ===-->
        <link rel="stylesheet" href="assets/fonts/remixicon.css">
        <!-- Owl Carousel Min CSS --> 
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <!--=== metisMenu Min CSS ===-->
        <link rel="stylesheet" href="assets/css/metismenu.min.css">
        <!--=== simpleBar Min CSS ===--> 
        <link rel="stylesheet" href="assets/css/simplebar.min.css">
        <!-- Dropzone CSS --> 
        <link rel="stylesheet" href="assets/css/dropzone.min.css">
        <!-- Magnific Popup CSS --> 
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <!-- Odometer CSS -->
        <link rel="stylesheet" href="assets/css/odometer.min.css">
        <!--=== meanMenu Min CSS ===-->
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="assets/css/responsive.css">
        <!-- Theme Dark CSS -->
        <link rel="stylesheet" href="assets/css/theme-dark.css">

        <!--=== Title & Favicon ===-->
        <title>Zoben - Job Board & Career Portal HTML Template</title>
        <link rel="icon" type="image/png" href="assets/images/favicon.png">
        
    </head>
    <body>
        <!-- Pre Loader -->
        <div class="preloader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="spinner"></div>
                </div>
            </div>
        </div>
        <!-- End Pre Lo      ader -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="mobile-responsive-nav">
                <div class="container-fluid">
                    <div class="mobile-responsive-menu">
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets/images/logo.png" class="logo-one" alt="Logo">
                                <img src="assets/images/logo-2.png" class="logo-two" alt="Logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="desktop-nav desktop-nav-one nav-area">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md navbar-light ">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/images/logo.png" class="logo-one" alt="Logo">
                            <img src="assets/images/logo-2.png" class="logo-two" alt="Logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Home 
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="index.html" class="nav-link">
                                                Home One  
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-2.html" class="nav-link">
                                                Home Two
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-3.html" class="nav-link">
                                                Home Three
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Jobs
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="job-listing.html" class="nav-link">Job Listing</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="post-job.html" class="nav-link">Post A Job</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="job-details.html" class="nav-link">Job Details</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Employers
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="employers-listing.html" class="nav-link">
                                                Employers Listing
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="employers-details.html" class="nav-link">
                                                Employers Details
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dashboard.html" class="nav-link">
                                                Employers Dashboard
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Candidates
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="candidates-listing.html" class="nav-link">
                                                Candidates Listing
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="candidates-details.html" class="nav-link">
                                                Candidates Details
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                                <a href="candidates-dashboard.html" class="nav-link">
                                                    Candidates Dashboard
                                                </a>
                                            </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Blog
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="blog-1.html" class="nav-link">
                                                Blog Grid
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-2.html" class="nav-link">
                                                Blog Left Sidebar 
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-3.html" class="nav-link">
                                                Blog Right Sidebar 
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-details.html" class="nav-link">
                                                Blog Details 
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="categories.html" class="nav-link">
                                                Categories
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="tags.html" class="nav-link">
                                                Tags
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        Pages 
                                        <i class="ri-arrow-down-s-line"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="about.html" class="nav-link">
                                                About Us
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="contact.html" class="nav-link">
                                                Contact Us
                                            </a>
                                        </li>
    
                                        <li class="nav-item">
                                            <a href="testimonials.html" class="nav-link">
                                                Testimonials
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Freelancer
                                                <i class="ri-arrow-down-s-line"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="freelancer.html" class="nav-link">
                                                        Freelancer
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="freelancer-details.html" class="nav-link">
                                                        Freelancer Details 
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
    
                                        <li class="nav-item">
                                            <a href="dashboard-invoice.html" class="nav-link">
                                                Invoice
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Company
                                                <i class="ri-arrow-down-s-line"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="company.html" class="nav-link">
                                                        Company Listing
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="company-details.html" class="nav-link">
                                                        Company Details 
                                                    </a>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="search-job.html" class="nav-link">
                                                        Search Job
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
    
                                        <li class="nav-item">
                                            <a href="pricing.html" class="nav-link">
                                                Pricing Plan
                                            </a>
                                        </li>
    
                                        <li class="nav-item">
                                            <a href="faq.html" class="nav-link">
                                                FAQ
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="loginuser.php" class="nav-link active">
                                                Log In / Register
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="forgot-password.html" class="nav-link">
                                                Forgot Password
                                            </a>
                                        </li>
    
                                        <li class="nav-item">
                                            <a href="terms-condition.html" class="nav-link">
                                                Terms & Conditions
                                            </a>
                                        </li>
    
                                        <li class="nav-item">
                                            <a href="privacy-policy.html" class="nav-link">
                                                Privacy Policy
                                            </a>
                                        </li>
    
                                        <li class="nav-item">
                                            <a href="404.html" class="nav-link">
                                                404 Page
                                            </a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a href="coming-soon.html" class="nav-link">
                                                Coming Soon
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <div class="others-options d-flex align-items-center">
                                <div class="optional-item">
                                    <a href="loginuser.php" class="default-btn two border-radius-5">Login / Register <i class="ri-user-3-line"></i></a>
                                </div>

                                <div class="optional-item">
                                    <a href="post-job.html" class="default-btn border-radius-5">Post A Job <i class="ri-briefcase-2-line"></i></a>
                                </div>
                            </div> 
                        </div>
                    </nav>
                </div>
            </div>

            <div class="side-nav-responsive">
                <div class="container-max">
                    <div class="dot-menu">
                        <div class="circle-inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="side-nav-inner">
                            <div class="side-nav justify-content-center align-items-center">
                                <div class="side-nav-item">
                                    <a href="loginuser.php" class="default-btn two">
                                        Login / Register <i class="ri-user-3-line"></i>
                                    </a>
                                </div>

                                <div class="side-nav-item">
                                    <a href="post-job.html" class="default-btn">
                                        Post A Job <i class="ri-briefcase-2-line"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->

        <!-- Inner Banner -->
        <div class="inner-banner">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>Log In</h3>
                    <ul>
                        <li>
                            <a href="Home.php">Home</a>
                        </li>
                        <li><a href="Registeruser.php">Register</a></li></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- User Area -->
        <div class="user-area pt-10 pb-70">
        <div class="container" >
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="user-all-form">
                        <div class="contact-form">
                            <h3>Log In Now</h3>
                            <div class="bar"></div>
                            <?php if (!empty($message)): ?>
                            <div class="alert alert-danger text-center">
                                <?php echo htmlspecialchars($message); ?>
                            </div>
                        <?php endif; ?>
                            <form method="POST" action="loginuser.php">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input 
                                                type="email" 
                                                name="email" 
                                                class="form-control" 
                                                value="<?php echo isset($_COOKIE['user_email']) ? $_COOKIE['user_email'] : ''; ?>" 
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input 
                                                type="password" 
                                                name="password" 
                                                class="form-control" 
                                                value="<?php echo isset($_COOKIE['user_password']) ? $_COOKIE['user_password'] : ''; ?>" 
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 form-condition">
                                        <div class="agree-label">
                                        <input 
                                                type="checkbox" 
                                                id="chb1" 
                                                name="remember_me" 
                                                <?php echo isset($_COOKIE['user_email']) ? 'checked' : ''; ?> 
                                                onclick="toggleRememberMe(this)">
                                            <label for="chb1">
                                                Remember Me <a class="forget" href="forgot-password.php">Forgot My Password?</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 text-center">
                                        <button type="submit" name="action" value="login" class="default-btn">Log In Now</button>
                                    </div>
                                    <br><br>
                                    <br>
                                    <label for="chb1">
                                        Don't have an account? <a href="Registeruser.php">Register Now!</a>
                                    </label>

                                    <div class="col-12">
                                        <div class="sub-title">
                                            <span>Or</span>
                                        </div>
                                    </div>

                                    <div class="login-with-account">
                                        <ul>
                                            <li>
                                                <a href="https://www.facebook.com/" target="_blank">
                                                    <i class="ri-facebook-line"></i>
                                                    Login with Facebook
                                                </a>
                                            </li>

                                            <li>
                                                <a href="https://www.google.com/" target="_blank">
                                                    <i class="ri-google-line"></i>
                                                    Login with Google
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- User Area End -->

        <!-- Employers CV Area -->
        <div class="employers-cv-area">
            <div class="container">
                <div class="employers-cv-bg">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="employers-cv-content">
                                <h2>Let Employers Find You</h2>
                                <div class="bar"></div>
                                <p>Advertise your jobs to millions of monthly users and search 15.8 million CV in our database.</p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="employers-cv-btn">
                                <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#9af9f5f4eefbf9eedae0f5f8fff4b4f9f5f7">Upload Your CV</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Employers CV Area -->

        <!-- Footer Area -->
        <footer class="footer-area">
            <div class="container">
                <div class="footer-top pt-100 pb-70">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-md-6">
                            <div class="footer-widget">
                                <div class="footer-logo">
                                    <a href="index.html">
                                        <img src="assets/images/logo.png" class="footer-logo1" alt="Footer Logo">
                                        <img src="assets/images/logo-2.png" class="footer-logo2" alt="Footer Logo">
                                    </a>
                                </div>

                                 <ul class="footer-contact-list">
                                   <li>
                                        <i class="ri-map-pin-line"></i>
                                        <div class="content">
                                            <a href="https://goo.gl/maps/muUSCY6FnusqhrGK9" target="_blank">
                                                328 Queensberry Street, North Melbourne VIC
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="ri-mail-line"></i>
                                        <div class="content">
                                            <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#4a222f2626250a3025282f2464292527">
                                                <span class="__cf_email__" data-cfemail="1f777a7373705f65707d7a71317c7072">[email&#160;protected]</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <i class="ri-phone-line"></i>
                                        <div class="content">
                                            <a href="tel:4471234567890">
                                                +44 4325 9878 5875
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-6 col-md-6">
                            <div class="footer-widget">
                                <h3>For Employer</h3>
                                <ul class="footer-list">
                                    <li>
                                        <a href="candidates-listing.html" target="_blank">
                                            Browse Candidates
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="dashboard.html" target="_blank">
                                            Employer Dashboard
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="dashboard-packages.html" target="_blank">
                                            Job Packages
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="job-listing.html" target="_blank">
                                            Jobs Featured 
                                        </a>
                                    </li> 
    
                                    <li>
                                        <a href="post-job.html" target="_blank">
                                            Post A Job
                                        </a>
                                    </li> 
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-6 col-md-4">
                            <div class="footer-widget ps-5">
                                <h3>For Candidates</h3>
                                <ul class="footer-list">
                                    <li>
                                        <a href="job-listing.html" target="_blank">
                                            Browse Jobs
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="dashboard-submit-resume.html" target="_blank">
                                            Submit Resume
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="dashboard.html" target="_blank">
                                            Candidates Dashboard
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="job-listing.html" target="_blank">
                                            Browse Categories
                                        </a>
                                    </li> 
    
                                    <li>
                                        <a href="candidates-listing.html" target="_blank">
                                            Candidate Listing
                                        </a>
                                    </li> 
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-6 col-md-4">
                            <div class="footer-widget">
                                <h3>Company</h3>
                                <ul class="footer-list">
                                    <li>
                                        <a href="about.html" target="_blank">
                                            About Us
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="contact.html" target="_blank">
                                           Contact Us
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="terms-condition.html" target="_blank">
                                            Terms & Conditions      
                                        </a>
                                    </li> 
    
                                    <li>
                                        <a href="privacy-policy.html" target="_blank">
                                            Privacy Policy 
                                        </a>
                                    </li> 
    
                                    <li>
                                        <a href="candidates-listing.html" target="_blank">
                                            Candidate Listing
                                        </a>
                                    </li> 
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-2 col-sm-6 col-md-4">
                            <div class="footer-widget">
                                <h3>Quick Links</h3>
                                <ul class="footer-list">
                                    <li>
                                        <a href="job-listing.html" target="_blank">
                                            Jobs Listing
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="employers-listing.html" target="_blank">
                                            Employer Listing
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="post-job.html" target="_blank">
                                            Post New Job
                                        </a>
                                    </li> 
                                    <li>
                                        <a href="employers-listing.html" target="_blank">
                                            All Employers
                                        </a>
                                    </li> 
    
                                    <li>
                                        <a href="job-listing.html" target="_blank">
                                            Featured Jobs
                                        </a>
                                    </li> 
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copyright-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-7">
                            <div class="copy-right-text">
                                <p>
                                   © <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear())</script> Zoben. All Rights Reserved by 
                                    <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a> 
                                </p>
                            </div>
                        </div>
        
                        <div class="col-lg-6 col-md-5">
                            <div class="copy-right-social-link">
                                <ul class="social-link">
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <i class="ri-instagram-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/" target="_blank">
                                            <i class="ri-twitter-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank">
                                            <i class="ri-linkedin-fill"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->

        <!-- Jquery Min JS -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- Bootstrap Bundle Min JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!--=== Magnific Popup Min JS ===-->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!--=== Odometer Min JS ===-->
        <script src="assets/js/odometer.min.js"></script>
        <!-- Appear Min JS -->
        <script src="assets/js/jquery.appear.min.js"></script>
        <!--=== meanMenu Min JS ===-->
        <script src="assets/js/meanmenu.min.js"></script>
        <!--=== metisMenu Min JS ===-->
        <script src="assets/js/metismenu.min.js"></script>
        <!--=== simpleBar Min JS ===-->
        <script src="assets/js/simplebar.min.js"></script>
        <!-- Dropzone JS -->
        <script src="assets/js/dropzone.min.js"></script>
        <!-- Sticky Sidebar JS -->
        <script src="assets/js/sticky-sidebar.min.js"></script>
        <!-- TweenMax JS -->
        <script src="assets/js/tweenMax.min.js"></script>
        <!-- Owl Carousel JS -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Wow Min JS -->
        <script src="assets/js/wow.min.js"></script>
        <!--=== ajaxChimp Min JS ===-->
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        <!-- Form Validator Min JS -->
        <script src="assets/js/form-validator.min.js"></script>
        <!-- Contact Form JS -->
        <script src="assets/js/contact-form-script.js"></script>
        <!--=== Custom JS ===-->
        <script src="assets/js/custom.js"></script>

        <script>
        // JavaScript to handle dynamic checkbox and cookie-clearing logic
        function toggleRememberMe(checkbox) {
            if (!checkbox.checked) {
                // Clear cookies if checkbox is unchecked
                document.cookie = "user_email=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                document.cookie = "user_password=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                // Clear email and password fields
                document.getElementById("email").value = "";
                document.getElementById("password").value = "";
            }
        }
    </script>
        
    </body>

<!-- Mirrored from templates.hibootstrap.com/zoben/default/log-in-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 10:02:50 GMT -->
</html>