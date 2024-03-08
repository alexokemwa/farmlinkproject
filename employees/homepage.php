<?php
require "../app/core/init.php";

$controller = $_GET['page_name'] ?? "home";
$controller = strtolower($controller);

if(file_exists("../app/controllers/employees/" .$controller . ".php")){
    require "../app/controllers/employees/" .$controller . ".php";
}elseif(file_exists("../app/controllers/employees/account/" .$controller . ".php")){
    require "../app/controllers/employees/account/" .$controller . ".php";
}elseif(file_exists("../app/controllers/employees/reports/" .$controller . ".php")){
    require "../app/controllers/employees/reports/" .$controller . ".php";
}
else{
    echo "employees controller not found";
}

