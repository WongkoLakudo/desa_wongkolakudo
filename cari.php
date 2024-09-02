<?php 
include 'koneksi.php';
?>
 
<h3>Form Pencarian SIOWISJA</h3>
 
<form action="index.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>
 
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
 
<table border="1">
	<tr>
		<th>No</th>
		<th>Wisata</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_rating where judul_wisata like '%".$cari."%'");				
	}else{
		$data = mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_rating");		
	}
	$no = 1;
	while($d = mysqli_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $d['judul_wisata']; ?></td>
	</tr>
	<?php } ?>
</table>