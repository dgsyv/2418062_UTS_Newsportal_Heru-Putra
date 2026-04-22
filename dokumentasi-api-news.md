Nama   : Muhammad Revaldo Andika
NIM    : 2418034
Kelas  : A

---

# DOKUMENTASI API PORTAL BERITA

Dokumentasi ini berisi penjelasan mengenai penggunaan API pada sistem **Portal Berita**, yang mencakup pengelolaan data kategori dan berita.

---

## BASE URL

http://localhost:8000/api/

---

# API KATEGORI

---

## 1. Menampilkan Seluruh Kategori

**Endpoint**
GET /category

**Keterangan**
Digunakan untuk mengambil semua data kategori yang tersedia di sistem.

**Respon Berhasil (200)**

```json
{
  "success": true,
  "info": "Daftar kategori berhasil ditampilkan",
  "result": [
    {
      "id": 1,
      "nama": "Teknologi",
      "slug": "teknologi"
    }
  ]
}
```

---

## 2. Menampilkan Detail Kategori

**Endpoint**
GET /category/{id}

**Keterangan**
Digunakan untuk melihat informasi kategori tertentu berdasarkan ID.

**Respon**

```json
{
  "success": true,
  "info": "Data kategori ditemukan",
  "result": {
    "id": 1,
    "nama": "Teknologi",
    "slug": "teknologi"
  }
}
```

---

## 3. Menambahkan Kategori

**Endpoint**
POST /category

**Data yang dikirim**

```json
{
  "nama": "Kesehatan"
}
```

**Respon**

```json
{
  "success": true,
  "info": "Kategori baru berhasil disimpan",
  "result": {
    "id": 2,
    "nama": "Kesehatan",
    "slug": "kesehatan"
  }
}
```

---

## 4. Mengubah Data Kategori

**Endpoint**
PUT /category/{id}

**Data yang dikirim**

```json
{
  "nama": "Bisnis"
}
```

**Respon**

```json
{
  "success": true,
  "info": "Perubahan kategori berhasil dilakukan",
  "result": {
    "id": 2,
    "nama": "Bisnis",
    "slug": "bisnis"
  }
}
```

---

## 5. Menghapus Kategori

**Endpoint**
DELETE /category/{id}

**Keterangan**
Menghapus kategori berdasarkan ID tertentu.

**Respon**

```json
{
  "success": true,
  "info": "Kategori telah dihapus dari sistem"
}
```

---

# API BERITA

---

## 1. Menampilkan Semua Berita

**Endpoint**
GET /news

**Keterangan**
Mengambil seluruh data berita yang tersedia.

**Respon**

```json
{
  "success": true,
  "info": "Data berita berhasil dimuat",
  "result": [
    {
      "id": 1,
      "judul": "Judul berita",
      "isi": "Isi berita lengkap",
      "gambar": "image.jpg",
      "kategori_id": 1,
      "tanggal": "2026-04-01"
    }
  ]
}
```

---

## 2. Detail Berita

**Endpoint**
GET /news/{id}

**Keterangan**
Menampilkan informasi detail dari satu berita.

**Respon**

```json
{
  "success": true,
  "info": "Detail berita berhasil diambil",
  "result": {
    "id": 1,
    "judul": "Judul berita",
    "isi": "Isi berita lengkap",
    "gambar": "image.jpg",
    "kategori_id": 1
  }
}
```

---

## 3. Menambahkan Berita

**Endpoint**
POST /news

**Data yang dikirim**

```json
{
  "judul": "Berita terbaru",
  "isi": "Konten berita terbaru",
  "kategori_id": 1
}
```

**Respon**

```json
{
  "success": true,
  "info": "Berita berhasil ditambahkan",
  "result": {
    "id": 2,
    "judul": "Berita terbaru",
    "isi": "Konten berita terbaru",
    "kategori_id": 1
  }
}
```

---

## 4. Mengupdate Berita

**Endpoint**
PUT /news/{id}

**Data yang dikirim**

```json
{
  "judul": "Judul diperbarui",
  "isi": "Isi berita diperbarui",
  "kategori_id": 1
}
```

**Respon**

```json
{
  "success": true,
  "info": "Data berita berhasil diperbarui",
  "result": {
    "id": 2,
    "judul": "Judul diperbarui",
    "isi": "Isi berita diperbarui",
    "kategori_id": 1
  }
}
```

---

## 5. Menghapus Berita

**Endpoint**
DELETE /news/{id}

**Respon**

```json
{
  "success": true,
  "info": "Berita berhasil dihapus"
}
```

---