<html>
<head>
    <link rel="stylesheet" href="styleformaccount.css">
    <link rel="icon" href="Bigetron Esports Logo.png">
    <title>Sign In</title>

    <style>
    header h1{
    background-color: rgb(26, 26, 26);
    /* cara membaca arah padding sesuai dengan arah jarum jam (mulai dari atas/padding-top, lalu padding-left/kiri dan selanjutnya memutar) */
    padding: 15px 0px 20px 20px;
    color: white;
    margin-top: 2px;
    }

    form {
        max-width: 300px;
        margin-top: 50px;
        margin-left: 620px;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: none;
        border-bottom: 1px solid #ccc;
        outline: none;
        color: black;
        
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-image: linear-gradient(45deg, red 50%, transparent 75%);
        border: none;
        cursor: pointer;
        outline: none;
    }
</style>
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
           <a href="index.php"><span style="color: red;">Sign In</span></a>
    </nav>
    <p>Admin = Username : "admin", Password : "admin"<br>
       Staff = Username : "staff", Password : "staff"<br>
       User  = Username : "user", Password : "user"
    </p>
    <h1 style="margin-bottom: 0px; margin-top: 70px; margin-left: 710px; " ><span style="color: red">Sign </span>In</h1><br>
    <form action="sign-in_process.php" method="post">
    <input type="text" name="username" placeholder="Username"><br>
    <br>
    <input type="password" name="password" placeholder="Password"><br>
    <br>
    <input type="submit" value="Login">
</form>
</body>
</html>
    <footer>
        <p>2023 Fadillah Jaga Pratama</p>
    </footer>
</body>
</html>