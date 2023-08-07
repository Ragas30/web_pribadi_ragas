<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Base Penerbangan</title>
    <link rel="stylesheet" href="gaya.css">
</head>
<style>

.container {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
    background-color: #f0f0f0;
    border: 1px solid #ccc;
    border-radius: 5px;
}

h2 {
    text-align: center;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
}

.form-control {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

.button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ccc;
}

th {
    background-color: #f0f0f0;
    font-weight: bold;
}

.alert {
    padding: 10px;
    margin-bottom: 10px;
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
    border-radius: 3px;
}

</style>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="">Menu Untuk Input dan Tampil Data</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="0076_A.php">Input Data</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tampil.php">Tampil Data</a>
            </ul>
            <span class="navbar-text">
              Jadwal Penerbangan
            </span>
          </div>
        </div>
      </nav>
    <section class="container">
        <h2>Data Jadwal Penerbangan</h2>

        <?php
        $koneksi = mysqli_connect("localhost", "root", "", "dbtiket");
        $query = "SELECT * FROM tbpenerbangan";
        $result = mysqli_query($koneksi, $query);
        ?>

        <table>
            <tr>
                <th>NO TIKET</th>
                <th>TANGGAL TIKET</th>
                <th>JUMLAH PENUMPANG</th>
                <th>NAMA PENUMPANG</th>
                <th>KOTA ASAL</th>
                <th>KOTA TUJUAN</th>
                <th>KODE PESAWAT</th>
                <th>NAMA MASKAPAI</th>
                <th>HARGA TIKET</th>
                <th>JUMLAH BAYAR</th>
            </tr>

            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['notiket'] . "</td>";
                echo "<td>" . $row['tanggal'] . "</td>";
                echo "<td>" . $row['jumlah'] . "</td>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['kotaa'] . "</td>";
                echo "<td>" . $row['kotat'] . "</td>";
                echo "<td>" . $row['kode_pesawat'] . "</td>";
                echo "<td>" . $row['nama_maskapai'] . "</td>";
                echo "<td>" . $row['harga'] . "</td>";
                echo "<td>" . $row['bayar'] . "</td>";
                echo "</tr>";
            }
            ?>

        </table>
    </section>
</body>
</html>
