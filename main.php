<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  background-color: #DAF7A6;
}

* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 15px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width:600px) {
  .column {
    width: 100%;
  }
}

.header {
  background-color: powderblue;
  padding: 20px;
  text-align: center;
  font-family: "Trebuchet MS", sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #80ced6;
  font-family: "Trebuchet MS", sans-serif;
}

.topnav a {
  float: left;
  display: block;
  color: #fefbd8;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-family: "Trebuchet MS", sans-serif;
}


.topnav a:hover {
  background-color: #f18973 ;
  color: black;
  font-family: "Trebuchet MS", sans-serif;
}
</style>
</head>
<body>
<?php
	include "connect.php";
	if(!isset($_COOKIE["user"])){
    	header("Location:ndex.php");
    	exit();
	}
?>
<div class="header">
  <h2>Welcome back. We've missed you! &#127752; </h2>
</div>

<div class="topnav">
<a href="ogout.php">Logout</a>
</div>



<div class="header" >
  <h2>Take a moment and help us improve ourselves. &#127752; </h2>
  <a href="w11.php">Survey</a>
</div>
