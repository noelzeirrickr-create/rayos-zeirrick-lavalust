<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Product Login</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;

            background: #0d0d0d;
            font-family: Arial, sans-serif;
            color: #ffffff;
        }

        .login-card {
            width: 100%;
            max-width: 400px;
            padding: 35px;

            background: #171717;
            border: 1px solid #d4af37;
            border-radius: 14px;

            box-shadow:
                0 10px 30px rgba(0, 0, 0, 0.6),
                0 0 15px rgba(212, 175, 55, 0.12);
        }

        h1 {
            margin-top: 0;
            margin-bottom: 30px;

            text-align: center;
            color: #d4af37;

            letter-spacing: 1px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 7px;

            color: #d4af37;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;

            background: #0d0d0d;
            color: #ffffff;

            border: 1px solid #555555;
            border-radius: 8px;

            outline: none;

            transition: 0.3s ease;
        }

        input::placeholder {
            color: #777777;
        }

        input:focus {
            border-color: #d4af37;

            box-shadow:
                0 0 6px rgba(212, 175, 55, 0.7),
                0 0 15px rgba(212, 175, 55, 0.25);
        }

        button {
            width: 100%;
            padding: 12px;

            border: 1px solid #d4af37;
            border-radius: 8px;

            background: #000000;
            color: #d4af37;

            font-size: 15px;
            font-weight: bold;

            cursor: pointer;

            transition: 0.3s ease;
        }

        button:hover {
            background: #d4af37;
            color: #000000;

            box-shadow:
                0 0 8px #d4af37,
                0 0 18px rgba(212, 175, 55, 0.6),
                0 0 28px rgba(212, 175, 55, 0.3);

            transform: translateY(-1px);
        }

        .error {
            margin-bottom: 18px;
            padding: 11px;

            border-radius: 8px;

            background: #2a1010;
            color: #ff7777;

            border: 1px solid #8b0000;
        }

        .store-name {
            text-align: center;
            margin-bottom: 8px;

            color: #aaaaaa;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <div class="login-card">

        <div class="store-name">
            Zei's Sari Sari Store
        </div>

        <h1>Product Login</h1>

        <?php if (!empty($error)): ?>

            <div class="error">
                <?= htmlspecialchars(
                    $error,
                    ENT_QUOTES,
                    'UTF-8'
                ) ?>
            </div>

        <?php endif; ?>

        <form method="POST" action="<?= site_url('login') ?>">

            <div class="form-group">

                <label for="username">
                    Username
                </label>

                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Enter your username"
                    required
                >

            </div>

            <div class="form-group">

                <label for="password">
                    Password
                </label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Enter your password"
                    required
                >

            </div>

            <button type="submit">
                Login
            </button>

        </form>

    </div>

</body>
</html>