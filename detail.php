
<?php 
include "koneksi.php";
$query=mysqli_query($GLOBALS["___mysqli_ston"], "select * from tbl_rating where id_rating='$_GET[id]'");
$data=mysqli_fetch_array($query);
?>

<br>
<div class="wrapper">
      <div class="row">
      <div class="col-md-3" style="margin:30px;">
     <img src="admin/admin/rating/foto/<?php echo $data['gambar_wisata']; ?>" style="width:300px; height:250px;">   
    </div>
      <div class="col-md-6" style="margin-left:10px ; margin-top:10px;">
        <center> <td><b>Detail Rating Usaha Desa Wongko Lakudo</b></td> </center>
		<table>
        	<tr>
        		<h3><td><b>Judul</b>		 : <?php echo $data['judul_wisata']; ?></td></h3>
        	</tr>

        	<tr>
        		<h3><td><b>Isi</b>	  : <?php echo $data['isi_informasi']; ?></td></h3>
        	</tr>
        </table><br><br>
         
    </div>
</div>

<html>
<head>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
</head>
<body>
<div class="container">
    <div class="row">
 
<form action="tambah_rating.php" method="post">
 
    <div>
        <h3>Rating untuk Produk Desa Wongko Lakudo</h3>
    </div>

    <div>
      <td>
        <tr>
    <label style="float :left;width: 90px; font-family: sans-serif; color: black;" for="user name"> Nama</label>
        <input type="text" name="name" placeholder="Masukkan Nama">
      </td>
    </div>
<br>
      <div>
        <td>
        <tr>
    <label style="float :left;width: 90px; font-family: sans-serif; color: black;" for="user name"> Produk</label>
        <input type="text" name="wisata" placeholder="Nama Produk">
      </td>
    </div>
<br>
<div>
        <td>
        <tr>
    <label style="float :left;width: 90px; font-family: sans-serif; color: black;" for="user name"> Alamat</label>
        <input type="text" name="alamat" placeholder="Masukkan Dusun">
      </td>
    </div>
 
         <div class="rateyo" id= "rating"
         data-rateyo-rating="0"
         data-rateyo-num-stars="5"
         data-rateyo-score="3">
         </div>
 
    <span class='result'>0</span>
    <input type="hidden" name="rating">
 
    </div>
 
<button style="float :left; width: 100px;  height: auto; background: #29447E; border: 0; padding: 5px 10px; font-family: verdana; border-radius: 20px; color: white; " type="reset">Batal</button>

    <button style="float :left; width: 100px;  height: auto; background: #29447E; border: 0; padding: 5px 10px; font-family: verdana; border-radius: 20px; color: white; "type="submit">Simpan</button>

 
</form>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
 
<script>
 
 
    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :'+ rating);
            $(this).parent().find('input[name=rating]').val(rating); //tambah rating ke field
        });
    });
 
</script>
<br>
<button align="center"><b><a href="tambah_rating.php" align="center">Data Rating </a></b></button>

<!-- <?php
require 'koneksi_lokasi.php';

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $description = $_POST["description"];
    $latitude = $_POST["latitude"];
    $longitude = $_POST["longitude"];

    $query = "INSERT INTO locations VALUES('', '$name', '$description', '$latitude', '$longitude')";
    mysqli_query($conn, $query);

    echo
    "
    <script>
    alert('Data berhasil di simpan');
    document.location.href = 'lokasi.php';
    </script>
    ";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload = "getLocation();">
    <form class="myFrom" action="" method="post" autocomplete="off">
        <br>
        <br>
        <br>
        <label for=""><h4 bgcolor=black>Nama</h4></label>
        <input type="text" name="name" required value=""> <br>
        <label for=""><h4 bgcolor=black>Deskripsi Biaya</h4></label>
        <input type="text" name="description" required value=""> <br>
        <label for="" ><h4 bgcolor=black>Masukkan Lokasi :</h4></label><br>
        <label for=""><h4 bgcolor=black>latitude</h4></label>
        <input type="text" name="latitude" value=""><br>
        <label for=""><h4 bgcolor=black>longitude</h4></label>
        <input type="text" name="longitude" value=""> <br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <script type="text/javascript">
        function getLocation(){
            if(navigator.geolocation){
                navigator.geolocation.getCurrentPosition(showPosition);
            }
        }
        function ShowPosition(position){
            document.querySelector('.myForm input[name = "latitude"]').value = position.coords.latitude;
            document.querySelector('.myForm input[name = "longitude"]').value = position.coords.longitude;
        }
        function showError(error){
            switch(error.code){
                case error.PERMISSION_DENIED:
                    alert("You Must Allow The");
                    location.reload();
                    break;
            }
        }
    </script>
</body>
</html>
</body>
 
</html>
<br><br><br><br>
<html>
    <img src="mutiara.jpeg" alt="" width=290px>
    <img src="pantai_gubahi.jpeg" alt="" align=center width=320px>
    <img src="tanjung_buaya.jpeg" alt="" align=center width=240px>
    <img src="fotu.jpeg" alt="" width=320px align=center>
</html> -->
