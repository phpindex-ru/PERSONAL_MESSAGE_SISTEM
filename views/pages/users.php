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

</div>
</div>
<div class="col-md-8">
<div class="my-3 p-3 bg-white rounded box-shadow">
<?php
foreach($user as $all) {
    echo '<a href="index.php?controller=index&action=userpage&id=' . $all['user_id'] . ' ">';
    echo $all['username'];
    echo '</a>' . ' ' . $all['email'];
    echo '<br>';
    echo '<br>';
}
?>
      </div>
      </div>
      </div>
    </main>