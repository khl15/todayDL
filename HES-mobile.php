<!DOCTYPE html>
<html style="font-size: 16px;">
<?php
session_start();
if (isset($_SESSION['codeId'])) {
  $message = "Selamat Datang " . $_SESSION['name'];
  echo "<script type='text/javascript'>alert('$message');</script>";
} else {
  header("Location: system.php");
}

?>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Calon Kandidat KetuaHimpunan Mahasiswa Program StudiHukum Pidana Islam Fakultas Syariah">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>HES mobile</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="HES-mobile.css" media="screen">
  <link rel="stylesheet" href="all.css">
  <script type="text/javascript" src="proses.js"></script>
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 3.7.1, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">




  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "",
      "url": "index.html"
    }
  </script>
  <meta property="og:title" content="HES mobile">
  <meta property="og:type" content="website">
  <meta name="theme-color" content="#478ac9">
  <link rel="canonical" href="index.html">
  <meta property="og:url" content="index.html">
</head>

<body class="u-body u-overlap u-overlap-transparent u-stick-footer">
  <header class="u-align-left u-clearfix u-header u-header" id="sec-ba2f">
    <div class="u-clearfix u-sheet u-sheet-1"></div>
  </header>
  <section class="u-clearfix u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-section-1" id="sec-642a">
    <img src="images/Presentation1-removebg.png" alt="" class="u-expanded-width u-image u-image-default u-image-1" data-image-width="1277" data-image-height="193">
    <h2 class="u-align-center u-text u-text-1"><b style="">Calon Kandidat Ketua<br>Himpunan Mahasiswa&nbsp;</b>
      <br><b style="">Program Studi<br>Hukum Ekonomi Syariah&nbsp;</b>
      <br><b style="">Fakultas Syariah</b>
    </h2>
    <img src="images/Logo-iain.png" alt="" class="u-image u-image-default u-preserve-proportions u-image-2" data-image-width="400" data-image-height="432">
    <img src="images/logoKPUMFASYA.png" alt="" class="u-image u-image-default u-preserve-proportions u-image-3" data-image-width="970" data-image-height="1600">
  </section>
  <section class="u-clearfix u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xl u-section-2" id="sec-74fa">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-border-4 u-border-grey-dark-1 u-container-style u-group u-radius-27 u-shape-round u-group-1">
        <div class="u-container-layout u-container-layout-1 hvr" onclick="HESa()">
          <img src="images/HES1.png" alt="" class="u-image u-image-default u-preserve-proportions u-image-1" data-image-width="270" data-image-height="251">
          <h2 class="u-align-center-xs u-text u-text-1"><b>Merlin Dwiningtyas</b>
          </h2>
          <p class="u-align-left u-text u-text-default-lg u-text-default-xl u-text-2">Visi :<br>Mewujudkan HMPS Hukum Ekonomi Syariah yang aktif, progresif dan responsif guna mengembangkan potensi Mahasiswa<br>
            <br>Misi:
          </p>
          <ul class="u-align-left u-text u-text-3">
            <li style="">Mampu mengingkatkan kualitas dan pribadi mahasiswa yang lebih unggul di bidang akademik atau non akademik.</li>
            <li style="">Mampu menjadi wadah dan memfasilitasi bakat serta minat mahasiswa yang berprestasi</li>
            <li style="">Peningkatan kebersamaan seluruh Mahasiswa jurusan yang optimal</li>
            <li style="">Mengoptimalkan HMPS HES sebagai wadah dalam menampung aspirasi mahasiswa jurusan.</li>
          </ul>
        </div>
      </div>
      <div class="u-border-4 u-border-grey-dark-1 u-container-style u-group u-radius-27 u-shape-round u-group-2">
        <div class="u-container-layout u-container-layout-2 hvr " onclick="HESb()">
          <img src="images/HES2.png" alt="" class="u-image u-image-default u-preserve-proportions u-image-2" data-image-width="260" data-image-height="271">
          <h2 class="u-align-center-xs u-text u-text-4"><b style="">Mahasin</b>
          </h2>
          <p class="u-align-left u-text u-text-default-lg u-text-default-xl u-text-5">Visi :&nbsp;<br>Mewujudkan sinergitas HMPS Hukum Ekonomi Syariah dalam dedikasi dan integritas.<br>
            <br>Misi :
          </p>
          <ul class="u-align-left u-text u-text-6">
            <li>Menumbuhkan kepribadian tanggguh dan kreatif melalui kegiatan yang terpadu dan terencana.</li>
            <li>meningkatkan kualitas mahasiswa Hukum Ekonomi Syariah melalui kegiatan yang bersifat keislaman, keilmuan dan keIndonesiaan.</li>
            <li>Membangun kerjasama dengan instansi lain demi terciptanya visi dan misi prodi Hukum Ekonomi Syariah.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="u-align-center u-clearfix u-hidden-xs u-section-3" id="sec-c26d">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <h1 class="u-text u-text-custom-color-1 u-text-1">DON'T ACCESS ON LANDSCAPE MODE !</h1>
    </div>
  </section>


  <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-2515">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
      <p class="u-small-text u-text u-text-variant u-text-1">System Generated By KHL</p>
    </div>
  </footer>
  <section class="u-backlink u-clearfix u-grey-80">
    <a class="u-link" href="https://nicepage.com/css-templates" target="_blank">
      <span>CSS Templates</span>
    </a>
    <p class="u-text">
      <span>created with</span>
    </p>
    <a class="u-link" href="https://nicepage.com/html-website-builder" target="_blank">
      <span>WYSIWYG HTML Editor</span>
    </a>.
  </section>
</body>

</html>