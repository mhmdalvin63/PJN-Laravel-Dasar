<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <style>
    body{
        margin-bottom: 5rem;
    }
    #title{
        color: rgb(156, 150, 150);
    }
    #top{
        padding: 4rem 2rem;
        background-color: rgb(243, 243, 243);
        border: 2.5px solid cyan;
        height: 12.5rem;
    }
    #top button{
        position: absolute;
        top: -1rem;
        left: -1rem;
        color: white;
        font-size: 1.5rem;
    }
    #top-2{
        padding: 4rem 2rem;
        background-color: rgb(243, 243, 243);
        border: 2.5px solid cyan;
    }
    #top-2 button{
        position: absolute;
        top: -1rem;
        left: -1rem;
        color: white;
        font-size: 1.5rem;
    }
    .card-header{
        background-color: rgb(95, 209, 209);
        color: white;
        font-size: 1.5rem;
        border: none;
        padding: 1rem
    }
    .card-body{
        padding: 2rem 2rem;
        background-color: rgb(243, 243, 243);
        border: 2.5px solid cyan;
        border-top: none;
    }

  </style>
  <body>
    <div class="container">
            <h1 class="mt-5 text-center" id="title">ABOUT LARAVEL</h1>
        <div class="row mt-5">
            <div class="col-md-4 mt-5">
                <div class="card" id="top">
                    <button type="button" class="btn btn-info">Slide dan Source Code</button>
                <a href="https://docs.google.com/presentation/d/1OVQkmjKMwmSPHA3THJzFdsooiHFqZK3QcOczns3t-vA/edit?usp=sharing">
                    <h4>SLIDE</h4>
                </a>
                <a href="https://github.com/ProgrammerZamanNow/belajar-laravel-dasar">
                    <h4>Source Code</h4>
                </a>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="card" id="top">
                    <button type="button" class="btn btn-info">Discord Group</button>
                <a href="https://discord.gg/pEgSFrpPSv">
                    <h4>Link Grup</h4>
                </a>
                </div>
            </div>
            
            <div class="col-md-4 mt-5">
               <div class="card" id="top">
                <button type="button" class="btn btn-info">Versi Laravel</button>
                <a href="https://laravel.com/docs/master/releases">
                    <h4>Cek Versi</h4>
                </a>
               </div>
            </div>
            <div class="col-md-12 mt-5" >
                <div class="card" id="top-2">
                    <button type="button" class="btn btn-info">Pengenalan Laravel</button>
                    <h4>- Laravel adalah Framework di PHP untuk membuat web atau API</h4>
                    <h4>- Laravel pertama kali dibuat oleh Taylor Otwell tahun 2011</h4>
                    <h4>- Laravel adalah Framework yang open wource dan gratis, sehingga kita bisa menggunakan tanpa biaya dan juga bisa berkontribusi ke projectnya</h4>
                    <a href="https://laravel.com/"><h5>Laravel Web</h5></a>
                    <a href="https://github.com/laravel/laravel"><h5>Laravel Git Hub</h5></a>
                </div>
            </div>
            <div class="col-md-12 mt-5" >
                <div class="card" id="top-2">
                    <button type="button" class="btn btn-info">Kenapa Laravel ?</button>
                    <h4>- Saat ini Laravel adalah Framework paling populer di PHP </h4>
                    <h4>- Banyak perusahaan yang sudah menggunakan Laravel sebagai Framework pilihan ketika menggunakan PHP</h4>
                    <h4>- Laravel juga memiliki ekosistem yang sangat besar, Terutama dari ekosistem teknologi pendukung, sehingga ketika menggunakan laravel, kita bisa mengintegrasikan dengan teknologi pendukung nya dengan lebih mudah</h4>
                </div>
            </div>
            <div class="col-md-12 mt-5" >
               <div class="card" id="top-2">
                <button type="button" class="btn btn-info">Model View Controller</button>
                <h4>- Laravel sendiri membawa konsep MVC ( Model View Controller )</h4>
                <h4>- Sehingga jika kita sudah terbiasa dengan konsep tersebut, kita akan dengan mudah menggunakan laravel</h4>
               </div>
            </div>
            <div class="col-md-12 mt-5" >
                <div class="card" id="top-2">
                    <button type="button" class="btn btn-info">Library</button>
                    <h4>- Laravel sendiri sebenarnya tidak membuat semua bagian pada framework nya sendiri </h4>
                    <h4>- Contohnya untuk project management, Laravel menggunakan Composer</h4>
                    <h4>- Untuk Logging, Laravel menggunakan Monolog
                        Untuk Unit Test, Laravel menggunakan PHPUnit
                        Dan lain-lain</h4>
                </div>
            </div>
            <div class="col-md-12 mt-5">
                <div class="card" id="top-2">
                    <button type="button" class="btn btn-info">Server Requirements</button>
                <div class="row">
                    <div class="col-md-4">
                        <h4>PHP >= 8.0</h4>
                        <h4>BCMath PHP Extension</h4>
                        <h4>Ctype PHP Extension</h4>
                        <h4>cURL PHP Extension</h4>
                        <h4>DOM PHP Extension</h4>
                    </div>
                    <div class="col-md-4">
                        <h4>OpenSSL PHP Extension</h4>
                        <h4>Fileinfo PHP Extension</h4>
                        <h4>JSON PHP Extension</h4>
                        <h4>Mbstring PHP Extension</h4>
                    </div>
                    <div class="col-md-4">
                        <h4>PCRE PHP Extension</h4>
                        <h4>PDO PHP Extension</h4>
                        <h4>Tokenizer PHP Extension</h4>
                        <h4>XML PHP Extension</h4>
                    </div>
                </div>
                </div>
                
                
            </div>
            <div class="col-md-12 mt-5">
               <div class="card" id="top-2">
                <button type="button" class="btn btn-info">Membuat Project</button>
                <h4>Laravel menggunakan Composer untuk project management nya
                    Dan untuk membuat projectnya pun kita bisa menggunakan Composer dengan perintah :
                    composer create-project laravel/laravel=version nama-folder
                    https://packagist.org/packages/laravel/laravel 
                </h4>
               </div>
            </div>
            <div class="col-md-12 mt-5">
                <div class="card" id="top-2">
                    <button type="button" class="btn btn-info">Struktur Project</button>
                <h4>-APP : Tempat dimana kita menyimpan semua kode program</h4>
                <h4>- Bootstrap : Bawaan Laravel untuk menjalankan Bootstraping</h4>
                <h4>- Config : Tempat Menyimpan file  PHP Configuration</h4>
                <h4>- Database : Laravel mendukung Database Migration, Gaperlu buat manual</h4>
                <h4>- Lang : Untuk Internasionalitation ( Support beberapa Bahasa) </h4>
                <h4>- Public : File atau Dokumen Yang akan di ekspos ke Public, Entry Point Public</h4>
                <h4>- Resources :  File atau Dokumen Lokal / Tidak bisa diakses oleh Public, Seperti Template</h4>
                <h4>- Routes : Routing atau End point</h4>
                <h4>- Storage : Tempat menyimpan File</h4>
                <h4>- Tests : Unit Test kita</h4>
                <h4>- Vendor : Bawaan composer, Semua library yang kita gunakan  di download ke folder Vendor</h4>
                </div>
            </div>
            <div class="col-md-6 mt-5">
                <div class="card">
                    <div class="card-header">
                      <h4>Artisan</h4>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">File yang nantinya akan meng Autogenerate Laravel</h5>
                    </div>
                  </div>
            </div>
            <div class="col-md-6 mt-5">
                <div class="card">
                    <div class="card-header">
                      <h4>Package.json</h4>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Bawaan NodeJS, Untuk integrasi Laravel dengan NodeJS</h5>
                    </div>
                  </div>
            </div>
            <div class="col-md-6 mt-5">
                <div class="card">
                    <div class="card-header">
                      <h4>Webpack.mix.js</h4>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Bawaan NodeJS, Untuk integrasi Laravel dengan NodeJS</h5>
                    </div>
                  </div>
            </div>
            <div class="col-md-6 mt-5">
                <div class="card">
                    <div class="card-header">
                      <h4>Gitignore</h4>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">untuk mengatur file" apa saja yang gausah di commit ke git repository</h5>
                    </div>
                  </div>
            </div>
            <div class="col-md-6 mt-5">
                <div class="card">
                    <div class="card-header">
                      <h4>Editorconfig </h4>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Style untuk editor agar seragam</h5>
                    </div>
                  </div>
            </div>
            <div class="col-md-6 mt-5">
                <div class="card">
                    <div class="card-header">
                      <h4>env  </h4>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">Konfigurasi Environment
                    </h5>
                    </div>
                  </div>
            </div>
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                      <h4>Artisan</h4>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title">- Saat kita membuat project Laravel, laravel sendiri sudah menyediakan secara otomatis sebuah file bernama artisan</h5>
                      <h5 class="card-title">- File artisan ini sendiri sebenarnya adalah file yang berisi kode php</h5>
                      <h5 class="card-title">- Kita bisa menggunakan perintah “php artisan” untuk melihat semua feature yang bisa dilakukan oleh file artisan</h5>
                      <h5 class="card-title">- File artisan bisa digunakan untuk melakukan banyak hal, salah satunya menjalankan aplikasi laravel ketika proses development</h5>
                      <h5 class="card-title">- Untuk menjalankan aplikasi laravel dalam mode development, kita bisa gunakan perintah :
                        php artisan serve</h5>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
