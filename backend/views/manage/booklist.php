<?php 

$this->title = 'Suka Toko Buku Daftarnya';
$baseUrl = \Yii::getAlias('@web');

?>

<td><a href="<?= $baseUrl."/manage/newbook"?>"><button type="button" class="btn btn-info">tambahkan buku</button></a></td>

<td><a href="<?= $baseUrl."/manage"?>"<button type="button" class="btn btn-info">kembali</button></a></td>
<br>
<br>

<div class="search">
    <form class="" action="" method="get">
        <input type="text" name="search" placeholder="cari buku kesayangan" value="<?php echo $search ?>"/>
            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-search" aria-hidden="true"></i></button>
    </form>
</div>

<br>

<table border="1" class="table table-striped">

    <tr>
        <th data-field="name" data-sortable="true">judul buku</th>
        <th data-field="type" data-sortable="true">jenis buku</th>
        <th data-field="price" data-sortable="true">harga buku</th>
        <th data-field="days" data-sortable="true">jumlah hari yang dipinjam</th>
        <th data-field="charge" data-sortable="true">denda</th>
        <th data-field="total" data-sortable="true">jumlah buku</th>
        <th data-field="total" data-sortable="true">edit</th>
        <th data-field="total" data-sortable="true">hapus</th>
    </tr>

    <?php foreach ($result as $ver){?>
    <tr>
        <td>
        <?= $var['name'] ?>
        <?php 
            if(isset($var['version'])&&$var['version']!='')
        {
            echo "<span class='badge badge-primary'>buku itu ".$var['version']."</span>";
        }
    ?>
    </td>
    <td><?= $var['type'] ?></td>
    <td><?= $var['price'] ?>harga</td>
    <td><?= $var['days'] ?>hari</td>
    <td><?= $var['charge'] ?>denda</td>
    <td><?= $var['total'] ?>total</td>
    <td><a href="<?= $baseUrl."/manage/edit?id=".$var['_id']?>"><button type="button" class="btn btn-warning">แก้ไข</button></a></td>
  		<td><a href="<?= $baseUrl."/manage/delete?id=".$var['_id']?>"><button type="button" class="btn btn-danger">ลบ</button></a></td>

  	</tr>
   <?php }?>

</table>
    
        
