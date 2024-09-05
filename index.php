<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="proses.php" class="signup-form">
                        <h2 class="form-title">Isi Saran Anda</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="nama" id="nama" placeholder="Nama"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="nim" id="nim" placeholder="NIM"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Email"/>
                        </div>
                        <div class="dropdown form-group">
						 <select class="form-input" name="jurusan" id="dropdown-admin-login"]>
                            <option style="text-decoration-color: red;">Pilih Jurusan</option>
                            <option value="teknologi_informasi">Teknologi Informasi</option>
							<option value="manajemen_perhotelan">Manajemen Perhotelan</option>
							<option value="desain_grafis">Desain Grafis</option>
							<option value="keubank">Keuangan dan Perbankan</option>
						 </select>
                        </div>
                        <div class="form-group">
                            <input class="form-check-input" type="radio" name="gender" value="laki" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">Laki Laki</label>
                        </div>
                        <div class="form-group">
                            <input class="form-check-input" type="radio" name="gender" value="perempuan" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">Perempuan</label>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="saran" cols="63" rows="3" placeholder="Saran"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="login" id="btn-submit" class="form-submit">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>