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
 
   </head>
   <body id="inner_page">
      <!-- header -->
     <?php include "Admin_Header.php"; ?>

      <!-- end header -->
      
      <!-- section -->
      <section class="main_full inner_page">
        <div class="container-fluid">
          <div class="row">
             <div class="full">
               <h3>All Projects</h3>    
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
						   
						   <?php
include "Connection.php"; 
$sql = "SELECT * FROM project where status='Approved'";
  
$retval=mysqli_query($conn, $sql);  

if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
   $title=$row['title'];
   $pid=$row['pid'];
   $word=$row['word'];
   $ppt=$row['ppt'];
   $video=$row['video'];
?>

				                   
                                  <fieldset>
                                     <div class="field">
									 <h3><?php echo $title; ?></h3>
									<p>Project Id: <?php echo $row['pid']; ?></p>
<p>Uploader ame: <?php echo $row['name']; ?></p>
                                       <!-- <a href="Detail.php?pid=<?php echo $pid;?>" style="font-size:30px;"><?php echo $title; ?></a>-->
										 <p><img src="Images/word.jpg" height="200px" style="margin:0px 0px 0px 30px;">     <a href="downloadword.php?pname=<?php echo $word;?>"><img src="Images/d.png" height="200px"></a></p>
										<p><img src="Images/ppt.png" height="200px"> <a href="downloadword.php?pname=<?php echo $ppt;?>"><img src="Images/d.png" height="200px"></a><p>
										   <p><img src="Images/video.png" height="200px">  <a href="downloadword.php?pname=<?php echo $video;?>"><img src="Images/d.png" height="200px"></a><p>
                                     </div>
                                   
                                    
                                   </fieldset>
                               
							   
							   
							   
							   <?php
         
 } 
}else{  
			echo "<script type='text/javascript'>alert('Username Not Found');location='Customer_Home.php'</script>";
 
}  
mysqli_close($conn);  

	


?>
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
        <?php
include 'Admin_Footer.php';
?>
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