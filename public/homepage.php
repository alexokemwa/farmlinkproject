<?php
require "../app/core/init.php";

$controller = $_GET['page_name'] ?? "home";
$controller = strtolower($controller);

if(file_exists("../app/controllers/farmers/" . $controller . ".php")) {
    require "../app/controllers/farmers/" . $controller . ".php";
} elseif(file_exists("../app/controllers/farmers/account/" . $controller . ".php")) {
    require "../app/controllers/farmers/account/" . $controller . ".php";
} elseif(file_exists("../app/controllers/farmers/reports/" . $controller . ".php")) {
    require "../app/controllers/farmers/reports/" . $controller . ".php";
}elseif(file_exists("../app/controllers/farmers/farmerorders/" . $controller . ".php")) {
    require "../app/controllers/farmers/farmerorders/" . $controller . ".php";
}
elseif(file_exists("../app/controllers/farmers/farmerorders/mpesa/" . $controller . ".php")) {
    require "../app/controllers/farmers/farmerorders/mpesa/" . $controller . ".php";
}
elseif(file_exists("../app/controllers/farmers/farmerorders/mpesa/darajacallback" . $controller . ".php")) {
    require "../app/controllers/farmers/farmerorders/mpesa/darajacallback/" . $controller . ".php";
}
else {
    echo "Controller not found";
}
