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
               <h3>New Project Upload</h3>    
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
						   
						   
				                     <form action="" method="post" enctype="multipart/form-data">
                                  <fieldset>
                                     <div class="field">
                                        <input type="text" name="title" placeholder="Project Title">
                                     </div>
                                     <div class="field">
                                        <input type="text" name="name" value="<?php echo $user;?>" readonly>
                                     </div>
									  <div class="field">Word
                                        <input type="file" name="word" placeholder="Word Document">
                                     </div>
									  <div class="field">PPT
                                        <input type="file" name="ppt" placeholder="PPT Document">
                                     </div>
									  <div class="field">Video
                                        <input type="file" name="video" placeholder="Description Video">
                                     </div>
									
                                    
                                     <div class="field center">
                                       <button><input type="submit" name="sub" value="Upload"></button>
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



<?php

if (isset($_POST["sub"]))
{
$title=$_POST["title"];	
$name=$_POST["name"];	
	
// $photo=$_POST["photo"];	

 $target_path1 = "Word/";  
 $target_path2 = "PPT/";  
 $target_path3 = "Video/";  
$target_path1 = $target_path1.basename( $_FILES['word']['name']);   
$target_path2 = $target_path2.basename( $_FILES['ppt']['name']);   
$target_path3 = $target_path3.basename( $_FILES['video']['name']);   
  $word=basename($target_path1);
  $ppt=basename($target_path2);
  $video=basename($target_path3);
if((move_uploaded_file($_FILES['word']['tmp_name'], $target_path1))&&(move_uploaded_file($_FILES['ppt']['tmp_name'], $target_path2))&&(move_uploaded_file($_FILES['video']['tmp_name'], $target_path3))) {  
// echo "File uploaded successfully!";  
//echo 'Connected successfully<br/>';  
  include "Connection.php"; 

$sql = "INSERT INTO project(cid,title,name,word,ppt,video) VALUES ('$id','$title','$name','$word','$ppt','$video')";  
if(mysqli_query($conn, $sql)){  
			echo "<script type='text/javascript'>alert('Project Registered Successfully');location='Customer_Home.php'</script>";
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  
} else{  
    echo "Sorry, file not uploaded, please try again!";  
}  
}

?>
