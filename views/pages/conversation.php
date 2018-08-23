<?php
include('views/header.php');
?>
<main role="main" class="container">
<br>
</div> </div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4">
<div class="my-3 p-3 bg-white rounded box-shadow">
<?php echo 'Conversation ID: ' . $c_id; ?>
<br><br><br><br><br><br><br><br><br><br>
</div>
</div>
<div class="col-md-8">
<div class="my-3 p-3 bg-white rounded box-shadow">
<form action = "" method = "post">
<div class="form-group">
<label for="exampleInputEmail1">Сообщение: </label>
<input type="text" class="form-control" name="message" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
<small id="emailHelp" class="form-text text-muted"></small>
</div>
<input type="hidden" name="c_id" value = "<?php echo $_GET['c_id']; ?>">
<input type="submit" class="btn btn-primary" name="create" value="Отправить">
</form>
<hr>
<?php

foreach($allmessages as $key => $val) {
    //echo $val['user_id_fk'];

    $query = 'SELECT first_name, last_name, user_picture FROM userinfo WHERE user_id = :user_id';
    $stmt = $pdo->prepare($query);
    $stmt->execute([
        'user_id' => $val['user_id_fk']
        ]);
    $userinfo = $stmt->fetch();
echo '<img src="images/' . $userinfo['user_picture'] . '" hight="50" width="50">' . ' ' .  $userinfo['first_name'] . ' ' . $userinfo['last_name'] . '';
    echo  ' - ' . $val['reply'];
    echo '<br><br>';
}
//print_r($allmessages);
?>
</div>
</main>