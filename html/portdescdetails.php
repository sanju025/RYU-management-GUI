<?php 

if (!empty($_POST["dpID"])) {
    $i = `python controller.py getPortdescDetails {$_POST["dpID"]}`;
    echo $i;    
}else{  
    echo "Something wrong ";
}

?>