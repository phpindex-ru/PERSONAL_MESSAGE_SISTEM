<?php
include('connection.php');

if(isset($_SESSION['id'])){
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
    <div class="text-center">
      <img src="images/<?php echo $userinfo['user_picture']; ?>" class="img-thumbnail" alt="...">
    </div>
    <br>
    <center>
    <!--<form action="index.php?controller=index&action=startconversation" method="post">
    <input type = "hidden" name = "id" value ="<?php echo $userinfo['user_id']; ?>" >
    <input type="submit" name="submit" value="Написать сообщение">
    </form>-->
    </center>
    </div>
    </div>
    <div class="col-md-8">
    <div class="my-3 p-3 bg-white rounded box-shadow">
    Имя : <?php
    //echo $userinfo['username'];
    echo $userinfo['first_name'] . ' ' . $userinfo['last_name'] . ' ' . $userinfo['age'] . ' лет';
    ?>
    <br><hr>
    <?php echo 'Страна: ' . $userinfo['country']; ?>
    <br><hr>
    <?php echo 'Город: ' . $userinfo['city']; ?>
    <br><hr>
    О себе :
    <br>
    <?php echo $userinfo['about']; ?>
          </div>
          </div>
          </div>
        </main>
<?php

} else {

    echo '<div class="navbar navbar-expand-md fixed-top  bg-white box-shadow">';
    echo '<div class="container">';
    echo '<nav class="nav nav-underline">';
    echo '<a class="nav-link active" href="index.php">Моя Страница</a>';
    echo '   </div>';
    echo ' </nav>';
    echo '</div> ';
echo '<br>';
    echo '<main role="main" class="container">';
    echo '</div> </div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '<div class="row">';
    echo ' <div class="col-md-4">';
    echo ' <div class="my-3 p-3 bg-white rounded box-shadow">';
    echo 'Вход';
    echo '<hr>';
    echo ' <form method="post" action="">';
    echo '  <div class="form-group">';
    echo '    <label for="exampleInputEmail1">Электронная почта</label>';
    echo '    <input type="email" class="form-control" id="exampleInputEmail1" name = "username" aria-describedby="emailHelp" placeholder="Электронная почта">';
   // echo '    <small id="emailHelp" class="form-text text-muted">We\'ll never share your email with anyone else.</small>';
    echo '  </div>';
    echo '  <div class="form-group">';
    echo '    <label for="exampleInputPassword1">Пароль</label>';
    echo '    <input type="password" class="form-control" name = "password" id="exampleInputPassword1" placeholder="пароль">';
    echo '  </div>';
    //echo '   <div class="form-check">';
    //echo '    <input type="checkbox" class="form-check-input" id="exampleCheck1">';
    //echo '     <label class="form-check-label" for="exampleCheck1">Check me out</label>';
   // echo '   </div>';
    echo '   <button type="submit" name = "send" value ="submit" class="btn btn-primary">Вход</button>';
    echo ' </form>';
    echo ' </div>';

    echo ' <div class="my-3 p-3 bg-white rounded box-shadow">';
    echo 'Регистрация';
    echo '<hr>';
    echo ' <form method="post" action="">';
    echo '  <div class="form-group">';
    echo '    <label for="exampleInputEmail1">Электронная почта</label>';
    echo '    <input type="email" class="form-control" id="exampleInputEmail1" name = "username" aria-describedby="emailHelp" placeholder="Электронная почта">';
    echo '  </div>';
    echo '  <div class="form-group">';
    echo '    <label for="exampleInputPassword1">Пароль</label>';
    echo '    <input type="password" class="form-control" name = "password" id="exampleInputPassword1" placeholder="Пароль">';
    echo '  </div>';
    echo '  <div class="form-group">';
    echo '    <label for="exampleInputPassword1">Повторите пароль</label>';
    echo '    <input type="password" class="form-control" name = "password" id="exampleInputPassword1" placeholder="Повторите пароль">';
    echo '  </div>';
    echo '   <button type="submit" name = "send" value ="submit" class="btn btn-primary">Регистрация</button>';
    echo ' </form>';
    echo ' </div>';



    echo ' </div>';
    echo ' <div class="col-md-8">';
    echo '<br><br><br><br><img src="assets\images\index.png">';
    echo ' </div>';
    echo'</div>';
    echo '</main>';





}

?>