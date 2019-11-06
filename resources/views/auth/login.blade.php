<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="auth-form">
        <div class="form">
            <img src="assets/img/logo.png">
            <form action="{{ route('checkLogin') }}" method="post">
            {{csrf_field()}}
                <label>Username</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukan username..." name="username">
                </div>
    
                <label>Password</label>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Masukkan password..." name="password">
                </div>
    
                <button type="submit" name="loginSubmit" class="btn btn-submit text-uppercase fullwidth">Masuk</button>
                <div class="devide-line mt-4 mb-3">
                    <hr> atau <hr>
                </div>
                <a class="btn btn-register text-uppercase fullwidth" href="/register">Daftar Akun</a>
            </form>
        </div>
        <div class="form-bg"></div>
    </div>
</body>
</html>