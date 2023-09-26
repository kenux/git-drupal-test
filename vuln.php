<?php 

$command = "mv ".$_SERVER['HTTP_X_FILE']." uploads/";
$output = system($command);
