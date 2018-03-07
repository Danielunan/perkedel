<?php 

$this->title = 'suka toko buku';
$baseUrl=\Yii::getAlias('@web');

?>

<div class="container h-100 d-flex justify-content-center">
<form action="<?= $baseUrl."/manage/booksave"?>" method="get">

    <div class="card text-white bg-success" style="width: 30rem;">
        <div class="card-header">edit data</div>
        <div class="card-body">

        <input type="hidden" name="id" value="<?= $model['_id'] ?>">
        <div class="form-group">
    <br>
        <div class="dropdown">
            <label>jenis buku :</label>
            <select name="type" value="<?= $model['type'] ?>">
                <option value="kartun">kartun</option>
                <option value="majalah">majalah</option>
                <option value="jurnal">jurnal</option>
                <option value="novel">novel</option>
                <option value="fiksi">fiksi</option>
                <option value="dokumenter">dokumenter</option>
            </select>
        </div>
        <br>

        <div class="form-group">
            <div class="col-md-8">
                <label>judul buku :</label>
                <input type="text" class="form-control" name="name" value="<?= $model['name'] ?>">
            </div>
            <div class="col-md-8">
                <label>buku itu :</label>
                <input type="text" class="form-control" name="version" value="<?= $model['version'] ?>">
            </div>
            <div class="col-md-8">
                <label for="ex1">harga</label>
                <input type="text" class="form-control" name="price" value="<?= $model['price'] ?>">
            </div>
            <div class="col-md-8">
                <label for="ex2">denda</label>
                <input type="text" class="form-control" name="charge" value="<?= $model['charge'] ?>">
            </div>
            <div class="col-md-8">
                <label>jumlah hari dipinjam</label>
                <input type="text" class="form-control" name="days" value="<?= $model['days'] ?>">
            </div>
            <div class="col-md-8">
                <label>jumlah buku yang ditambahkan</label>
                <input type="text" class="form-control" name="total" value="<?= $model['total'] ?>">
            </div>
          <br>
          <center><button type="submit" class="btn btn-warning">konfirmasi</button></center>
    </div>
</form>
        
        </div>
    </div>

