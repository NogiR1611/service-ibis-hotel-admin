<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css') }}" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>Edit Data Wisata</title>
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
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
                <h2>Silahkan lakukan perubahan terhadap Tempat Wisata yang telah di pilih</h2>
            </div> 
            @foreach($tempat_wisata as $tw)
                <form action='/tempat-wisata/update/{{ $tw -> id }}' method='post' enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <label>Nama Tempat Wisata : </label></br>
                    <input type="text" name="nama_tempat_wisata" required="required" value="{{ $tw->nama_tempat_wisata }}"></br>
                    <label>Lokasi : </label></br>
                    <input type="text" name="lokasi" required="required" value="{{ $tw->lokasi }}"></br>
                    <label>Harga : </label></br>
                    <input type="text" name="harga" required="required" value="{{ $tw->harga }}"></br>
                    <label>Link Lokasi pada Google Map : </label><br>
                    <input type="text" name="urlmap" required="required" value="{{ $tw->urlmap }}"><br>
                    <label>Foto : </label></br>
                    <input type="file" action="/upload" name="urlimage" required="required" value="{{ $tw->urlimage }}" id="image"></br>
                    <p class="ket_foto"><i>*)Tinggi Foto menggunakan satuan Pixels</i></p></br>
                    <p class="ket_foto"><i>*)Foto harus menggunakan model Potrait</i></p></br>
                    <p class="ket_foto"><i>*)File maksimal berukuran 2048 Kb</i></p>
                    <label>Deskripsi : </label></br>
                    <textarea cols="80" rows="20" name="deskripsi" id="deskripsi">{{ $tw->deskripsi }}</textarea></br>
                    <button type="submit" class="button-confirm">Update</button>
                </form>
            @endforeach
        </div>
    </body>
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
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>