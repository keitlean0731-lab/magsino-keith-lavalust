<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        nav {
            background: #0d9636;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .logo {
            color: white;
            font-size: 22px;
            font-weight: bold;
        }

        .content {
            max-width: 450px;
            width: 90%;
            margin: 50px auto;
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .content h1 {
            color: #222;
            margin-bottom: 25px;
            text-align: center;
        }

        .error-message {
            background: #f8d7da;
            color: #842029;
            padding: 12px;
            border-radius: 6px;
            border-left: 4px solid #dc3545;
            margin-bottom: 20px;
            font-size: 14px;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        label {
            font-weight: bold;
            color: #333;
            font-size: 14px;
        }

        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 12px;
            background: #f4f6f8;
            border: 1px solid #ddd;
            border-radius: 8px;
            border-left: 4px solid #0d9636;
            font-size: 14px;
            color: #333;
            outline: none;
            transition: 0.3s;
        }

        input[type="email"]:focus,
        input[type="password"]:focus,
        select:focus {
            border-color: #0d9636;
            background: #fff;
        }

        button {
            background: #0d9636;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
        }

        button:hover {
            background: #0b7a2c;
        }
    </style>
</head>

<body>

    <nav>
        <div class="logo">SHOP</div>
    </nav>

    <div class="content">
        <h1>Login</h1>

        <?php if (!empty($error)): ?>
            <div class="error-message">
                <?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?>
            </div>
        <?php endif; ?>

        <form action="<?= site_url('/login'); ?>" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="role">Login as:</label>
                <select id="role" name="role" required>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <button type="submit">Login</button>
        </form>
    </div>

</body>
</html>