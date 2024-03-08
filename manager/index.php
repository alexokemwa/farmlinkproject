<?php
require "../app/core/init.php";

$controller = $_GET['page_name'] ?? "landingpage";
$controller = strtolower($controller);

if(file_exists("../app/controllers/managerAuth/" . $controller . ".php")) {
    require "../app/controllers/managerAuth/" . $controller . ".php";
}elseif(file_exists("../app/controllers/managerAuth/" . $controller . ".php")) {
    require "../app/controllers/managerAuth/" . $controller . ".php";
}