<?php
include('connection.php');
class UserLogin {

private $username;
private $password;
public $pdo;       

function __construct($username, $password) {
    $this->username = $username;
    $this->password = $password;
}
function getData() {        
 
    try {
        $sql = 'SELECT * FROM users WHERE email = :email  AND password = :password';
        $query = $this->pdo->prepare($sql);
        $query->bindparam(':email', $this->username, PDO::PARAM_STR);
        $query->bindparam(':password', $this->password, PDO::PARAM_STR);
        $query->execute();
    } catch (Exception $exc) {
        echo $exc->getMessage();
    }
    
    $result = $query->fetch();
    if ($result !== FALSE) {
    $_SESSION['id'] = $result['user_id'];
    return $result;
    } else {
        //throw new Exception("Username or password is invalid, please try again.");
    }
}

function close() {
    $this->pdo->close();
}
}
?>