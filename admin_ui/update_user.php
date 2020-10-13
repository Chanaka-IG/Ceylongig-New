

<?php 
require_once('config.php'); 

?>
<?php
if(isset($_GET['userid'])){
    // query for get data from db
$sql1 = "SELECT * FROM staff WHERE userid =".$_GET['userid'];

    //execute the sql

$result = mysqli_query($conn,$sql1);
$row=mysqli_fetch_assoc($result);
// $row=mysqli_fetch_assoc($result);
if($result){


}
// echo "Sucessfull";

else{
echo"failed";	
}
}

if(isset($_POST['updateB'])){

    $sql="UPDATE staff SET 
    name = '".$_POST['name']."',password = '".$_POST['password']."', repassword = '".$_POST['repassword']."',
    email = '".$_POST['email']."',userid = '".$_POST['userid']."',address = '".$_POST['address']."',gender = '".$_POST['gender']."' WHERE userid ='".$_POST['userid']."'";
   
   $result = $conn->query($sql);
   echo"<script> alert('Registered Sucessfully') </script>";
   
   if($result==TRUE){
    header("Location: view_user.php");
   
   }
              
        
            

}



?>


<!DOCTYPE html>
<html>


    <head>
        <title>
            form
        </title>

        <link rel="stylesheet" type="text/css" href="../css/update_user.css">

    </head>

    <body>
    <header>
    <?php

include ('../include/header.php');

    ?>
    </header>
        <div class="regform"><h1>Resgistration form</h1></div>
    



        <div class="main">

 

            <form action="update_user.php" method="POST">

                <h2 class="name">Name</h2>
                <input class="nameu" type="text" name="name" value=<?php echo $row['name']; ?>  >

                <h2 class="name">Password</h2>
                <input class="password" type="password" name="password" value=<?php echo $row['password']; ?> readonly>

                <h2 class="name">Reenter Password</h2>
                <input class="repassword" type="password" name="repassword" value=<?php echo $row['repassword']; ?> readonly>


                <h2 class="name">Email</h2>
                <input class="email" type="text" name="email" value=<?php echo $row['email']; ?>>

                <h2 class="name">User Id</h2>
                <input class="userid" type="text" name="userid" value=<?php echo $row['userid']; ?>>

                <h2 class="name">Address</h2>
                <input class="address" type="text" name="address" value=<?php echo $row['address']; ?>>

                <h2 id="gender" >Gender</h2>
                <label class="radio">
                    <input type="radio"  name="gender" value="Male" <?php if ($row['gender']== 'Male') { echo "checked";} ?> >Male
                    
                    <br>
                </label>

                <label class="radio">
                    <input type="radio"  name="gender" value="Female" <?php if ($row['gender']== 'Female') { echo "checked";}?> >Female
                    
                    <br>
                </label>
             <div class="button1">
                <button type="submit" name="updateB" >Update</button>
                <a href="add_user.php"><button type="button">Add user</button></a>
                <a href="view_user.php"><button type="button">View user</button></a>
             </div>
            </form>
        </div>

        <?php

include ('../include/footer3.php');

?>
        
    </body>

</html>


