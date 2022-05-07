 <?php

$id=$_GET["pid"];
$st=$_GET["st"];
 include "Connection.php"; 
	if($st=="Approved")
	{
		

$sql = "update project set status='Approved' where pid='$id'";  
if(mysqli_query($conn, $sql)){  
		echo "<script type='text/javascript'>alert('Approved Successfully');location='Admin_Home.php'</script>";
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
} 
		
	}
	if($st=="Rejected")
	{
		$sql = "update project set status='Rejected' where pid='$id'";  
if(mysqli_query($conn, $sql)){  
		echo "<script type='text/javascript'>alert('Rejected Successfully');location='Admin_Home.php'</script>";
}else{  
echo "Could not insert record: ". mysqli_error($conn);  
} 
		
	}
	



?>