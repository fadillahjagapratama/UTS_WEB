<html>
<head>
    <link rel="stylesheet" href="stylee.css">
    <link rel="icon" href="Bigetron Esports Logo.png">
    <title>User</title>
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
           <a href="index.php"><span style="color: red;">User</span></a>
    </nav>
    <?php
    // Memulai session
    session_start();

    // Cek apakah session level sudah ada, jika tidak redirect ke halaman sign in
    if (!isset($_SESSION['level'])) {
        header("Location: index.php");
        exit;
    }

    // Mendapatkan data session level pengguna
    $level = $_SESSION['level'];

    if ($level == "user") {
        echo "Selamat datang, User!";
    }
    ?>

    <div class="text1">
        <h4>Hi Bigetroopers, Bigetron Red Aliens hadir dengan formasi baru. Mereka akan mengguncangkan lahan pertempuran kembali!
            <br>Oleh karena itu, Bigetron Red Aliens mengajak bigetroopers untuk latihan bareng!
        </h4>
    </div>
    <div class="text2">
        <h4>YUK BURUAN DAFTAR UNTUK MABAR BARENG BIGETRON!
        </h4>
    </div>
    <div class="text2">
        <a href="form.php" target="_SELF">
        <button class="btn fourth">DAFTAR</button>
    </div>
</body>
</html>
    <footer>
        <p>2023 Fadillah Jaga Pratama</p>
    </footer>
</body>
</html>

