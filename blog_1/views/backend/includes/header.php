<!DOCTYPE html>
<html lang="en">

  <head>
    
    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO -->
    <meta name="description" content="150 words">
    <meta name="author" content="uipasta">
    <meta name="url" content="http://www.yourdomainname.com">
    <meta name="copyright" content="company name">
    <meta name="robots" content="index,follow">
    
    
    <title>Hoàng Công Kma - Blog Bán Súng</title>
    
    <!-- Favicon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="assets/css/plugin.css">
    
    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    
    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
    
    
    <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
      .cate img{
        width: 200px;
        height: 150px;
      }
      .user img{
        width: 50px;
        height: 50px;
      }
      .post img{
         width: 200px;
        height: 150px;
      }
    </style>
  </head>

 <body>

    
     
     <!-- Preloader Start -->
     <div class="preloader">
       <div class="rounder"></div>
      </div>
      <!-- Preloader End -->
      
      
    
    
    <div id="main">
        <div class="container">
            <div class="row">
                
               
                 
                 <!-- About Me (Left Sidebar) Start -->
                 <div class="col-md-3">
                   <div class="about-fixed">
                    
                     <div class="my-pic">
                      <?php if (isset($_SESSION['ava_login'])) { ?>
                                 <?php echo "<img src='images/user/".$_SESSION['ava_login']."' >" ?>
                      <?php } ?>
                        <a href="javascript:void(0)" class="collapsed" data-target="#menu" data-toggle="collapse"><i class="icon-menu menu"></i></a>
                         <div id="menu" class="collapse">
                           <ul class="menu-link">
                               <li><a href="index.php?type=backend&mod=dashboard&act=index">Dashboard</a></li>
                               <li><a href="index.php?type=backend&mod=category&act=index">Category</a></li>
                               <li><a href="index.php?type=backend&mod=post&act=index">Post</a></li>
                               <li><a href="index.php?type=backend&mod=user&act=index">User</a></li>
                            </ul>
                         </div>
                        </div>
                      
                      
                      
                      <div class="my-detail">
                        
                        <div class="white-spacing" >
                            <h1>
                              <?php if (isset($_SESSION['user_login'])) { ?>
                                 <?php echo $_SESSION['user_login']; ?>
                              <?php } ?>
                            </h1>
                            <span>Web Developer</span>
                        </div><br><br>
                          <?php if ( isset($_SESSION['login'])){ ?>
                          <a href="index.php?type=backend&mod=auth&act=logout">Log out</a>             
                          <?php } ?>
                       <ul class="social-icon">
                         <li><a href="#" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                         <li><a href="#" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                         <li><a href="#" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                         <li><a href="#" target="_blank" class="github"><i class="fa fa-github"></i></a></li>
                        </ul>

                    </div>
                  </div>
                </div>