# Projek Lomba Kebudayaan Nasional 2023 - PIKMI UBSI ✨

![WhatsApp-Image-2023-02-09-at-11 32 20-750x430](https://github.com/user-attachments/assets/6b897252-25d3-4035-9e85-b4090a67142b)

Pada lomba ini, kami diberikan tantangan untuk mengembangkan sebuah situs web menggunakan framework PHP, yaitu CodeIgniter 3. Proyek ini diberi nama **Seputar Budaya Indonesia (SBI)**, yang bertujuan untuk melestarikan budaya Indonesia melalui platform digital.

Seputar Budaya Indonesia adalah sebuah website yang dirancang untuk menyajikan informasi tentang budaya Indonesia, seperti makanan khas, alat musik tradisional, dan tarian dari berbagai daerah di Indonesia. Fokus utama pengembangan kami adalah menyediakan konten edukatif yang ramah pengguna dan dapat diakses oleh semua kalangan.

## 🎯 Fitur Utama
- Informasi budaya dari empat provinsi: **DKI Jakarta**, **Jawa Barat**, **Jawa Tengah**, dan **Jawa Timur**.
- Pengguna dapat menambahkan artikel tentang budaya melalui fitur membership.
- Kategori konten meliputi:
  - **Makanan Tradisional**
  - **Alat Musik Tradisional**
  - **Tarian Tradisional**
- Membership berbayar dengan tiga opsi: Basic, Standard, dan Pro.
- Konten dapat diakses kapan saja dan di mana saja menggunakan perangkat apapun.

## 🖼️ Tampilan Fitur Utama

### Beranda
![Screenshot Beranda](https://github.com/user-attachments/assets/beranda-sbi.png)

### Login
![Screenshot Login](https://github.com/user-attachments/assets/login-sbi.png)

### Register
![Screenshot Register](https://github.com/user-attachments/assets/register-sbi.png)

### Tambah Artikel
![Screenshot Tambah Artikel](https://github.com/user-attachments/assets/tambah-artikel-sbi.png)

## 🚀 Tech Stack Used
- **HTML, CSS, dan JavaScript**
- **Bootstrap**
- **PHP dengan CodeIgniter 3**
- **MySQL Database**

## 🔧 Panduan Instalasi

### Prasyarat
- **PHP 7.x atau lebih baru**
- **Web Server Apache**
- **MySQL Database Server**

---

### Langkah-langkah Instalasi

#### 1. Clone atau Download Repositori:

**Clone repositori:**

```bash
git clone https://github.com/auliyaapri/lomba_kebudayaan.git
cd lomba_kebudayaan
```

**Atau download repositori sebagai file ZIP dan ekstrak:**

```bash
cd path/to/extracted-folder
```

---

#### 2. Ubah nama direktori proyek:

Pindahkan folder proyek ke dalam direktori **xampp/htdocs** atau sejenisnya:

```bash
mv lomba_kebudayaan kebudayaan
cd kebudayaan
```

---

#### 3. Buat Basis Data:

- Buat basis data baru di server MySQL Anda dengan nama **`budaya`**.

---

#### 4. Import Basis Data:

- Import file SQL **`budaya.sql`** yang disediakan ke dalam basis data MySQL Anda. Pastikan file ini berada di direktori yang sesuai di komputer Anda.

- Gunakan terminal atau alat seperti phpMyAdmin untuk mengimpor:

```bash
mysql -u your-username -p budaya < path/to/budaya.sql
```

- Jika menggunakan phpMyAdmin, unggah file SQL tersebut melalui antarmuka import.

---

#### 5. Konfigurasi Aplikasi:

- Perbarui konfigurasi basis data di **`application/config/database.php`**:

```php
$db['default'] = array(
    'dsn'   => '',
    'hostname' => 'localhost',
    'username' => 'your-username',
    'password' => 'your-password',
    'database' => 'budaya',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
```

---

#### 6. Jalankan Aplikasi:

- Mulai server Apache Anda.
- Buka browser, lalu navigasikan ke **[http://localhost/kebudayaan](http://localhost/kebudayaan)** atau sesuai dengan konfigurasi yang Anda gunakan.

---

