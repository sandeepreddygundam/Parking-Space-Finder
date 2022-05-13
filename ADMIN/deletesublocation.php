<?php
include'config.php';

$id=$_GET["id"];



$sql="DELETE FROM sublocation WHERE slid='$id';";
	 
if($conn->query($sql)===TRUE){
    
echo "Deleted Successfully";
header('location:managesublocations.php');
} else{
echo "<script>alert('Cannot Detele This Location');document.location='adminhome.php'</script>";}
?>
