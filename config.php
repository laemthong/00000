<?php
$servername = "localhost";  // โฮสต์ฐานข้อมูล
$username = "root";  // ชื่อผู้ใช้ฐานข้อมูล
$password = "";  // รหัสผ่านฐานข้อมูล
$dbname = "bph_person";  // ชื่อฐานข้อมูล

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// เพิ่มไลน์นี้เพื่อให้การเชื่อมต่อมีการตั้งค่า charset ที่เหมาะสมกับภาษาไทย
$conn->set_charset("utf8");

// คุณสามารถใช้ตัวแปร $conn นี้เพื่อทำการคิวรีข้อมูลฐานข้อมูลต่อไป
?>
