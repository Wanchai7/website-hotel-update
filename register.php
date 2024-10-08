<?php
include 'db.php'; // เชื่อมต่อฐานข้อมูล

// เชื่อมต่อฐานข้อมูล
$conn = new mysqli('localhost', 'root', '', 'user_db');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // เข้ารหัสรหัสผ่าน

    // ตรวจสอบว่าผู้ใช้งานซ้ำหรือไม่
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "อีเมลนี้ถูกใช้งานแล้ว!";
    } else {
        // บันทึกข้อมูลผู้ใช้ใหม่
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            echo "สมัครสมาชิกสำเร็จ!";
        } else {
            echo "เกิดข้อผิดพลาด: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
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
        form input[type="text"],
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

        /* สไตล์เพิ่มเติมสำหรับข้อความ */
        form input:focus {
            outline: none;
            border-color: #4CAF50;
        }
    </style>
</head>
<body>

    <!-- ฟอร์มสมัครสมาชิก -->
    <form method="POST" action="">
        <label for="username">ชื่อผู้ใช้:</label>
        <input type="text" name="username" required><br>
        
        <label for="email">อีเมล:</label>
        <input type="email" name="email" required><br>
        
        <label for="password">รหัสผ่าน:</label>
        <input type="password" name="password" required><br>
        
        <input type="submit" value="สมัครสมาชิก">
    </form>

</body>
</html>
