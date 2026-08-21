<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
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
            background: #0d9636;
        }

        .content {
            max-width: 900px;
            margin: 50px auto;
            background: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        }

        .content h1 {
            color: #222;
            margin-bottom: 25px;
        }

        .profile-info {
            display: grid;
            gap: 15px;
        }

        .profile-item {
            padding: 15px;
            background: #f4f6f8;
            border-radius: 8px;
            border-left: 4px solid #0d9636;
        }

        .profile-item strong {
            color: #333;
            display: inline-block;
            width: 120px;
        }

        .profile-item span {
            color: #666;
        }
    </style>
</head>

<body>

    <nav>
        <div class="logo">Student Portal</div>

        <div class="nav-links">
            <a href="<?=site_url('student');?>">Home</a>
            <a href="<?=site_url('student/profile');?>">Profile</a>
        </div>
    </nav>

    <div class="content">
        <h1>Student Profile</h1>

        <div class="profile-info">

            <div class="profile-item">
                <strong>Student ID:</strong>
                <span><?php echo $student_id ?></span>
            </div>

            <div class="profile-item">
                <strong>Name:</strong>
                <span><?php echo $name ?></span>
            </div>

            <div class="profile-item">
                <strong>Course:</strong>
                <span><?php echo $course ?></span>
            </div>

            <div class="profile-item">
                <strong>Year:</strong>
                <span><?php echo $year ?></span>
            </div>

            <div class="profile-item">
                <strong>Section:</strong>
                <span><?php echo $section ?></span>
            </div>

            <div class="profile-item">
                <strong>Email:</strong>
                <span><?php echo $email ?></span>
            </div>

        </div>
    </div>

</body>
</html>
