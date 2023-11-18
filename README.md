<a name="readme-top"></a>
<div align="center">
<!-- Logo Aplikasi -->
<img src="https://github.com/Hadieee/Akiong-Warehouse/blob/main/public/assets/Akiong-Warehouse.png" width="50%"> 

# 

[![GitHub forks](https://img.shields.io/github/forks/Hadieee/Akiong-Warehouse?style=for-the-badge)](https://github.com/Hadieee/Akiong-Warehouse/network/members)
[![GitHub contributors](https://img.shields.io/github/contributors/Hadieee/Akiong-Warehouse?style=for-the-badge)](https://github.com/Hadieee/Akiong-Warehouse/graphs/contributors)
[![GitHub stars](https://img.shields.io/github/stars/Hadieee/Akiong-Warehouse?style=for-the-badge)](https://github.com/Hadieee/Akiong-Warehouse/stargazers)
[![GitHub issues](https://img.shields.io/github/issues/Hadieee/Akiong-Warehouse?style=for-the-badge)](https://github.com/Hadieee/Akiong-Warehouse/issues)
[![GitHub license](https://img.shields.io/github/license/Hadieee/Akiong-Warehouse?style=for-the-badge)](https://github.com/Hadieee/Akiong-Warehouse/blob/main/LICENSE)

### Kelompok 7<br>Website Inventori Barang
<p>Projek Akhir - Praktikum Framework</p>


| NIM | NAMA | ROLE |
|------------|:----------------------:|:---------:|
| 2109106043 | Hadie Pratama Tulili | `Ketua` |
| 2109106052 | Muhammad Firdaus | `Anggota` |
<br>
</div>

<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#introduction">Introduction</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
      <li><a href="#contributing">Contributing</a></li>
    <li><a href="#job-desk">Job Desk</a></li>
    <li><a href="#features">Features</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>

## Introduction
<div align="center">
    <img src="https://github.com/Hadieee/Akiong-Warehouse/assets/92103598/6cf27b6b-d6f5-4170-bc29-da0067641005" width="100%"> 
</div>

<div align="justify">
Akiong Warehouse merupakan website yang dibuat untuk memenuhi Project Akhir dari Pratikum Framework, Akiong Warehouse merupakan judul dari website inventori barang yang dapat memudahkan pengguna untuk Manajemen stok barang meraka dan website ini juga sangat berguna untuk manajer agar dapat melihat barang apa saja yang masuk dan keluar. Akiong Warehouse dilengkapi dengan fitur registrasi dan login untuk admin yang membuat admin dapat membuat sendiri akun mereka tanpa perlu bantuan dari manajer. selain dari itu dengan adanya website ini admin dapat melakukan manajemen barang dengan terstruktur. sedangkan untuk manajer dapat manajemen pemasok barang dan membuat kategori barang agar membantu admin dalam melakukan manajemen barang.
</div>

## Built With
Website Akiong Warehouse dibuat menggunakan framework:
* [![Laravel][laravel-badge]][laravel-url]
* [![Tailwind CSS][tailwind-badge]][tailwind-url]

## Getting Started

### Installation 
Berikut merupakan cara untuk menginstall webiste ini di device anda. sebelumnya harap install dan mempersiapkan composer anda terlebih dahulu.

1. Clone The Repo
    ```sh
   git clone https://github.com/Hadieee/Akiong-Warehouse.git
   ```
2. Install Composer Kedalam Project Yang Telah Di Clone
   ```sh
   composer install
   ```
3. Install NPM Packages Untuk Tailwind CSS
   ```sh
   npm install
   ```
4. Simpan Konfigurasi Enviroment Proyek, Seperti Pengaturan Database, pengaturan Environment, dan Parameter Konfigurasi Lainnya. 
   ```sh
   cp .env.example .env
   ```
5. Untuk Menghasilkan Kunci Aplikasi Laravel Yang Diperlukan Untuk Enkripsi Data Dan Keamanan Aplikasi Anda.
    ```sh
    php artisan key:generate
   ```
6. Untuk Migrasi Database Serta Menambahkan Data Ke Database Secara Otomatis Dengan Menggunakan Factory.
    ```sh
    php artisan migrate:fresh --seed
   ```



## Job Desk

### List Modul
+ Modul 1 : PENGENALAN, KONSEP MVC & INSTALASI LARAVEL
+ Modul 2 : FRONTEND FRAMEWORK & TAILWIND CSS
+ Modul 3 : ROUTING & BLADE
+ Modul 4 : LARAVEL ARTISAN & DATABASE
+ Modul 5 : ELOQUENT & RELATIONSHIP
+ Modul 6 : AUTHENTICATION & MIDDLEWARE
+ Modul 7 : CRUD
+ Modul 8 : API
<br>

### Table Contribution
<div align=center>

| NIM | NAMA | JOB DESK | Modul |
|-----|:--------------------:|:--------: | :--------------------------------|
| 2109106043 | Hadie Pratama Tulili | `Manajemen Data Page`| * Modul 3 <br> * Modul 4 <br> * Modul 5 <br> * Modul 7 <br> * Modul 8
| 2109106052 | Muhammad Firdaus |`Authetication`<br>`Landing Page`| * Modul 1 <br> * Modul 2 <br> * Modul 3 <br> * Modul 6

</div>
<br>

## Features
<div align="center">
    <img src="https://github.com/Hadieee/Akiong-Warehouse/assets/92103598/adac9134-46a5-45db-808d-323a73029f00" width="100%"> 
</div>

## Documentation
### Landing Page



[laravel-badge]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[laravel-url]: https://laravel.com
[tailwind-badge]: https://img.shields.io/badge/Tailwind%20CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white
[tailwind-url]: https://tailwindcss.com
