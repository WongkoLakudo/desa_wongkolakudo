</div>
		   
		  </div>
		
		<section class="section-divider textdivider divider4">
			<div class="container">
			<br/>
			<br/>
			<br/>
			<br/>
				<p><b><h2 style="color:white;"><marquee>WISATA KOTA JAMBI</marquee></h2></b></p>
				<hr>
				<p>SIOWISJA siap membantu Anda mencari wisata di Jambi</p>
			</div><!-- container -->
		</section><!-- section -->
<?php include"koneksi.php"; ?>


			<!-- /row -->
		<!-- /row -->
<!-- /container -->
	
	

<div class="wrapper "  >
	  <div class="container">
		<div class="content">
		  <div id="featured_slide " >
		  
		   
		   <div>
			  
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
					$query=mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_rekomendasi order by id_rekomendasi desc limit $posisi,$batas");
					while($r=mysqli_fetch_array($query))
					{
					echo"<div class='fl_right col-sm-4'>
					<br>
					<img border=2 src='admin/admin/rekomendasi/foto/$r[gambar]' border=0 width=300 height=200> 
					 <br> <strong><a href='?module=detailrekomendasi&id=$r[id_rekomendasi]'>$r[judul].</a></strong></div>
					 
						 
					"; 
						  
						} 

					?>

		   </div>
		   
		  </div>
		  
		</div>
		
	  </div>

</div>
		
		<section class="section-divider textdivider divider5">
			<div class="container">
				<h1>BEAUTIFUL JAMBI</h1>
				<hr>
				<p>To develop comfort, beautiful natural beauty is the main priotas in your tourist destination</p>
			</div><!-- container -->
		</section><!-- section -->