


<!DOCTYPE html>
<html>


    <head>
        <title>
            form
        </title>

        <link rel="stylesheet" type="text/css" href="./css/set_priviledge.css">

    </head>

    <body>

    <header>

<?php

        include ('include/header.php');

?>

    </header>
        <div class="regform"><h1>Resgistration form</h1></div>
    
        <div class="main">

 

            <form action="add_user.php" method="POST">

               
                <h2 class="name">Name</h2>
                <input class="nameu" type="text" name="name" required>


                <h2 class="name">User Id</h2>
                <input class="userid" type="text" name="userid" required>

                <h2 class="name">Priviledge Id</h2>
                <input class="address" type="text" name="address" required>

               
             <div class="button1">
                <button type="submit" name="register" >Assign</button><br>
             
             </div>
                
            </form>
        </div>

        
    <?php

include ('include/footer3.php');

?>

        
    </body>

</html>


<?php

include ('config.php');

if (isset($_POST['register'])) {
 $uname = $_POST['name'];
$upassword = $_POST['password'];
$upasswordHash=md5($upassword);
$urepassword = $_POST['repassword'];
$urepasswordHash=md5($urepassword);
$uemail = $_POST['email'];
$uuserid = $_POST['userid'];
$uaddress = $_POST['address'];
$ugender = $_POST['gender'];

if($upassword==$urepassword){
    $sql="INSERT into user
 values (' $uname','$upasswordHash','$urepasswordHash','$uemail','$uuserid','$uaddress','$ugender')";

$result = $conn->query($sql);

if($result==TRUE)
			echo"<script> alert('Registered Sucessfully') </script>";
		else
            echo"<script> alert('Registered Unsucessfully') </script>";
            
/*
if($result == TRUE){
    echo "success";
}
else{
    echo "error";
}
*/
}
else{
    echo"<script> alert('Passwords are not match') </script>";
}
}




?>