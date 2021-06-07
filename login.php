<!DOCTYPE html>   
<html>
    <head>
    <meta charset="utf-8">

    </head>
    <body>
        <?php 
        include "connect.php";

        $username=$_POST['username'];
        $password=$_POST['password'];
        echo $password;

    $uservalidation= mysqli_query($c, "SELECT * FROM users WHERE username ='$username' AND passwords = '$password';");
    $rown=  mysqli_num_rows($uservalidation);

    if($rown==1) {
        $verified=True;
        setcookie("user",$username);
    }else{
        $verified=False;
    } 

    if($verified){
        
        setcookie("user",$username);
        header('Location:ain.php');
        exit();
    }else{
        header("Location:ndex.php");
        exit();
       
    }





?>
    
    </body>
</html>
