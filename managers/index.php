<?php
require "../app/core/init.php";


$controller = $_GET['page_name'] ?? "home";
$controller = strtolower($controller);

if(file_exists("../app/controllers/managers/" .$controller . ".php")){
    require "../app/controllers/managers/" .$controller . ".php";
}elseif(file_exists("../app/controllers/managers/communication/" .$controller . ".php")){
    require "../app/controllers/managers/communication/" .$controller . ".php";
}elseif(file_exists("../app/controllers/managers/employees/" .$controller . ".php")){
    require "../app/controllers/managers/employees/" .$controller . ".php";
}elseif(file_exists("../app/controllers/managers/farmers/" .$controller . ".php")){
    require "../app/controllers/managers/farmers/" .$controller . ".php";
}elseif(file_exists("../app/controllers/managers/other/account/" .$controller . ".php")){
    require "../app/controllers/managers/other/account/" .$controller . ".php";
}elseif(file_exists("../app/controllers/managers/other/companyproperty/" .$controller . ".php")){
    require "../app/controllers/managers/other/companyproperty/" .$controller . ".php";
}
else{
    echo "controller not found";
}

