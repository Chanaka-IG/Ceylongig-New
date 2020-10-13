


<!DOCTYPE html>
<html>


    <head>
        <title>
            form
        </title>

        <link rel="stylesheet" type="text/css" href="./css/add_user.css">

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

                <h2 class="name">Password</h2>
                <input class="password" type="password" name="password" required>

                <h2 class="name">Reenter Password</h2>
                <input class="repassword" type="password" name="repassword" required>

                
                <h2 class="name">Email</h2>
                <input class="email" type="text" name="email" required>
               

                <h2 class="name">User Id</h2>
                <input class="userid" type="text" name="userid" required>

                <h2 class="name">Address</h2>
                <input class="address" type="text" name="address" required>

                <h2 id="gender" >Gender</h2>
                <label class="radio">
                    <input type="radio"  name="gender" value="Male" required >Male
                    
                    <br>
                </label>

                <label class="radio">
                    <input type="radio"  name="gender" value="Female" required>Female
                    
                    <br>
                </label>
             <div class="button1">
                <button type="submit" name="register" >Register</button><br>
                <br><a href="view_user.php"><button type="button">View List</button></a>
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