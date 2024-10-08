<?php
session_start(); // เริ่มต้น session
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าแรก - โรงแรมของเรา</title>
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
            background-color: #00CC33;
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

        .container img {
            width: 100%;
            max-width: 700px;
            border-radius: 10px;
            margin-bottom: 20px;
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

        /* สไตล์สำหรับลิงก์ในเนื้อหา */
        .container a {
            color: #4CAF50;
            text-decoration: none;
            font-size: 1.2em;
            margin: 10px;
            display: inline-block;
        }

        .container a:hover {
            text-decoration: underline;
        }

        /* สไตล์สำหรับรูปภาพใน navbar */
        .navbar img {
            height: 50px;
            width: auto;
            margin-right: 10px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-left">
            <img src="./image/hotel9.png" alt="Hotel Logo"> <!-- โลโก้โรงแรม -->
            <a href="index.php">หน้าแรก</a>
            <a href="about.php">เกี่ยวกับเรา</a>
            <a href="contact.php">ติดต่อเรา</a>
        </div>
        <div class="navbar-right">
            <?php if (isset($_SESSION['username'])): ?>
                <a href="profile.php"><?php echo $_SESSION['username']; ?></a>
                <a href="logout.php">ออกจากระบบ</a>
            <?php else: ?>
                <a href="login.php">เข้าสู่ระบบ</a>
                <a href="register.php">สมัครสมาชิก</a>
            <?php endif; ?>
        </div>
    </div>

    <!-- เนื้อหา -->
    <div class="container">
        <img src="hotel_room.jpg" alt="ห้องพักโรงแรม"> <!-- รูปห้องพัก -->
        <?php
        if (isset($_SESSION['username'])) {
            echo "<h1>ยินดีต้อนรับ, " . $_SESSION['username'] . "!</h1>";
            echo "<a href='profile.php'>ไปที่หน้าโปรไฟล์</a>";
        } else {
            echo "<h1>ยินดีต้อนรับสู่เว็บไซต์ของเรา</h1>";
            echo "<a href='login.php'>เข้าสู่ระบบ</a>";
            echo "<a href='register.php'>สมัครสมาชิก</a>";
        }
        ?>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>© 2024 Hotel. All rights reserved.</p>
    </div>

</body>
</html>
