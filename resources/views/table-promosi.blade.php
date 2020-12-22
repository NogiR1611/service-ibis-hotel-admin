<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css') }}" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="icon" href="{{ URL::asset('/img/logo-ibis.png') }}" type="image/x-icon"/>
        <title>Tabel Data Promosi</title>
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
        <section>
            <div class="card-title">
                <h2>Data Promosi yang telah di input dan ditampilkan pada Situs untuk Publik</h2>
            </div>
            <!-- menampilkan pesan berhasil di update -->
            @if ($message = Session::get('sukses'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{{ $message }}</strong>
            </div>
            @endif
            <!-- menampilkan pesan berhasil di tambahkan-->
            @if ($message = Session::get('berhasil'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <table class="table_data">
                <thead>
                    <tr>
                        <th scope="col" class="column-primary" data-header="Data"></th>
                        <th scope="col">Judul Promosi</th>
                        <th scope="col">Departemen</th>
                        <th scope="col">Periode</th>
                        <th scope="col">Syarat</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Info&Kontak</th>
                        <th scope="col">Diperbarui</th>
                        <th scope="col" class="column-primary">Opsi</th>
                    </tr>
                </thead>
                @foreach($promosi as $p)
                <tbody>
                    <tr> 
                        <td data-header="Id">{{ $p -> id }}</td>
                        <td data-header="Judul Promosi">{{ $p -> judul_promosi }}</td>
                        <td data-header="Penulis">{{ $p -> penulis }}</td>
                        <td data-header="periode">{{ $p -> periode }}</td>
                        <td data-header="Syarat">{{ $p -> syarat }}</td>
                        <td data-header="Foto">{{ $p -> foto }}</td>
                        <td data-header="Deskripsi">{{ $p -> deskripsi }}</td>
                        <td data-header="Info&Kontak">{{ $p -> kontak }}</td>
                        <td data-header="Diperbarui">{{ $p -> updatedAt }}</td>
                        <th scope="row">
                            <a class="btn btn-primary" href='/promosi/edit/{{ $p->id }}' role="button">Edit</a>
                            <a class="btn btn-success" href='/promosi/delete/{{ $p->id }}' role="button">Hapus</a>
                            <a class="btn btn-info" href='http://localhost:3000/promosi/{{ $p->id }}'>Preview</a>
                        </th>
                    </tr>
                </tbody>
                @endforeach
            </table>
            <a class="btn btn-primary" href="/promosi/tambah" role="button">Tambah Data</a>
            {{ $promosi->links('vendor.pagination.bootstrap-4') }}
        </section>
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
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
        let time = new Date();
        let years = time.getFullYear();
        let str = document.getElementById("str").innerHTML;
        let munculin = str.substr(0,10);
        
        document.getElementById("munculin").innerHTML = munculin + "...";
        document.getElementById("years").innerHTML = years;
    </script>
    </body>
</html>