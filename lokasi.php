<!DOCTYPE html>
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
      <br>
      <a href="tambah_lokasi.php">Index Page</a>
</body>
</html>