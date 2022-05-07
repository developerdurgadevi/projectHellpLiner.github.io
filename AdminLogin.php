<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Site Metas -->
   <title>Project Helpliner</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- site icon -->
   <link rel="icon" href="images/fevicon.png" type="image/png" />
   <!-- Bootstrap core CSS -->
   <link href="css/bootstrap.css" rel="stylesheet">
   <!-- FontAwesome Icons core CSS -->
   <link href="css/font-awesome.min.css" rel="stylesheet">
   <!-- Custom animate styles for this template -->
   <link href="css/animate.css" rel="stylesheet">
   <!-- Custom styles for this template -->
   <link href="style.css" rel="stylesheet">
   <!-- Responsive styles for this template -->
   <link href="css/responsive.css" rel="stylesheet">
   <!-- Colors for this template -->
   <link href="css/colors.css" rel="stylesheet">
   <!-- light box gallery -->
   <link href="css/ekko-lightbox.css" rel="stylesheet">
   <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->
   <?php
if (isset($_POST["sub"]))
{
$name=$_POST["txt1"];
$pass=$_POST["txt2"];

	if($name=="Admin")
	{
		if($pass=="Admin1234")
		{
			echo "<script type='text/javascript'>alert('Login Successfully');location='Admin_Home.php'</script>";
			
		}
		else{
			
			echo "<script type='text/javascript'>alert('Incorrect Password');location='Index.php'</script>";
		}
	}
	else
	{
			echo "<script type='text/javascript'>alert('Incorrect Username');location='Index.php'</script>";
	}
	
}


?>
   </head>
   <body id="inner_page">
      <!-- header -->
     <?php include 'Header.php';
	 ?>
      <!-- end header -->
      
      <!-- section -->
      <section class="main_full inner_page">
        <div class="container-fluid">
          <div class="row">
             <div class="full">
               <h3>Admin Login</h3>    
             </div>
          </div>
        </div>
      </section>
      <!-- end section -->
    
    <!-- section -->
     <section class="layout_padding section">
         <div class="container">
           <div class="row">
               <div class="col-md-12">
                  <div class="contact_section margin_top_30">
                     <div class="row">
                        <div class="col-md-8 offset-md-2">
                           <div class="form_cont">
						   
						   
						   
						   

						   
						   
						   
						   
                               <form action="" method="post">
                                  <fieldset>
                                     <div class="field">
                                        <input type="text" name="txt1" placeholder="User Name">
                                     </div>
                                     <div class="field">
                                        <input type="password" name="txt2" placeholder="Password">
                                     </div>
                                    
                                     <div class="field center">
                                       <button><input type="submit" name="sub" value="Login"></button>
                                  </div></fieldset>
                               </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->
  
      <!-- section -->
  
      <!-- end section -->
     
      <!-- footer -->
        <footer class="footer layout_padding">
         <div class="container">
            <div class="row">

               <div class="col-md-4 col-sm-12">
                  <a href="index.html"><img class="img-responsive" src="images/Logo1.png" alt="#" /></a>
                  <div class="footer_link_heading">
                     <div class="footer_menu margin_top_30">
                     <ul>
                        <li><a href="tel:9876543210">9876 543 210</a></li>
                        <li><a href="#">aaddprojecthelpliner@gmail.com</a></li>
                        <li><a href="#">Madurai, Tamilnadu</a></li>
                     </ul>
                  </div>
                  </div>
               </div>
               
               <div class="col-md-8">
                 <div class="row">
                    <div class="col-md-4 col-sm-12">
                  <div class="footer_link_heading">
                     <h3>Links </h3>
                  </div>
                  <div class="footer_menu">
                     <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Admin Login</a></li>
                        <li><a href="#">Customer Login</a></li>
                        <li><a href="#">Customer Registration</a></li>
                     </ul>
                  </div>
               </div>

              
               
            </div>
         </div>
      </footer>
      <div class="cpy">
        <div class="container">
           <div class="row">
             <div class="col-md-12">
               <p>Copyright 2021. All Rights Reserved.AADD Project Helpliner</p>
             </div>
           </div>
        </div>
      </div>
      <!-- end footer -->
      <!-- Core JavaScript
         ================================================== -->
      <script src="js/jquery.min.js"></script>
      <script src="js/tether.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/parallax.js"></script>
      <script src="js/animate.js"></script>
      <script src="js/ekko-lightbox.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>































