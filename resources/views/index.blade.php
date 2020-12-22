<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" href="{{ URL::asset('/img/logo-ibis.png') }}" type="image/x-icon"/>
        <title>Selamat Datang di situs Admin Ibis Hotel Bandung</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="home">
                <a href="/home"><img src="{{ asset('img/logo-ibis.png')}}"></img></a>
            </div>
            <div class="logout">
                <ul>
                    <li>Hai,{{ $login -> username }}</li>
                    <li><a href="/logout"><img src="{{ asset('img/logout.png') }}" class="img-power" alt="" />Logout</a></li>
                </ul>
            </div>    
        </header>
        <container> 
            <h1 class="title-index" style="text-align : center;">Selamat datang di website khusus admin</h1>
            <div class="Item-menu">
                <h2>Tempat Wisata</h2>
                <p>
                    Silahkan kelola informasi terkait tempat wisata yang di rekomendasikan
                    di sekitar kota bandung yah nanti semua informasi yang ditambah akan di tampilkan pada publik
                </p>
                <div class="Item-column"> 
                    <div class="Item">
                        <a href="{{ route('tambah-wisata') }}">
                            <img src="{{ asset('img/document.png') }}" class="item-image" alt="">
                            <h3>Tambah Data</h3>
                        </a>
                    </div>
                    <div class="Item">
                        <a href="{{ route('wisata') }}">
                            <img src="{{ asset('img/table.png') }}" class="item-image" alt="">
                            <h3>Lihat Data</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="Item-menu">
                <h2>Promosi</h2>
                <p>
                    Silahkan kelola informasi terkait promo pada ibis hotel pasteur yang terbaru
                    nanti semua promo yang ditambahkan akan ditampilkan pada publik
                </p>
                <div class="Item-column">
                    <div class="Item">
                        <a href="{{ route('tambah-promosi') }}">
                            <img src="{{ asset('img/document.png') }}" class="item-image" alt="">
                            <h3>Tambah Data</h3>
                        </a>
                    </div>
                    <div class="Item">
                        <a href="{{ route('promosi') }}">
                            <img src="{{ asset('img/table.png') }}" class="item-image" alt="">
                            <h3>Lihat Data</h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="Item-menu-inbox">
                <h2>Feedback Klien</h2>
                <div class="Item">
                    <a href="{{ route('inbox') }}">
                        <img src="{{ asset('img/inbox.png') }}" class="item-image" alt="">
                        <h3>Kotak Masuk</h3>
                     </a>
                </div>
            </div>
        </container>
        <footer>
            <div class="top-footer">
                <div class="top-left-footer">
                    <h3>Kontak Kami</h3>
                    <p><img src="{{ asset('img/telephone.png') }}" class="icon-contact" alt="" />085318909969</p>
                    <p><img src="{{ asset('img/email.png') }}" class="icon-contact" alt="" />nogir16111998@gmail.com</p>
                </div>
                <div class="top-right-footer">
                    <a href="/syarat-dan-ketentuan">Syarat dan Ketentuan</a>
                    <a href="/kebijakan-privasi">Kebijakan Privasi</a>
                </div>
            </div>
            <div class="bottom-footer">
                <p>&copy; Ibis Hotel <span id="years"></span> Made by Ibis Hotel Pasteur with <span class="heart-icon">&hearts;</span></p> 
            </div>
        </footer>
        <script>
            let time = new Date();
            let years = time.getFullYear();
            document.getElementById("years").innerHTML = years;
        </script>
    </body>
</html>