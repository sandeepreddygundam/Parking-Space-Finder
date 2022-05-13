<?php
include'config.php';

$id=$_GET["id"];



$sql="DELETE FROM contact WHERE id='$id';";
	 
if($conn->query($sql)===TRUE){
    
echo "Deleted Successfully";
header('location:viewcontacts.php');
} else{
echo "<script>alert('Cannot Detele This Location');document.location='adminhome.php'</script>";}
?>
