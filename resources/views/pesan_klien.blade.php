<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <title>Pesan Klien</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('./css/style.css') }}">
        <link rel="icon" href="{{ URL::asset('/img/logo-ibis.png') }}" type="image/x-icon"/>
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
            <div class="title-inbox">
                <h3>Kotak Masuk</h3>
            </div>
            @foreach($pesan_klien as $pk)
            <div class="slide-inbox-client">
                <div class="descript-option">
                    <div class="descript-sender">
                        <p><b>Nama Pengirim :</b><br/>{{ $pk -> nama_kontak }}</p>
                        <p><b>Email :</b><br/> {{ $pk -> email}}</p>
                        <p><b>Tanggal :</b></br> {{ $pk -> createdAt}}</p>
                    </div> 
                    <div class="option">
                        <a class="btn btn-success" href='/inbox/delete/{{ $pk->id }}' role="button">
                            <img src="{{ asset('./img/trash.png') }}" class="trash-icon" alt="">
                        <span>Hapus</span>
                        </a>
                    </div>
                </div><br/>
                <p><b>Pesan : </b></p>
                <p>{{ $pk -> pesan }}</p>
            </div>
            @endforeach
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
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </body>
</html>