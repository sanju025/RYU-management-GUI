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
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed"> <img src="img/titleryu.png" style="height:50px;vertical-align:middle;"> </div>
  </div>
</div>
<div id="layout"><!--layout --> 
  <div id="menu">
    <div class="pure-menu pure-menu-open">
      <ul>
        <li class=""> <a href="index.php">Home <i class="fa fa-home"></i></a> </li>
        <li class=""> <a href="http://localhost:8080/topology.php">Topology <i class="fa fa-sitemap"></i></a> </li>
        <li class=""> <a href="http://localhost/ryu-master/ryu/app/gui_topology/html/statistics.php">Statistics <i class="fa fa-bar-chart-o"></i></a> </li>
        <li class="menu-item-divided pure-menu-selected "> <a href="http://localhost/ryu-master/ryu/app/gui_topology/html/manage.php">Manage <i class="fa fa-edit"></i></a> </li>
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
    <div id="form_wrapper" class="form_wrapper">
      <form  method="post" action="addFlow.php">
        <table>
          <tr>
            <td><h2 style="align:right">Add A flow </h2></td>
          </tr>
          <tr>
            <td><label><span>dpid</span> </label></td>
            <td style="padding:30px"><?php 

	header('Access-Control-Allow-Origin: *');
$i =`python controller.py getswitchesDPID`;
   $array =json_decode($i);
		echo "<select class='dropdown' name='dpid' onChange='changeTest(this)'>";
	echo "<option default value='false'>Select A Switch</option>";
	for($i=0;$i<count($array);$i++){
		echo "<option value='{$array[$i]}'> DP_ID: {$array[$i]}</option>";
	}
	echo "</select>";
	echo ($array[$i]);


?></td>
          </tr>
          <tr>
            <td><label><span> cookie</span> </label></td>
            <td style='width:300px;' ><input type="text" name="cookie" /></td>
          </tr>
          <tr>
            <td><br /></td>
          </tr>
          <tr>
            <td><label><span> cookie_mask</span> </label></td>
            <td style='width:300px;' ><input type="text" name="cookie_mask" /></td>
          </tr>
          <tr>
            <td><br /></td>
          </tr>
          <tr>
            <td><label><span> table_id</span> </label></td>
            <td style='width:300px;' ><input type="text" name="table_id" /></td>
          </tr>
          <tr>
            <td><br /></td>
          </tr>
          <tr>
            <td><label><span> idle_timeout</span> </label></td>
            <td style='width:300px;' ><input type="text" name="idle_timeout" /></td>
          </tr>
          <tr>
            <td><br /></td>
          </tr>
          <tr>
            <td><label><span> hard_timeout</span> </label></td>
            <td style='width:300px;' ><input type="text" name="hard_timeout" /></td>
          </tr>
          <tr>
            <td><br /></td>
          </tr>
          <tr>
            <td><label><span> priority</span> </label></td>
            <td style='width:300px;' ><input type="text" name="priority" /></td>
          </tr>
          <tr>
            <td><br /></td>
          </tr>
          <tr>
            <td><label><span> flags</span> </label></td>
            <td style='width:300px;' ><input type="text" name="flags" /></td>
          </tr>
          <tr>
            <td><br /></td>
          </tr>
          <tr>
            <td><label><span>Actions:</span><span> Type</span> </label></td>
            <td style='width:300px;' ><input type="text" name="Type" /></td>
          </tr>
          <tr>
            <td><br /></td>
          </tr>
          <tr>
            <td><label><span> </span> </label></td>
            <td style='width:300px;' ><input type="submit" value="Add Flow " />
          </tr>
          <tr>
            <td><br /></td>
          </tr>
        </table>
      </form>
    </div>
  </div> <!-- main --> 
</div><!--layout --> 
</body>
</html>

