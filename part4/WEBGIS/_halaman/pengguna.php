<?php
  $title="Pengguna";
  $judul=$title;
?>
<?=content_open('Data Pengguna')?>
    <ul class="list-group">

    <table class="table table-bordered">
	<thead>
		<tr>
      		<th>Id Pengguna</th>
			<th>Nama Pengguna</th>
			<th>Email</th>
			<th>Password</th>
			<th>Level</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$no=1;
			$getdata=$db->ObjectBuilder()->get('m_pengguna');
			foreach ($getdata as $row) {
				?>
					<tr>
         				<td><?=$row->id_pengguna?></td>
						<td><?=$row->nama_pengguna?></td>
						<td><?=$row->e_pengguna?></td>
						<td><?=$row->password?></td>
						<td><?=$row->level?></td>
						<td>
							<a href="<?=url($url.'&ubah&id='.$row->id_kecamatan)?>" class="btn btn-info"><i class="fa fa-edit"></i> Ubah</a>
							<a href="<?=url($url.'&hapus&id='.$row->id_kecamatan)?>" class="btn btn-danger" onclick="return confirm('Hapus data?')"><i class="fa fa-trash"></i> Hapus</a>
						</td>
					</tr>
				<?php
			}

		?>
	</tbody>
</table>
        
        <?php
      
      ?>



<?=content_close()?>
  </div>
  