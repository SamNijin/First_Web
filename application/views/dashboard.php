<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>

<body>
    <?php
    include '../settings/config.php';

    $uname = $_REQUEST['uname'];
    $pass = $_REQUEST['pwd'];
    $query = "SELECT * FROM `student_registration` WHERE uname='$uname' AND pass='$pass'";
    $query_run = $conn->query($query);

    if ($query_run) {
        while ($row = $query_run->fetch(PDO::FETCH_OBJ)) {
            $uname = $row->uname;
        }
    }

    echo '
    <h1>
        Welcome
            '
        . $uname .
        '
        !!!
    </h1>
    ';


    ?>
</body>

</html>