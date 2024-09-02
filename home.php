
<div id="headerwrap" id="home" name="home">
			<header class="clearfix">
	  		 		<img src="image/buton.png" style="width:300px; height:300px; margin: 0 auto;" class="img-responsive">
	  		 		<p><marquee>SISTEM INFORMASI DESA WONGKO LAKUDO, KECAMATAN LAKUDO, KABUPATEN BUTON TENGAH </marquee></p>
	  		 		<p><b><h1 style="color:white;"><marquee>DESA WONGKO LAKUDO</marquee></h1></b></p>
	  		</header>	    
	    </div><!-- /headerwrap -->

		<!-- ==== GREYWRAP ==== -->
		<div id="greywrap">
			<div class="row" class='fl_right col-sm-4'>
				<!-- <h3>mari melihat desa wongko</h3> -->
				 <h3 align="center">Denah Desa Wongko Lakudo</h3>
				 <img src="image/1.png" >
				 <br>
				 <img src="image/2.png">
				 <br>
		 <?php
		 echo "<a href='https://maps.app.goo.gl/XyRqoCw7DsiBcvMj9'>Lihat di Peta</a>";
?>
					<?php  
						include "koneksi.php";  
					   
					$batas=10;
					$paging=@$_GET['paging'];
					if(empty($paging))
						{
						$posisi=0;
						$paging=1;
						}

					else{
						$posisi=($paging-1) * $batas;
						}
					$query=mysqli_query($GLOBALS["___mysqli_ston"], "select id_wisata,gambar,judul,isi from tbl_wisata where id_wisata='12'");
					while($r=mysqli_fetch_array($query))
					{
					echo"<div class='fl_right col-sm-4'>
					<img border=2 src='admin/admin/wisata/foto/$r[gambar]' border=0 width=300 height=200> 
					 <br><strong><a href='?module=readmore&id=$r[id_wisata]'>$r[judul].</a></strong>
					<br><br>
					".substr($r['isi'],0,100)." .....<a href='?module=readmore&id=$r[id_wisata]'>Read More</a> </p> </div>
						 
					"; 
						  
						}

					?>
					
			
					<?php  
						include "koneksi.php";  
					   
					$batas=10;
					$paging=@$_GET['paging'];
					if(empty($paging))
						{
						$posisi=0;
						$paging=1;
						}

					else{
						$posisi=($paging-1) * $batas;
						}
					$query=mysqli_query($GLOBALS["___mysqli_ston"], "select id_wisata,gambar,judul,isi from tbl_wisata where id_wisata='17'");
					while($r=mysqli_fetch_array($query))
					{
					echo"<div class='fl_right col-sm-4'>
					<img border=2 src='admin/admin/wisata/foto/$r[gambar]' border=0 width=300 height=200> 
					 <br><strong><a href='?module=readmore&id=$r[id_wisata]'>$r[judul].</a></strong>
					<br><br>
					".substr($r['isi'],0,100)." .....<a href='?module=readmore&id=$r[id_wisata]'>Read More</a> </p> </div>
						 
					"; 
						  
						} 

					?>
			
					<?php  
						include "koneksi.php";  
					   
					$batas=10;
					$paging=@$_GET['paging'];
					if(empty($paging))
						{
						$posisi=0;
						$paging=1;
						}

					else{
						$posisi=($paging-1) * $batas;
						}
					$query=mysqli_query($GLOBALS["___mysqli_ston"], "select id_wisata,gambar,judul,isi from tbl_wisata where id_wisata='18'");
					while($r=mysqli_fetch_array($query))
					{
					echo"<div class='fl_right col-sm-4'>
					<img border=2 src='admin/admin/wisata/foto/$r[gambar]' border=0 width=300 height=200> 
					 <br><strong><a href='?module=readmore&id=$r[id_wisata]'>$r[judul].</a></strong>
					 <br><br>
					".substr($r['isi'],0,100)." .....<a href='?module=readmore&id=$r[id_wisata]'>Read More</a> </p> </div>
						 
					"; 
						  
						} 

					?>

<?php  
						include "koneksi.php";  
					   
					$batas=10;
					$paging=@$_GET['paging'];
					if(empty($paging))
						{
						$posisi=0;
						$paging=1;
						}

					else{
						$posisi=($paging-1) * $batas;
						}
					$query=mysqli_query($GLOBALS["___mysqli_ston"], "select id_wisata,gambar,judul,isi from tbl_wisata where id_wisata='19'");
					while($r=mysqli_fetch_array($query))
					{
					echo"<div class='fl_right col-sm-4'>
					<img border=2 src='admin/admin/wisata/foto/$r[gambar]' border=0 width=300 height=200> 
					 <br><strong><a href='?module=readmore&id=$r[id_wisata]'>$r[judul].</a></strong>
					 <br><br>
					".substr($r['isi'],0,100)." .....<a href='?module=readmore&id=$r[id_wisata]'>Read More</a> </p> </div>
						 
					"; 
						  
						} 

					?>
			
				
				
			</div><!-- row -->
		</div><!-- greywrap -->