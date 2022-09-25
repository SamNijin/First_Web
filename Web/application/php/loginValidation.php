<?php

// loginValidate();

if (isset($_REQUEST['login'])) {



    loginValidate();
}

function loginValidate()
{
    include '../settings/config.php';
    $uname = $_REQUEST['uname'];
    $pass = $_REQUEST['pwd'];
    $query = "SELECT * FROM `student_registration` WHERE uname='$uname' AND pass='$pass'";
    $query_run = $conn->query($query);

    if ($query_run) {
        while ($row = $query_run->fetch(PDO::FETCH_OBJ)) {
            $username = $row->uname;
            $password = $row->pass;
        }
    }
    if ($uname == $username && $pass == $password) {
        include '../views/dashboard.php';
    } else {
        echo '
        <script> alert("Incorrect User Name / Password") </script>
        ';
        include '../../application/views/login.php';
    }
}