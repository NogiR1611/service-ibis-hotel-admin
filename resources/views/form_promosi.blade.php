<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ URL::asset('/img/logo-ibis.png') }}" type="image/x-icon"/>
    <title>Form Input Data Event</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
    <div class="card">
        <div class="card-title">
            <h2>Silahkan Isi Data Terkait Promosi yang diinginkan</h2>
            <p><i>
                Semua Data Promosi yang di isi akan ditampilkan pada
                Publik jadi isikan datanya dengan Benar yah :)
            </i></p>
        </div>
        <!-- menampilkan error validasi -->
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action='/promosi/kirim' method='post' enctype="multipart/form-data">
            {{ csrf_field() }}
            <label>Judul Promosi : </label></br>
            <input type="text" name="judul_promosi" value="{{ old('judul_promosi') }}" required="required"></br>
            <label>Nama Departemen Promotor : </label></br> 
            <input type="text" name="penulis" value="{{ old('penulis') }}" required="required"></br>
            <label>Periode Promosi : </label></br>
            <textarea cols="80" rows="5" name="periode" required="required">{{ old('periode') }}</textarea></br>
            <p class="ket_foto"><i>
                *)Harus menggunakan nomor bila ingin di buat list.contoh : </br>
                1. Periode 1 : 10 januari 2021 -9 februari 2021 </br>
                2. Periode 2 : 10 februari 2021 - 9 maret 2021
            </i></p>
            <label>Persyaratan&Ketentuan : </label></br>
            <textarea cols="80" rows="20" name="syarat" required="required">{{ old('syarat') }}</textarea></br>
            <p class="ket_foto"><i>
                *)Harus menggunakan nomor bila ingin di buat list.contoh : </br>
                1. Berdasarkan ketersediaan Kamar </br>
                2. Diskon tidak berlaku selama peak season/high season
            </i></p>
            <label>Foto : </label></br>
            <input type="file" action="/upload" value="{{ old('foto') }}" name="foto" id="foto" required="required"></br>
            <p class="ket_foto"><i>*)Tinggi Foto menggunakan satuan Pixels</i></p></br>
            <p class="ket_foto"><i>*)Foto Maksimal berukuran 600 X 700 Pixels</i></p></br>
            <p class="ket_foto"><i>*)Foto maksimal berukuran 2048 Kb</i></p></br>
            <label>Deskripsi : </label></br>
            <textarea cols="80" rows="20" name="deskripsi" required="required">{{ old('deskripsi') }}</textarea></br>
            <label>Kontak atau Info Lebih Lanjut : </label></br>
            <textarea cols="80" rows="20" name="kontak" required="required">{{ old('kontak') }}</textarea></br>
            <button type="submit" class="button-confirm">Tambahkan</button>
        </form>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>