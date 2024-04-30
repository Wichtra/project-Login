<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="{{url('https://fonts.googleapis.com')}}">
    <link rel="preconnect" href="{{url('https://fonts.gstatic.com')}}" crossorigin>
    <link href="{{url('https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap')}}" rel="stylesheet">
    <link href="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{url('CSS/user.css')}}">
    <title>Homepage</title>
</head>
<body>
    <section id="main-grid">
        <sidebar>
            @include('sidebar_temp')
        </sidebar>
        <content>
            @include('header_temp')
            <div class="content-container">
                <div class="content-home">
                    <img class="img-home" src="{{url('images/home.png')}}" alt="home">
                    <span>Selamat Datang</span>
                    <span class="text-user"><b>{{ $akun -> username }}</b></span>
                </div>
            </div>
        </content>
    </section>
</body>
</html>