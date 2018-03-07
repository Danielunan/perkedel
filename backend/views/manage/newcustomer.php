<?php 

$this->title = 'suka toko buku tambah pelanggan baru';
$baseUrl = \Yii::getAlias('@web');
?>

<div class="container h-100 d-flex justify-content-center">
<form action="<?= $baseUrl."/manage/customersave"?>">

    <div class="card text-white bg-info" style="width: 30rem;">
        <div class="card-header">tambahkan anggota</div>
        <div class="card-body">

            <div class="col-md-8">
                <label for="ex1">nama</label>
                <input type="text" class="form-control" name="firstname">
            </div>

            <div class="col-md-8">
                <label for="ex2">nama terakhir</label>
                <input type="text" class="form-control" name="lastname">
            </div>

            <div class="col-md-8">
                <label></label>
                <input type="text" class="form-control" name="phone">
            </div>

            <div class="col-md-8">
                <label></label>
                <input type="text" class="form-control" name="email">
            </div>

            <div class="col-md-8">
                <label></label>
                <input type="text" class="form-control" name="password">
            </div>

            <div class="col-md-8">
                <label></label>
                <input type="text" class="form-control" name="address">
            </div>
        <br>
    <center>
        <button type="submit" class="btn btn-danger">konfirmasi</button>
    </center>
</form>
</div>
</div>
</div>
