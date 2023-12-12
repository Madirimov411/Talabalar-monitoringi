<form>
    <tr>
        <td>Viloyat</td>
        <td>
            <select name="viloyat" id="viloyat" value="" onchange="getTumanlar()">
                <option value="-1">Tanlang</option>
                <?php
                include('./db.config.php');

                try {
                    $sql = "SELECT * FROM viloyat";
                    $stmt = $connection->query($sql);
                    while ($row = $stmt->fetch()) {
                        $res = ($row["id"] == $viloyat) ? "selected" : "";
                        echo '<option value=' . $row["id"] . ' ' . $res . '>
                                    ' . $row["nomi"] . '</option>';
                    }
                } catch (Exception $e) {
                    echo "Xatolik:" + $e->getMessage();
                }
                ?>
            </select>
        </td>
    </tr>

    <tr>
        <td>Tuman</td>
        <td>
            <select name="tuman" id="tuman">
                <option value="-1">Tanlang</option>
            </select>
        </td>
    </tr>
</form>