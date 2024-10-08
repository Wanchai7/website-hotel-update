<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // ถ้าไม่ได้ล็อกอินจะส่งไปที่หน้าล็อกอิน
    exit();
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ยินดีต้อนรับ</title>
    <style>
        /* ตั้งค่าทั่วไปสำหรับ body */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* สไตล์สำหรับ navbar */
        .navbar {
            background-color: #4CAF50;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h1 {
            color: white;
            margin: 0;
            padding-left: 20px;
            font-size: 1.8em;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
        }

        .navbar a:hover {
            background-color: #45a049;
        }

        /* สไตล์สำหรับ container */
        .container {
            flex: 1;
            padding: 20px;
            text-align: center;
        }

        /* สไตล์สำหรับ footer */
        .footer {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
            margin-top: auto;
        }

        /* สไตล์สำหรับข้อความต้อนรับ */
        h1 {
            font-size: 2.5em;
            color: #333;
        }

        /* สไตล์สำหรับลิงก์ออกจากระบบ */
        .container a {
            text-decoration: none;
            color: white;
            background-color: #4CAF50;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1em;
            margin-top: 20px;
        }

        .container a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-left">
            <h1>Hotel</h1>
            <a href="index.php">หน้าแรก</a>
            <a href="about.php">เกี่ยวกับเรา</a>
            <a href="contact.php">ติดต่อเรา</a>
        </div>
        <div class="navbar-right">
            <a href="profile.php"><?php echo $_SESSION['username']; ?></a>
            <a href="logout.php">ออกจากระบบ</a>
        </div>
    </div>

    <!-- เนื้อหา -->
    <div class="container">
        <h1>ยินดีต้อนรับ, <?php echo $_SESSION['username']; ?>!</h1>
        <a href="logout.php">ออกจากระบบ</a>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>© 2024 Hotel. All rights reserved.</p>
    </div>

</body>
</html>
