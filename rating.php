
	<?php include"koneksi.php"; ?>
<div class="wrapper "  >
	  <div class="container">
		<div class="content">
		  <div id="featured_slide " >
		  
		   
		   <div>
			<br>
			<br>
			<br>
		   <form action="rating.php" method="get">
       <label>Pencarian :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">

</form>
<br><br>
<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_rating where judul_wisata like '%".$cari."%'");		
	}else{
		$data = mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_rating");	
			
	}
	$no = 1;
	while($d = mysqli_fetch_array($data)){
		{echo"<div class='fl_right col-sm-4'>
			<img border=2 src='admin/admin/rating/foto/$d[gambar_wisata]' border=0 width=300 height=200> <br>
			 <strong><a href='?module=detail&id=$d[id_rating]'>$d[judul_wisata].</a></strong>
		
			<p>  </p> </div>
				 
			"; 	}
	?>		
<?php  
include "koneksi.php"; 
						
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];

	echo "<b>Hasil pencarian : ".$cari."</b>";
}

					   
					// $batas=10;
					// $paging=@$_GET['paging'];
					// if(empty($paging))
					// 	{
					// 	$posisi=0;
					// 	$paging=1;
					// 	}

					// else{
					// 	$posisi=($paging-1) * $batas;
					// 	}
					// $query=mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_rating order by judul_wisata desc limit $posisi,$batas");
					// while($r=mysqli_fetch_array($query))
					// {
					// echo"<div class='fl_right col-sm-4'>
					// <img border=2 src='admin/admin/rating/foto/$r[gambar_wisata]' border=0 width=300 height=200> <br>
					//  <strong><a href='?module=detail&id=$r[id_rating]'>$r[judul_wisata].</a></strong>
				
					// <p>  </p> </div>
						 
					// "; 
						  
					// 	} 
					}

					?>

		   </div>
		   
		  </div>
		  
		</div>
		
	  </div>

</div>

