<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if ((!empty($_POST["dpid"])) && (!empty($_POST["cookie"])) && (!empty($_POST["cookie_mask"])) && (!empty($_POST["table_id"]))
		&&(!empty($_POST["idle_timeout"])) && (!empty($_POST["hard_timeout"])) && (!empty($_POST["priority"])) && (!empty($_POST["flags"])) && (!empty($_POST["Type"]))){
		
	
		$requestStr = "dpid:" .  ($_POST["dpid"]) . ",";
		$requestStr .= "cookie:" .  ($_POST["cookie"]) . ",";
		$requestStr .= "cookie_mask:" .  ($_POST["cookie_mask"]) . ",";
		$requestStr .= "table_id:" .  ($_POST["table_id"]) . ",";
		$requestStr .= "idle_timeout:" .  ($_POST["idle_timeout"]) . ",";
		$requestStr .= "hard_timeout:" .  ($_POST["hard_timeout"]) . ",";
		$requestStr .= "priority:" .  ($_POST["priority"]) . ",";
		$requestStr .= "flags:" .  ($_POST["flags"]) . ",";
		$requestStr .= "type:" .  ($_POST["type"]);
		
		var_dump($requestStr);
	
		$i =`python controller.py addFlow {$requestStr}`;
		
		header("Location:http://localhost/ryu-master/ryu/app/gui_topology/html/statistics.php");
		die();
	}
}

?>
