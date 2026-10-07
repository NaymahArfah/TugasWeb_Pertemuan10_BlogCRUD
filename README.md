# Tugas Web - Pertemuan 10 Blog CRUD

## Nama

Naymah Arfah

## Mata Kuliah

Pemrograman Web

## Tentang Project

Project ini dibuat untuk memenuhi Tugas Rutin 10 (TR10) Pemrograman Web menggunakan framework Laravel.

Pada project ini dibuat aplikasi Blog CRUD sederhana. Aplikasi dapat digunakan untuk menampilkan, menambahkan, mengubah, melihat detail, dan menghapus data post.

Project ini menggunakan beberapa fitur Laravel, yaitu:

- Routing
- Controller
- Model dan Migration
- Blade Template
- Blade Layout
- Blade Component
- CRUD
- Validasi Form
- Flash Message
- CSRF
- Method Spoofing
- Route Model Binding
- Pagination

## Fitur Project

### 1. Menampilkan Post

Menampilkan daftar post yang tersimpan di database dengan pagination.

### 2. Menambah Post

Pengguna dapat menambahkan post baru dengan mengisi judul dan isi post.

### 3. Melihat Detail Post

Pengguna dapat melihat judul dan isi dari setiap post.

### 4. Mengedit Post

Pengguna dapat mengubah judul dan isi post yang sudah tersimpan.

### 5. Menghapus Post

Pengguna dapat menghapus post yang sudah tidak diperlukan.

### 6. Validasi

Form post memiliki validasi:

- Judul wajib diisi dan maksimal 200 karakter.
- Isi wajib diisi dan minimal 10 karakter.

### 7. Flash Message

Setelah post berhasil ditambahkan, diperbarui, atau dihapus, sistem menampilkan pesan keberhasilan.

## Struktur Utama Project

```text
app/
├── Http/
│   └── Controllers/
│       └── PostController.php
│
├── Models/
│   └── Post.php
│
└── View/
    └── Components/
        ├── Alert.php
        └── Card.php

database/
└── migrations/
    └── create_posts_table.php

resources/
└── views/
    ├── components/
    │   ├── alert.blade.php
    │   └── card.blade.php
    │
    ├── layouts/
    │   └── app.blade.php
    │
    └── posts/
        ├── index.blade.php
        ├── create.blade.php
        ├── show.blade.php
        └── edit.blade.php

routes/
└── web.php