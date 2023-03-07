<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Perpus | @yield('title')</title>
</head>
<style>
    .main {
        height: 100vh;
    }

    .navbar{
        background: #1a1a1a;
    }
    .sidebar {
        background: #333333;
        color: #ffac42;
    }

    .sidebar a {
        color: #ffac42;
        text-decoration: none;
        display: block;
        padding: 20px 10px;
    }

    .sidebar a:hover{
        color: #ffac42;
        background: gray;
    }
</style>
<body>

<div class="main d-flex flex-column justify-content-beetwen">
    <nav class="navbar navbar-dark navbar-expand-lg ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Perpustakaan</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </div>
      </nav>

      <div class="body-content h-100">
        <div class="row g-0 h-100">
            <div class="sidebar col-lg-2 collapse d-lg-block" id="navbarTogglerDemo02">
                    @if(Auth::user()->role_id == 1)
                    <a href="dashboard">Dashboard</a>
                    <a href="books">Buku</a>
                    <a href="">Kategori</a>
                    <a href="">Users</a>
                    <a href="">Rent Log</a>
                    <a href="logout">Log Out</a>
                    @else
                    <a href="profile">Profile</a>
                    <a href="logout">Log Out</a>
                    @endif
            </div>
            <div class="content p-5 col-lg-10">
                @yield('content')
            </div>
        </div>
      </div>
</div>

<div>
    @yield('content')
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>