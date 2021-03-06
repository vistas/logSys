<?php
/**
 * For Development Purposes
 */
ini_set("display_errors", "on");

require __DIR__ . "/../class.logsys.php";
\Fr\LS::config(array(
  "db" => array(
    "host" => "localhost",
    "port" => 3306,
    "username" => "root",
    "password" => "backstreetboys",
    "name" => "test",
    "table" => "users"
  ),
  "features" => array(
    "auto_init" => true
  ),
  "pages" => array(
    "no_login" => array(
      "/Francium/logSys/",
      "/Francium/logSys/example-basic/reset.php",
      "/Francium/logSys/example-basic/register.php"
    ),
    "login_page" => "/Francium/logSys/example-basic/login.php",
    "home_page" => "/Francium/logSys/example-basic/home.php"
  )
));
