<?php
require "../app/core/init.php";
// require "../..";

$controller = $_GET['page_name'] ?? "home";
$controller = strtolower($controller);

if(file_exists("../app/controllers/managers/" .$controller . ".php")){
    require "../app/controllers/managers/" .$controller . ".php";
}
else{
    echo "controller not found";
}

