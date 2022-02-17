<?php 
    if ( ! empty($_POST['emailid'])){
    $email = $_POST['emailid'];
    }
    if ( ! empty($_POST['password'])){
    $pass = $_POST['password'];
    }
    
   
    $con= new mysqli("localhost","root","","elibrary");

        $sql = "select * from admin where AdminEmail ='$email' and Password='$pass'";
        $result = $con->query($sql);    
        $count  = mysqli_num_rows($result);
        if($count == 0){
            header("Location: adminlogin.html");
        }else{
            while ($data = mysqli_fetch_assoc($result)){
                            
                             header("Location: admin.html");
                            } 
            }      
        
?>
