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
            <div class="sidebar-container">
                <div class="sidebar-nav">
                    <nav class="navbar navbar-dark">
                        <p style="font-size: 2.5rem;">Kelompok 5</p>
                        <ul class="navbar-nav">
                            <li class="nav-item">22-025 | Kun Fadhilah</li>
                            <li class="nav-item">22-045 | Willy Chairullah F.P.</li>
                            <li class="nav-item">22-089 | Ahmad Ramadani B.</li>
                            <li class="nav-item">22-165 | Adi Prawono</li>
                            <li class="nav-item">22-194 | Moh Fais Rizqianshah</li>
                        </ul>
                    </nav>
                </div>
                <div class="sidebar-logout">
                    <img class="img-logo" src="{{url('images/logout.png')}}" alt="logout-icon">
                    <a class="logout" href="/logout"><b>Log Out</b></a>
                </div>
            </div>
        </sidebar>
        <content>
            <div class="header-container" style="padding: 0 2rem; justify-content: flex-end;">
                <img class="img-account" src="{{url('images/user.png')}}"/>
                <span>User</span>
            </div>
            <div class="content-container">
                <div class="content-home">
                    <img class="img-home" src="{{url('images/home.png')}}" alt="home">
                    <span>Selamat Datang</span>
                    <span class="text-user"><b>User</b></span>
                </div>
            </div>
        </content>
    </section>
</body>
</html>