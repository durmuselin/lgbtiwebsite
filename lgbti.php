<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
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

<div class="header">
  <h1>#MoreColorMorePride!</h1>
</div>


<div class="topnav">
<a href="ndex.php">login</a>
<a href="boutus.html">about us</a>
<a href="https://www.bbc.com/news/topics/cp7r8vgln2wt/lgbt">news</a>
</div>

<div class="row">
  <div class="column">
    <img src="olumn1.jpg" style="width:400px;height:300px;">
  </div>
  <div class="column">
    <img src="olumn2.jpg" style="width:400px;height:300px;">
  </div>
  <div class="column">
    <img src="olumn3.jpg" style="width:400px;height:300px;">
  </div>
  </div>

</body>
</html>
