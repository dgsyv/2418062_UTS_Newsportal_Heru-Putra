<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Portal News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            background: #f5f5f5;
        }
        .login-card {
            max-width: 400px;
            margin: 80px auto;
            padding: 30px;
            background: #fff;
            border: 1px solid #ddd;
        }
        .btn-red {
            background: #055cff;
            color: #fff;
            font-weight: bold;
        }
        .btn-red:hover {
            background: #055cff;
            color: #fff;
        }
        .eye-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="login-card text-center">

        <h3 class="mb-4"><b>Masuk Portal News</b></h3>

        {{-- ERROR --}}
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        {{-- FORM --}}
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3 text-start">
                <input type="email" name="email" class="form-control" placeholder="Email / Username" required>
            </div>

            <div class="mb-3 text-start position-relative">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>

                <span class="eye-icon" onclick="togglePassword()">
                    <i id="eyeIcon" class="fa fa-eye"></i>
                </span>
            </div>

            <div class="form-check text-start mb-3">
                <input class="form-check-input" type="checkbox" name="remember">
                <label class="form-check-label">Tetap masuk</label>
            </div>

            <button class="btn btn-red w-100 mb-3">
                Masuk
            </button>

        </form>

        <a href="{{ route('password.request') }}">Lupa kata sandi?</a>

    </div>

</div>

<script>
function togglePassword() {
    const password = document.getElementById('password');
    const icon = document.getElementById('eyeIcon');

    if (password.type === "password") {
        password.type = "text";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    } else {
        password.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    }
}
</script>

</body>
</html>
