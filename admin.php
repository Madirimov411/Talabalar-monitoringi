<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Simple Data Table</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/admin.style.css">
    <script>
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>

<body>

    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2>Talabalar</h2>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th style="width : 50px;">ID</th>
                            <th>Familiya</th>
                            <th>Ism</th>
                            <th style="width : 250px;">Fakultet</th>
                            <th>Tug'ilgan sanasi</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('./db.config.php');

                        try {
                            $sql = "SELECT student.id, student.ism, student.familiya, student.tugilgan_sana, fakultet.nomi, student.role FROM student
                              INNER JOIN fakultet ON student.fakultet_id = fakultet.id";
                            $stmt = $connection->query($sql);
                            while ($row = $stmt->fetch()) {
                                echo "<tr>";
                                echo "<td>" . $row["id"] . "</td>";
                                echo "<td>" . $row["ism"] . "</td>";
                                echo "<td>" . $row["familiya"] . "</td>";
                                echo "<td>" . $row["nomi"] . "</td>";
                                echo "<td>" . $row["tugilgan_sana"] . "</td>";
                                echo "<td>" . $row["role"] . "</td>";
                                echo '<td>
                                        <a href="student.detail.php?id=' . $row["id"] . '" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                                        <a href="add.student.php?id=' . $row["id"] . '" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                        <a href="#" onclick="confirmDelete(' . $row["id"] . ')"  class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                      </td>';
                                echo "</tr>";
                            }
                        } catch (Exception $e) {
                            echo "Xatolik:" + $e->getMessage();
                        }
                        ?>
                    </tbody>
                </table>
                <button type="button" onclick="window.location.href='add.student.php'" class="btn btn-info add-new"
                    style="float: right;"><i class="fa fa-plus"></i>
                    Add New
                </button>
            </div>

        </div>

    </div>
    <script>
        function confirmDelete(studentId) {
            if (confirm("Haqiqatan ham o'chirmoqchimisiz?")) {
                window.location.href = 'delete_student.php?id=' + studentId;
            } else {
                return false;
            }
        }
    </script>
</body>

</html>