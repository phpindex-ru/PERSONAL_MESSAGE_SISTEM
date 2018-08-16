<?php

  if (isset($_GET['controller']) && isset($_GET['action'])) {
    $controller = $_GET['controller'];
    $action     = $_GET['action'];
    $sidebarcontroller = $_GET['controller'];
    $sidebaraction = $_GET['action'];
  } else {
    $controller = 'index';
    $action     = 'index';
    $sidebarcontroller = 'pages';
    $sidebaraction = 'index';
  }

  require_once('views/layout.php');
?>