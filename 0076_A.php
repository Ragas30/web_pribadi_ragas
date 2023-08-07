<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="gaya.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Base Penerbangan</title>
</head>
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

<body>
    <section class="kotak">
        <h2> Form Input Jadwal Penerbangan</h2>

        <form action="" method="post">
                <div>
                    <label for="notiket">NO TIKET:</label>
                    <input type="text" name="notiket" class="form-control" placeholder="Masukan No tiket Gan">
                </div>
                <br>
                <div>
                    <label for="tanggal">TANGGAL TIKET:</label>
                    <input type="date" name="tanggal" class="form-control" placeholder="">
                </div>
                <br>
                <div>
                    <label for="jumlah">JUMLAH PENUMPANG:</label>
                    <input type="number" name="jumlah" class="form-control" placeholder="Inputkan Jumlah Penumpanng">
                </div> 
                <br>
                <div>
                    <label for="nama">NAMA PENUMPANG:</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Penumpangnya siapa">
                </div>
                <br>
                <div>
                    <label for="kotaa">KOTA ASAL:</label>
                    <input type="text" name="kotaa" class="form-control" placeholder="Asal Kota">
                </div>
                <br>
                <div>
                    <label for="kotat">KOTA TUJUAN:</label>
                    <input type="text" name="kotat" class="form-control" placeholder="Kota Tujuan">
                </div>
                <br>
                <div>
                    <label for="kode_pesawat">KODE PESAWAT:</label>
                    <input type="text" name="kode_pesawat" class="form-control" placeholder="Inputkan Kode Pesawat">
                </div>
                <br>
                <div>
                    <label for="nama_maskapai">NAMA MASKAPAI:</label>
                    <input type="text" name="nama_maskapai" class="form-control" placeholder="Nama Maskapai Yang Digunakan">
                </div>
                <br>
                <div>
                    <label for="harga">HARGA TIKET:</label>
                    <input type="number" name="harga" class="form-control" placeholder="Rp....">
                </div>
                <br>
                <div>
                    <label for="bayar">JUMLAH BAYAR:</label>
                    <input type="number" name="bayar" class="form-control" placeholder="Rp...">
                </div>

                <button  name="submit" type="submit" value="submit" class="button">Finish</button>
                


            
        </form>
    </section>
    
</body>
</html>

<?php 


$koneksi=mysqli_connect("localhost","root","","dbtiket");

if(isset($_POST['submit'])) {

    mysqli_query($koneksi, " insert into tbpenerbangan set

	notiket = '$_POST[notiket]',
	tanggal = '$_POST[tanggal]',
	jumlah = '$_POST[jumlah]',
	nama = '$_POST[nama]',
	kotaa = '$_POST[kotaa]',
	kotat = '$_POST[kotat]',
	kode_pesawat = '$_POST[kode_pesawat]',
	nama_maskapai = '$_POST[nama_maskapai]',
	harga = '$_POST[harga]',
	bayar = '$_POST[bayar]'

");
    print "<script>
    alert('Data Berhasil DI tambahkan')
    window.location.href='tampil.php'
    </script>";
}
?>  