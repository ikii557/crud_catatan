<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .auth-form {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h4 {
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="auth-form">
            <h4 class="text-center mb-4">Log In Untuk Masuk</h4>
            <form action="/store/login" method="post">
                <div class="form-group">
                    <label><strong>Email</strong></label>
                    <input type="email" class="form-control" value="hello@example.com">
                    @error('email')
                            <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label><strong>Password</strong></label>
                    <input type="password" class="form-control" value="Password">
                    @error('password')
                            <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-row d-flex justify-content-between mt-4 mb-2">
                    <div class="form-group">
                        <div class="form-check ml-2">
                            <input class="form-check-input" type="checkbox" id="basic_checkbox_1">
                            <label class="form-check-label" for="basic_checkbox_1">Remember me</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <a href="page-forgot-password.html">Lupa Password?</a>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block">Sign me in</button>
                </div>
            </form>
            <div class="new-account mt-3">
                <p>Belum Punya Akun Silahkan? <a class="text-primary" href="/register">Register</a></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
