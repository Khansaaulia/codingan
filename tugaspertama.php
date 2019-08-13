<?php  

      $nama_satu="Abi Rizky";
      $Umur_satu=16;
      $tinggi_satu=168;

      $nama_dua="Khansa Aulia";
      $Umur_dua=16;
      $tinggi_dua=165;

      $nama_tiga="Nabila";
      $Umur_tiga=16;
      $tinggi_tiga=159;


      $rata_rata=($tinggi_satu+$tinggi_dua+$tinggi_tiga)/3;
      ?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PWPB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">

    <style>
         .row-fluid{
            overflow: hidden;
            text-align: center;
            background: black;
            padding: 60px;
          }
          button {
            float: center;
            background: blue;
            color: white;
            border-radius:8px;
            cursor: pointer;
            position: relative;
            padding: 10px;
            font-family: sans-serif;
            border: none;
            font-size: 10px;
          }
          
    </style>

  </head>

  <body data-spy="scroll" data-target=".bs-docs-sidebar">

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">TUGAS</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active">
                <a href="index.php">Home</a>
              </li>
              <li class="">
                <a href="tugaspertama.php">TUGAS PERTAMA</a>
              </li>
              <li class="">
                <a href="#">TUGAS KEDUA</a>
              </li>
              <li class="">
                <a href="#">TUGAS KETIGA</a>
              </li>
              <li class="">
                <a href="#">TUGAS KEEMPAT</a>
            </ul>
          </div>
        </div>
      </div>
    </div>

<div class="jumbotron masthead">
  <div class="container">
    <h2><i><u>SELAMAT DATANG</u></i></h2>
    <p><b>DI KELOMPOK KAMI</b></p>

  </div>
</div>

<div class="container">

  <div class="marketing">

    <br><h2> <a href="http://builtwithbootstrap.tumblr.com/" target="_blank">KAMI INGIN MEMPERKENALKAN DIRI DITUGAS PERTAMA INI</a></h2>
    <p class="marketing-byline">Tidak kenal maka tak sayang</p></br>

    <div class="row-fluid">
      <div class="span4">
        <img class="marketing-img" src="img/a.jpg">
        <h2>PERKENALKAN</h2>
         <?php 
            echo "<b>nama :$nama_satu</b><br>";
            echo "Umur :$Umur_satu tahun<br>";
            echo "tinggi :$tinggi_satu cm<br>";
         ?>
        <button>Lihat Selengkapnya</button></P></p>
      </div>
      <div class="span4">
        <img class="marketing-img" src="img/d.jpg">
         <h2>PERKENALKAN</h2>
          <?php 
            echo "<b>nama :$nama_dua</b><br>";
            echo "Umur :$Umur_dua tahun<br>";
            echo "tinggi :$tinggi_dua cm<br>";
         ?>
       <button>Lihat Selengkapnya</button></P></p>
      </div>
      <div class="span4">
        <img class="marketing-img" src="img/e.jpg">
         <h2>PERKENALKAN</h2>
          <?php 
            echo "<b>nama :$nama_tiga</b><br>";
            echo "Umur :$Umur_tiga tahun<br>";
            echo "tinggi :$tinggi_tiga cm<br>";
         ?>
     <button>Lihat Selengkapnya</button></P></p>
      </div>
    </div>


    <footer class="footer">
      <div class="container">
        <div align="center">
       <font color="black" size="3">Indonesia @2019.PWPB.Com .All Rights Reserved
       </font>
      </div>
    </footer>



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="assets/js/bootstrap-affix.js"></script>

    <script src="assets/js/holder/holder.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>

    <script src="assets/js/application.js"></script>



  </body>
</html>
