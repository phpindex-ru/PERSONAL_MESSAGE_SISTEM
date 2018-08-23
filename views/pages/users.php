<?php
if(isset($_SESSION['id'])){
  include('views/header.php');
}
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
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
</div>
<div class="col-md-8">
<div class="my-3 p-3 bg-white rounded box-shadow">
<?php
foreach($user as $all) {

  echo '<div class="media text-muted pt-3"> ';
  echo '<img src="images/' . $all['user_picture'] . '" alt="" class="mr-2 rounded" hight="100" width="100">';
  echo '<p class="media-body pb-3 mb-0 small lh-125  border-gray"> ';
  echo '<strong class="d-block text-gray-dark">Имя: <a href="index.php?controller=index&action=userpage&id=' . $all['user_id'] . ' ">' . $all['first_name'] . ' ' . $all['last_name'] . '</a>' . ' ' . $all['age'].'<br>';
  echo '</strong>E-Mail: ' . $all['email'] . '<br>Страна: '.$all['country'] . ' Город: '. $all['city'] .'<br>' . 'Образование: ' . $all['education'].'</p> </div>';
  echo '<hr>';
}
?>
      </div>
      </div>
      </div>
    </main>