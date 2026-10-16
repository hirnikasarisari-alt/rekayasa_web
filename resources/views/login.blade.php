<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Rekayasa Web</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #ffe4f0, #e3f2ff);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            width: 90%;
            max-width: 420px;
            background: white;
            padding: 40px;
            border-radius: 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
        }

        .icon {
            text-align: center;
            font-size: 50px;
            margin-bottom: 10px;
        }

        h1 {
            text-align: center;
            color: #d85b91;
            margin-bottom: 8px;
        }

        .subtitle {
            text-align: center;
            color: #888;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 13px;
            border: 1px solid #ddd;
            border-radius: 12px;
            outline: none;
        }

        input:focus {
            border-color: #d85b91;
        }

        button {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 12px;
            background: #d85b91;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background: #c84d83;
        }

        .register {
            text-align: center;
            margin-top: 20px;
            color: #777;
        }

        .register a {
            color: #d85b91;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="login-box">

        <div class="icon">🔐</div>

        <h1>Login</h1>

        <div class="form-group">
            <label>Username</label>
            <input type="text" placeholder="Masukkan username">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" placeholder="Masukkan password">
        </div>

        <button type="button">Masuk</button>

        <p class="register">
            Belum punya akun?
            <a href="#">Registrasi</a>
        </p>

    </div>

</body>
</html>