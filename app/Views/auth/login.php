
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | PKLVERSE</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: radial-gradient(circle at top, #25205b, #080b19 65%);
            color: #fff;
            font-family: Arial, sans-serif;
        }

        .login-card {
            width: 100%;
            max-width: 420px;
            padding: 35px;
            border: 1px solid #393568;
            border-radius: 20px;
            background: rgba(15, 18, 42, .95);
            box-shadow: 0 0 35px rgba(113, 91, 255, .2);
        }

        .brand {
            color: #a99aff;
            font-weight: 800;
            letter-spacing: 3px;
        }

        .form-control {
            padding: 12px;
            background: #10152d;
            border: 1px solid #343957;
            color: white;
        }

        .form-control:focus {
            background: #10152d;
            color: white;
            border-color: #9580ff;
            box-shadow: 0 0 0 3px rgba(149, 128, 255, .15);
        }

        .form-control::placeholder {
            color: #9298b3;
        }

        .btn-login {
            padding: 12px;
            color: white;
            font-weight: bold;
            background: linear-gradient(90deg, #6754e8, #9875ff);
            border: none;
        }

        .btn-login:hover {
            color: white;
            opacity: .9;
        }
    </style>
</head>
<body>

<div class="login-card">
    <div class="text-center mb-4">
        <h2 class="brand">PKLVERSE</h2>
        <p class="text-secondary mb-0">Masuk ke ruang kerja digitalmu</p>
    </div>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= esc(session()->getFlashdata('error')) ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success">
            <?= esc(session()->getFlashdata('success')) ?>
        </div>
    <?php endif; ?>

    <form action="<?= site_url('proses-login') ?>" method="post">
        <?= csrf_field() ?>

        <div class="mb-3">
            <label class="form-label">Username</label>
            <input
                type="text"
                name="username"
                class="form-control"
                placeholder="Masukkan username"
                value="<?= esc(old('username') ?? '') ?>"
                required
                autocomplete="username">
        </div>

        <div class="mb-4">
            <label class="form-label">Password</label>
            <input
                type="password"
                name="password"
                class="form-control"
                placeholder="Masukkan password"
                required
                autocomplete="current-password">
        </div>

        <button type="submit" class="btn btn-login w-100">
            Masuk
        </button>
    </form>

    <p class="text-center text-secondary mt-4 mb-0 small">
        PKLVERSE &copy; <?= date('Y') ?>
    </p>
</div>

</body>
</html>
