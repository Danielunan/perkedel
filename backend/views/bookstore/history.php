<?php 

$this->title = 'Bookstore log File';
$baseUrl = \Yii::getAlias('@web');

use backend\models\Book;
use yii\web\View;

$str = <<<EOT
$('#fresh-table').bootstrapTable({
    toolbar: ".toolbar",

    showRefresh: true,
    search: true,
    showToggle: true,
    showColumns: true,
    pagination: true,
    striped: true,
    pageSize: 8,
    pageList: [8,10,25,50,100],

    formatShowingRows: function(pageFrom, pageTo, totalRows) {
        // tak ada apapun di sini, ga ada yang menampilkan teks "tampilkan x y dari... "
    },

    formatRecordsPerPage: function(pageNumber) {
        return pageNumber + " rows visible";
    },

    icons: {
        refresh: 'fa fa-refresh',
        toggle: 'fa fa-id-list',
        columns: 'fa fa-columns',
        detailOpen: 'fa fa-plus-circle',
        detailClose: 'fa fa-minus-circle'
    }
});

$(window).resize(function() {
    $('#fresh-table').bootstrapTable('resetView');
});
EOT;
$this->registerJS($str,View::POS_LOAD,'form-js');

?>

<div class="row">

    <div class="col-12">
        <div class="pull-left">
            <h1>Suka Toko Buku</h1>
        </div>
        <div class="pull-right text-right">
        <?php if (isset($user)): ?>

            <?= $user->firstname ?> <? $user->lastname ?>
            <a href="<?= $baseUrl."auth/logout"?>">Keluar</a>
            <br>
            <br>
            <br>
                <br>
                <br>
            <?php else: ?>
                <a href="<?= $baseUrl."auth/login"?>" 
                class="btn btn-primary">Login</a>
            <br>
            <br>
            <?php endif; ?>
        </div>
        <br>
    </div>
</div>

<div class="fresh-table toolbar-color-azure">
<div class="toolbar">
    <a href="<?= $baseUrl."/bookstore"?>" class="btn btn-default active">Daftar Buku</a>
        <?php if (isset($user)): ?> <!-- isset khusus untuk not null, atau data variabel ada value nya berarti TRUE -->
    <a href="<?= $baseUrl."/bookstore/history"?>" class="btn btn-default">Sejarah Pinjaman</a>
        <?php endif; ?>
    </div>

    <table id="fresh-table" class="table">
        <thead>
            <th data-field="name" data-sortable="true">Judul Buku</th>
            <th data-field="type" data-sortable="true">Ketik</th>
            <th data-field="price" data-sortable="true">Tanggal Kadaluarsa</th>
            <th data-field="rentday" data-sortable="true">Harga</th>
            <th data-field="charge" data-sortable="true">Denda</th>
            <th data-field="status" data-sortable="true">Status</th>
        </thead>
    
    <tbody>
    <?php foreach ($result as $var) {
        $i = 0;
    ?>
    <?php foreach ($var['books'] as $b):
        $book = Book::findOne($b['book_id']);
    ?>

    <tr>
        <td><?= $book['name'] ?></td>
        <td><?= $book['type'] ?></td>
        <td><?= $book['end_date'] ?></td>
        <td><?= $book['price'] ?></td>
    <td><?= $b['charge'] ?></td>
    <td>
 
    <?php if ($b['status'] == "batalkanpengiriman" || $b['status'] == "dijadwalkan untuk kembali"): ?>
        <b class="text-danger">
            <?= $b['status'] ?>
        </b>
    <?php elseif ($b['status'] == "pengiriman"): ?>
        <b class="text-success">
            <?= $b['status'] ?>
        </b>
    <?php elseif ($b['status'] == "pengiriman"): ?>
        <b class="text-success">
            <?= $b['status'] ?> <a href="<?= $baseUrl."/bookstore/cancel?id=".$var['_id']."&book_ar=".$i ?>" class="text-danger">batal</a>
        </b>
        <?php $i++ ?>
    <?php else: ?>
        <?= $b['status'] ?>
    <?php endif; ?>

    </td>
</tr>
<?php endforeach; ?>
    <?php } ?>
    <tbody>
</table>
</div>

    
        
            
