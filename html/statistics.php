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

<!-- core js -->
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<script type="text/javascript" src="js/ryu.js"></script>
</head>

<body>
<div class="header">
  <div id="menu">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed"><img src="img/titleryu.png" style="height:50px;vertical-align:middle;"> </div>
  </div>
</div>
<div id="layout"><!--layout -->
  <div id="menu">
    <div class="pure-menu pure-menu-open">
      <ul>
        <li class=""> <a href="index.php">Home <i class="fa fa-home"></i></a> </li>
        <li class=""> <a href="http://localhost:8080/topology.php">Topology <i class="fa fa-sitemap"></i></a> </li>
        <li class="menu-item-divided pure-menu-selected"> <a href="http://localhost/ryu-master/ryu/app/gui_topology/html/statistics.php">Statistics <i class="fa fa-bar-chart-o"></i></a> </li>
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
  <div id="main"> <!-- main --> 
    <div class="tabGroup1">
      <h2>Select Your Switch </h2>
      <?php 

	
	header('Access-Control-Allow-Origin: *');
$i =`python controller.py getswitchesDPID`;
   $array =json_decode($i);
		echo "<select class='dropdown' name='level' onChange='changeTest(this)'>";
	echo "<option default value='false'>Select A Switch</option>";
	for($i=0;$i<count($array);$i++){
		echo "<option value='{$array[$i]}'> DP_ID: {$array[$i]}</option>";
	}
	echo "</select>";
	echo ($array[$i]);

?>
    </div>
    <div class="tabGroup">
      <input type="radio" id="switchdesc" name="tabGroup1" class="switchdesc" checked="checked"/>
      <label for="switchdesc">Switch Description</label>
      <input type="radio" id="flow-stats" name="tabGroup1" class="flow-stats"/>
      <label for="flow-stats">Flow</label>
      <input type="radio" id="port-stats" name="tabGroup1" class="port-stats" />
      <label for="port-stats">Port</label>
      <input type="radio" id="portdesc-stats" name="tabGroup1" class="portdesc-stats"/>
      <label for="portdesc-stats">Port Description</label>
      <input type="radio" id="table-stats" name="tabGroup1" class="table-stats" />
      <label for="table-stats">Table</label>
      <input type="radio" id="groupdet" name="tabGroup1" class="groupdet"/>
      <label for="groupdet">Group</label>
      <br/>
      <div class="port-stats">
        <h2>Port Statistics</h2>
        <div id="demo2" class="Ryutable"></div>
      </div>
      <div class="flow-stats">
        <h2>Flow Statistics</h2>
        <div id="demo1" class="Ryutable"></div>
      </div>
      <div class="switchdesc">
        <h2>Switch Details</h2>
        <div id="demo" class="Ryutable"></div>
      </div>
      <div class="portdesc-stats">
        <h2>Port Description Details</h2>
        <div id="demo3" class="Ryutable"></div>
      </div>
      <div class="table-stats">
        <h2>Table Statistics</h2>
        <div id="demo4" class="Ryutable"></div>
      </div>
      <div class="groupdet">
        <h2>Group Details</h2>
        <div id="demo5" class="Ryutable"></div>
      </div>
    </div>
  </div> <!-- main --> 
</div><!--layout -->
</body>
</html>
