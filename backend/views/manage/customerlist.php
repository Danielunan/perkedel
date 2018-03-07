<?php 

$this->title = 'suka toko buku';
$baseUrl = \Yii::getAlias('@web');

?>

<td><a hrefd="<?= $baseUrl."/manage/newcustomer"?>"><button type="button" class="btn btn-info">tambahkan daftar pelanggan</button></a></td>
<td><a href="<?= $baseUrl."/manage"?>"><button type="button" class="btn btn-info">kembali</button></a></td>
<br>
<br>

<div class="search">
    <form class="" action="" method="get">
        <input type="text" name="search" placeholder="cari" value="<?php echo $search ?>" />
            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-search" aria-hidden="true"></i></button>
    </form>
</div>

<br>

<table border="1" class="table table-striped">
<tr>
    <th data-field="firstname" data-sortable="true"></th>
    <th data-field="" data-sortable=""></th>
    <th data-field="" data-sortable=""></th>
    <th data-field="" data-sortable=""></th>
    <th data-field="" data-sortable=""></th>
    <th data-field="" data-sortable=""></th>
    <th data-field="" data-sortable=""></th>   
</tr>

<?php foreach($result as $var) { ?>
<tr>
    <td><?= $var['firstname'] ?></td>
    <td><?= $var['lastname'] ?></td>
    <td><?= $var['phone'] ?></td>
    <td><?= $var['email'] ?></td>
    <td><?= $var['address'] ?></td>

    <td><a href="<?= $baseUrl."/manage/editcustomer?id=".$var['_id'] ?>"><button type="button" class="btn btn-warning">edit</button></a></td>
    <td><a href="<?= $baseUrl."/manage/customerdelete?id=".$var['_id'] ?>"><button type="button" class="btn btn-danger">hapus</button></a></td>
</tr>
<?php } ?>

</table>