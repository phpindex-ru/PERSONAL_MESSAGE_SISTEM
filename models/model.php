<?php
include('connection.php');

class Conversations {
    public $pdo;
    public $user_one;
        public function __consctruct() {
        }

public function myconversations($user_one) {
 $sql = 'SELECT u.user_id,c.c_id,u.username,u.email
 FROM conversation c, users u
 WHERE CASE 
 WHEN c.user_one = :user_one
 THEN c.user_two = u.user_id
 WHEN c.user_two = :user_one
 THEN c.user_one= u.user_id
 END 
 AND (
 c.user_one = :user_one
 OR c.user_two = :user_one
 )
 Order by c.c_id DESC Limit 20';

    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([
        'user_one' => $user_one
        ]);
    $posts = $stmt->fetchAll();
    return $posts;
}

public function insert_message($uid, $reply, $ip, $time, $cid) {
    $sql = 'INSERT INTO conversation_reply (user_id_fk, reply, ip, thetime, c_id_fk) 
    VALUES (:uid, :reply, :ip, :time,:cid)';
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([
        'uid' => $uid,
        'reply' => $reply,
        'ip' => $ip,
        'time' => $time,
        'cid' => $cid
        ]);
}


public function messages ($c_id) {
    $sql = 'SELECT * FROM conversation_reply WHERE c_id_fk=:cid Order by cr_id DESC';
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([
        'cid' => $c_id
        ]);
    $posts = $stmt->fetchAll();
    return $posts;
}




public function select_messages ($c_id) {
    $sql = 'SELECT R.cr_id,R.time,R.reply,U.user_id,U.username,U.email 
    FROM users U, conversation_reply R WHERE R.user_id_fk=U.user_id and R.c_id_fk=:cid 
    ORDER BY R.cr_id ASC LIMIT 20';
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([
        'cid' => $c_id
        ]);
    $posts = $stmt->fetchAll();
    return $posts;
}

public function users () {
    $sql = 'SELECT u.user_id, u.username, u.email, ui.id, ui.user_id, ui.first_name, ui.last_name, ui.age, ui.country, ui.city, ui.education, ui.gender, ui.user_picture
    FROM users AS u
    JOIN userinfo AS ui
    ON u.user_id = ui.user_id';


    //$sql = 'SELECT * FROM users';
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    $users = $stmt->fetchAll();
    return $users;
}


public function userpage ($user_id) {

    $sql = 'SELECT u.user_id, u.username, u.email, ui.id, ui.user_id, ui.first_name, ui.last_name, ui.age, ui.country, ui. about, ui.city, ui.education, ui.gender, ui.user_picture
    FROM users AS u
    JOIN userinfo AS ui
    WHERE ui.user_id = :user_id';
    //ON u.user_id = ui.user_id';


    //$sql = 'SELECT * FROM users WHERE user_id = :user_id';
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([
        'user_id' => $user_id
    ]);
    $users = $stmt->fetch();
    return $users;
}



}










