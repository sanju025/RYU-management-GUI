<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="img/ryulogo.png" type="image/gif">
<title>RYU</title>
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
<script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
</head>

<body>
<div class="header">
  <div id="menu">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed"> <img src="img/titleryu.png" style="height:50px;vertical-align:middle;"> </div>
  </div>
</div>
<div id="layout"><!--layout-->
  <div id="menu">
    <div class="pure-menu pure-menu-open">
      <ul>
        <li class="menu-item-divided pure-menu-selected"> <a href="index.php">Home <i class="fa fa-home"></i></a> </li>
        <li class=""> <a href="http://localhost:8080/topology.php">Topology <i class="fa fa-sitemap"></i></a> </li>
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
  <br/>
    <h1> Welcome to the RYU controller GUI</h1>
    <p>Ryu comes from a Japanese word meaning flow; hence Ryu controller manages flow control to provide intelligent networking. It is an open source, python based controller which provide software components with well-defined APIs to allow programmers create new network management and control applications. This can help developers to quickly and easily make changes to the network to satisfy the specific needs of the organisation or meet changing demands of the applications. It can also use OpenFlow to interact with the forwarding plane (switches and routers) to modify how the network will handle traffic flows</p>
    <p>In addition, it also supports multiple southbound protocols for managing devices and it has an event handler which dispatches the events to all the subscribed applications. Also, Ryu controller uses a multi-thread based design whereby new components are plugged in and executed as a new thread. Explicitly, the core process is executed as a single process while each component such as an application or service is executed in separate thread. </p>
    <p>One of the major problem is that it does not have a network management interface to enable users to make use of it very easily. All the information needed has to be done through command line interface which is boring and prone to errors and also the reults obtained are usually difficult to interpret</p>
	
	<p>This simple tool will therefore make the use of ryu controller much more easier as all the required information can be obtained through some clicks and also the results are well displayed in tabular forms making it far more easier for someone to understand . In addition other major functionality like for example adding a flow is also available. </p>
	
	
	
	<h3>The specific configurations needed </h3>
    <ol>
  <li>Linux Platform</li>
  <li>Installation of Apache webserver</li>
  <li>installation of php6 including other web languages like javascript, ajax</li>
</ol>
	
	<h3>How to use it.</h3>
    <ol>
  <li>Run the apache webserver first</li><span><b>Command to be run in first terminal : sudo /etc/init.d/apache2 restart </b></span>
  <li>Then run the main server for RYU</li><span><b>Command to be run in second terminal : sudo python /usr/local/bin/ryu run --observe-link /var/www/html/ryu-master/ryu/app/gui_topology/gui_topology.py </b> </span>
  <li>Go to the specific link in web browser</li><span> <b>link : localhost:8080/index.php </b></span>
</ol>
	
   

  </div><!-- main --> 

</div><!--layout-->

</body>
</html>


