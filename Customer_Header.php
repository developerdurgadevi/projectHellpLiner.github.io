       <?php
session_start();
  $id=$_SESSION["id"];
  $user=$_SESSION["user"];
?>
	  <header class="header">

        <div class="header_top_section">
           <div class="container">
              <div class="row">
               <div class="col-lg-3">
                  <div class="full">
                     <div class="logo">
                        <a href="index.html"><img src="Images/Logo1.png" alt="#" /></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9 site_information">
                  <div class="full">
                     <div class="main_menu">
                        <nav class="navbar navbar-inverse navbar-toggleable-md">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cloapediamenu" aria-controls="cloapediamenu" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="float-left">Menu</span>
                           <span class="float-right"><i class="fa fa-bars"></i> <i class="fa fa-close"></i></span>
                           </button>
						   
	
						   
						   
                           <div class="collapse navbar-collapse justify-content-md-center" id="cloapediamenu">
                              <ul class="navbar-nav">
                                 <li class="nav-item active">
                                    <a class="nav-link" href="Customer_Home.php">Home</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link color-aqua-hover" href="UploadProject.php">Project Upload</a>
                                 </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link color-aqua-hover" href="SearchProject.php">Search Project</a>
                                 </li>-->
                                 <li class="nav-item">
                                    <a class="nav-link color-grey-hover" href="ViewAllProjects.php">All Projects </a>
                                 </li>
								  <li class="nav-item">
                                    <a class="nav-link color-grey-hover" href="MyProjects.php">My Projects </a>
                                 </li>
								 
                                 <li class="nav-item">
                                    <a class="nav-link color-grey-hover" href="Logout.php">Logout</a>
                                 </li>
                                
                              </ul>
                              
                           </div>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
           </div>
        </div>

      </header>