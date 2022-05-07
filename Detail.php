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
     <?php include "Customer_Header.php"; ?>

      <!-- end header -->
      
      <!-- section -->
      <section class="main_full inner_page">
        <div class="container-fluid">
          <div class="row">
             <div class="full">
               <h3> Project in Detail</h3>    
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
$pid=$_GET["pid"];
include "Connection.php"; 
$sql = "SELECT * FROM project where pid='$pid'";
  
$retval=mysqli_query($conn, $sql);  

if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
   $title=$row['title'];
   $pid=$row['pid'];
   $pname=$row['name'];
   $word=$row['word'];
   $ppt=$row['ppt'];
   $video=$row['video'];
?>

<!--<video width="320" height="240" controls autoplay>
  <source src="Video/<?php echo $video; ?>" type="video/mp4">
  Sorry, your browser doesn't support the video element.
</video>-->



				                   
                                  <fieldset>
                                     <div class="field">
                                       <a href="downloadword.php?pname=<?php echo $word;?>">Download Document</a>
                                     </div>
                                   <div class="field">
                                       <a href="downloadword.php?pname=<?php echo $ppt;?>">Download PPT</a>
                                     </div>
									 <div class="field">
                                       <a href="downloadword.php?pname=<?php echo $video;?>">Download Video</a>
                                     </div>
                                    
                                   </fieldset>
                               
							   
							   
							   
							<?php
         
 } 
}else{  
	//		echo "<script type='text/javascript'>alert('Username Not Found');location='Customer_Home.php'</script>";
 
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
include 'Customer_Footer.php';
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






























