<?php
session_start();
session_destroy(); // ทำลาย session ทั้งหมด
header('Location: login.php'); // ส่งกลับไปที่หน้าล็อกอิน
?>
