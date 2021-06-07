<?php 
setcookie("user", $_COOKIE["user"], time()-1);
header("Location:ndex.php");
exit();
?>
