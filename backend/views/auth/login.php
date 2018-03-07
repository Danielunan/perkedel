<?php 
// baseUrl itu url manajer untuk membuat url di browser
$baseUrl = \Yii::getAlias('@web');

?>

<div class="container h-100 d-flex justify-content-center">
 <form role="form" method="post" 
        action="<?= $baseUrl."/auth/loginaction"?>">
  <h2>login</h2>
  <hr>
  <div class="form-group">
   <label class="sr-only" for="email">e-mail</label>
   <div class="input-group">
    <input type="text" name="email" class="form-control" id="email" placeholder="cth: nagatha@gmail.com" required autofocus>
   </div>
  </div>
  
  <div class="form-group">
   <label class="sr-only" for="password">password</label>
    <div class="input-group">
     <input type="text" name="password" class="form-control" id="password" placeholder="cth: 123***** " required autofocus>
    </div>
   </div>

   <button type="submit" class="btn btn-success">
     <i class="fa fa-sign-in"></i> Login </button>
   <a href="<?= $baseUrl."/auth/register" ?>"><button type="button" class="btn btn-link">register</button></a>
  </form>
</link>