<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>

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

        .nav-links {
            display: flex;
            gap: 10px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 6px;
            transition: 0.3s;
        }

        .nav-links a:hover {
            background: #0b7a2c;
        }

        .content {
            max-width: 600px;
            margin: 50px auto;
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .header-section h2 {
            color: #222;
        }

        .back-link {
            color: #0d9636;
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
            transition: 0.3s;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        .error-list {
            background: #f8d7da;
            color: #842029;
            padding: 12px 16px 12px 32px;
            border-radius: 6px;
            border-left: 4px solid #dc3545;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .error-list li {
            margin-bottom: 4px;
        }

        .error-list li:last-child {
            margin-bottom: 0;
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

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 12px;
            background: #f4f6f8;
            border: 1px solid #ddd;
            border-radius: 8px;
            border-left: 4px solid #0d9636;
            font-size: 14px;
            color: #333;
            outline: none;
            font-family: inherit;
            transition: 0.3s;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        input:focus,
        textarea:focus {
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
        <div class="nav-links">
            <a href="<?= site_url('/product/display'); ?>">Products</a>
            <a href="<?= site_url('student/profile'); ?>">Profile</a>
        </div>
    </nav>

    <div class="content">
        <div class="header-section">
            <h2>Edit Product</h2>
            <a href="<?= site_url('/product/display'); ?>" class="back-link">&larr; Back to products</a>
        </div>

        <?php if (!empty($errors)): ?>
            <ul class="error-list">
                <?php foreach ($errors as $error): ?>
                    <li><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <form action="<?= site_url('/product/edit/' . $product['id']); ?>" method="post">
            <div class="form-group">
                <label for="product_name">Product Name:</label>
                <input type="text" id="product_name" name="product_name" value="<?= htmlspecialchars($product['product_name'], ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" required><?= htmlspecialchars($product['description'], ENT_QUOTES, 'UTF-8'); ?></textarea>
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" id="price" name="price" step="0.01" value="<?= htmlspecialchars($product['price'], ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="<?= htmlspecialchars($product['quantity'], ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>

            <button type="submit">Update Product</button>
        </form>
    </div>

</body>
</html>