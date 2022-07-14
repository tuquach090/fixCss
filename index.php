<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$path = "pages/{$page}.php";


if (file_exists($path)) {
    require "{$path}";
} else {
    require "pages/page1.php"; // thây đổi link để xem page
}

require 'layout/TheFooter.html';
