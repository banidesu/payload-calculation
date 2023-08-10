<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="shortcut icon" href="{{ asset('img/logo.jpg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <style>
        @media (min-width: 768px) {
            .login {
                width: 50vh;
            }
        }
    </style>
</head>

<body class="vh-100">
    <div class="container h-100">
        <div class="d-grid justify-content-md-center align-items-center h-100">
            <div class="card login">
                <div class="card-body">
                    <h5 class="card-title mb-4">Login dulu</h5>
                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <b>Opps!</b> {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form action="{{ route('actionLogin') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" class="form-control"
                                placeholder="Masukin emailnya vin..." required>
                        </div>
                        <div class="mb-3">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" class="form-control"
                                placeholder="Masukin passwordnya vin..." required>
                        </div>
                        <button class="btn btn-dark bg-gradient">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
