<?php
//include('testdb.php');

class Create_Conversation {

public $pdo;
private $user_one;
private $user_two;
private $user_ip;
private $timestamp;

public function __construct ($user_one, $user_two, $user_ip, $timestamp) {
    $this -> user_one = $user_one;
    $this -> user_two = $user_two;
    $this -> user_ip = $user_ip;
    $this -> timestamp = $timestamp;
}

public function mydata() {
    $sql ='SELECT c_id FROM conversation WHERE (user_one=:user_one and user_two=:user_two) or (user_one=:user_two and user_two=:user_one)';
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([
        'user_one' => $this->user_one,
        'user_two' => $this->user_two
        ]);
        $data = $stmt->fetchAll();
        return $data;
}

public function insert () {
$sql = 'INSERT INTO conversation(user_one, user_two, ip, thetime) VALUES(:user_one, :user_two, :ip, :thetime)';
$stmt = $this->pdo->prepare($sql);
$stmt->execute(['user_one' => $this -> user_one, 'user_two' => $this -> user_two, 'ip' => $this -> user_ip, 'thetime' => $this -> timestamp]);
return $this;
}

public function selectnewuser () {
    $sql ='SELECT c_id FROM conversation WHERE user_one=:user_one';
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([
        'user_one' => $this->user_one
        ]);
        $data = $stmt->fetchAll();
        return $data;
}
}

