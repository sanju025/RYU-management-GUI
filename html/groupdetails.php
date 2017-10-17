<?php 

if (!empty($_POST["dpID"])) {
    $i = `python controller.py getGroupDetails {$_POST["dpID"]}`;
    echo $i;    
}else{  
    echo "Something wrong ";
}

?>