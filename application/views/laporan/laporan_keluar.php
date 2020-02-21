 <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<h1 style="text-align: center;">Laporan Purchase Order</h1>
<h3 style="text-align: center;">PT SEMBADA NASIONAL</h3>
<br>
<br>
<hr>
<br>
<br>
<br>
<table border="0.5" cellspacing="0.3">
		<thead>
			<thead >
                <tr style="text-align: center;" cellspacing="1">
                  <th style="background-color: #dddddd;">No</th>
                  <th style="background-color: #dddddd;">ID PO</th>
                  <th style="background-color: #dddddd;">Kode Barang</th>
                  <th style="background-color: #dddddd;">Nama Barang</th>
                  <th style="background-color: #dddddd;">Nama Vendor</th>
                  <th style="background-color: #dddddd;">Stok</th>
                  <th style="background-color: #dddddd;">Harga</th>
                  <th style="background-color: #dddddd;">Status</th>
                </tr>
                </thead>
                <tbody>
              <?php $nomor = 1; ?>
              <?php foreach ($data->result()as $row): ?>
                    <tr>
                    <td><?php echo $nomor;?></td>
                    <td><?= $row->id_po?></td>
                    <td><?= $row->kode_barang?></td>
                    <td><?= $row->nama_barang?></td>
                    <td><?= $row->nama_vendor?></td>
                    <td><?= $row->stok?></td>
                    <td><?= $row->harga?></td>
                    <td><?= $row->status?></td>
                  </tr>
                  <?php $nomor++; ?>
                  <?php endforeach;?>
                </tbody>
	</table>



