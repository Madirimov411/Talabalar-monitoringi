<?php
// get_tumanlar.php kodini o'z ichiga oladi
echo '<script language="javascript">';
echo 'console.log("salom");';
echo '</script>';
if (isset($_GET['viloyat_id'])) {
    $viloyatId = $_GET['viloyat_id'];
    include('db.config.php');
    echo '<script language="javascript">';
    echo 'console.log(' . $viloyatId . ');';
    echo '</script>';
    try {
        $sql = "SELECT name FROM tuman WHERE viloyat_id=$viloyatId";
        $stmt = $connection->prepare($sql);
        $stmt->execute();

        $tumanOptions = '<option value="-1">Tanlang</option>';
        while ($row = $stmt->fetch()) {
            $tumanOptions .= '<option value="' . $row["id"] . '">' . $row["nomi"] . '</option>';
        }

        echo '<script>document.getElementById("tuman").innerHTML = \'' . $tumanOptions . '\';</script>';
    } catch (Exception $e) {
        echo "Xatolik:" . $e->getMessage();
    }
}
?>