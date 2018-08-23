<?php
include('connection.php');

if(isset($_SESSION['id'])){
    $myclass = new Conversations();
    $myclass->pdo = $pdo;
    $user_id = $_SESSION['id'];
    $data = $myclass->myconversations($user_id); 
    include('views/header.php');
?>


<?php

echo ' <main role="main" class="container">';
echo ' <br>';
echo '  </div> </div>';
echo ' </div>';
echo '  </div>';
echo '   </div>';
echo '   </div>';
echo '   <div class="row">';
echo '  <div class="col-md-4">';
echo '   <div class="my-3 p-3 bg-white rounded box-shadow">';
echo '   User id:' . $_SESSION['id'];
echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br>';
echo '   </div>';
echo '   </div>';
echo '   <div class="col-md-8">';
echo '   <div class="my-3 p-3 bg-white rounded box-shadow">';
echo '   <h6 class="border-bottom border-gray pb-2 mb-0">Мои сообщения :</h6>';
echo '<br>';
foreach($data as $key => $val) {
          echo ' <div class="media text-muted">';
          $query = 'SELECT first_name, last_name, user_picture FROM userinfo WHERE user_id = :user_id';
          $stmt = $pdo->prepare($query);
          $stmt->execute([
              'user_id' => $val['user_id']
              ]);
          $userinfo = $stmt->fetch();
          echo ' <img src="images/'.$userinfo['user_picture'].'" alt="" class="mr-2 rounded" hight="50" width="50">';
          echo ' <p class="media-body mb-0 small lh-125 border-gray">';
          echo ' <strong class="d-block text-gray-dark">';
          echo "<a href='index.php?controller=index&action=conversation&c_id={$val['c_id']}'>";
          echo $userinfo['first_name'] . ' ' . $userinfo['last_name'];
         // echo $val['username'];
         // echo 'user id :' . $val['user_id'] . ' ';
          echo "</a>";
          echo '</strong>';
$sql = 'SELECT R.cr_id, R.thetime, R.reply, R.user_id_fk FROM conversation_reply R WHERE R.c_id_fk = :c_id ORDER BY R.cr_id DESC LIMIT 1';
$stmt = $pdo->prepare($sql);
$stmt->execute([
    'c_id' => $val['c_id']
    ]);
$posts = $stmt->fetchAll();

foreach($posts as $key => $post) {
    echo $post['reply'];
}

echo ' </p>';
echo '   </div>';
echo ' <hr>';
}



echo '</div>';
echo '</div>';
echo '</div>';
echo '</main>';

} 