<?php
$host = 'localhost';
$user = 'homestead';
$password = 'secret';
$dbname = 'testtest';
$dsn = 'mysql:host='. $host . ';dbname='. $dbname;
$pdo = new PDO($dsn, $user, $password);
?>


<?php
/*   class Db {
    private static $instance = NULL;

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
      if (!isset(self::$instance)) {
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$instance = new PDO('mysql:host=localhost;charset=utf8;dbname=host1660035', 'host1660035', 'sdIlLJP3', $pdo_options );
      }
      return self::$instance;
    }
  } */
?>