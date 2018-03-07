<?php 

$baseUrl=\Yii::getAlias('@web');

?>

<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>register</title>
</head>

<body>
    <form action="<?= $baseUrl."/auth/registersave"?>">
     <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">firstname :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="firstname" placeholder="firstname">
      </div>
     </div>

    <div class="form-group">
     <label for="inputPassword3" class="col-sm-2 control-label">lastname :</label>
     <div class="col-sm-6">
      <input type="text" class="form-control" name="lastname" placeholder="lastname">
     </div>
    </div>

    <div class="form-group">
     <label for="inputPassword3" class="col-sm-2 control-label">phone :</label>
     <div class="col-sm-6">
      <input type="text" class="form-control" name="phone" placeholder="081-123-123-1">
     </div>
    </div>
    
    <div class="form-group">
     <label for="text" class="col-sm-2 control-label">email :</label>
     <div class="col-sm-6">
        <input type="email" class="form-control" name="email" placeholder="cth: nagatha@gmail.com">
     </div>
    </div>

    <div class="form-group">
     <label for="inputPassword3" class="col-sm-2 control-label">password :</label>
     <div class="col-sm-6">
        <input type="password" class="form-control" name="password" placeholder="6-8 karakter">
     </div>
    </div>

    <div class="form-group">
     <label for="inputPassword3" class="col-sm-2 control-label">address :</label>
     <div class="col-sm-6">
      <textarea class="form-control" name="address" placeholder="isi alamat rumah" rows="3"></textarea>
     </div>
    </div>

    <div class="col-md-12 col-md-offset-4">
        <button type="submit" class="btn btn-primary" name="submit">konfirmasi</button>
    </div>
   </form>
</body>
</html>