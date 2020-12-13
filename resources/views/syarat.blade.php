<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Syarat dan Ketentuan</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <a href="/home"><img src="{{ asset('img/logo-ibis.png')}}"></img></a>
        </header>
        <div class="privasi-syarat">
            <h1 class="title-documentation">Syarat dan Ketentuan</h1>
            <p>
                Harap membaca pemberitahuan berikut sebelum menggunakan situs web ini.
                Penggunaan layanan dan fitur-fiturnya berarti Anda telah menerima syarat dan ketentuan yang berlaku.
                Bila terjadi pelanggaran akan di kenakan sanksi yang berlaku pada hotel.
            </p>
            <h1>Konten</h1>
            <p>Pengguna situs web ini dilarang menerbitkan dan memuat konten wisata atau pun promosi yang mengandung : </p>
            <ol>
                <li>Pornografi, SARA, penghinaan dan keasusilaan umum</li>
                <li>Hal-hal yang bersifat dapat menimbulkan perselisihan, keresahan, dan teror</li>
                <li>Materi hak cipta tanpa izin pemiliknya</li>
                <li>Materi yang dapat digunakan untuk hal-hal yang mengganggu semua pihak</li>
                <li>Ponzy, pyramid Scheme dan bentuk penipuan lainnya</li>
                <li>Phishing, auto like, auto bot dan sejenisnya.</li>
                <li>Materi-materi lain yang tidak sesuai dengan hukum dan peraturan perundang-undangan Republik Indonesia</li>
            </ol>
            <p>Kami berhak untuk menolak memberikan layanan kami kepada siapa pun. Semua konten yang termasuk dalam penjelasan di atas dapat dihapus dari server kami dengan atau tanpa pemberitahuan.</p>
            <h1>Ketentuan Umum</h1>
            <p>
                Anda dan setiap orang yang memiliki akses ke situs ini harus mengevaluasi dan menanggung risiko yang terkait pada pembuatan konten situs web anda.
                Tidak ada toleransi atas aktivitas spamming. Kami tidak memberikan toleransi terhadap pengiriman email yang tidak diminta, email massal dan spam.
                Bila anda mendapatkan email pengunjung pada kotak masuk feedback situs ini silahkan dipergunakan sebaik-baiknya.
                Kami berhak untuk menggunakan email pengunjung untuk mengirim konten promosi maupun informasi penting lainnya.
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