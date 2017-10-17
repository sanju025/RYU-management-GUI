<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="img/ryulogo.png" type="image/gif">
<title>RYU</title>

<!-- core CSS -->
<link rel="stylesheet" href="css/pure-min-0.5.0.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/pure-custom.css">
<link rel="stylesheet" href="css/joint.all.min.css">
<link rel="stylesheet" type="text/css" href="css/ryu.topology.css">

<!-- core js -->
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<script type="text/javascript" src="js/ryu.js"></script>
	<script type="text/javascript" src="js/d3.v3.min.js"></script>
<!--<script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script> -->
</head>

<body>
<div class="header">
  <div id="menu">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed"><img src="img/titleryu.png" style="height:50px;vertical-align:middle;"> </div>
  </div>
</div>
<div id="layout"><!--layout-->
  <div id="menu">
    <div class="pure-menu pure-menu-open">
      <ul>
        <li class=""> <a href="index.php">Home <i class="fa fa-home"></i></a> </li>
        <li class="menu-item-divided pure-menu-selected"> <a href="http://localhost:8080/topology.php">Topology <i class="fa fa-sitemap"></i></a> </li>
        <li class=""> <a href="http://localhost/ryu-master/ryu/app/gui_topology/html/statistics.php">Statistics <i class="fa fa-bar-chart-o"></i></a> </li>
        <li class=" "> <a href="http://localhost/ryu-master/ryu/app/gui_topology/html/manage.php">Manage <i class="fa fa-edit"></i></a> </li>
      </ul>
	<p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
     <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
       <p><img src="img/rmitdesign.png" alt="" width="176" height="200"></p>
      <p><img src="img/rmlogo.jpg" alt="" width="176" height="78"></p>
    </div>
  </div>
  <div id="main"><!-- main --> 
    <h1>Network Topology</h1>
    <script src="js/ryu.topology.js" charset="utf-8"></script> 
  </div><!-- main --> 
</div><!--layout-->




</body>
</html>
