# Belajar Laravel 11 
## Muhammad Yusuf

## **Video 4 Blade Templating Engine**
1. **Pengantar Blade Templating**: Video ini fokus pada mesin templating Blade di Laravel 11, menjelaskan cara menggunakan Blade untuk mengelola dan mempercantik struktur halaman.

2. **Membuat dan Mengelola View**: Pembawa acara menunjukkan cara membuat view baru seperti "blog" dan "contact" serta mengintegrasikannya dengan rute, menekankan pentingnya mempercantik halaman polos yang dibuat di episode sebelumnya.

3. **Menggunakan Tailwind CSS**: Tailwind CSS diperkenalkan untuk memperbaiki tampilan halaman. Video ini memberikan panduan tentang cara menginstal Tailwind dan menggunakan komponen-komponennya yang sudah jadi.

4. **Implementasi Alpine.js**: Untuk navigasi yang dinamis, Alpine.js digunakan. Video ini menunjukkan langkah-langkah instalasi dan konfigurasi Alpine.js agar navigasi pada halaman berjalan dengan baik.

5. **Mengedit dan Menyempurnakan Halaman**: Video ini juga membahas bagaimana mengedit konten dan tampilan halaman menggunakan Tailwind UI, serta memastikan semua elemen navigasi dan konten di setiap halaman tampil konsisten dan menarik.

## Technologies Yang digunakan

- [Laravel](https://laravel.com/)
- [TailwindCSS](https://tailwindcss.com/)
- [TailwindUI](https://tailwindui.com/)
- [AlpineJS](https://alpinejs.dev/)

## Video 5 Blade Component
1. **Pengenalan Blade Components di Laravel**: Tutorial dimulai dengan pengenalan Blade, templating engine milik Laravel, yang mempermudah pengelolaan tampilan dan mengurangi duplikasi kode.

2. **Membuat Blade Components**: Video ini menunjukkan cara membuat komponen yang dapat digunakan kembali menggunakan perintah Artisan Laravel. Ini mencakup dua metode: dengan dan tanpa membuat kelas.

3. **Implementasi Layouts**: Instruktor memperlihatkan cara membuat layout component untuk struktur website, menggunakan slots untuk menyisipkan konten secara dinamis ke dalam layout.

4. **Contoh Praktis**: Tutorial ini mencakup contoh praktis di mana navigasi bar (navbar) diubah menjadi Blade component. Contoh ini menekankan pada peningkatan pemeliharaan kode.

5. **Menggunakan Blade Directives dan Layout Inheritance**: Tutorial juga membahas penggunaan Blade directives dan pewarisan template (layout inheritance) untuk membuat tampilan yang lebih dinamis dan terstruktur.

**Untuk membuat component ada view dan ada class**
```
php artisan make:component Navbar
```
**Mengambil Navbar dari component navbar**
```
<x-navbar></x-navbar>
```

**Membuat componen t Header tanpa view karena Header sangat simple**
```
php artisan make:component Header --view
```
**Variabel ```{{ $slot }}``` Untuk mengambil nilai dari component misalnya dari component header**

**Mengirimkan data  ```title``` ke home**
```
Route::get('/', function () {
    return view('home' , ['title'=> 'Home Page']);
});
```
**untuk mengecek dihome gunakan ini atau dd untuk menampilkan variable dan matikan scriptnya untuk melakukan Debug**
```
{{ dd($title) }}
```
**di home**
```
<x-slot:title>{{ $title }}</x-slot:title>
```
**dilayout**
```
<x-header>{{ $title }}</x-header>
```

**Untuk membuat agar ketika di klik home yang aktif home maka membuat request ketika di berada di ```/``` maka aktifkan , dan ketika tidak ``` : `` maka lakukan**
```
{{ request()->is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}
```
**ketika di blog buat ```/blog``` dan yang lainnya juga disesuaikan**







