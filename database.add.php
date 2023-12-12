<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {



    $ism = $_POST['ism'];
    $familiya = $_POST['familiya'];
    $email = $_POST['email'];
    $pasport_raqami = $_POST['pasport_raqami'];
    $jshshir = $_POST['jshshir'];
    $telefon_raqam = $_POST['telefon_raqam'];
    $jinsi = $_POST['jinsi'];
    $tugilgan_sana = $_POST['tugilgan_sana'];
    $viloyat = $_POST['viloyat'];
    $tuman = $_POST['tuman'];
    $manzil = $_POST['manzil'];
    $fakultet = $_POST['fakultet'];
    $oqishga_kirgan_yil = $_POST['oqishga_kirgan_yil'];
    $tolov_shakli = $_POST['tolov_shakli'];
    $role = $_POST['role'];
    $studentId = $_POST['studentId'];
    if (
        !(strlen($ism) < 3 or strlen($familiya) < 5 or !isset($_POST['jinsi'])
            or strlen($pasport_raqami) < 9 or strlen($tugilgan_sana) < 8 or strlen($email) < 10 or $fakultet == -1
            or strlen($oqishga_kirgan_yil) != 4 or $tolov_shakli == -1 or strlen($pasport_raqami) < 9
            or strlen($jshshir) < 14 or $viloyat == -1 or $tuman == -1 or strlen($manzil) < 5 or $role == -1)
    ) {
        include "db.config.php";

        if ($studentId == '-1') {
            $sql = "INSERT INTO `student`(`telefon_raqam`, `ism`, `familiya`, `login`, `parol`, 
            `tugilgan_sana`, `email`, `fakultet_id`, `oqishga_kirgan_yili`, 
            `tolov_shakli`, `pasport_raqami`, `jshshir`, `jinsi`, 
            `viloyat_id`, `tuman_id`, `manzil`, `role`) VALUES 
            ('$telefon_raqam','$ism','$familiya','" . strtolower($familiya) . "',
            '$pasport_raqami','$tugilgan_sana','$email','$fakultet',
            '$oqishga_kirgan_yil','$tolov_shakli','$pasport_raqami','$jshshir',
            '$jinsi','$viloyat','$tuman','$manzil','$role')";
            try {
                $stmt = $connection->prepare($sql);
                $stmt->execute();
                header("Location: admin.php");
                echo '<script language="javascript">';
                echo 'alert("Iltimos");';
                echo '</script>';
                exit();
            } catch (PDOException $e) {
                echo $e->getMessage();
            }

        } else {
            $sql = "UPDATE `student` 
            SET `telefon_raqam`='$telefon_raqam',
            `ism`='$ism',`familiya`='$familiya',`login`='" . strtolower($familiya) . "',
            `parol`='$pasport_raqami',`tugilgan_sana`='$tugilgan_sana',`email`='$email',
            `fakultet_id`='$fakultet',`oqishga_kirgan_yili`='$oqishga_kirgan_yil',
            `tolov_shakli`='$tolov_shakli',`pasport_raqami`='$pasport_raqami',
            `jshshir`='$jshshir',`jinsi`='$jinsi',`viloyat_id`='$viloyat',
            `tuman_id`='$tuman',`manzil`='$manzil',`role`='$role' 
            WHERE id = $studentId";
            try {
                $stmt = $connection->prepare($sql);
                $stmt->execute();
                header("Location: admin.php");
                echo '<script language="javascript">';
                echo 'alert("Iltimos");';
                echo '</script>';
                exit();
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }




    } else {
        echo '<script language="javascript">';
        echo 'alert("Iltimos ma\'lumotlarni to\'liq kiriting");';
        echo '</script>';
    }
}
?>