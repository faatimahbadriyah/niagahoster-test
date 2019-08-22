<!DOCTYPE html>
<?php  
 $sumber = 'data.json';
 $konten = file_get_contents($sumber);
 $data = json_decode($konten, true);
?>
<html lang="en">
  <head>
    <title>Niagahoster</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <style type="text/css">
        @font-face {
          font-family: "r_thin";
          src: url('assets/fonts/roboto/Roboto-Thin.ttf');
        }
        @font-face {
          font-family: "r_regular";
          src: url('assets/fonts/roboto/Roboto-Regular.ttf');
        }
        @font-face {
          font-family: "r_bold";
          src: url('assets/fonts/roboto/Roboto-Bold.ttf');
        }
    </style>
  </head>
  <body style="font-family: Montserrat">
    <nav class="navbar navbar-default">
      <div class="container"> 
        <!-- <div class="row">
          <div class="col-md-7">
            <p>Gratis E-book 9 Cara Cerdas Menggunakan Domain [x]</p>
          </div>
          <div class="col-md-5">
            <a href="#" class="pull-right" style="text-decoration: none;"><span class="glyphicon glyphicon-envelope"></span>Member Area</a>
            <a href="#" class="pull-right" style="text-decoration: none;"><span class="glyphicon glyphicon-envelope"></span>Live Chat</a>
            <a href="#" class="pull-right" style="text-decoration: none;"><span class="glyphicon glyphicon-envelope"></span>0274-5305505</a>
          </div>
        </div> -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#myPage"><img src="assets/images/logo.jpg" style="width: 32%"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar" style="font-family: r_regular">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Hosting</a></li>
            <li><a href="#">Domain</a></li>
            <li><a href="#">Server</a></li>
            <li><a href="#">Website</a></li>
            <li><a href="#">Afiliasi</a></li>
            <li><a href="#">Promo</a></li>
            <li><a href="#">Pembayaran</a></li>
            <li><a href="#">Review</a></li>
            <li><a href="#">Kontak</a></li>
            <li><a href="#">Blog</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <hr/>
    <section class="container" style="margin-top: 30px; margin-bottom: 30px;">
      <div class="row">
        <div class="col-md-6">
          <h1>PHP Hosting</h1>
          <h3>Cepat, handal, penuh dengan modul PHP yang Anda butuhkan.</h3>
          <ul>
            <li>Solusi PHP untuk performa query yang lebih cepat.</li>
            <li>Konsumsi memori yang lebih rendah.</li>
            <li>Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 7.</li>
            <li>Fitur enkripsi IonCube dan Zen Guard Loaders.</li>
          </ul>
        </div>
        <div class="col-md-6">
          <img src="assets/images/illustration-banner-PHP-hosting-01.png" class="img-responsive"/>
        </div>
      </div>
    </section>    
    <hr/>

    <section class="container"  style="margin-top: 30px; margin-bottom: 30px;">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="col-sm-4">
            <div class="thumbnail">
              <img src="assets/images/icon-PHP-Hosting_zendguard.png" class="img-responsive">
            </div>
            <center><p>PHP Zen Guard Loader</p></center>
          </div>
          <div class="col-sm-4">
            <div class="thumbnail">
              <img src="assets/images/icon PHP Hosting_composer.png" class="img-responsive">
            </div>
            <center><p>PHP Composer</p></center>
          </div>
          <div class="col-sm-4">
            <div class="thumbnail">
              <img src="assets/images/icon-PHP-Hosting_ioncube.png" class="img-responsive">
            </div>
            <center><p>ionCube Loader</p></center>
          </div>
        </div>
      </div>
    </section>

    <section class="container" style="margin-top: 30px; margin-bottom: 30px;">
      <center>
        <h3>Paket Hosting Singapura yang Tepat</h3>
        <p>Diskon 40% + Domain SSL Gratis untuk Anda</p>
      </center>
      <div>        
        <?php $a = '#008fee';?>
        <?php foreach ($data as $key => $value): ?> 
          <div class="col-md-3" style="padding: 0;">                      
            <div class="card" style="display: block; text-align: -webkit-center; border: 1px solid <?php echo $value['is_best'] ? $a : '#f1f1f1'; ?>">
              <div class="card-header" style="border-bottom: 1px solid <?php echo $value['is_best'] ? $a : '#f1f1f1'; ?>; color: <?php echo $value['is_best'] ? '#fff' : '#000';?>; background-color: <?php echo $value['is_best'] ? '#008fee' : '#fff';?>;">
                <h3 style="margin-block-start:0; padding-top: 1em;"><?php echo $value['type'] ?></h3>
              </div>
              <div class="card-header" style="border-bottom: 1px solid <?php echo $value['is_best'] ? $a : '#f1f1f1'; ?>; color: <?php echo $value['is_best'] ? '#fff' : '#000';?>; background-color: <?php echo $value['is_best'] ? '#008fee' : '#fff';?>; ">
                <s>Rp. <?php echo number_format($value['price'],0,'.','.') ?></s>
                <h2>Rp. <?php echo number_format($value['new_price'],0,'.','.') ?> /bln</h2>
              </div> 
              <div class="card-body" style="border-bottom: 1px solid <?php echo $value['is_best'] ? $a : '#f1f1f1'; ?>; color: <?php echo $value['is_best'] ? '#fff' : '#000';?>; background-color: <?php echo $value['is_best'] ? '#007fde' : '#fff';?>;">
                <p style="font-family: r_regular; margin-block-start:0; padding-top: 1em;"><?php echo number_format($value['users'],0,'.','.') ?> Pengguna Terdaftar</p>
              </div>
              <div class="card-footer" style="padding-bottom: 20px;">                
                <div style="font-family: r_regular"><?php echo $value['feature'] ?></div>
                <?php echo $value['is_best'] ? '<button class="btn" style="border-radius: 20px; color: white; background-color: #0090ef; font-weight: bold;">Pilih Sekarang</button>' : '<button class="btn" style="border-radius: 20px; color: #4c4c4c; font-weight: bold; border: 2px solid #4c4c4c; background-color: white; margin-top: 40px">Pilih Sekarang</button>'; ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="container" style="margin-top: 30px; margin-bottom: 30px;">
      <center style="margin-bottom: 30px">
        <h3>Powerful dengan Limit PHP yang Lebih Besar</h3>
      </center>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="col-md-6">
            <table class="table table-bordered">
              <tr>
                <td>
                  <center>max execution time 300s</center>
                </td>
              </tr>
              <tr class="active">
                <td><center>max execution time 300s</center></td>
              </tr>
              <tr>
                <td><center>php memory limit 1024 MB</center></td>
              </tr>
            </table>
          </div>
          <div class="col-md-6">
            <table class="table table-bordered">
              <tr>
                <td><center>post max size 128 MB</center></td>
              </tr>
              <tr class="active">
                <td><center>upload max filesize 128 MB</center></td>
              </tr>
              <tr>
                <td><center>max input vars 2500</center></td>
              </tr>
            </table>
          </div>
          <div class="col-md-5">            
          </div>
          <div class="col-md-2"> 
            <hr style="border-width: 5px" />           
          </div>
        </div>
      </div>
    </section>

    <section class="container" style="margin-top: 30px; margin-bottom: 30px;">
      <center style="margin-bottom: 30px">
        <h3>Semua Paket Hosting Sudah Termasuk</h3>
      </center>
      <div class="row">
        <div class="col-sm-4">
          <center>
            <img src="assets/images/icon-PHP-Hosting_PHP-Semua-Versi.png" class="img-responsive">
            <p style="font-weight: bold;">PHP Semua Versi</p>
            <p style="font-family: r_regular;">Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka anda!</p>
          </center>
        </div>
        <div class="col-sm-4">
          <center>
            <img src="assets/images/icon-PHP-Hosting_My-SQL.png" class="img-responsive">
            <p style="font-weight: bold;">MySQL Versi 5.6</p>
            <p style="font-family: r_regular;">Nikmati MySQL versi terbaru, tercepat dan kayaakan fitur.</p>
          </center>
        </div>
        <div class="col-sm-4">
          <center>
            <img src="assets/images/icon PHP Hosting_CPanel.png" class="img-responsive">
            <p style="font-weight: bold;">Panel Hosting cPanel</p>
            <p style="font-family: r_regular;">Kelola Website dengan panel canggih yang familiar di hati anda.</p>
          </center>
        </div>
      </div>
      <div class="row" style="margin-top: 50px">
        <div class="col-sm-4">
          <center>
            <img src="assets/images/icon PHP Hosting_garansi uptime.png" class="img-responsive">
            <p style="font-weight: bold;">Garansi Uptime 99.9%</p>
            <p style="font-family: r_regular;">Data center yang mendukung kelangsungan website Anda 24/7.</p>
          </center>
        </div>
        <div class="col-sm-4">
          <center>
            <img src="assets/images/icon-PHP-Hosting_InnoDB.png" class="img-responsive">
            <p style="font-weight: bold;">Database InnoDB</p>
            <p style="font-family: r_regular;">Unlimited Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.</p>
          </center>
        </div>
        <div class="col-sm-4">
          <center>
            <img src="assets/images/icon-PHP-Hosting_My-SQL-remote.png" class="img-responsive">
            <p style="font-weight: bold;">Wildcard Remote MySQL</p>
            <p style="font-family: r_regular;">Mendukung s/d 25 max_user_connections dan 100 max_connections.</p>
          </center>
        </div>
      </div>
      <div class="row" style="margin-top: 50px">
        <div class="col-md-5">            
        </div>
        <div class="col-md-2"> 
          <hr style="border-width: 5px" />           
        </div>
      </div>  
    </section>

    <section class="container" style="margin-top: 30px; margin-bottom: 30px;">
      <center style="margin-bottom: 30px">
        <h3>Mendukung Penuh Framework Laravel</h3>
      </center>
      <div class="row">
        <div class="col-md-6">
          <p>Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP hosting murah kami mendukung penuh framework favorit Anda.</p>
          <ul style="font-family: r_regular">
            <li>Install Laravel <strong>1 klik</strong> dengan Softaculos Installer.</li>
            <li>Mendukung ekstensi <strong>PHP MCrypt, phar, mbstring, json,</strong> dan <strong>fileinfo.</strong></li>
            <li>Tersedia <strong>Composer</strong> dan <strong>SSH</strong> untuk menginstall packages pilihan Anda.</li>
          </ul>
          <p style="font-size: 10px; font-family: r_regular">Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</p>
          <button class="btn" style="border-radius: 20px; color: white; background-color: #0090ef; font-weight: bold;">Pilih Hosting Anda</button>
        </div>
        <div class="col-md-6">
          <img src="assets/images/illustration-banner-support-laravel-hosting.png" class="img-responsive"/>
        </div>
      </div>
    </section>    
    <hr/>

    <section class="container" style="margin-top: 30px; margin-bottom: 30px;">
      <center style="margin-bottom: 30px">
        <h3>Modul Lengkap Untuk Menjalakan Aplikasi PHP Anda</h3>
      </center>
      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8" style="font-family: r_bold">
          <div class="col-md-3">
            <p>IcePHP</p>
            <p>apc</p>
            <p>apcu</p>
            <p>apm</p>
            <p>ares</p>
            <p>bcmath</p>
            <p>bcompiler</p>
            <p>big_int</p>
            <p>bitset</p>
            <p>bloomy</p>
            <p>bz2_filter</p>
            <p>clamav</p>
            <p>coin_acceptor</p>
            <p>crack</p>
            <p>dba</p>
          </div>
          <div class="col-md-3">
            <p>http</p>
            <p>huffman</p>
            <p>idn</p>
            <p>igbinary</p>
            <p>imagick</p>
            <p>imap</p>
            <p>included</p>
            <p>inotify</p>
            <p>interbase</p>
            <p>intl</p>
            <p>ioncube_loader</p>
            <p>ioncube_loader_4</p>
            <p>jsmin</p>
            <p>json</p>
            <p>Idap</p>
          </div>
          <div class="col-md-3">
            <p>nd_pdo_mysql</p>
            <p>oatuh</p>
            <p>oci8</p>
            <p>odbc</p>
            <p>opcache</p>
            <p>pdf</p>
            <p>pdo</p>
            <p>pdo_dblib</p>
            <p>pdo_firebird</p>
            <p>pdo_mysql</p>
            <p>pdo_odbc</p>
            <p>pdo_pgsql</p>
            <p>pdo_sqlite</p>
            <p>pgsql</p>
            <p>phalcon</p>
          </div>
          <div class="col-md-3">
            <p>stats</p>
            <p>stem</p>
            <p>stomp</p>
            <p>suhosin</p>
            <p>sybase_ct</p>
            <p>sysvmsg</p>
            <p>sysvsem</p>
            <p>sysvshm</p>
            <p>tidy</p>
            <p>timzonedb</p>
            <p>trader</p>
            <p>translit</p>
            <p>uploadpregress</p>
            <p>uri_template</p>
            <p>uuid</p>
          </div>
        </div>
        <div class="col-md-12" >
          <center style="margin-top: 40px;">
            <button class="btn" style="border-radius: 20px; color: #4c4c4c; font-weight: bold; border: 2px solid #4c4c4c; background-color: white;">Pilih Hosting Anda</button>
          </center>
        </div>
      </div>
    </section> 

    <section class="container" style="margin-top: 30px; margin-bottom: 30px;">
      <center style="margin-bottom: 30px">
        <h3>Linux Hosting yang Stabil dengan Teknologi LVE</h3>
      </center>
      <div class="row">
        <div class="col-md-6">
          <p style="font-family: r_regular">SuperMicro <strong>Intel Xeon 24-Cores server</strong> dengan RAM <strong>128 GB</strong> dan Teknologi <strong>LVE CloudLinux</strong> untuk stabilitas server Nada. Dilengkapi dengan <strong>SSD</strong> untuk kecepatan <strong>MySQL</strong> dan caching. Apache load balancer berbasis LiteSpeed Technologies, <strong>CageFS</strong> security, <strong>Raid-10</strong> protection dan auto backup untuk keamanan website PHP Anda.</p>
          <button class="btn" style="border-radius: 20px; color: white; background-color: #0090ef; font-weight: bold;">Pilih Hosting Anda</button>
        </div>
        <div class="col-md-6">
          <img src="assets/images/Image support.png" class="img-responsive"/>
        </div>
      </div>
    </section>

    <section style="margin-top: 30px; background-color: #f7f7f7; " >
      <div class="container">
        <div class="row"  style="padding: 20px 0px">
          <div class="col-md-6" style="align-items: center; display: flex;">
            <p style="font-weight: bold;">Bagikan jika anda menyukai halaman ini.</p>
          </div>
          <div class="col-md-6" style="padding-top: 10px">
            <a href="#"><img src="assets/icons/facebook.png" width="40px"><input style="width: 60px; margin: 5px" readonly value="80k"></a>
            <a href="#"><img src="assets/icons/twitter.png" width="40px"><input style="width: 60px; margin: 5px" readonly value="450"></a>
            <a href="#"><img src="assets/icons/googleplus.png" width="40px"><input style="width: 60px; margin: 5px" readonly value="1900"></a>
          </div>
        </div>
      </div>
    </section>

    <section style="background-color: #00a2f3; color: white;" >
      <div class="container">
        <div class="row" style="padding: 50px 0px">
          <div class="col-md-8" style="border-right: 1px solid white;">
            <h2>Perlu <strong>BANTUAN?</strong> Hubungi Kami : <strong>0274-5305505</strong></h2>
          </div>
          <div class="col-md-2" style="padding-top: 20px">
            <button class="btn" style="border-radius: 20px; color: white; font-weight: bold; border: 2px solid white; background-color: #00a2f3;"><img src="assets/icons/chat.png" width="20px" style="margin-left: 10px; margin-right: 10px;"> Live Chat</button>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class="container" style="font-family: r_thin;">
        <div class="row" style="padding-top: 40px">
          <div class="col-md-3">
            <p style="font-weight: bold;">HUBUNGI KAMI</p>
            <ul class="list-unstyled">
              <li>0274-5305505</li>
              <li>Senin-Minggu</li>
              <li>24 Jam Nonstop</li>
              <li><br/></li>
              <li>Jl. Selokan Mataram Monjali Karangjati MT I/304 Sinduadi, Mlati, Sleman Yogyakarta 55284</li>
            </ul>
          </div>
          <div class="col-md-3">
            <p style="font-weight: bold;">LAYANAN</p>
            <ul class="list-unstyled">
              <li>Domain</li>
              <li>Shared Hosting</li>
              <li>Cloud VPS Hosting</li>
              <li>Managed VPS Hosting</li>
              <li>Web Builder</li>
              <li>Keamanan SSL/HTTPS</li>
              <li>Jasa Pembuatan</li>
              <li>Website</li>
              <li>Program Affiliasi</li>
            </ul>
          </div>
          <div class="col-md-3">
            <p style="font-weight: bold;">SERVICE HOSTING</p>
            <ul class="list-unstyled">
              <li>Hosting Murah</li>
              <li>Hosting Indonesia</li>
              <li>Hosting Singapura SG</li>
              <li>Hosting PHP</li>
              <li>Hosting Wordpress</li>
              <li>Hosting Laravel</li>
            </ul>
          </div>
          <div class="col-md-3">
            <p style="font-weight: bold;">TUTORIAL</p>
            <ul class="list-unstyled">
              <li>Knowledgebase</li>
              <li>Blog</li>
              <li>Cara Pembayaran</li>
            </ul>
          </div>
        </div>
        <div class="row" style="padding-top: 50px">
          <div class="col-md-3">
            <p style="font-weight: bold;">TENTANG KAMI</p>
            <ul class="list-unstyled">
              <li>Tim Niagahoster</li>
              <li>Karir</li>
              <li>Events</li>
              <li>Penawaran & Promo Spesial</li>
              <li>Kontak Kami</li>
            </ul>
          </div>
          <div class="col-md-3">
            <p style="font-weight: bold;">KENAPA PILIH NIAGAHOSTER</p>
            <ul class="list-unstyled">
              <li>Support Terbaik</li>
              <li>Garansi Harga</li>
              <li>Termurah</li>
              <li>Domain Gratis Selamanya</li>
              <li>Datacenter Hosting Terbaik</li>
              <li>Review Pelanggan</li>
            </ul>
          </div>
          <div class="col-md-3">
            <p style="font-weight: bold;">NEWSLETTER</p>
            <ul class="list-unstyled">
              <li>
                <div style="background-color: white; padding: 10px; border-radius: 50px">
                  <input placeholder="Email" type="text" style="color: #303030; border: none; width: 100px">
                  <button class="btn pull-right" style="border-radius: 20px; color: white; background-color: #0090ef; margin-top: -6px; margin-right: -5px">Berlangganan</button>
                </div>
              </li>
              <li>Dapatkan promo dan konten menarik dari penyedia hosting terbaik Anda.</li>
            </ul>
          </div>
          <div class="col-md-3">
            <p><br></p>
            <ul class="list-unstyled">
              <li>
                <a href="#"><img src="assets/icons/f.png" width="50px" style="margin-right: 15px; "></a>
                <a href="#"><img src="assets/icons/t.png" width="50px" style="margin-right: 15px;></a>
                <a href="#"><img src="assets/icons/g.png" width="50px"></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row" style="padding-top: 30px;" >
          <div class="col-md-9">
            <p style="font-weight: bold;">PEMBAYARAN</p>
            <p>Aktivasi instan dengan e-Payment. Hosting dan domain langsung aktif!</p>
          </div>
        </div>
        <hr style="border-color: #292929" />
        <div class="row" style="font-size: 10px">
          <div class="col-md-9">
            <p>Copyright &copy;2016 Niagahoster | Hosting powered by PHP7, Cloudlinux, CloudFlare, BitNinja and DC Biznet Technovillage Jakarta</p>
            <p style="margin-top: -5px;">Cloud VPS Murah Powered by Webuzo Softaclous, Intel SSD and cloud computing technology</p>
          </div>
          <div class="col-md-3">
            <p><a style="color: white; text-decoration: none;">Syarat dan Ketentuan </a>|<a style="color: white; text-decoration: none;"> Kebijakan Privasi</a></p>
          </div>
        </div>
      </div>
    </footer>

  </body>
</html>
