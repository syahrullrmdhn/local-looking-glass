# **Mini Looking Glass**

**Mini Looking Glass** adalah aplikasi berbasis web sederhana yang memungkinkan pengguna untuk menjalankan **ping** dan **traceroute (mtr)** terhadap target tertentu. Proyek ini dibangun menggunakan **PHP**, **JavaScript**, **TailwindCSS**, dan **Nginx** yang dijalankan dalam **Docker**.

---

## **Fitur**
1. **Ping Test**: Mengukur latensi jaringan ke target tertentu (IP/domain).
2. **Traceroute Test (MTR)**: Menampilkan jalur koneksi ke target, termasuk latensi setiap hop.
3. **Responsif**: Antarmuka berbasis **TailwindCSS** untuk pengalaman yang estetis dan modern.
4. **Dockerized**: Aplikasi ini dikemas dalam Docker untuk mempermudah deployment.

---

## **Struktur Proyek**

```plaintext
mini-looking-glass/
├── app/
│   ├── src/
│   │   ├── api.php         # Backend API untuk menjalankan ping dan mtr
│   │   ├── index.html      # Halaman utama aplikasi
│   │   └── script.js       # JavaScript untuk menangani form dan interaksi API
│   ├── nginx/
│   │   └── default.conf    # Konfigurasi Nginx
│   └── Dockerfile          # Dockerfile untuk membangun container
├── docker-compose.yml      # Docker Compose untuk menjalankan aplikasi
└── README.md               # Dokumentasi proyek
```

---

## **Prasyarat**
Pastikan Anda telah menginstal:
1. **Docker**: [Download Docker](https://www.docker.com/get-started)
2. **Docker Compose**: [Install Docker Compose](https://docs.docker.com/compose/install/)

---

## **Cara Menjalankan**

### **1. Clone Repository**
Clone repository ini ke sistem Anda:
```bash
git clone https://github.com/syahrullrmdhn/local-looking-glass.git
cd mini-looking-glass
```

### **2. Build Docker Image**
Bangun image Docker menggunakan perintah berikut:
```bash
docker-compose up --build
```

### **3. Jalankan Aplikasi**
Jalankan aplikasi dengan perintah:
```bash
docker-compose up
```

### **4. Akses Aplikasi**
Buka browser Anda dan akses:
```
http://localhost:8080
```

---

## **Penggunaan**

1. Masukkan **IP address** atau **hostname** pada kolom "Target".
2. Pilih metode:
   - `Ping`: Untuk mengukur latensi jaringan.
   - `Traceroute`: Untuk melihat jalur koneksi ke target.
3. Klik tombol **Execute**.
4. Hasil akan ditampilkan pada bagian bawah form.

---

## **Contoh Hasil**

### **Ping**
```plaintext
PING google.com (172.217.3.110): 56 data bytes
64 bytes from 172.217.3.110: icmp_seq=0 ttl=117 time=5.26 ms
64 bytes from 172.217.3.110: icmp_seq=1 ttl=117 time=5.12 ms
...
```

### **Traceroute**
```plaintext
Start: 2025-01-23T12:34:56+0000
HOST: localhost                  Loss%   Snt   Last   Avg  Best  Wrst StDev
  1.|-- gateway                  0.0%     1    0.5   0.5   0.5   0.5   0.0
  2.|-- 172.217.3.110            0.0%     1    5.0   5.0   5.0   5.0   0.0
```

---

## **Teknologi yang Digunakan**

1. **PHP**: Backend untuk eksekusi perintah sistem seperti `ping` dan `mtr`.
2. **JavaScript**: Mengelola interaksi frontend dan API backend.
3. **TailwindCSS**: Framework CSS untuk desain antarmuka yang responsif dan modern.
4. **Nginx**: Server HTTP untuk melayani aplikasi.
5. **Docker**: Untuk membangun, mengemas, dan menjalankan aplikasi dalam container.

---

## **Kontribusi**
Jika Anda ingin berkontribusi, silakan fork repository ini dan ajukan pull request. Untuk masalah atau saran, silakan buat **issue** di GitHub.

---

## **Lisensi**
Proyek ini dirilis di bawah lisensi **MIT**.

---

**Dikembangkan oleh:**
- Syahrul Ramadhan
- Tim Syahrul LG

Semoga bermanfaat! 🎉
