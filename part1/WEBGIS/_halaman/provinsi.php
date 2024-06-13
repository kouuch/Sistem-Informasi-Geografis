<?php
  $title="Provinsi";
  $judul=$title;
?>

<?=content_open('Data Kabupaten')?>
<ul class="list-group">
<?php
include 'env.php';
$result = mysqli_query($conn, "SELECT * FROM m_kabupaten ");

echo "<table class= table table-bordered>
	<tr>
		<th>Id Kabupaten</th>
		<th>Kode Kabupaten</th>
		<th>Kabupaten/Kota</th>
		<th>Kode Kecamatan</th>
		<th>Kode Kecamatan</th>	
	</tr>";
	
while ($row=mysqli_fetch_array($result))
{
   echo "<tr>
			<td align='center'>$row[id_kabupaten]</td>
			<td>$row[kodekab]</td>
			<td align='center'>$row[kabupaten_kota]</td>
			<td align='center'>$row[kodekec]</td>
			<td align='center'>$row[kecematan]</td>
			
		</tr>";
}

echo "</table><br />";
?>
</ul>
<?=content_close()?>
