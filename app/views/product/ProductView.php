<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product View</title>

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
            align-items: center;
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
            max-width: 1000px;
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

        .header-section h1 {
            color: #222;
            font-size: 24px;
        }

        .user-welcome {
            color: #555;
            font-size: 14px;
            font-weight: normal;
            margin-top: 4px;
        }

        .btn-add {
            background: #0d9636;
            color: white;
            padding: 10px 18px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            font-size: 14px;
            transition: 0.3s;
        }

        .btn-add:hover {
            background: #0b7a2c;
        }

        /* Table Styling */
        .table-responsive {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            padding: 14px 16px;
            text-align: left;
        }

        th {
            background: #f4f6f8;
            color: #333;
            font-size: 14px;
            border-bottom: 2px solid #ddd;
        }

        tr {
            border-bottom: 1px solid #eee;
            transition: 0.2s;
        }

        tr:hover {
            background: #fafafa;
        }

        td {
            color: #555;
            font-size: 14px;
        }

        /* Action Buttons */
        .action-links {
            display: flex;
            gap: 8px;
        }

        .btn-edit {
            color: #0d9636;
            text-decoration: none;
            font-weight: bold;
            padding: 4px 8px;
            border-radius: 4px;
            background: #eef8f1;
            transition: 0.3s;
        }

        .btn-edit:hover {
            background: #0d9636;
            color: white;
        }

        .btn-delete {
            color: #dc3545;
            text-decoration: none;
            font-weight: bold;
            padding: 4px 8px;
            border-radius: 4px;
            background: #fdf2f2;
            transition: 0.3s;
        }

        .btn-delete:hover {
            background: #dc3545;
            color: white;
        }

        /* Notification Toast */
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
            min-width: 280px;
            padding: 14px 18px;
            color: #fff;
            background: #0d9636;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .notification button {
            color: inherit;
            background: transparent;
            border: 0;
            cursor: pointer;
            font-size: 18px;
            line-height: 1;
            margin-left: 12px;
        }
    </style>
</head>

<body>

    <nav>
        <div class="logo">SHOP</div>
        <div class="nav-links">
            <a href="<?= site_url('/logout'); ?>">Logout</a>
        </div>
    </nav>

    <?php if (!empty($notification)): ?>
        <div class="notification" role="status" id="notification">
            <span><?= htmlspecialchars($notification, ENT_QUOTES, 'UTF-8'); ?></span>
            <button type="button" onclick="document.getElementById('notification').remove();" aria-label="Close notification">&times;</button>
        </div>
    <?php endif; ?>

    <div class="content">
        <div class="header-section">
            <div>
                <h1>Products</h1>
                <div class="user-welcome">Logged in as: <strong><?php echo $name; ?></strong></div>
            </div>

            <?php if ($user_role === 'admin'): ?>
                <a href="<?= site_url('/product/create'); ?>" class="btn-add">+ Add Product</a>
            <?php endif; ?>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Created At</th>
                        <?php if ($user_role === 'admin'): ?>
                            <th>Actions</th>
                        <?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $product): ?>
                        <tr>
                            <td><strong><?php echo $product['id']; ?></strong></td>
                            <td><?php echo $product['product_name']; ?></td>
                            <td><?php echo $product['description']; ?></td>
                            <td>₱<?php echo number_format($product['price'], 2); ?></td>
                            <td><?php echo $product['created_at']; ?></td>
                            <?php if ($user_role === 'admin'): ?>
                                <td>
                                    <div class="action-links">
                                        <a href="<?= site_url('/product/edit/' . $product['id']); ?>" class="btn-edit">Edit</a>
                                        <a href="<?= site_url('/product/delete/' . $product['id']); ?>" class="btn-delete" onclick="return confirm('Delete this product?');">Delete</a>
                                    </div>
                                </td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php if (!empty($notification)): ?>
        <script>
            window.setTimeout(function () {
                var notification = document.getElementById('notification');
                if (notification) {
                    notification.remove();
                }
            }, 4000);
        </script>
    <?php endif; ?>

</body>
</html>