<?php 

$this->title = 'suka toko buku';
$baseUrl = \Yii::getAlias('@web');
$csrf = "'".\yii::$app->request->csrfParam."':'".\yii::$app->request->csrfToken."'";

use yii\web\view;
use backend\models\Rent;

$str = <<<EOT
var price = 0;
var book_count = 0;
var books = [];
$('#fresh-table').bootstrapTable({
    toolbar: ".toolbar",
    maintainSelected: true,
    showRefresh: true,
    search: true,
    showToggle: true,
    showColumn: true,
    pagination: true,
    striped: true,
    pageSize: 5,
    pageList: [8, 10, 25, 50, 100],

    formatShowingRows: function(pageFrom, pageTo, totalRows) {
        //do nothing here, we don't want to show the text "showing x of y from..."
    },
    formatRecordsPerPage: function(pageNumber) {
        return pageNumber + " rows visible";
    },
    icons: {
        referesh: 'fa fa-refresh',
        toggle: 'fa fa-th-list',
        columns: 'fa fa-columns',
        detailOpen: 'fa fa-plus-circle',
        columns: 'fa fa-columns',
        detailOpen: 'fa fa-plus-circle',
        detailClose: 'fa fa-minus-circle'
    },
});

$(window).resize(function() {
    $('#fresh-table').bootstrapTable('resetView');
});

// check 
$('#fresh-table').on('check.bs.table.bs.table', function (e,row,element) {
    price += row._data.price;
    book_count++;
    $('#price').html(price);
    $('#book_count').html(book_count);
    books.push(row._data.id);
    console.log(books);
});

//uncheck
$('#fresh-table').on('uncheck.bs.table.bs.table', function (e,row,element) {
    price -= row._data.pricce;
    book_count--;
    $('#price').html(price);
    $('#book_count').html(book_count);

    //remove 
    var index = books.indexOf(row._data.id);
    if (index >= 0) {
        books.splice(index, 1);
    }
    console.log(books);
});

//check-all
$('#fresh-table').on('check-all.bs.table.bs.table', function (e,rows) {
    price = 0;
    book_count = 0;
    books = [];
    for (i = 0; i < rows.length; i++) {
        if (rows[i].select===true) {
            console.log(rows[i]);
            price += rows[i]._data.price;
            book_count++;
            books.push(rows[i]._data.id);
        }
    }
    $('#price').html(price);
    $('#book_count').html(book_count);
    console.log(books);
});

//uncheck
$('#fresh-table').on('uncheck-all.bs.table.bs.table', function (e,rows) {
    price = 0;
    book_count = 0;
    books = [];
    for (i = 0; i < rows.length; i++) {
        if (rows[i].select===true) {
            price += rows[i]._data.price;
            book_count++;
            books.push(rows[i]._data.id);
        }
    }
    $('#price').html(price);
    $('#book_count').html(book_count);
    console.log(books);
});

$("#rent").click(function() {
    $.ajax({
        url: '$baseUrl/bookstore/rent',
        type: 'POST',
        data: {books:JSON.stringify(books),$csrf},
        success: function(data) {
            t1 = window.setTimeout(function() { window.location = '$baseUrl/bookstore/history'; },1000);
            console.log(data);
        },
    });
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

                <?= $user->firstname ?> <?= $user->lastname ?>
                <a href="<?= $baseUrl."/auth/logout"?>">Keluar</a>

                <p>Buku Total <b id="book_count">0</b>buku <br> termasuk<b id="price">0</b>rupiah</p>
                <button type="button" class="btn btn-success btn-sm pull-right" id="rent" data-toggle="modal" data-target="#loading">
                Dipinjam
                </button>
                <br>
                <br>
            <?php else: ?>
            <a href="<?= $baseUrl."/auth/login"?>" class="btn btn-primary">
                Login 
            </a>
            <br>
            <br>
        <?php endif; ?>
    </div>
    <br>

    </div>
</div>

<div class="fresh-table full-color-azure">

<div class="toolbar">
    <a href="<?= $baseUrl."/bookstore" ?>" class="btn btn-default active">Daftar Buku</a>
    <a href="<?= $baseUrl."/manage" ?>" class="btn btn-default active">Manage</a>
    <?php if (isset($user)): ?>
        <a href="<?= $baseUrl."/bookstore/history"?>" class="btn btn-default">sejarah pinjaman</a>
    <?php endif; ?>
</div>
<table id="fresh-table" data-click-to-select="true" class="table">
    <thead>
        <th data-field="select" data-checkbox="true">pilih</th>
        <th data-field="name" data-checkbox="true">judul buku</th>
        <th data-field="type" data-checkbox="true">tipe</th>
        <th data-field="price" data-checkbox="true">harga</th>
        <th data-field="rentday" data-checkbox="true">jumlah hari yang dipinjam</th>
        <th data-field="charge" data-checkbox="true">denda</th>
        <th data-field="total" data-checkbox="true">jumlah buku</th>
    </thead>

    <tbody>
        <?php 
        foreach ($result as $var) {
            $rent_b = Rent::find(["books.book_id" => $var['_id']])->count();
        ?>
        <?php if ($var['total']-$rent_b != 0): ?>
            <tr data-events="selectTable" data-id="<?= $var['_id'] ?>" data-price="<?= $var['price'] ?>">
                <td>
                    <input data-index="0" name="btSelectItem" type="checkbox">
                </td>
                <td>
                    <?= $var['name'] ?>
                    <?php 
                    if(isset($var['version'])&& $var['version']!='')
                    {
                        echo "<span class=\"badge badge-primary\">buku itu ".$var['version']."</span>";
                    }
                    ?>
                </td>
                <td><?= $var['type'] ?></td>
                <td><?= $var['price'] ?>Rupiah</td>
                <td><?= $var['days'] ?>Hari</td>
                <td><?= $var['charge'] ?>Denda</td>
                <td><?= $var['total']-$rent_b ?></td>
            </tr>
          <?php endif; ?>
        <?php } ?>

        </tbody>
       </table>
      </div>

<!-- load -->
<div class="modal fade" id="loading" tabindex="-1" role="dialog" aria-labelledby="loading" aria-hidden="true">
</div>