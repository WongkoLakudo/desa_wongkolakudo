 </div>
		   
		  </div>
		  
		</div>
		
	  </div>

</div>
		
		<section class="section-divider textdivider divider8">
			<div class="container">
			<h1> <h2 style="color:#fff000;">KLIK UNTUK SARAN</h2></h1>
			<span class="icon icon-envelop"></span> <a href="https://www.lakudowongko8@gmail.com/"> lakudowongko8@gmail.com</a> <br/>
			<br/>
			<br/>
			<br/>
				<p>BEAUTIFUL Desa Wongko Lakudo</p>
				<hr>
				<p>website ini Membantu Anda Dalam Mencari Informasi Terkait Desa Wongko Lakudo</p>
			</div><!-- container -->
		</section><!-- section -->
		
		<?php
//Mengirimkan Token Keamanan Ajax Request (Csrf Token)
session_start();
if (empty($_SESSION['csrf_token'])) {
  $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>

<head>

	<!-- Csrf Token -->
<meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">

	
</head>

<body>
 
<div class="container mb-3">
	<h2 align="center" style="margin: 60px 10px 10px 10px;">Komentar Anda tentang Desa Wongko Lakudo</h2><hr>
	<form method="POST" id="form_komen">
		<div class="form-group">
			<input type="text" name="nama_pengirim" id="nama_pengirim" class="form-control" placeholder="Masukkan Nama" />
		</div>
		<div class="form-group">
			<textarea name="komen" id="komen" class="form-control" placeholder="Tulis Komentar" rows="5"></textarea>
		</div>
		<div class="form-group">
			<input type="hidden" name="komentar_id" id="komentar_id" value="0" />
			<input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
		</div>
	</form>
	<hr>
	<h4 class="mb-3">Komentar :</h4>
	<span id="message"></span>
   
   	<div id="display_comment"></div>
</div>
 

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

		<script>
		$(document).ready(function(){
			//Mengirimkan Token Keamanan
			$.ajaxSetup({
	            headers : {
	                'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
	            }
	        });
        
			$('#form_komen').on('submit', function(event){
				event.preventDefault();
				let nama_pengirim = $('#nama_pengirim').val();
				let komen = $('#komen').val();
				
				if(nama_pengirim==''){
				    alert("Nama Pengirim Harus disii");
				} else if(komen==''){
				    alert("Komentar Harus disii");
				} else {
    				var form_data = $(this).serialize();
    				$.ajax({
    					url:"tambah_komentar.php",
    					method:"POST",
    					data:form_data,
    					success:function(data){
    						$('#form_komen')[0].reset();
    						$('#komentar_id').val('0');
    						load_comment();
    					}, error: function(data) {
    		            	console.log(data.responseText)
    		            }
    				})
				}
			});
 
			load_comment();
 
			function load_comment(){
				$.ajax({
					url:"ambil_komentar.php",
					method:"POST",
					success:function(data){
						$('#display_comment').html(data);
					}, error: function(data) {
		            	console.log(data.responseText)
		            }
				})
			}
 
			$(document).on('click', '.reply', function(){
				var komentar_id = $(this).attr("id");
				$('#komentar_id').val(komentar_id);
				$('#nama_pengirim').focus();
			});
		});
	</script>

</body>

		