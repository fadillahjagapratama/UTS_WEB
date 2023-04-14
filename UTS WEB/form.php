<html>
<head>
    <link rel="stylesheet" href="stylee.css">
    <link rel="icon" href="Bigetron Esports Logo.png">
    <title>Form</title>
</head>
<body>
    <header>
        <img src="Bigetron Esports Logo.png" alt="logo" style="float: left;" style="text-align: right;" width="70px" height="70px">
        <h1>BIGETRON E-SPORTS</h1>
    </header>
    <nav>
           <a href="home.html"><span>Home</span></a>
           <a href="about.php"><span>About</span></a>
           <a href="form.php"><span style="color: red;">Form</span></a>        
           <a href="profil.php"><span>Profile</span></a>
           <a href="index.php"><span>Sign In</span></a>
    </nav>
    <div class="containerform">
        <h1><span style="color: red">Formulir</span> Pendaftaran</h1>
        <div class="atas">
            <form>
                <fieldset>
                    <legend>Silahkan isi form berikut :</legend>
                <div>
                Nama :
                <input type="text" placeholder="Masukkan Nama" style="color: black;" />
                </div>
                <div>
                <br>Email : <input type="email" placeholder="Masukkan Email" style="color: black;">
                </div>
                <div>
                <br>Password :
                <input type="password" placeholder="Masukkan Password" style="color: black;"/>
                </div>
                <div>
                <br>Jenis Kelamin :
                <input type="radio" name="Jenis Kelamin"/>Laki-laki
                <input type="radio" name="Jenis Kelamin"/>Perempuan
                </div>
                <div>
                <br>Player Bigetron RA Favoritmu :
                <br><input type="checkbox" id="luxxy">
                <label for="luxxy">Luxxy</label></br>
                <input type="checkbox" id="genfos">
                <label for="genfos">Genfos</label></br>
                <input type="checkbox" id="zuxxy"> <label for="zuxxy">Zuxxy</label></br>
                <input type="checkbox" id="liquid">
                <label for="liquid">Liquid</label></br>
                <input type="checkbox" id="miseryy">
                <label for="miseryy">Miseryy</label></br>
                </div>
                <div>
                <br>Bukti Follow IG @bigetronesport <input type="file">
                </div>
                <div>
                <br>Kamu dari pulau mana nih?
                <select style="color: black;">
                <option value="K">Kalimantan</option>
                <option value="J">Jawa</option>    
                <option value="SUM">Sumatra</option>
                <option value="SUL">Sulawesi</option>
                <option value="P">Papua</option>
                </select>
                </div>
                <div>
                <br>Tanggapanmu tentang Bigetron :</br>
                <textarea
                    rows="4"
                    cols="50"
                    placeholder="Tulis tanggapanmu di sini ..." 
                    style="color: black;">
                </textarea>
                </div>
                <input type="submit" value="Submit" style="color: black;">
              </fieldset>
            </form>
    </div>
    </div>
    <footer>
        <p>2023 Fadillah Jaga Pratama</p>
    </footer>
</body>
</html>