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

        /* สไตล์สำหรับข้อความต้อนรับ About Me */
.container {
    max-width: 800px;
    margin: 50px auto;
    background-color: #ffffff;
    padding: 30px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    text-align: left;
    line-height: 1.8em;
}

.container h1 {
    font-size: 2.2em;
    color: #00CC33;
    margin-bottom: 20px;
    text-align: center;
}

.container p {
    font-size: 1.1em;
    color: #333;
    margin-bottom: 15px;
    text-align: justify;
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
<!-- เนื้อหา -->
<div class="container">
    <h1>เกี่ยวกับเรา</h1>
    <p>
        สวัสดีครับ ฉันคือผู้ที่หลงใหลในอุตสาหกรรมการบริการ โดยเฉพาะในธุรกิจโรงแรม 
        ด้วยประสบการณ์ที่สั่งสมจากการทำงานในหลากหลายตำแหน่งในโรงแรมชั้นนำ 
        ตั้งแต่การให้บริการลูกค้า การจัดการกิจกรรมขนาดใหญ่ ไปจนถึงการดูแลการดำเนินงานทั่วไป 
        ทำให้ฉันเข้าใจความสำคัญของการสร้างประสบการณ์ที่ยอดเยี่ยมให้กับแขกทุกคน
    </p>
    <p>
        ในการทำงานด้านโรงแรม ฉันได้เรียนรู้ว่า การใส่ใจในรายละเอียดเป็นสิ่งที่ทำให้แตกต่าง 
        ไม่ว่าจะเป็นการต้อนรับที่อบอุ่น รอยยิ้มที่จริงใจ หรือการดูแลความสะดวกสบายของแขกทุกคน 
        ทั้งหมดนี้ล้วนเป็นสิ่งที่ทำให้แขกรู้สึกเหมือนกับอยู่บ้าน ฉันเชื่อมั่นว่าการให้บริการที่ดีและเอาใจใส่ 
        คือตัวชี้วัดความสำเร็จของโรงแรม
    </p>
    <p>
        นอกจากนี้ ฉันยังได้มีโอกาสเรียนรู้และพัฒนาทักษะการจัดการทีมงาน การบริหารทรัพยากร และการทำงานร่วมกับบุคคลหลายกลุ่ม 
        ทั้งจากการจัดกิจกรรมพิเศษ งานเลี้ยง หรือการประชุมขนาดใหญ่ สิ่งเหล่านี้ช่วยเสริมสร้างความสามารถในการสื่อสาร 
        และทำงานร่วมกับคนในองค์กรที่หลากหลาย ทำให้ฉันสามารถแก้ไขปัญหาและปรับตัวได้ดีในสถานการณ์ที่ท้าทาย
    </p>
    <p>
        เป้าหมายของฉันคือการสร้างสรรค์ประสบการณ์การเข้าพักที่ไม่เหมือนใครและน่าประทับใจ 
        โดยใช้ความคิดสร้างสรรค์ในการพัฒนาบริการและสภาพแวดล้อมที่ยอดเยี่ยมให้กับแขก 
        ฉันตั้งใจที่จะพัฒนาและยกระดับมาตรฐานของโรงแรมให้เป็นที่ยอมรับ ทั้งในด้านการบริการที่ยอดเยี่ยม 
        และการสร้างความพึงพอใจให้กับแขกทุกครั้งที่มาเยือน
    </p>
</div>



    <!-- Footer -->
    <div class="footer">
        <p>© 2024 Hotel. All rights reserved.</p>
    </div>

</body>
</html>
