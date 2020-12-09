<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Edit Data Event</title>
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    </head> 
    <body>
        <header>
            <a href="/"><img src="{{ asset('/img/logo-ibis.png') }}"></img></a>
        </header>
        <div class="card">
            <div class="card-title">
                <h2>Silahkan lakukan perubahan terhadap Event yang telah di pilih</h2>
            </div>
            @foreach($promosi as $p)
                <form action='/promosi/update/{{ $p->id }}' method='post' enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <label>Judul Promosi : </label></br>
                    <input type="text" name="judul_promosi" value="{{ $p->judul_promosi }}" required="required"></br>
                    <label>Nama Departemen Promotor : </label></br> 
                    <input type="text" name="penulis" value="{{ $p->penulis }}" required="required"></br>
                    <label>Periode Promosi : </label></br>
                    <textarea cols="80" rows="20" name="periode" required="required">{{ $p->periode }}</textarea></br>
                    <label>Syarat : </label></br>
                    <textarea cols="80" rows="20" name="syarat" required="required">{{ $p->syarat }}</textarea></br>
                    <label>Foto : </label></br>
                    <input type="file" action="/upload" value="{{ $p->foto }}" name="foto" id="foto" required="required"></br>
                    <p class="ket_foto"><i>*)Tinggi Foto menggunakan satuan Pixels</i></p></br>
                    <p class="ket_foto"><i>*)Foto harus menggunakan model Potret</i></p></br>
                    <label>Deskripsi : </label></br>
                    <textarea cols="80" rows="20" name="deskripsi" required="required">{{ $p->deskripsi }}</textarea></br>
                    <label>Kontak atau Info Lebih Lanjut : </label></br>
                    <textarea cols="80" rows="20" name="kontak" required="required">{{ $p->kontak }}</textarea></br>
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
</html>