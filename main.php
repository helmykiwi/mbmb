<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal EKSA MBMB</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php include 'header.php'; ?>

<main>
  <section class="hero" style="background-image: url('grahar.jpg');">
    <h1>Selamat Datang ke Portal EKSA MBMB</h1>
    <p>Portal rasmi untuk aktiviti, laporan, dan info EKSA Majlis Bandaraya Melaka Bersejarah.</p>
  </section>

<nav class="navigation">
  <ul>
    <li><a href="dasar.php">DASAR EKSA</a></li>
    <li><a href="objektif.php">OBJEKTIF EKSA</a></li>
    <li><a href="visi.php">VISI & MISI</a></li>
    <li><a href="moto.php">MOTO EKSA</a></li>
    <li><a href="logo.php">LOGO EKSA MBM</a></li>
    <li><a href="carta.php">CARTA ORGANISASI INDUK EKSA</a></li>
    <li class="dropdown">
      <a href="#" onclick="return false;" style="cursor: default;">INFO ZON ▼</a>
      <div class="dropdown-content">
        <a href="zon.php?plant=bougainvillea">BOUGAINVILLEA</a>
        <a href="zon.php?plant=fiddle-fig">FIDDLE FIG</a>
        <a href="zon.php?plant=monstera">MONSTERA</a>
        <a href="zon.php?plant=peace-lily">PEACE LILY</a>
        <a href="zon.php?plant=bamboo">BAMBOO</a>
        <a href="zon.php?plant=jasmine">JASMINE</a>
        <a href="zon.php?plant=philodendron">PHILODENDRON</a>
        <a href="zon.php?plant=spider-plant">SPIDER PLANT</a>
        <a href="zon.php?plant=lavender">LAVENDER</a>
        <a href="zon.php?plant=aloe-vera">ALOE VERA</a>
        <a href="zon.php?plant=golden-palm">GOLDEN PALM</a>
        <a href="chrysanthemum.php">CHRYSANTHEMUM</a>
        <a href="dracaena.php">DRACAENA</a>
        <a href="zon.php?plant=golden-pothos">GOLDEN POTHOS</a>
        <a href="zon.php?plant=fern">FERN</a>
        <a href="zon.php?plant=daisy">DAISY</a>
        <a href="zon.php?plant=cactus">CACTUS</a>
        <a href="zon.php?plant=calathea">CALATHEA</a>
        <a href="zon.php?plant=ixora">IXORA</a>
        <a href="zon.php?plant=snake-plant">SNAKE PLANT</a>
        <a href="zon.php?plant=rhapis-palm">RHAPIS PALM</a>
      </div>
    </li>
    <li><a href="risalah.php">RISALAH</a></li>
    <li><a href="mbmb.php">MBMB</a></li>
  </ul>
</nav>

<section class="content-wrapper">
  <div class="carousel">
    <p>PEMAKLUMAN PEMBAHAGIAN ZON DAN KAWASAN ANGKAT ZON EKSA BAGI TAHUN 2025/2026</p>
    <div class="carousel-container">
      <div class="carousel-slide" id="carousel-slide">
        <img src="image/zon1.png" alt="Slide 1">
        <img src="image/zon2.png" alt="Slide 2">
        <img src="image/zon3.png" alt="Slide 3">
        <img src="image/zon4.png" alt="Slide 4">
        <img src="image/zon1.png" alt="Slide 1 clone">
      </div>
    </div>
  </div>

  <section class="intro">
    <h2>Jom Eksa</h2>
    <p>
      EKSA adalah singkatan kepada Ekosistem Kondusif Sektor Awam (EKSA). Ia diterajui oleh pihak MAMPU (Unit Pemodenan Tadbiran dan Perancangan Pengurusan Malaysia), dan ia merupakan penjenamaan semula bagi Pelaksanaan Amalan 5S Sektor Awam (2010), dan bertujuan untuk meningkatkan budaya kecemerlangan organisasi yang lebih berimej korporat dan melahirkan idea dan aktiviti kerativiti dan inovasi. Program EKSA diperluaskan pemakaiannya dengan memperkenalkan EKSA Kendiri/ DIY. Secara prinsipnya, program EKSA merupakan satu program penilaian yang dilaksanakan oleh MAMPU ke atas Agensi Induk. Manakala, program EKSA Kendiri merupakan satu program penilaian kendiri yang dilaksanakan oleh Agensi Induk terhadap agensi di bawah seliaannya.
    </p>
  </section>
</section>
<script>
  const slide = document.getElementById("carousel-slide");
  const images = slide.querySelectorAll("img");
  const totalImages = images.length;
  let counter = 0;
  const size = images[0].clientWidth;

  function autoSlide() {
    counter++;
    slide.style.transition = "transform 0.6s ease-in-out";
    slide.style.transform = `translateX(${-size * counter}px)`;

    if (counter === totalImages - 1) {
      setTimeout(() => {
        slide.style.transition = "none"; 
        counter = 0;
        slide.style.transform = `translateX(0px)`; 
      }, 600);
    }
  }

  setInterval(autoSlide, 3000); 
</script>


<?php include 'footer.php'; ?>