<!DOCTYPE html>
<?php include "fungsi_kalender.php";?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="author" content="Carlos Alvarez - Alvarez.is - blacktie.co">
    <link rel="shortcut icon" href="assets/ico/favicon.png">
	<link rel="shortcut icon" href="application/views/welcome_message.php">

    <title> WEBSITE DESA WONGKO LAKUDO</title>

    <link href="assets/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/main.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link href="assets/css/animate-custom.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    <script src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
    
    
  </head>
  	<!-- <link rel="shortcut icon" href="" type="image"> -->

  <body data-spy="scroll" data-offset="0" data-target="#navbar-main">
  
  
  	<div id="navbar-main">
      <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-shield" style="font-size:30px; color:#3498db;"></span>
          </button>
          <a class="navbar-brand hidden-xs hidden-sm" href="#home"><span class="icon icon-shield" style="font-size:18px; color:#3498db;"></span></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="?module=home" class="smoothScroll">Home</a></li>
			<li> <a href="?module=profil" class="smoothScroll">Profil</a></li>
			<li> <a href="?module=rekomendasi" class="smoothScroll"> Struktur desa</a></li>
			<!-- <li> <a href="?module=wisata" class="smoothScroll"> Wisata</a></li> -->
			<li> <a href="?module=rating" class="smoothScroll"> Usaha</a></li>
			<li> <a href="?module=saran" class="smoothScroll"> Saran</a></li>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    </div>
	<br>

  
		<!-- ==== HEADERWRAP ==== -->
	    
		
		<?php include"content.php"; ?>
		 		

		<!-- ==== SECTION DIVIDER2 -->
					
		
		<div class="container" id="contact" name="contact">
			<div class="row">
			<br>
				<h2 class="centered">THANKS FOR VISITING US</h2>
				<hr>
				<br>
				<br>
				<div class="col-lg-4">
					<h3>Contact Information</h3>
					<p><span class="icon icon-home"> <a href="https://maps.app.goo.gl/pLSiFsaMoBhvbf2L7"></span> Jl. Poros Mawasangka - Kabupateb Buton Tengah, Sulawesi Tenggara, Indonesia.</a><br/>
						<span class="icon icon-phone"> <a href="tel:0751 93632"> </span> 081210104974 </a><br/>
						<span class="icon icon-envelop"></span> <a href="lakudowongko8@gmail.com"> lakudowongko8@gmail.com</a> <br/>
						<!-- <span class="icon icon-facebook"></span> <a href="https://www.facebook.com/siowisja"> Desa Wongko lakudo </a> <br/> -->
					</p>
				</div><!-- col -->

				<!-- <h3>Lokasi Buton Tengah</h3> -->
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24947.269314393463!2d122.35869122333814!3d-5.306368846583509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2da383c14192895b%3A0x2fbd835ab731e1b5!2sButon%20Tengah!5e0!3m2!1sid!2sid!4v1714898885999!5m2!1sid!2sid" width="350" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				
				<div class="col-lg-4">
						<div id='judul_header'>&#187; Calender </div>
					<div class='agenda'>
									<?php 
						  $tgl_skrg=date("d");
						  $bln_skrg=date("n");
						  $thn_skrg=date("Y");
						  echo buatkalender($tgl_skrg,$bln_skrg,$thn_skrg); 
						  ?>
					</div>
				</div><!-- col -->


			</div><!-- row -->
		
		</div><!-- container -->

		<div id="footerwrap">
			<div class="container">
				<h4> <a href="http://www.gmail.com">Copyright by</a> KKN DESA WONGKO LAKUDO</h4>
			</div>
		</div>

		<! Java Script!>

	<script type="text/javascript" src="assets/js/main.min.js"></script>
	<script type="text/javascript" src="assets/js/retina.js"></script>
	<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="assets/js/smoothscroll.js"></script>
	<script type="text/javascript" src="assets/js/jquery-func.js"></script>
  </body>
</html>
