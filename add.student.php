<html>

<head>
    <title>Student Registration Form Using Table in HTML</title>
    <style>
        h2 {
            font-family: Sans-serif;
            font-size: 24px;
            margin-top: 20px;
            font-style: normal;
            font-weight: bold;
            color: white;
            text-align: center;
        }

        table {
            width: 1100;
            font-family: verdana;
            color: white;
            font-size: 16px;
            font-style: normal;
            font-weight: bold;
            border-style: groove;
        }

        table select {
            width: 250px;
            height: 30px;
        }

        body {
            background: -webkit-linear-gradient(to right, #4ca2cd, #67B26F);
            background: linear-gradient(to right, #4ca2cd, #67B26F);
        }

        table.inner {
            border: 10px
        }

        input[type=text],
        input[type=email],
        input[type=number] {
            width: 700px;
            padding: 6px 12px;
            margin: 5px 0;
            box-sizing: border-box;
        }

        input[type=submit],
        input[type=reset] {
            width: 15%;
            padding: 8px 12px;
            margin: 5px 0;
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_GET['id'])) {
        include('./db.config.php');
        try {
            $studentId = $_GET['id'];
            $sql = "SELECT * FROM student WHERE id = $studentId";
            $stmt = $connection->query($sql);
            while ($row = $stmt->fetch()) {
                $telefon_raqam = $row["telefon_raqam"];
                $ism = $row["ism"];
                $familiya = $row["familiya"];
                $tugilgan_sana = $row["tugilgan_sana"];
                $email = $row["email"];
                $fakultet = intval($row["fakultet_id"]);
                $oqishga_kirgan_yil = $row["oqishga_kirgan_yili"];
                $tolov_shakli = $row["tolov_shakli"];
                $pasport_raqami = $row["pasport_raqami"];
                $jshshir = $row["jshshir"];
                $jinsi = $row["jinsi"];
                $viloyat = intval($row["viloyat_id"]);
                $tuman = intval($row["tuman_id"]);
                $manzil = $row["manzil"];
                $role = $row["role"];
            }
            $glavniy = 'Talaba ma\'lumotlarini tahrirlash';
            $btn = 'Tahrirlash';
        } catch (Exception $e) {
            echo "Xatolik:" + $e->getMessage();
        }
    } else {
        $studentId = -1;
        $btn = 'Qo\'shish';
        $glavniy = 'Talabani ro\'yhatdan o\'tkazish';
        $ism = '';
        $familiya = '';
        $email = '';
        $pasport_raqami = '';
        $jshshir = '';
        $telefon_raqam = '';
        $jinsi = '';
        $tugilgan_sana = '';
        $viloyat = -1;
        $tuman = -1;
        $manzil = '';
        $fakultet = -1;
        $oqishga_kirgan_yil = '';
        $tolov_shakli = -1;
        $role = -1;
    }
    ?>
    <h2>
        <?php echo $glavniy; ?>
        </h3>
        <form method="post" action="database.add.php">
            <table align="center" cellpadding="10">
                <!--------------------- First Name ------------------------------------------>
                <tr>
                    <td>Ism</td>
                    <td><input type="text" name="ism" maxlength="50" placeholder="Mansurbek"
                            value="<?php echo $ism; ?>" />

                    </td>
                </tr>
                <!------------------------ Last Name --------------------------------------->
                <tr>
                    <td>Familiya</td>
                    <td><input type="text" name="familiya" maxlength="50" placeholder="Madirimov"
                            value="<?php echo $familiya; ?>" />

                    </td>
                </tr>
                <!-------------------------- Email ID ------------------------------------->
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" maxlength="100" placeholder="madirimov@gmail.com"
                            value="<?php echo $email; ?>" /></td>
                </tr>
                <!-------------------------- Pasport ------------------------------------->
                <tr>
                    <td>Pasport raqami</td>
                    <td><input type="text" name="pasport_raqami" maxlength="100" placeholder="AA1234567"
                            value="<?php echo $pasport_raqami; ?>" /></td>
                </tr>
                <!-------------------------- JSHSHIR ------------------------------------->
                <tr>
                    <td>JSHSHIR</td>
                    <td>
                        <input type="text" name="jshshir" maxlength="14" placeholder="12345678901234"
                            value="<?php echo $jshshir; ?>" />
                    </td>
                </tr>
                <!-------------------------- Mobile Number ------------------------------------->
                <tr>
                    <td>Telefon raqam</td>
                    <td>
                        <input type="text" name="telefon_raqam" maxlength="13" placeholder="+998xxxxxxxxx"
                            value="<?php echo $telefon_raqam; ?>">
                    </td>
                </tr>
                <!---------------------- jinsi ------------------------------------->
                <tr>
                    <td>Jinsi</td>
                    <td>
                        <input type="radio" name="jinsi" value="Erkak" <?php echo ($jinsi == 'Erkak') ? 'checked' : ''; ?>>
                        Erkak
                        <input type="radio" name="jinsi" value="Ayol" <?php echo ($jinsi == 'Ayol') ? 'checked' : ''; ?>>
                        Ayol
                    </td>
                </tr>
                <!--------------------------Date Of Birth----------------------------------->
                <tr>
                    <td>Tug'ilgan sana</td>
                    <td>
                        <input type="text" name="tugilgan_sana" maxlength="10" placeholder="04-11-2003(KK-OO-YYYY)"
                            value="<?php echo $tugilgan_sana; ?>" />
                    </td>
                </tr>

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
                <!------------------------- Address ---------------------------------->
                <tr>
                    <td>Manzil<br /><br /><br /></td>
                    <td><textarea name="manzil" rows="3" cols="93"><?php echo $manzil; ?></textarea></td>
                </tr>
                <!------------------------- Fakulty ---------------------------------->
                <tr>
                    <td>Fakultet</td>
                    <td>
                        <select name="fakultet" id="fakultet">
                            <option value="-1">Tanlang</option>
                            <?php
                            include('./db.config.php');

                            try {
                                $sql = "SELECT * FROM fakultet";
                                $stmt = $connection->query($sql);
                                while ($row = $stmt->fetch()) {
                                    $res = ($row["id"] == $fakultet) ? "selected" : "";
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
                <!-------------------------- O'qishga kirgan yil ---------------------------------->
                <tr>
                    <td>O'qishga kirgan yil</td>
                    <td>
                        <input type="text" name="oqishga_kirgan_yil" maxlength="4" placeholder="2021"
                            value="<?php echo $oqishga_kirgan_yil; ?>" />
                    </td>
                </tr>
                <!-------------------------- To'lov shakli ---------------------------------->
                <tr>
                    <td>To'lov shakli</td>
                    <td>
                        <select name="tolov_shakli" id="tolov_shakli">
                            <option value="-1">Tanlang</option>
                            <option value="Davlat granti" <?php echo ($tolov_shakli == 'Davlat granti') ? ' selected' : ''; ?>>Davlat granti</option>
                            <option value="Kontrakt" <?php echo ($tolov_shakli == 'Kontrakt') ? ' selected' : ''; ?>>
                                Kontrakt</option>
                        </select>
                    </td>
                </tr>
                <!-------------------------- Role ---------------------------------->
                <tr>
                    <td>Role</td>
                    <td>
                        <select name="role" id="role">
                            <option value="-1">Tanlang</option>
                            <option value="admin" <?php echo ($role == 'admin') ? ' selected' : ''; ?>>Admin</option>
                            <option value="student" <?php echo ($role == 'student') ? ' selected' : ''; ?>>Talaba
                            </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="hidden" name="studentId" value="<?php echo $studentId; ?>">
                        <input type="submit" name="submit" value="<?php echo $btn ?>">
                        <input type="reset" value="Tozalash">
                    </td>
                </tr>
            </table>
        </form>

        <script>
            function getTumanlar() {
                var viloyatId = document.getElementById("viloyat").value;
                var tumanSelect = document.getElementById("tuman");
                console.log(viloyatId);
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        tumanSelect.innerHTML = this.responseText;
                    }
                };

                xhr.open("GET", "get_tumanlar.php?viloyat_id=" + viloyatId, true);
                xhr.send();
            }
        </script>

        



</body>

</html>