<?php
include('connection.php');
include('profile.php');
?>
<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from templates.hibootstrap.com/zoben/default/candidates-dashboard-my-resume.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 10:02:58 GMT -->
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
        <style>
        /* Make the resume container take the full height and fit properly */
        .resume-container {
            width: 100%;
            height: 100vh; /* Full viewport height */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #ffffff;
            box-sizing: border-box;
            margin:10px;
        }

        .resume-preview {
            width: 80%;
            max-width: 1200px;
            text-align: center;
        }

        .resume-preview h2 {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
        }

        .resume-preview iframe {
            width: 80%;
            height: 50vh; /* Make the iframe larger to fit the screen */
            border: none;
            border-radius: 8px;
            background-color: #fff;
            margin-bottom:50px;
        }

        .alert-info {
            background-color: #e7f3fe;
            color: #31708f;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #bce8f1;
        }
    
    </style>
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
        <!-- End Pre Loader -->

        <!-- Start Sidemenu Area -->
        <div class="sidemenu-area">
            <div class="sidemenu-header">
                <a href="candidates-dashboard.html" class="navbar-brand d-flex align-items-center">
                    <img src="assets/images/logo.png" class="logo-one" alt="Logo">
                    <img src="assets/images/logo-2.png" class="logo-two" alt="Logo">
                </a>

                <div class="responsive-burger-menu d-block d-lg-none">
                    <span class="top-bar"></span>
                    <span class="middle-bar"></span>
                    <span class="bottom-bar"></span>
                </div>
            </div>

            <div class="sidemenu-body">
                <ul class="sidemenu-nav metisMenu h-100" id="sidemenu-nav" data-simplebar>
                    <li class="nav-item ">
                        <a href="candidates-dashboard.php" class="nav-link">
                            <span class="icon"><i class="ri-home-line"></i></span>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="candidates-dashboard-my-profile.php" class="nav-link">
                            <span class="icon"><i class="ri-user-line"></i></span>
                            <span class="menu-title">My Profile</span>
                        </a>
                    </li>

                    <li class="nav-item active">
                        <a href="candidates-dashboard-my-resume.php" class="nav-link">
                            <span class="icon"><i class="ri-file-list-line"></i></span>
                            <span class="menu-title">My Resume</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="candidates-dashboard-applied-job.html" class="nav-link">
                            <span class="icon"><i class="ri-briefcase-line"></i></span>
                            <span class="menu-title">Applied Jobs</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="candidates-dashboard-job-alerts.html" class="nav-link">
                            <span class="icon"><i class="ri-notification-3-line"></i></span>
                            <span class="menu-title">Job Alerts</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="candidates-dashboard-shortlisted-job.html" class="nav-link">
                            <span class="icon"><i class="ri-bookmark-line"></i></span>
                            <span class="menu-title">Shortlisted Jobs</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="candidates-dashboard-cv-manager.html" class="nav-link">
                            <span class="icon"><i class="ri-book-line"></i></span>
                            <span class="menu-title">CV Manager</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="dashboard-packages.html" class="nav-link">
                            <span class="icon"><i class="ri-stack-fill"></i></span>
                            <span class="menu-title">Packages</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="dashboard-messages.html" class="nav-link">
                            <span class="icon"><i class="ri-chat-1-line"></i></span>
                            <span class="menu-title">Messages</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="dashboard-invoice.html" class="nav-link">
                            <span class="icon"><i class="ri-price-tag-line"></i></span>
                            <span class="menu-title">Invoice</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="dashboard-change-password.php" class="nav-link">
                            <span class="icon"><i class="ri-lock-line"></i></span>
                            <span class="menu-title">Change Password</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="dashboard-my-profile.html" class="nav-link">
                            <span class="icon"><i class="ri-user-line"></i></span>
                            <span class="menu-title">View Profile</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="userlogout.php" class="nav-link">
                            <span class="icon"><i class="ri-logout-circle-r-line"></i></span>
                            <span class="menu-title">Logout</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="index.html" class="nav-link">
                            <span class="icon"><i class="ri-delete-bin-line"></i></span>
                            <span class="menu-title">Delete Profile</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Sidemenu Area -->

        <!-- Start Main Dashboard Content Wrapper Area -->
        <div class="main-dashboard-content d-flex flex-column">
            
            <!-- Start Navbar Area -->
            <div class="navbar-area">
                <div class="main-responsive-nav">
                    <div class="main-responsive-menu">
                        <div class="responsive-burger-menu d-lg-none d-block">
                            <span class="top-bar"></span>
                            <span class="middle-bar"></span>
                            <span class="bottom-bar"></span>
                        </div>
                    </div>
                </div>

                <div class="mobile-responsive-nav">
                    <div class="mobile-responsive-menu">
                    </div>
                </div>

                <!-- Menu For Desktop Device -->
                <div class="desktop-nav desktop-nav-one nav-area">
                    <nav class="navbar navbar-expand-md navbar-light ">
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
                                    <a href="#" class="nav-link">
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
                                            <a href="log-in-register.html" class="nav-link">
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
                                <div class="dropdown profile-nav-item">
                                        <a href="#" class="dropdown-bs-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <div class="menu-profile">
                                            <img src="<?= !empty($user['profile_picture']) ? $user['profile_picture'] : 'assets/images/user-img/user.png' ?>" alt="Profile Preview" class="profile-img" style="width:50px;" />
                                            <span class="name"><?= htmlspecialchars($user['full_name']) ?></span>
                                            </div>
                                        </a>
            
                                        <div class="dropdown-menu">
                                            <div class="dropdown-header d-flex flex-column align-items-center">
                                                <div class="figure mb-3">
                                                <img src="<?= !empty($user['profile_picture']) ? $user['profile_picture'] : 'assets/images/user-img/user.png' ?>" alt="Profile Preview" class="profile-img" style="width:100px;" />
                                                </div>
            
                                                <div class="info text-center">
                                                    <span class="name"><?= htmlspecialchars($user['full_name']) ?></span>
                                                    
                                                    <p class="mb-3 email"><?= htmlspecialchars($user['email']) ?></p>
                                                </div>
                                                <?php if (!empty($user['inserted_date'])): ?>
                                                    <p class="inserted_date" style="font-size:15px">last updated: 
                                                <?php echo date("F j, Y", strtotime($user['inserted_date'])); ?>
                                                     </p>
                                                <?php else: ?>
                                                        <p class="inserted_date">Profile has not been updated yet.</p>
                                                <?php endif; ?>
                                            </div>
            
            
                                            <div class="dropdown-body">
                                                <ul class="profile-nav p-0 pt-3">
                                                    <li class="nav-item active">
                                                        <a href="candidates-dashboard.php" class="nav-link">
                                                            <span class="icon"><i class="ri-home-line"></i></span>
                                                            <span class="menu-title">Dashboard</span>
                                                        </a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a href="dashboard-applicants.html" class="nav-link">
                                                            <span class="icon"><i class="ri-file-list-line"></i></span>
                                                            <span class="menu-title">All Applicants</span>
                                                        </a>
                                                    </li>
                                
                                                    <li class="nav-item">
                                                        <a href="candidates-dashboard-my-resume.php" class="nav-link">
                                                            <span class="icon"><i class="ri-close-line"></i></span>
                                                            <span class="menu-title">View Resumes</span>
                                                        </a>
                                                    </li>
                                
                                                    <li class="nav-item">
                                                        <a href="dashboard-packages.html" class="nav-link">
                                                            <span class="icon"><i class="ri-stack-fill"></i></span>
                                                            <span class="menu-title">Packages</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
            
                                            <div class="dropdown-footer">
                                                <ul class="profile-nav">
                                                    <li class="nav-item">
                                                        <a href="index.html" class="nav-link"><i class="ri-logout-box-r-line"></i> <span>Logout</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </nav>
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
                                    <div class="option-item">
                                        <div class="dropdown profile-nav-item">
                                            <a href="#" class="dropdown-bs-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <div class="menu-profile">
                                                    <img src="assets/images/user-img/user-img2.jpg" class="rounded-circle" alt="image">
                                                    <span class="name">My Account</span>
                                                </div>
                                            </a>
                
                                            <div class="dropdown-menu">
                                                <div class="dropdown-header d-flex flex-column align-items-center">
                                                    <div class="figure mb-3">
                                                        <img src="assets/images/user-img/user-img2.jpg" class="rounded-circle" alt="image">
                                                    </div>
                
                                                    <div class="info text-center">
                                                        <span class="name">Andy Smith</span>
                                                        <p class="mb-3 email"><a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0169646d6d6e41606f65736e726c6875692f626e6c">[email&#160;protected]</a></p>
                                                    </div>
                                                </div>
                
                                                <div class="dropdown-body">
                                                    <ul class="profile-nav p-0 pt-3">
                                                        <li class="nav-item active">
                                                            <a href="dashboard.html" class="nav-link">
                                                                <span class="icon"><i class="ri-home-line"></i></span>
                                                                <span class="menu-title">Dashboard</span>
                                                            </a>
                                                        </li>
    
                                                        <li class="nav-item">
                                                            <a href="dashboard-applicants.html" class="nav-link">
                                                                <span class="icon"><i class="ri-file-list-line"></i></span>
                                                                <span class="menu-title">All Applicants</span>
                                                            </a>
                                                        </li>
                                    
                                                        <li class="nav-item">
                                                            <a href="dashboard-submit-resume.html" class="nav-link">
                                                                <span class="icon"><i class="ri-close-line"></i></span>
                                                                <span class="menu-title">Submit Resumes</span>
                                                            </a>
                                                        </li>
                                    
                                                        <li class="nav-item">
                                                            <a href="dashboard-packages.html" class="nav-link">
                                                                <span class="icon"><i class="ri-stack-fill"></i></span>
                                                                <span class="menu-title">Packages</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                
                                                <div class="dropdown-footer">
                                                    <ul class="profile-nav">
                                                        <li class="nav-item">
                                                            <a href="index.html" class="nav-link"><i class="ri-logout-box-r-line"></i> <span>Logout</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navbar Area -->
            <div class="resume-container">
        <div class="resume-preview">
            <h2><?= htmlspecialchars($user['full_name']) ?> Resume</h2>
<br>
            <?php if ($message): ?>
                <div class="alert-info"><?= htmlspecialchars($message) ?></div>
            <?php endif; ?>

            <?php if (isset($resume_name)): ?>
               
                <p>Below is your uploaded resume:</p>


                <?php

                $file_extension = pathinfo($resume_path, PATHINFO_EXTENSION);
                if ($file_extension === 'pdf' && file_exists($resume_path)): ?>
                    <iframe src="<?= htmlspecialchars($resume_path) ?>" title="Resume"></iframe>
                <?php else: ?>
                    <p>Your resume is not a PDF or the file is missing.</p>
                <?php endif; ?>
            <?php else: ?>
                <p>No resume uploaded yet. Please upload your resume from your profile page.</p>
            <?php endif; ?>
        </div>
    </div>
 <br>
 <br>
            <div class="copyrights-area">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <p><i class="ri-copyright-line"></i>  <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear())</script>  <a href="index.html">Zoben</a>. All Rights Reserved </p>
                    </div>

                    <div class="col-lg-6 col-sm-6 col-md-6 text-end">
                        <p>Designed by  <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a> 
                    </div>
                </div>
            </div>
            <!-- End Copyright Area -->
        </div>
       

        <script src="assets/js/jquery.min.js"></script>
      
        <script src="assets/js/bootstrap.bundle.min.js"></script>
    
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        
        <script src="assets/js/odometer.min.js"></script>
       
        <script src="assets/js/jquery.appear.min.js"></script>
      
        <script src="assets/js/meanmenu.min.js"></script>
    
        <script src="assets/js/metismenu.min.js"></script>
     
        <script src="assets/js/simplebar.min.js"></script>
     
        <script src="assets/js/dropzone.min.js"></script>
     
        <script src="assets/js/sticky-sidebar.min.js"></script>
     
        <script src="assets/js/tweenMax.min.js"></script>
       
        <script src="assets/js/owl.carousel.min.js"></script>
       
        <script src="assets/js/wow.min.js"></script>
       
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
      
        <script src="assets/js/form-validator.min.js"></script>

        <script src="assets/js/contact-form-script.js"></script>
   
        <script src="assets/js/custom.js"></script>
        <script>
        
        window.addEventListener('load', function () {
            var iframe = document.querySelector('iframe');
            if (iframe) {
                iframe.style.height = (window.innerHeight - 100) + 'px'; 
            }
        });
    </script>    
</body>
</html>