<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>

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
            <h2>Add Product</h2>
            <a href="<?= site_url('/product/display'); ?>" class="back-link">&larr; Back to products</a>
        </div>

        <form action="<?= site_url('/product/create'); ?>" method="post">
            <div class="form-group">
                <label for="product_name">Product Name:</label>
                <input type="text" class="form-control" id="product_name" name="product_name" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" id="price" name="price" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" class="form-control" id="quantity" name="quantity" required>
            </div>

            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>

</body>
</html>