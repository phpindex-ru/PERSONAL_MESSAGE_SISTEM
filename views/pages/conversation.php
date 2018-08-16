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
print_r($allmessages);
?>
</div>
</main>