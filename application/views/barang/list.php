<?php echo $this->session->flashdata('hasil'); ?>
<center><h2><strong>Data Barang</strong></h2></center>
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
<div class="w3-container">
<p><a href="http://kukuhgaminggear.000webhostapp.com/rest_client/index.php/barang/create" class="w3-button w3-light-green">Tambah Data</a></p>
</div>
<table width="600" border="1" cellpadding="3">
<table>
    <tr>
      <th>ID</th>
      <th>ID Barang</th>
      <th>Nama</th>
      <th>Kategori</th>
      <th>Stok</th>
      <th>Satuan</th>
      <th>Isi</th>
      <th>Harga Beli</th>
      <th>Harga Jual</th>
      <th>Action</th>
      <th></th>
    </tr>
    <?php
    foreach ($barang as $b){
        echo "<tr>
              <td>$b->id</td>
              <td>$b->id_barang</td>
              <td>$b->nama</td>
              <td>$b->kategori</td>
              <td>$b->stok</td>
              <td>$b->satuan</td>
              <td>$b->isi</td>
              <td>$b->harga_beli</td>
              <td>$b->harga_jual</td>
              <td>".anchor('barang/edit/'.$b->id,'Edit')."
                  ".anchor('barang/delete/'.$b->id,'Delete')."</td>
              </tr>";
    }
    ?>
    
</table>