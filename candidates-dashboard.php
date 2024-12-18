<?php
include('connection.php');
include('profile.php');
?>
<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from templates.hibootstrap.com/zoben/default/candidates-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2024 10:02:41 GMT -->
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
                    <li class="nav-item active">
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

                    <li class="nav-item">
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
                                                        <p class="mb-3 email"><a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="89e1ece5e5e6c9e8e7edfbe6fae4e0fde1a7eae6e4">[email&#160;protected]</a></p>
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

            <!-- Breadcrumb Area -->
            <div class="breadcrumb-area">
                <h1>Howdy, Invision!</h1>
                <ol class="breadcrumb">
                    <li class="item"><a href="dashboard.html">Home</a></li>
                    <li class="item">Dashboard</li>
                </ol>
            </div>
            <!-- End Breadcrumb Area -->

            <!-- End Notification Alert Area -->

            <!-- Start Dashboard Fun Fact Area -->
            <div class="dashboard-fun-fact-area">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="stats-fun-fact-box">
                            <div class="icon-box">
                                <i class="ri-briefcase-line"></i>
                            </div>
                            <span class="sub-title">Posted Jobs</span>
                            <h3>100</h3>
                        </div>
                    </div>
    
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="stats-fun-fact-box">
                            <div class="icon-box">
                                <i class="ri-file-list-line"></i>
                            </div>
                            <span class="sub-title">Application</span>
                            <h3>6382</h3>
                        </div>
                    </div>
    
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="stats-fun-fact-box">
                            <div class="icon-box">
                                <i class="ri-chat-2-line"></i>
                            </div>
                            <span class="sub-title">Messages</span>
                            <h3>85</h3>
                        </div>
                    </div>
    
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="stats-fun-fact-box">
                            <div class="icon-box">
                                <i class="ri-close-line"></i>
                            </div>
                            <span class="sub-title">Shortlist</span>
                            <h3>57</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Dashboard Fun Fact Area -->

            <!-- Start Notifications and Invoices Area -->
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="recent-notifications-box">
                        <h3>Recent Notifications</h3>

                        <ul>
                            <li>
                                <div class="icon">
                                  <i class="ri-briefcase-2-line"></i>
                                </div>
                                <span>Tyrone Lowe</span> Applied For A Job <strong>Software Engineer</strong>
                                <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </li>

                            <li>
                                <div class="icon">
                                  <i class="ri-briefcase-2-line"></i>
                                </div>
                                <span>Kaedyn Fraser</span> Applied For A Job <strong>Web Developer</strong>
                                <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </li>

                            <li>
                                <div class="icon">
                                  <i class="ri-briefcase-2-line"></i>
                                </div>
                                <span>Harold Adams</span> Applied For A Job <strong>Technical Architect</strong>
                                <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </li>

                            <li>
                                <div class="icon">
                                  <i class="ri-briefcase-2-line"></i>
                                </div>
                                <span>Joshua Mcnair</span> Applied For A Job <strong>UI Designer</strong>
                                <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </li>

                            <li>
                                <div class="icon">
                                  <i class="ri-briefcase-2-line"></i>
                                </div>
                                <span>Kathryn Mcgee</span> Applied For A Job <strong>Senior Product Designer</strong>
                                <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </li>

                            <li>
                                <div class="icon">
                                  <i class="ri-briefcase-2-line"></i>
                                </div>
                                <span>Kaedyn Fraser</span> Applied For A Job <strong>Product Designer</strong>
                                <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </li>

                            <li>
                                <div class="icon">
                                  <i class="ri-briefcase-2-line"></i>
                                </div>
                                <span>Dianna Smiley</span> Applied For A Job <strong>Android Developer</strong>
                                <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </li>

                            <li>
                                <div class="icon">
                                  <i class="ri-briefcase-2-line"></i>
                                </div>
                                <span>Micheal Murphy</span> Applied For A Job <strong>Digital Marketer</strong>
                                <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </li>

                            <li>
                                <div class="icon">
                                  <i class="ri-briefcase-2-line"></i>
                                </div>
                                <span>Yamilet Booker</span> Applied For A Job <strong>Senior Data Engineer</strong>
                                <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </li>

                            <li>
                                <div class="icon">
                                  <i class="ri-briefcase-2-line"></i>
                                </div>
                                <span>Milana Myles</span> Applied For A Job <strong>Shopify Developer</strong>
                                <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="invoices-box">
                        <h3>Invoices</h3>

                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="ri-file-line"></i>
                                </div>
                                <ul>
                                    <li class="paid">Paid</li>
                                    <li>Order: #181815</li>
                                    <li>Date: 14/08/2024</li>
                                </ul>
                                <span>Premium Plan</span>
                                <a href="dashboard-invoice.html" class="default-btn">View Invoice</a>
                            </li>

                            <li>
                                <div class="icon">
                                    <i class="ri-file-line"></i>
                                </div>
                                <ul>
                                    <li class="unpaid">Unpaid</li>
                                    <li>Order: #181814</li>
                                    <li>Date: 13/08/2024</li>
                                </ul>
                                <span>Advance Plan</span>
                                <a href="dashboard-invoice.html" class="default-btn">View Invoice</a>
                            </li>

                            <li>
                                <div class="icon">
                                    <i class="ri-file-line"></i>
                                </div>
                                <ul>
                                    <li class="paid">Paid</li>
                                    <li>Order: #181813</li>
                                    <li>Date: 12/08/2024</li>
                                </ul>
                                <span>Starter Plan</span>
                                <a href="dashboard-invoice.html" class="default-btn">View Invoice</a>
                            </li>

                            <li>
                                <div class="icon">
                                    <i class="ri-file-line"></i>
                                </div>
                                <ul>
                                    <li class="unpaid">Unpaid</li>
                                    <li>Order: #181812</li>
                                    <li>Date: 11/08/2024</li>
                                </ul>
                                <span>Basic Plan</span>
                                <a href="dashboard-invoice.html" class="default-btn">View Invoice</a>
                            </li>

                            <li>
                                <div class="icon">
                                    <i class="ri-file-line"></i>
                                </div>
                                <ul>
                                    <li class="paid">Paid</li>
                                    <li>Order: #181815</li>
                                    <li>Date: 14/08/2024</li>
                                </ul>
                                <span>Premium Plan</span>
                                <a href="dashboard-invoice.html" class="default-btn">View Invoice</a>
                            </li>

                            <li>
                                <div class="icon">
                                    <i class="ri-file-line"></i>
                                </div>
                                <ul>
                                    <li class="unpaid">Unpaid</li>
                                    <li>Order: #181814</li>
                                    <li>Date: 13/08/2024</li>
                                </ul>
                                <span>Advance Plan</span>
                                <a href="dashboard-invoice.html" class="default-btn">View Invoice</a>
                            </li>

                            <li>
                                <div class="icon">
                                    <i class="ri-file-line"></i>
                                </div>
                                <ul>
                                    <li class="paid">Paid</li>
                                    <li>Order: #181813</li>
                                    <li>Date: 12/08/2024</li>
                                </ul>
                                <span>Starter Plan</span>
                                <a href="dashboard-invoice.html" class="default-btn">View Invoice</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Notifications and Invoices Area -->

            <!-- Start Recent Jobs Area -->
            <div class="dashboard-jobs-box">
                <h2>Jobs Applied Recently</h2>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="recent-job-card box-shadow">
                            <div class="content">
                                <div class="recent-job-img">
                                    <a href="job-details.html">
                                        <img src="assets/images/recent-job/recent-job4.jpg" alt="Images">
                                    </a>
                                </div>
        
                                <h3><a href="job-details.html">Product Designer</a></h3>
                                
                                <ul class="job-list1">
                                    <li><i class="ri-briefcase-line"></i> Design</li>
                                    <li><i class="ri-time-line"></i> 2 Week Ago</li>
                                </ul>
                                <span><i class="ri-map-pin-line"></i> 305 Hicks St Brooklyn, NY</span>
                            </div>

                            <div class="job-sub-content">
                                <ul class="job-list2">
                                    <li class="time">Full Time</li>
                                    <li class="freelance">Freelance</li>
                                    <li class="urgent">Urgent</li>
                                </ul>

                                <div class="price">$150 - $180 <b>/Per Week</b></div>
                            </div>
                           
                            <button class="bookmark-btn"><i class="ri-close-line"></i></button>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="recent-job-card box-shadow">
                            <div class="content">
                                <div class="recent-job-img">
                                    <a href="job-details.html">
                                        <img src="assets/images/recent-job/recent-job5.jpg" alt="Images">
                                    </a>
                                </div>
        
                                <h3><a href="job-details.html">Creative Director</a></h3>
                                
                                <ul class="job-list1">
                                    <li><i class="ri-briefcase-line"></i> Automotive Jobs</li>
                                    <li><i class="ri-time-line"></i> 2 Hour Ago</li>
                                </ul>
                                <span><i class="ri-map-pin-line"></i> 105 San Antonio, TX</span>
                            </div>

                            <div class="job-sub-content">
                                <ul class="job-list2">
                                    <li class="time">Full Time</li>
                                    <li class="freelance">Freelance</li>
                                </ul>

                                <div class="price">$120 - $140 <b>/Per Week</b></div>
                            </div>
                           
                            <button class="bookmark-btn"><i class="ri-close-line"></i></button>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="recent-job-card box-shadow">
                            <div class="content">
                                <div class="recent-job-img">
                                    <a href="job-details.html">
                                        <img src="assets/images/recent-job/recent-job6.jpg" alt="Images">
                                    </a>
                                </div>
        
                                <h3><a href="job-details.html">General Ledger Accountant</a></h3>
                                
                                <ul class="job-list1">
                                    <li><i class="ri-briefcase-line"></i> Accounting  & Finance</li>
                                    <li><i class="ri-time-line"></i> 1 Day Ago</li>
                                </ul>
                                <span><i class="ri-map-pin-line"></i> 320 Los Angeles, CA</span>
                            </div>

                            <div class="job-sub-content">
                                <ul class="job-list2">
                                    <li class="time">Full Time</li>
                                    <li class="freelance">Freelance</li>
                                    <li class="internship">Internship</li>
                                </ul>

                                <div class="price">$120 - $140 <b>/Per Week</b></div>
                            </div>
                           
                            <button class="bookmark-btn"><i class="ri-close-line"></i></button>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="recent-job-card box-shadow">
                            <div class="content">
                                <div class="recent-job-img">
                                    <a href="job-details.html">
                                        <img src="assets/images/recent-job/recent-job7.jpg" alt="Images">
                                    </a>
                                </div>
        
                                <h3><a href="job-details.html">Finance Manager & Health </a></h3>
                                
                                <ul class="job-list1">
                                    <li><i class="ri-briefcase-line"></i> Medical & Health</li>
                                    <li><i class="ri-time-line"></i> 5 Days Ago</li>
                                </ul>
                                <span><i class="ri-map-pin-line"></i> 320 Atlanta, GA</span>
                            </div>

                            <div class="job-sub-content">
                                <ul class="job-list2">
                                    <li class="time">Full Time</li>
                                    <li class="freelance">Freelance</li>
                                    <li class="urgent">Urgent</li>
                                </ul>

                                <div class="price">$30 - $40 <b>/Per Hour</b></div>
                            </div>
                           
                            <button class="bookmark-btn"><i class="ri-close-line"></i></button>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="recent-job-card box-shadow">
                            <div class="content">
                                <div class="recent-job-img">
                                    <a href="job-details.html">
                                        <img src="assets/images/recent-job/recent-job8.jpg" alt="Images">
                                    </a>
                                </div>
        
                                <h3><a href="job-details.html">Group Marketing Manager</a></h3>
                                
                                <ul class="job-list1">
                                    <li><i class="ri-briefcase-line"></i> Customer</li>
                                    <li><i class="ri-time-line"></i> 3 Days Ago</li>
                                </ul>
                                <span><i class="ri-map-pin-line"></i> 305 Hicks St Brooklyn, NY</span>
                            </div>

                            <div class="job-sub-content">
                                <ul class="job-list2">
                                    <li class="time">Full Time</li>
                                    <li class="freelance">Freelance</li>
                                    <li class="urgent">Urgent</li>
                                </ul>

                                <div class="price">$30 - $40 <b>/Per Hour</b></div>
                            </div>
                           
                            <button class="bookmark-btn"><i class="ri-close-line"></i></button>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="recent-job-card box-shadow">
                            <div class="content">
                                <div class="recent-job-img">
                                    <a href="job-details.html">
                                        <img src="assets/images/recent-job/recent-job9.jpg" alt="Images">
                                    </a>
                                </div>
        
                                <h3><a href="job-details.html">iOS Developer</a></h3>
                                
                                <ul class="job-list1">
                                    <li><i class="ri-briefcase-line"></i> IT Agency</li>
                                    <li><i class="ri-time-line"></i> 1 Days Ago</li>
                                </ul>
                                <span><i class="ri-map-pin-line"></i> Los Angeles, CA</span>
                            </div>

                            <div class="job-sub-content">
                                <ul class="job-list2">
                                    <li class="time">Full Time</li>
                                    <li class="freelance">Freelance</li>
                                </ul>

                                <div class="price">$20 - $30 <b>/Per Hour</b></div>
                            </div>
                           
                            <button class="bookmark-btn"><i class="ri-close-line"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Recent Jobs Area -->

            <!-- Start Copyright Area -->
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

        
    </body>
</html>