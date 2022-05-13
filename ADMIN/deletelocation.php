<?php
include'config.php';

$id=$_GET["id"];



$sql="DELETE FROM location WHERE lid='$id';";
	 
if($conn->query($sql)===TRUE){
    
echo "Deleted Successfully";
header('location:managelocations.php');
} else{
echo "<script>alert('Cannot Detele This Location');document.location='adminhome.php'</script>";}
?>
