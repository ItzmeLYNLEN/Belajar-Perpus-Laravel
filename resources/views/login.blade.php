<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpus | Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<style>
    .main {
        height: 100vh;
        box-sizing: border-box;
    }

    .login-box {
        padding: 20px;
        width: 450px;
    }
</style>

<body>

    <div class="main d-flex flex-column justify-content-center align-items-center">
        @if (session('status'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
        @endif
        <div class="login-box col-lg-5">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="fw-600 mb-4 text-center">Login (Lo gw Doain)</h5>
                    <form action="" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control form-control-lg" id="username" name="username" placeholder="Zee punya daoa (contoh)" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control form-control-lg" id="password" name="password" required>
                        </div>
                        <div>
                            <button class="btn btn-primary btn-lg form-control">Login</button>
                        </div>
                        <p class="text-center mt-3">Belum punya akun? <a href="register">Sign UP</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>