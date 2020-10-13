<?php 
	require_once('config.php'); 
?>


<?php
if(isset($_GET['userid'])){ 

$sql = "DELETE FROM user WHERE userid =".$_GET['userid'];


mysqli_query($conn, $sql);
$result = mysqli_query($conn,$sql);

if($result){
    echo"<script> alert('Delete successfully') </script>";

 header("Location: view_user.php");
}
else{
echo "Fail";
}

}
?>