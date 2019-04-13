<?php echo form_open('barang/edit');?>
<?php echo form_hidden('id',$barang[0]->id);?>
<center><h2><strong>Edit Data Barang</strong></h2></center>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.w3-button {width:150px;}
table {
  border-collapse: collapse;
  width: 100%;
}
th, td {
  text-align: left;
  padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2}
th {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<table>
    <tr><td>ID</td><td><?php echo form_input('id',$barang[0]->id,"disabled");?></td></tr>
    <tr><td>ID Barang</td><td><?php echo form_input('id_barang',$barang[0]->id_barang);?></td></tr>
    <tr><td>Nama</td><td><?php echo form_input('nama',$barang[0]->nama);?></td></tr>
    <tr><td>Kategori</td><td><?php echo form_input('kategori',$barang[0]->kategori);?></td></tr>
    <tr><td>Stok</td><td><?php echo form_input('stok',$barang[0]->stok);?></td></tr>
    <tr><td>Satuan</td><td><?php echo form_input('satuan',$barang[0]->satuan);?></td></tr>
    <tr><td>Isi</td><td><?php echo form_input('isi',$barang[0]->isi);?></td></tr>
    <tr><td>Harga Beli</td><td><?php echo form_input('harga_beli',$barang[0]->harga_beli);?></td></tr>
    <tr><td>Harga Jual</td><td><?php echo form_input('harga_jual',$barang[0]->harga_jual);?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('barang','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>