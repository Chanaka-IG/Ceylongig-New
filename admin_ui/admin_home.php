<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="="UTF-8">
    <title>CeylonGig</title>
    <link rel="stylesheet" href="../css/admin_home.css">
  

</head>
<body>
 <header>
 <?php

include ('../include/header.php');

?>
</header>
    <div class="box-area">
       
       <div class="banner-area">
        <div class="container1">
            <div class="outer">
                <div class="details">
                    <h1>Admin Panel</h1>
                    <h2> deliver a safe and novel platform for Sri Lankan freelancers to find a job and for the customers who live in Sri Lanka to get their jobs done. 
                    </h2>
                </div>
            </div>
        </div>
            
       </div>
        <div class="content-area">
            <div class="container">
                <div class="card">
                    <div class="face face1">
                        <div class="cont">
                            <img src="../img/group.png">
                            <h3>User setting</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="cont">
                            <p>Click below to add user, remove user, update user</p>
                            <a href="admin_crud.php">Click here</a>
                        </div>
                        
                    </div>
                    
                </div>
                <div class="card">
                    <div class="face face1">
                        <div class="cont">
                            <img src="../img/woman.png">
                            <h3>Priviledge setting</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="cont">
                            <p>Click below to set priviledges to users</p>
                            <a href="set_priviledge.php">Click here</a>
                        </div>
                        
                    </div>
                    
                </div>
        
               
                            </div>
        </div>
         
        
        
    </div>

    <?php

include ('../include/footer3.php');

?>
   
</body>


</html>



