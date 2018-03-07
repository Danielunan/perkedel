<?php 

$this->title = 'suka toko buku manage';
$baseUrl=\Yii::getAlias('@web');

?>

<a href="<?= $baseUrl."/"?>"><button type="submit" class="btn btn-primary">beranda</button></a>
<a href="<?= $baseUrl."/manage/booklist"?>"><button type="submit" class="btn btn-primary">daftar buku</button></a>
<a href="<?= $baseUrl."/manage/customerlist"?>"><button type="submit" class="btn btn-primary">daftar pelanggan</button></a>
<a href="<?= $baseUrl."/manage/bookhistory"?>"><button type="submit" class="btn btn-primary">sejarah pinjaman</button></a>
<div class="jumbotron m-2">
    <h1 class="display-4">hai, selamat datang</h1>
    <p class="lead">untuk versi 0.1</p>
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
        <div class="card text-white text-center bg-primary mb-3">
            <div class="card-body">
                <h4 class="card-title"><?= $rent ?></h4>
                <p class="card-text">jumlah pesanan</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card text-white text-center bg-primary mb-3">
            <div class="card-body">
                <h4 class="card-title"><?= $customer ?></h4>
                <p class="card-text">jumlah pelanggan</p>
            </div>
        </div>
    </div>
</div>






