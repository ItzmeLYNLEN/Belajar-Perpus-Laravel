<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpus | Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<style>
    .main {
        height: 100vh;
        box-sizing: border-box;
    }

    .register-box {
        padding: 20px;
        width: 450px;
    }
</style>

<body>

    <div class="main d-flex justify-content-center align-items-center">
        <div class="register-box col-lg-5">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="fw-600 mb-4 text-center">Register</h5>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                    @endif
                    <form action="" method="post">
                        @csrf
                        <div class="mb-2">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control form-control-lg" id="username" name="username" placeholder="Zee punya daoa (contoh)">
                        </div>
                        <div class="mb-2">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control form-control-lg" id="password" name="password">
                        </div>
                        <div class="mb-2">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control form-control-lg" id="phone" name="phone">
                        </div>
                        <div class="mb-2">
                            <label for="address" class="form-label">Address</label>
                            <textarea name="address" id="address" class="form-control" rows="2" required></textarea>
                        </div>
                        <div>
                            <button class="btn btn-primary btn-lg form-control">Sign Up</button>
                        </div>
                        <p class="text-center mt-3">Sudah punya akun? <a href="login">Log In</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>