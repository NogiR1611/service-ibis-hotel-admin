<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="icon" href="{{ URL::asset('/img/logo-ibis.png') }}" type="image/x-icon"/>
        <title>Login Admin</title>
        <link rel="stylesheet" href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css') }}" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
    <section>
        <div class="signin-and-signup">
            <div id="bg-login"></div>
                <div id="login"> 
                    @if ($message = Session::get('berhasil'))
                    <div class="alert alert-success alert-block" id="alert-login">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        <span><strong>{{ $message }}</strong></span>
                    </div>
                    @endif
                    <b><h1>Login</h1></b>
                    <p>Silahkan Bagi Karyawan yang memiliki akun untuk isi username dan password yang sudah diberikan</p>
                    @if ($message = Session::get('gagal'))
                    <div class="alert alert-danger alert-block" id="alert-login">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        <span><strong>{{ $message }}</strong></span>
                    </div>
                    @endif
                    <form action="/login" method="POST">
                        {{ @csrf_field() }}
                        <label>Username : </label>
                        <input type="text" id="username" name="username" alt="">
                        <div id="form-border"></div>
                        <label>Password : </label>
                        <input type="password" id="password" name="password" alt="">
                        <div id="form-border"></div>
                        <button type="submit" class="button-signin-and-signup">Login</button>
                    </form>
                </div>
            </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>