<?php
include('connection.php');
//include('model.php');
class Login {

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

<?php
if(isset($_POST['send'])) {
    //print_r($_POST);
   $username =  $_POST['username'];
   $password =  $_POST['password'];
   $login = new Login ($username, $password);
   $login->pdo = $pdo;
   $data = $login->getdata();
   
} else {

}

if(isset($_SESSION['id'])){
    $myclass = new Conversations();
    $myclass->pdo = $pdo;
    $user_id = $_SESSION['id'];
    $data = $myclass->myconversations($user_id); 
    // session_destroy();
    // $_SESSION['id'] = false;

foreach($data as $key => $val) {

    echo "<a href='display.php?id={$val['c_id']}'>";
    echo 'user name :' . $val['username'] . ' ';
    echo 'user id :' . $val['user_id'] . ' ';
    echo "</a>";
    echo '<br>';


$sql = 'SELECT R.cr_id, R.thetime, R.reply, R.user_id_fk FROM conversation_reply R WHERE R.c_id_fk = :c_id LIMIT 1';
$stmt = $pdo->prepare($sql);
$stmt->execute([
    'c_id' => $val['c_id']
    ]);
$posts = $stmt->fetchAll();

foreach($posts as $key => $post) {
    echo $post['reply'];
    echo '<br><br>';
}

}


} else {
   echo ' <form method="post" action="">';
   echo ' username :<br>';
   echo '<input type = "text" name = "username" placeholder ="username"><br><br>';
   echo ' password :<br>';
   echo ' <input type = "text" name = "password" placeholder = "password"><br><br>';
   echo ' <input type = "submit" name = "send" value ="submit"><br>';
   echo ' </form>';
}
?>




















<?php 
/*     if (isset($_SESSION['sessData'])) {
        echo '<a href="index.php?controller=crud&action=create"><button type="button" class="btn btn-outline-success">Написать</button></a>';
    } else {
      echo '';
    }
?> 
<?php $paginate->dataview($newquery); ?>
<!-- Pagination -->
<nav aria-label="...">
  <ul class="pagination justify-content-center mb-4">
<?php $paginate->paginglink($query,$records_per_page); ?>
  </ul>
</nav> */