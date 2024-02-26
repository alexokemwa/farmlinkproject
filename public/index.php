<?php
require "../app/core/init.php";

$controller = $_GET['page_name'] ?? "home";
$controller = strtolower($controller);

if(file_exists("../app/controllers/farmers/" .$controller . ".php")){
    require "../app/controllers/farmers/" .$controller . ".php";
}
else{
    echo "controller not found";
}

