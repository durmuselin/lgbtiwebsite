<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
</head>
<body>
  





<?php 
extract($_POST);
if($submitted){
  include 'connect.php';
  mysqli_query($c, "CREATE TABLE IF  NOT EXISTS Survey (
    id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
    q1 tinyint(4),
    q1c varchar(100),
    q2 tinyint(4)



  );");

mysqli_query($c, "INSERT INTO Survey (q1, q1c, q2) VALUES ($q1, '$q1c', $q2);");

};




?>





<script>


function g(p)
  {
    if(p=="Yes"){
      var B = document.getElementById("15")
      B.remove();
     }
   
    
  
    if(p=="No"){
       var B = document.getElementsByTagName("li");
       var x = document.createElement("input");
       x.type="text";x.placeholder="Yorum satırı, Yorum Gir";
       x.id="15";
       x.name="q1c";
      B[0].appendChild(x);

    };
  
  
  };
  function l(id1,colors){

    document.getElementById(id1).style.color=colors;

  };
</script>
<form method="post" >
 <ol>
   <li> Would you like to donate us? </li>
     <input type="radio" id = "q1_1"name="q1" value="1" onclick="g('Yes');">
     <label for="q1_1"> YES </label>
     <input type="radio" id= "q1_2" name="q1" value="0" onclick="g('No');">
     <label for="q1_2"> NO</label>
    <br><br>
    <li> Rate our website : </br>
     <input type="radio" id = "q2_1"name="q2" value="1" onchange="l('l2_1','Green'); l('l2_5','black'); ">
     <label for="q2_1" id="l2_1"> Quite good </label>
     <input type="radio" id= "q2_2" name="q2" value="2" onchange="l('l2_1','black'); l('l2_5','black'); " >
     <label for="q2_2" id="l2_2"> Good</label>
     <input type="radio" id= "q2_3" name="q2" value="3" checked  onchange="l('l2_1','black'); l('l2_5','black'); " >
     <label for="q2_3" id="l2_3"> Medicore</label>
     <input type="radio" id= "q2_4" name="q2" value="4"  onchange="l('l2_1','black'); l('l2_5','black'); ">
     <label for="q2_4" id="l2_4"> Bad</label>
     <input type="radio" id= "q2_5" name="q2" value="5"  onchange="l('l2_5','red'); l('l2_1','black'); ">
     <label for="q2_5" id="l2_5"> Very bad </label>

</ol>
<input type="submit" value="Submit" name="submitted"> 
</form>


















</body>
</html>
