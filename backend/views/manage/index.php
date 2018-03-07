<?php 

$this->title = 'Suka book Manage';
$baseUrl = \Yii::getAlias('@web');
?>

<a href="<?= $baseUrl."/" ?>" class="btn btn-primary">Beranda</a>
<a href="<?= $baseUrl."/manage/booklist" ?>" class="btn btn-primary">Daftar Buku</a>
<a href="<?= $baseUrl."/manage/customerlist" ?>" class="btn btn-primary">Daftar Customer</a>
<a href="<?= $baseUrl."/manage/bookhistory" ?>" class="btn btn-primary">Sejarah Pinjaman</a>
<div class="jumbotron m-2">
    <h1 class="display-4">Selamat Datang di Suka Toko Buku</h1>
    <p class="lead">Versi 0.1 untuk Suka Toko Buku</p>
</div>

<div class="row mt-2">
    <div class="col">
        <div class="card text-white text-center bg-primary mb-3">
            <div class="card-body">
                <h4 class="card-title"><?= $book ?></h4>
                <p class="card-text">jumlah buku</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card text-white text-center bg-success mb-3">
            <div class="card-body">
                <h4 class="card-title"><?= $rent ?></h4>
                <p class="card-text">berapa kali order</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card text-white text-center bg-danger mb-3">
            <div class="card-body">
                <h4 class="card-title"><?= $customer ?></h4>
                <p class="card-text">jumlah pelanggan</p>
            </div>
        </div>
    </div>
</div>
