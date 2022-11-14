<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Users</title>
    <link rel="stylesheet" href="../views/css/cse.css">
    <link rel="stylesheet" href="../views/css/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
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
            $query = "SELECT * FROM `student_registration` WHERE isDeleted=1 ORDER BY DATE DESC";
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
                    <th class="icon">
                        Edit
                    </th>
                    <th class="icon">
                        Delete
                    </th>
                </tr>
            </thead>
            <tbody> 
        ';
                while ($row = $query_run->fetch(PDO::FETCH_OBJ)) {
                    echo '
               
                <tr>
                    <td>
                        ' . $row->rno . '
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

                    <td class="icon">
                    <a href="updateuser.php">
                    <span>
                    <i class="ri-pencil-line" id="' . $row->rno . '"></i>  
                    </span>
                    </a>
                    </td>
                    <td class="icon">
                    <span>
                    <i class="ri-delete-bin-line"></i>
                    </span>
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