<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile Page Design Example</title>

    <meta name="author" content="Codeconvey" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>

    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" href="css/demo.css" />

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section>
        <?php
        include 'db.config.php';
        $talaba_id = $_GET['id'];
        try {
            $sql = "SELECT student.id, student.telefon_raqam, student.ism, student.familiya, student.login, student.parol,student.tugilgan_sana, 
                    student.email, fakultet.nomi AS fakultet, student.oqishga_kirgan_yili, student.tolov_shakli, student.pasport_raqami, student.jshshir, student.jinsi, viloyat.nomi AS viloyat, tuman.nomi AS tuman, 
                    student.manzil, student.role FROM student 
                    INNER JOIN fakultet ON student.fakultet_id = fakultet.id
                    INNER JOIN viloyat ON student.viloyat_id = viloyat.id
                    INNER JOIN tuman ON student.tuman_id = tuman.id
                    WHERE student.id = $talaba_id";
            $stmt = $connection->query($sql);
            while ($row = $stmt->fetch()) {
                $telefon_raqam = $row["telefon_raqam"];
                $ism = $row["ism"];
                $familiya = $row["familiya"];
                $login = $row["login"];
                $parol = $row["parol"];
                $tugilgan_sana = $row["tugilgan_sana"];
                $email = $row["email"];
                $fakultet = $row["fakultet"];
                $oqishga_kirgan_yili = $row["oqishga_kirgan_yili"];
                $tolov_shakli = $row["tolov_shakli"];
                $pasport_raqami = $row["pasport_raqami"];
                $jshshir = $row["jshshir"];
                $jinsi = $row["jinsi"];
                $viloyat = $row["viloyat"];
                $tuman = $row["tuman"];
                $manzil = $row["manzil"];
                $role = $row["role"];
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        ?>
        <div class="rt-container">
            <div class="col-rt-12">
                <div class="Scriptcontent">
                    <!-- Student Profile -->
                    <div class="student-profile py-4">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card shadow-sm">
                                        <div class="card-header bg-transparent text-center">
                                            <img class="profile_img" src="./image/student.jpg" alt="student dp">
                                            <h3>
                                                <?php echo "$familiya $ism"; ?>
                                            </h3>
                                        </div>
                                        <div class="card-body">
                                            <p class="mb-0"><strong class="pr-1">Talaba ID:</strong>
                                                <?php echo $talaba_id ?>
                                            </p>
                                            <p class="mb-0"><strong class="pr-1">Talaba logini:</strong>
                                                <?php echo $login ?>
                                            </p>
                                            <p class="mb-0"><strong class="pr-1">Talaba paroli:</strong>
                                                <?php echo $parol ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card shadow-sm">
                                        <div class="card-header bg-transparent border-0">
                                            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Boshqa ma'lumotlar</h3>
                                        </div>
                                        <div class="card-body pt-0">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th width="30%">Fakultet</th>
                                                    <td width="2%">:</td>
                                                    <td>
                                                        <?php echo $fakultet ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">O'qishga qabul qilingan yil</th>
                                                    <td width="2%">:</td>
                                                    <td>
                                                        <?php echo $oqishga_kirgan_yili ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">To'lov shakli</th>
                                                    <td width="2%">:</td>
                                                    <td>
                                                        <?php echo $tolov_shakli ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Pasport raqami</th>
                                                    <td width="2%">:</td>
                                                    <td>
                                                        <?php echo $pasport_raqami ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">JSHSHIR kod</th>
                                                    <td width="2%">:</td>
                                                    <td>
                                                        <?php echo $jshshir ?>
                                                    </td>
                                                </tr>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Tug'ilgan sana</th>
                                                    <td width="2%">:</td>
                                                    <td>
                                                        <?php echo $tugilgan_sana ?>
                                                    </td>
                                                </tr>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Jinsi</th>
                                                    <td width="2%">:</td>
                                                    <td>
                                                        <?php echo $jinsi ?>
                                                    </td>
                                                </tr>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Viloyat</th>
                                                    <td width="2%">:</td>
                                                    <td>
                                                        <?php echo $viloyat ?>
                                                    </td>
                                                </tr>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Tuman</th>
                                                    <td width="2%">:</td>
                                                    <td>
                                                        <?php echo $tuman ?>
                                                    </td>
                                                </tr>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Manzil</th>
                                                    <td width="2%">:</td>
                                                    <td>
                                                        <?php echo $manzil ?>
                                                    </td>
                                                </tr>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Email</th>
                                                    <td width="2%">:</td>
                                                    <td>
                                                        <?php echo $email ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th width="30%">Telefon raqam</th>
                                                    <td width="2%">:</td>
                                                    <td>
                                                        <?php echo $telefon_raqam ?>
                                                    </td>
                                                </tr>
                                                </tr>
                                                <?php
                                                if ($role == "admin") {
                                                    echo '<tr> 
                                                            <th width="30%">Role</th>
                                                            <td width="2%">:</td>
                                                            <td>
                                                                ' . $role . '
                                                            </td> 
                                                          </tr>';
                                                }
                                                ?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- partial -->

                </div>
            </div>
        </div>
    </section>



    <!-- Analytics -->

</body>

</html>