
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Simple Animated Card</title>
  <link href="<?= base_url()?>assets/css/kategori.css" rel="stylesheet">

</head>
<body>
<!-- partial:index.partial.html -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

<main>
  <div class = "card">
  <img src="<?= base_url() . '/assets/img/kategori_alat_musik.png' ?>"alt="...">
    <div class="card-content">
      <h2>
        Alat Musik
      </h2>
      <p>
      Alat musik tradisional adalah salah satu budaya bangsa Indonesia. Dari Sabang sampai Merauke, beragam alat musik dimainkan di tiap daerah. Alat musik tradisional sendiri adalah alat musik yang berakar pada tradisi masyarakat tertentu.

      </p>
      <a href="<?=base_url('kategori/alat_musik')?>" class="button">
        Lihat selengkapnya
        <span class="material-symbols-outlined">
          arrow_right_alt
        </span>
      </a>
    </div>
  </div>
  <div class = "card">
    
    <img src="<?= base_url() . '/assets/img/kategori_makanan.png' ?>"alt="...">
    <div class="card-content">
      <h2>
        Makanan
      </h2>
      <p>
      Makanan Tradisional merupakan makanan asli khas daerah tertentu di Indonesia dimana dalam proses pengolahannya sangat dikuasai oleh masyarakat di daerah tersebut, serta cita rasanya sangat sesuai dengan masyarakat setempat.
      </p>
      <a href="<?=base_url('kategori/makanan')?>" class="button">
        Lihat selengkapnya
        <span class="material-symbols-outlined">
          arrow_right_alt
        </span>
      </a>
    </div>
  </div>
  <div class = "card">
  <img src="<?= base_url() . '/assets/img/kategori_menari2.png' ?>"alt="...">
    <div class="card-content">
      <h2>
        Tarian
      </h2>
      <p>
      Tari tradisional adalah tarian yang telah berkembang dari masa ke masa di suatu daerah, adat, atau etnik tertentu. Perkembangan tersebut membuat tari tradisional memiliki nilai-nilai estetika klasik yang dilestarikan dari generasi ke generasi.


      </p>
      <a href="<?=base_url('kategori/tarian')?>" class="button">
        Lihat selengkapnya
        <span class="material-symbols-outlined">
          arrow_right_alt
        </span>
      </a>
    </div>
  </div>
</main>
<!-- partial -->
  
</body>
</html>
