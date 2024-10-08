<?php
include 'db.php'; // เชื่อมต่อฐานข้อมูล

// เชื่อมต่อฐานข้อมูล
$conn = new mysqli('localhost', 'root', '', 'user_db');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // ค้นหาผู้ใช้จากฐานข้อมูล
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // ตรวจสอบรหัสผ่าน
        if (password_verify($password, $user['password'])) {
            // ตั้ง session หรือ cookie ให้ผู้ใช้ล็อกอินสำเร็จ
            session_start();
            $_SESSION['username'] = $user['username'];
            header('Location: profile.php'); // ไปยังหน้าโปรไฟล์
        } else {
            echo "รหัสผ่านไม่ถูกต้อง!";
        }
    } else {
        echo "ไม่พบผู้ใช้งาน!";
    }
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ล็อกอิน</title>
    <style>
        /* ตั้งค่าทั่วไปสำหรับ body */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* สไตล์สำหรับฟอร์ม */
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        /* การจัดวาง label */
        form label {
            display: block;
            margin: 15px 0 5px;
            text-align: left;
            font-weight: bold;
        }

        /* สไตล์สำหรับ input */
        form input[type="email"],
        form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        /* สไตล์สำหรับปุ่ม submit */
        form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        form input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* สไตล์สำหรับลิงก์สมัครสมาชิก */
        a {
            text-decoration: none;
            color: #4CAF50;
            margin-top: 10px;
            display: inline-block;
        }

        a:hover {
            text-decoration: underline;
        }

        /* สไตล์เพิ่มเติมสำหรับ input เมื่อโฟกัส */
        form input:focus {
            outline: none;
            border-color: #4CAF50;
        }
    </style>
</head>
<body>

    <!-- ฟอร์มล็อกอิน -->
    <form method="POST" action="">
        <label for="email">อีเมล:</label>
        <input type="email" name="email" required><br>
        
        <label for="password">รหัสผ่าน:</label>
        <input type="password" name="password" required><br>
        
        <!-- ลิงก์สมัครสมาชิก -->
        <a href="register.php">สมัครสมาชิก</a><br>
        
        <input type="submit" value="ล็อกอิน">
    </form>

</body>
</html>
