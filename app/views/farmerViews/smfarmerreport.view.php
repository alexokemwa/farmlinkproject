<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php?page_name=login");
 }

?>
<!-- 
    ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page_name=order">orders</a></li>
            <li><a class="dropdown-item" href="?page_name=payment">payment</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="?page_name=markets">markets</a></li>
          </ul>
 -->