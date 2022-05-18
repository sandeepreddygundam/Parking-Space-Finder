<?php
include'config.php';

$id=$_GET["id"];



$sql="DELETE FROM parking WHERE pid='$id';";
	 
if($conn->query($sql)===TRUE){
    
echo "Deleted Successfully";
header('location:manageparkings.php');
} else{
echo "<script>alert('Cannot Detele This Location');document.location='adminhome.php'</script>";}
?>
