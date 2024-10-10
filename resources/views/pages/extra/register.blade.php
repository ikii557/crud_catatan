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
            <h4 class="text-center mb-4">Sign up for an account</h4>
            <form action="index.html" method="POST">
                <div class="form-group mb-3">
                    <label for="username"><strong>Username</strong></label>
                    <input type="text" id="username" class="form-control" placeholder="Enter your username">
                </div>
                <div class="form-group mb-3">
                    <label for="email"><strong>Email</strong></label>
                    <input type="email" id="email" class="form-control" placeholder="hello@example.com">
                </div>
                <div class="form-group mb-3">
                    <label for="password"><strong>Password</strong></label>
                    <input type="password" id="password" class="form-control" placeholder="Enter your password">
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary btn-block w-100">Sign me up</button>
                </div>
            </form>
            <div class="new-account mt-3 text-center">
                <p>Sudah Punya Akun Silahkan? <a class="text-primary" href="/login">Login</a></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
