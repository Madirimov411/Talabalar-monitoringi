<?php
try {
    $studentId = $_GET['id'];
    include 'db.config.php';
    $sql = "DELETE FROM student WHERE id = $studentId";
    $stmt = $connection->prepare($sql);

    $stmt->execute();
    header("Location: admin.php");
    exit();

} catch (PDOException $e) {
    echo "Xatolik: " . $e->getMessage();
}
?>