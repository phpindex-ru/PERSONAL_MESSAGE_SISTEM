<?php
if(isset($_SESSION['id'])) {
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

<?php
if($_SESSION['id'] == $_GET['id']) {

} else {
  ?>
  <form action="index.php?controller=index&action=startconversation&id=<?php echo $_GET['id']; ?>" method="post">
  <input type = "hidden" name = "id" value ="<?php echo $_GET['id']; ?>" >
  <input type="submit" name="submit" value="Написать сообщение">
  </form>
  <?php
}
?>


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
} ?>