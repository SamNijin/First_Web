<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Users</title>
    <link rel="stylesheet" href="../views/css/cse.css">
    <link rel="stylesheet" href="../views/css/bootstrap-4.3.1-dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid body">
        <div class="viewporthead">
            <h2>STUDENT LIST</h2>
        </div>
        <br>
        <?php
        LoginValidate();
        function loginValidate()
        {
            include '../settings/config.php';
            $query = "SELECT * FROM `student_registration` ORDER BY DATE DESC";
            $query_run = $conn->query($query);

            if ($query_run) {
                echo '
        <table id="perso">
            <thead>
                <tr>
                    <th>
                        Sl. No
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        Department
                    </th>
                    <th>
                        Gender
                    </th>
                    <th>
                        Phone Number
                    </th>
                </tr>
            </thead>
            <tbody> 
        ';
                while ($row = $query_run->fetch(PDO::FETCH_OBJ)) {
                    echo '
               
                <tr>
                    <td>
                        ' . $row->sno . '
                    </td>
                    <td>
                        ' . $row->name . '
                    </td>
                    <td>
                        ' . $row->dept . '
                    </td>
                    <td>
                        ' . $row->gender . '
                    </td>
                    <td>
                        ' . $row->phone . '
                    </td>
                </tr>
               
            
            ';
                }
                echo '
                </tbody> 
                </table>   
                ';
            }
        }
        ?>
    </div>
</body>

</html>