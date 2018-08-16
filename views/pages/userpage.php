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
  <img src="userpicture.jpg" class="img-thumbnail" alt="...">
</div>
<br>
<center>
<form action="index.php?controller=index&action=startconversation" method="post">
<input type = "hidden" name = "id" value ="<?php echo $userinfo['user_id']; ?>" >
<input type="submit" name="submit" value="Написать сообщение">
</form>
</center>
</div>
</div>
<div class="col-md-8">
<div class="my-3 p-3 bg-white rounded box-shadow">
Имя : <?php
echo $userinfo['username'];
?>
<br><hr>
О себе :
<br>
"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
      </div>
      </div>
      </div>
    </main>