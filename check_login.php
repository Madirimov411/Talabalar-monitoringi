<?php
// Bazaga ulanish uchun connection.php faylini qo'shish
require_once 'db.config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Foydalanuvchidan kiritilgan ma'lumotlarni olish
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // SQL injectionga qarshi himoya uchun ma'lumotlarni tozalash
    $user = htmlspecialchars($user);
    $pass = htmlspecialchars($pass);

    try {
        // SQL so'rovni tayyorlash
        $query = "SELECT id, role FROM student WHERE login=:username AND parol=:password";
        $stmt = $connection->prepare($query);
        $stmt->bindParam(':username', $user);
        $stmt->bindParam(':password', $pass);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch();
            if($row['role'] == 'admin'){
                header("Location: admin.php");
            }else{
                header("Location: student.detail.php?id=" . $row["id"]);
            }
            
        } else {
            echo "<script>alert('Noto'g'ri foydalanuvchi nomi yoki parol. Iltimos, qayta urinib ko'ring.')</script>";
            header("Location: login.php");
            exit();
        }
    } catch (PDOException $e) {
        echo "Xatolik yuz berdi: " . $e->getMessage();
    }
}
?>