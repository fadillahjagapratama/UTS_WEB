<?php
    // Memulai session
    session_start();

    // Cek apakah session level sudah ada, jika tidak redirect ke halaman login
    if (!isset($_SESSION['level'])) {
        header("Location: index.php");
        exit;
    }

    // Mendapatkan data session level pengguna
    $level = $_SESSION['level'];
?>

<html>
<head>
    <link rel="stylesheet" href="stylepageadmin.css">
    <link rel="icon" href="Bigetron Esports Logo.png">
    <title>Staff</title>
    <script>
    // Function untuk menghitung hasil
    function hitung() {
      var angka1 = parseInt(document.getElementById('angka1').value);
      var angka2 = parseInt(document.getElementById('angka2').value);
      var hasil = angka1 + angka2; // Perhitungan
      document.getElementById('hasil').value = hasil;
    }
  </script>
</head>
<body>
    <header>
        <img src="Bigetron Esports Logo.png" alt="logo" style="float: left;" style="text-align: right;" width="70px" height="70px">
        <h1>BIGETRON E-SPORTS</h1>
    </header>
    <nav>
           <a href="home.php"><span>Home</span></a>
           <a href="about.php"><span>About</span></a>
           <a href="form.php"><span>Form</span></a>        
           <a href="profil.php"><span>Profile</span></a>
           <a href="index.php"><span>Sign In</span></a>
           <a href="index.php"><span style="color: red;">Staff</span></a>
    </nav>
    <!-- Form perhitungan menggunakan JavaScript -->
    <h1>Form Perhitungan</h1><br>
    <?php
    if ($level == "staff") {
        echo "Selamat datang, Staff!";
    }
    ?>
     <form>
        <label for="namaBarang">Nama Barang :</label>
        <input style="textcolor black;" type="text" id="namaBarang" name="namaBarang">
        <label for="hargaBarang">Harga Barang :</label>
        <input type="number" id="hargaBarang" name="hargaBarang">
        <label for="jumlahBarang">Jumlah Barang :</label>
        <input type="number" id="jumlahBarang" name="jumlahBarang">
        <button type="button" onclick="hitungTotal()">Hitung Total</button>
    </form>
    <h2>Hasil Perhitungan</h2>
    <p id="outputNamaBarang"></p>
    <p id="outputHargaBarang"></p>
    <p id="outputJumlahBarang"></p>
    <p id="outputTotalHarga"></p>
        <script>
           function hitungTotal() {
        // Mengambil nilai input dari form
        var namaBarang = document.getElementById("namaBarang").value;
        var hargaBarang = parseFloat(document.getElementById("hargaBarang").value);
        var jumlahBarang = parseInt(document.getElementById("jumlahBarang").value);

        // Menghitung total harga
        var totalHarga = hargaBarang * jumlahBarang;

        // Menampilkan hasil perhitungan pada output
        document.getElementById("outputNamaBarang").innerHTML = "Nama Barang: " + namaBarang;
        document.getElementById("outputHargaBarang").innerHTML = "Harga Barang: Rp " + hargaBarang.toLocaleString();
        document.getElementById("outputJumlahBarang").innerHTML = "Jumlah Barang: " + jumlahBarang;
        document.getElementById("outputTotalHarga").innerHTML = "Total Harga: Rp " + totalHarga.toLocaleString();
        }
        </script>
    <footer>
        <p>2023 Fadillah Jaga Pratama</p>
    </footer>
</body>
</html>