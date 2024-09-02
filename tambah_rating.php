<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = 1 cellspacing = 0 cellpadding = 10>
        <tr>
            <br>
            <br><br>
    <td>Name</td>
    <td>Description Biaya</td>
    <td>Maps_Lokasi</td>
    </tr>
      </table>
    <tr>
      <td><?php echo $row["name"]; ?></td>
      <td><?php echo $sql["wisata"] ?></td>
      <td><?php echo $sql["rating"] ?></td>
      
    </tr>

<?php
require 'koneksi_rate.php';
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["name"];
    $wisata = $_POST["wisata"];
    $rate = $_POST["rating"];
    $alamat = $_POST["alamat"];

    $sql = "INSERT INTO rating (name,wisata,rate,alamat) VALUES ('$name','$wisata','$rate','$alamat')";
    if (mysqli_query($conn, $sql))
    {
        echo "<script>alert('data berhasil disimpan');</script>";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>TABEL UNTUK RATING PRODUK DESA WONGKO LAKUDO</h4>
    <table border = 1 cellspacing = 0 cellpadding = 10>
        <tr bgcolor=yellow>
            <br>
    <td>No</td>
    <td>Name</td>
    <td>Produk</td>
    <td>Rating</td>
    <td>Alamat Dusun</td>
    </tr>

    <?php
    require 'koneksi_rate.php';
    $rows = mysqli_query($conn, "SELECT * FROM rating ORDER BY id DESC");
    $i = 1;

    foreach($rows as $row) :
    ?>
    <tr>
      <td><?php echo $i++; ?></td>
      <td><?php echo $row["name"]; ?></td>
      <td><?php echo $row["wisata"] ?></td>
      <td><?php echo $row["rate"] ?></td>
      <td><?php echo $row["alamat"] ?></td>
      
    </tr>
    <?php endforeach; ?>
      </table>
      <!-- <br>
      <a href="tambah_lokasi.php">Index Page</a> -->
      <br><br>

      <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H4>TABEL UNTUK LOKASI</H4>
    <table border = 1 cellspacing = 0 cellpadding = 10>
        <tr bgcolor = pink>
            <br>
    <td>No</td>
    <td>Name</td>
    <td>Description Biaya</td>
    <td>Maps_Lokasi</td>
    </tr>

    <?php
    require 'koneksi_lokasi.php';
    $rows = mysqli_query($conn, "SELECT * FROM locations ORDER BY id DESC");
    $i = 1;

    foreach($rows as $row) :
    ?>
    <tr>
      <td><?php echo $i++; ?></td>
      <td><?php echo $row["name"]; ?></td>
      <td><?php echo $row["description"] ?></td>
      <td style = "width: 450px; height: 450px;"><iframe src='https://www.google.com/maps?q=<?php echo $row["latitude"]; ?>,<?php echo $row["longitude"]; ?>&h1=es;z=14&output=embed' style = "width: 100%; height: 100%;"></iframe></td>
    </tr>
    <?php endforeach; ?>
      </table>
</body>
</html>
</body>
</html> -->