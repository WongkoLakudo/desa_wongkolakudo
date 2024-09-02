<?php
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
        <label for="">Name</label>
        <input type="text" name="name" required value=""> <br>
        <label for="">Deskripsi Biaya</label>
        <input type="text" name="description" required value=""> <br>
        <input type="text" name="latitude" value="">
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
    <br>
    <a href="lokasi.php">Database Page</a>
</body>
</html>