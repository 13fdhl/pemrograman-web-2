<!DOCTYPE html>
    <head>
        <title>login.php</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>       
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-3"></div>
                <div class="col-sm-4 text-center">
                    <h2>FORM LOGIN</h2>
                    <p>by ZProjects</p>
                    <p>
                    <?php
                        $hari=date('l');
                        $bulan=date('m');
                        $tanggal=date('d');
                        $tahun=date('Y'); 

                        switch ($hari) 
                        {
                            case"Sunday":$hari="Minggu";break;
                            case"Monday":$hari="Senin";break;
                            case"Tuesday":$hari="Selasa";break;
                            case"Wednesday":$hari="Rabu";break;
                            case"Thursday":$hari="Kamis";break;
                            case"Friday":$hari="Jumat";break;
                            case"Saturday":$hari="Sabtu";break;
                        }

                        switch($bulan)
                        {
                            case"1":$bulan="Januari";break;
                            case"2":$bulan="Februari";break;
                            case"3":$bulan="Maret";break;
                            case"4":$bulan="April";break;
                            case"5":$bulan="Mei";break;
                            case"6":$bulan="Juni";break;
                            case"7":$bulan="Juli";break;
                            case"8":$bulan="Agustus";break;
                            case"9":$bulan="September";break;
                            case"10":$bulan="Oktober"; break;
                            case"11":$bulan="November";break;
                            case"12":$bulan="Desember";break;
                            }
                        

                        echo "<br/>$hari, $tanggal $bulan $tahun ";echo date(" G:i:s");  
                        ?>
                    </p>
                </div>
                <div class="col-sm-5" ></div>
            </div>
            <form>
            <div class="row mb-3">
                <label for="inputUsername3" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" id="inputUsername3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3">
                </div>
            </div>
            <br />
            <button type="submit" class="btn btn-primary">Log in</button>
        </form>
        </div>
    </body>
</html>