<!DOCTYPE html>
<html lang="en">
<head>
<body>
<div class='container main-page'>
<a class="btn btn-small btn-danger" href="<?php echo base_url('index.php/admin/add_soal') ?>"><i class="icon-plus"></i> Tambah Data Soal </a>
<br><br>
<table class="table table-condensed">

<?php foreach ( $query->result() as $dt ) { ?>
        <tr>
            <td class="label"> <?php echo $dt->id; ?> </td>
            <td class="label"> <?php echo $dt->nama; ?> </td>
            <td class="label"> <?php echo $dt->no_hp; ?> </td>
		</tr>
		
<?php } ?>
</div>
</table>

</body>
</html>