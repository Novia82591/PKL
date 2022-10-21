<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('/template/frontend/images/logo.png')}}" type="image/x-icon">
    <title>Sistem Informasi Tugas Akhir</title>
    <link rel="stylesheet" href="{{asset('/template/frontend/libraries/bootstrap/css/bootstrap.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/template/frontend/styles/main.css')}}">
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <section class="gate">
        <div class="row justify-content-center">
            <div class="col-lg-5 showcase">
                <img src="{{asset('/template/frontend/images/banner-login.png')}}" class="banner">
            </div>
            <div class="col-lg-7 col-10 pb-5">
                <div class="row">
                    <div class="col-lg-6 offset-lg-2 col-12">
                        <div class="content">
                            <a href="#">
                                <img src="{{asset('/template/frontend/images/logo-umbjm.svg')}}" class="logo mb-5">
                            </a>
                            <h1 class="header-primary mb-5">
                                Silahkan Login
                            </h1>
                            <div class="form-group">
                                <form action="{{route('postlogin')}}" method="POST">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail" class="form-label">Username</label>
                                        <input autofocus type="username" name="username" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                                    </div>
                                        
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    
                                    <p class="flr">
                                        <a href="#" class="text-link">Lupa Password?</a>
                                    </p>
                                    <button type="submit" class="mt-4 btn-primary btn-lg">Masuk</button>
                                    <a href="{{url('register')}}" class="btn btn-secondary mt-3 w-100">Daftar Sebagai Mahasiswa</a>
                                </form>
                                <div class="divider"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{asset('/template/frontend/libraries/jquery/jquery-3.6.0.js')}}"></script>
    <script src="{{asset('/template/frontend/libraries/bootstrap/js/bootstrap.js')}}"></script>
</body>

</html>