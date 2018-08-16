<?php
include('connection.php');

if(isset($_SESSION['id'])){
    $myclass = new Conversations();
    $myclass->pdo = $pdo;
    $user_id = $_SESSION['id'];
    $data = $myclass->myconversations($user_id); 
    // session_destroy();
    // $_SESSION['id'] = false;


    echo '<main role="main" class="container">';
    echo '<br>';
    echo ' </div> </div>';
    echo ' </div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '<div class="row">';
    echo '<div class="col-md-4">';
    echo '<div class="my-3 p-3 bg-white rounded box-shadow">';
    echo 'User id: ' . $_SESSION['id'];
    echo '</div>';
    echo '</div>';
    echo '<div class="col-md-8">';
    echo '<div class="my-3 p-3 bg-white rounded box-shadow">';
    echo '<h6 class="border-bottom border-gray pb-2 mb-0">Мои сообщения :</h6>';

foreach($data as $key => $val) {

          echo ' <div class="media text-muted pt-3">';
          echo ' <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">';
          echo ' <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">';
          echo ' <strong class="d-block text-gray-dark">Username :';
          echo "<a href='index.php?controller=index&action=conversation&c_id={$val['c_id']}'>";
          echo $val['username'];
          //echo 'user id :' . $val['user_id'] . ' ';
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
}



echo '</div>';
echo '</div>';
echo '</div>';
echo '</main>';

} else {

    echo '<main role="main" class="container">';
    echo '<br>';
    echo '</div> </div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '<div class="row">';
    echo ' <div class="col-md-4">';
    echo ' <div class="my-3 p-3 bg-white rounded box-shadow">';
    echo ' <form method="post" action="">';
    echo '  <div class="form-group">';
    echo '    <label for="exampleInputEmail1">Email address</label>';
    echo '    <input type="email" class="form-control" id="exampleInputEmail1" name = "username" aria-describedby="emailHelp" placeholder="Enter email">';
    echo '    <small id="emailHelp" class="form-text text-muted">We\'ll never share your email with anyone else.</small>';
    echo '  </div>';
    echo '  <div class="form-group">';
    echo '    <label for="exampleInputPassword1">Password</label>';
    echo '    <input type="password" class="form-control" name = "password" id="exampleInputPassword1" placeholder="Password">';
    echo '  </div>';
    echo '   <div class="form-check">';
    echo '    <input type="checkbox" class="form-check-input" id="exampleCheck1">';
    echo '     <label class="form-check-label" for="exampleCheck1">Check me out</label>';
    echo '   </div>';
    echo '   <button type="submit" name = "send" value ="submit" class="btn btn-primary">Submit</button>';
    echo ' </form>';
    echo ' </div>';
    echo ' </div>';
    echo ' <div class="col-md-8">';
    echo ' <br><br><br><br><bR><bR><bR><br><bR><br>';
    echo ' <br><br><br><br><bR><bR><bR><br><bR><br>';
    echo ' <br><br><br><br><bR><bR><bR><br><bR><br>';
    echo ' </div>';
    echo'</div>';
    echo '</main>';

}
?>