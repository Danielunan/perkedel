<?php 

$this->title = 'Customer Log File';
$baseUrl = \Yii::getAlias('@web');

use yii\web\View;

?>

<table border="1" class="table table-striped">

<tr>
    <th data-field="firstname" data-sortable="true">nama peminjam</th>
    <th data-field="lastname" data-sortable="true">nama terakhir peminjam</th>
    <th data-field="" data-sortable="true">status</th>
</tr>

<?php foreach($result as $var) { ?>
    <tr>
        <td><?= $var['firstname'] ?></td>
        <td><?= $var['lastname'] ?></td>
        <td>
            <select>
                <option value="pengiriman">pengiriman</option>
                <option value="dikirim">dikirim</option>
                <option value="dekat dengan malam">dekat dengan malam</option>
                <option value="lambat bayar dengan baik">lambat bayar dengan baik</option>
                <option value="batalkan pengiriman">batalkan pengiriman</option>
            </select>
        </td>
<?php } ?>

</table>