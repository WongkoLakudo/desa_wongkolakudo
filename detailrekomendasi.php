<?php 
include "koneksi.php";
$query=mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_rekomendasi where id_rekomendasi='$_GET[id]'");
$data=mysqli_fetch_array($query);
?>

<br>
<div class="wrapper">
      <div class="row">
      <div class="col-md-3" style="margin:30px;">
     <img src="admin/admin/rekomendasi/foto/<?php echo $data['gambar']; ?>" style="width:250px; height:250px;">   
    </div>
      <div class="col-md-6" style="margin-left:10px ; margin-top:10px;">
        <center> <td><b>Detail Setiap Anggota</b></td> </center>
		<table>
        	<tr>
        		<h3><td><b>Nama  </b>		 : <?php echo $data['judul']; ?></td></h3>
        	</tr>

        	<tr>
        		<h3><td><b>Detail </b>		     : <?php echo $data['isi']; ?></td>	</h3>
        	</tr>
        	
        </table><br><br>
         
    </div>
</div>