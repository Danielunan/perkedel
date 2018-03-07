<?php 

$this->title = 'suka toko buku, tambah buku baru'; 
$baseUrl=\Yii::getAlias('@web'); 

?>

<input type="hidden" name="id" value="<?= $model['_id'] ?>">

<div class="card text-white bg-warning mmb-3" style="width: 30rem;">
    <div class="card-header">tambahkan anggota</div>
    <div class="card-body">

        <div class="col-xs-3">
            <label for="ex1">nama</label>
            <input type="text" class="form-control" name="firstname" value="<?= $model['firstname'] ?>">
        </div>
        <div class="col-xs-3">
            <label for="ex2">nama terakhir</label>
            <input type="text" class="form-control" name="lastname" value="<?= $model['lastname'] ?>">
        </div>
        <div class="col-xs-3">
            <label>nomor telepon</label>
            <input type="text" class="form-control" name="phone" value="<?= $model['phone'] ?>">
        </div>
        <div class="col-xs-3">
            <label>e-mail</label>
            <input type="text" class="form-control" name="email" value="<?= $model['email'] ?>">
        </div>
        <div class="col-xs-3">
            <label>password</label>
            <input type="text" class="form-control" name="password" value="<?= $model['password'] ?>">
        </div>
        <div class="col-xs-3">
            <label>alamat</label>
            <input type="text" class="form-control" name="address" value="<?= $model['address'] ?>">
        </div>
    <center>
        <button type="submit" class="btn btn-success">Konfirmasi</button>
    </center>
   </form>
</div>
</div>
