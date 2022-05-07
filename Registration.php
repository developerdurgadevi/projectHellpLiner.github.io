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
$name=$_POST["name"];	
$mob=$_POST["mob"];	
$mail=$_POST["mail"];	
$edu=$_POST["edu"];	
$pass1=$_POST["pass"];
//echo $pass1;	
// $photo=$_POST["photo"];	

 $target_path = "Photo/";  
$target_path = $target_path.basename( $_FILES['photo']['name']);   
  $photo=basename($target_path);
if(move_uploaded_file($_FILES['photo']['tmp_name'], $target_path)) {  
   // echo "File uploaded successfully!";  
 

//echo 'Connected successfully<br/>';  
  include "Connection.php"; 
//echo $pass1.$pass1;	
$sql = "INSERT INTO registration(name,mobile,mail,education,photo,pass) VALUES ('$name','$mob','$mail','$edu','$photo','$pass1')";  
if(mysqli_query($conn, $sql)){  
		echo "<script type='text/javascript'>alert('Registered Successfully');location='Index.php'</script>";
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  
} else{  
    echo "Sorry, file not uploaded, please try again!";  
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
               <h3>New Customer Registration</h3>    
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
                                        <input type="text" name="name" placeholder="User Name">
                                     </div>
                                     <div class="field">
                                        <input type="number" name="mob" placeholder="Mobile Number">
                                     </div>
									  <div class="field">
                                        <input type="mail" name="mail" placeholder="Mail Id">
                                     </div>
									  <div class="field">
                                        <input type="text" name="edu" placeholder="Educational Qualification">
                                     </div>
									  <div class="field">
                                        <input type="file" name="photo" placeholder="Profile Picture">
                                     </div>
									  <div class="field">
                                        <input type="password" name="pass" placeholder="Password">
                                     </div>
                                    
                                     <div class="field center">
                                       <button><input type="submit" name="sub" value="Register"></button>
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
include 'Footer.php';
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



