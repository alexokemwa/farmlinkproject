<?php
require "../app/core/init.php";

$controller = $_GET['page_name'] ?? "landingpage";
$controller = strtolower($controller);

if(file_exists("../app/controllers/farmerAuth/" . $controller . ".php")) {
    require "../app/controllers/farmerAuth/" . $controller . ".php";
}elseif(file_exists("../app/controllers/farmerAuth/" . $controller . ".php")) {
    require "../app/controllers/farmerAuth/" . $controller . ".php";
}
