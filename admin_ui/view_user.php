<?php
    require_once('config.php');
    
?>


<!DOCTYPE html>

<html>

<head>


<link rel="stylesheet" href="../css/view_user.css " type="text/css">
</head>

<body>
<header>

<?php

include ('../include/header.php');

?>


</header>
<?php
		$sql = "SELECT name,email,password,userid,address,gender FROM staff";
		mysqli_query($conn, $sql);
		$result = mysqli_query($conn,$sql);

		if($result){
			//echo "Sucessfull";
			}
		else{
			echo"failed";	
			}

    ?>
    
    

    <table>
        

      
        <tr>
            <th>UserId</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Update</th>
            <th>delete</th>
            
        </tr>

        <?php
				while($row=mysqli_fetch_assoc($result)){

			?>
      
      <tr>
        <td><?php echo $row['userid'] ?></td>
				<td><?php echo $row['name'] ?></td>
				<td><?php echo $row['email'] ?></td>
        <td><?php echo $row['address'] ?></td>
        <td><?php echo $row['gender'] ?></td>

        <?php echo "<td><a href =update_user.php?userid='".$row['userid']."' > update </a> </td>"?>
        <?php echo "<td><a href =delete_user.php?userid='".$row['userid']."' > delete </a> </td>"?>
                

                
				
        </tr>
        
       
       
       
        <?php
    }
    
  
    ?>

 
    </table>


    <?php

include ('../include/footer3.php');

?>

</body>

</html>