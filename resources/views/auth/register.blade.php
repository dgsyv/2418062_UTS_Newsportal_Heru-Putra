<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar - Portal News</title>

```
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
    body {
        background: #f3f3f3;
    }
    .card-register {
        max-width: 500px;
        margin: 60px auto;
        padding: 30px;
        background: #fff;
        border: 1px solid #ddd;
    }
    .btn-red {
        background: #055cff;
        color: white;
        font-weight: bold;
    }
    .btn-red:hover {
        background: #2b54a2;
    }
    .text-red {
        color: black;
    }
    .eye-icon {
        position: absolute;
        right: 15px;
        top: 38px;
        cursor: pointer;
    }
</style>
```

</head>

<body>

<div class="container">

```
<div class="card-register">

    <h3 class="text-center mb-4"><b>Daftar Portal News</b></h3>

    @if(false)
    <div class="text-center mb-3">
        <button class="btn btn-light border">
            🔴 Login dengan Google
        </button>
    </div>
    @endif

    {{-- ERROR --}}
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
                <div>{{ $err }}</div>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email" required>
        </div>

        <div class="row">

            <!-- PASSWORD -->
            <div class="col-md-6 mb-3 position-relative">
                <label>Kata sandi</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>

                <span class="eye-icon" onclick="togglePassword('password','eye1')">
                    <i id="eye1" class="fa fa-eye"></i>
                </span>
            </div>

            <!-- KONFIRM PASSWORD -->
            <div class="col-md-6 mb-3 position-relative">
                <label>Ulangi kata sandi</label>
                <input type="password" name="password_confirmation" id="password2" class="form-control" placeholder="Password" required>

                <span class="eye-icon" onclick="togglePassword('password2','eye2')">
                    <i id="eye2" class="fa fa-eye"></i>
                </span>
            </div>

        </div>

        <div class="mb-3">
            <label>Nama lengkap</label>
            <input type="text" name="name" class="form-control" placeholder="Nama lengkap" required>
        </div>

        <div class="form-check mb-2">
            <input class="form-check-input" type="checkbox" required>
            <label class="form-check-label">
                Saya menerima <span class="text-red">Ketentuan Penggunaan</span>
            </label>
        </div>

        <button class="btn btn-red w-100 mb-3">
            Daftar
        </button>

    </form>

    <div class="text-center">
        <a href="{{ route('password.request') }}">Lupa kata sandi?</a>
    </div>

    <div class="text-center mt-3">
        Sudah punya akun?
        <a href="{{ route('login') }}" class="text-red">Masuk</a>
    </div>

</div>
```

</div>

<script>
function togglePassword(inputId, iconId) {
    const input = document.getElementById(inputId);
    const icon = document.getElementById(iconId);

    if (input.type === "password") {
        input.type = "text";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    } else {
        input.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    }
}
</script>

</body>
</html>
