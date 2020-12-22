<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ URL::asset('/img/logo-ibis.png') }}" type="image/x-icon"/>
    <title>Form input data</title>
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
            <h2>Silahkan Isi Tempat Wisata yang ingin ditampilkan pada website sisi klien</h2>
            <p><i>
                Semua Data Tempat Wisata akan di tampilkan pada Publik jadi carikan
                Rekomendasi Tempat Wisata yang terbaik yah :)
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

        <form action='/tempat-wisata/kirim' method='post' enctype="multipart/form-data">
            {{ csrf_field() }}
            <label>Nama tempat wisata : </label></br>
            <input type="text" name="nama_tempat_wisata" required="required" value="{{ old('nama_tempat_wisata') }}"></br>
            <label>Lokasi : </label></br>
            <input type="text" name="lokasi" required="required" value="{{ old('lokasi') }}"></br>
            <label>Harga : </label></br>
            <input type="text" name="harga" required="required" value="{{ old('harga') }}"></br>
            <label>Link Lokasi pada Google Map : </label><br>
            <input type="text" name="urlmap" required="required" value="{{ old('urlmap') }}"><br>
            <label>Foto : </label></br>
            <input type="file" action="/upload" name="urlimage" required="required" value="{{ old('urlimage') }}" id="image"></br>
            <p class="ket_foto"><i>*)Tinggi Foto menggunakan satuan Pixels</i></p></br>
            <p class="ket_foto"><i>*)Foto Maksimal berukuran 600 X 700 Pixels</i></p></br>
            <p class="ket_foto"><i>*)Foto maksimal berukuran 2048 Kb</i></p></br>
            <label>Deskripsi : </label></br>
            <textarea cols="80" rows="20" name="deskripsi" id="deskripsi">{{ old('deskripsi') }}</textarea></br>
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
        let deskripsi = document.getElementById("deskripsi").innerHTML;
        let enter = deskripsi.replace(\r\n,<br/>);
        document.getElementById("deskripsi").innerHTML = enter;
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>