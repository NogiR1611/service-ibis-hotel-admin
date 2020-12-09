<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Kebijakan Privasi</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <a href="/"><img src="{{ asset('img/logo-ibis.png')}}"></img></a>
        </header>
        <div class="privasi-syarat">
            <h1 class="title-documentation">Kebijakan Privasi</h1>
            <p>
                Kami berkomitmen untuk menjaga privasi dari pengunjung dan pengguna situs web kami; kebijakan ini memberitahukan bagaimana kami memperlakukan informasi pribadi anda.
                Kebijakan privasi ini mengatur cara kami mengumpulkan, menggunakan, memelihara dan mengungkapkan informasi yang dikumpulkan dari pengunjung dan pengguna situs web ini.
            </p>
            <h1>Informasi yang kami kumpulkan</h1>
            <p>
                Kami mengumpulkan informasi pribadi dari pengguna melalui formulir online ketika pengguna memesan produk dan jasa kami.
                Kami juga dapat mengumpulkan informasi tentang bagaimana para pengguna menggunakan situs web kami, misalnya, dengan melacak jumlah tampilan unik yang diterima oleh halaman-halaman situs web atau domain dari mana pengguna berasal.
                Kami menggunakan "cookies" untuk melacak bagaimana pengguna menggunakan situs web kami.
            </p>
            <h1>Cookies</h1>
            <p>
                Cookies adalah file yang merupakan serangkaian informasi berbentuk teks yang dikirim oleh server web dan disimpan oleh web browser komputer anda ataupun perangkat lainnya ketika Anda mengakses sebuah situs web.
                Cookies tersebut dikirim kembali ke situs asal setiap kali browser meminta halaman dari server.
                Cookies ini memungkinkan situs web kami untuk mengenali perangkat pengguna.
                Kami mungkin menggunakan informasi yang diambil dari cookies untuk meningkatkan pengalaman pengguna situs dan keperluan pemasaran.
                Kami juga mungkin menggunakan informasi tersebut untuk melakukan personalisasi situs kami untuk anda.
            </p>
        </div>
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