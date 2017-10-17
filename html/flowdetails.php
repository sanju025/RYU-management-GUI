<?php 

if (!empty($_POST["dpID"])) {
    $i = `python controller.py getFlowDetails {$_POST["dpID"]}`;
    echo $i;    
}else{  
    echo "Something wrong ";
}

?>