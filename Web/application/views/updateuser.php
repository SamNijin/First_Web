<?php
include 'form.php';


function check()
{
    include '../settings/config.php';
    $query = "SELECT * FROM `student_registration` WHERE rno = $row->rno";
    $query_run = $conn->query($query);

    if ($query_run) {
        while ($row = $query_run->fetch(PDO::FETCH_OBJ)) {
            $regno = $row->regno;
            $namePerson = $row->name;
            $uname = $row->uname;
            $pass = $row->pass;
            $bgroup = $row->bgroup;
            $fatherName = $row->fathername;
            $phoneNo = $row->phone;
            $addresss = $row->address;
        }
    }
    $registernumber = $regno;
    $name = $namePerson;
    $userName = $uname;
    $Passwd = $pass;
    $bloodgroup = $bgroup;
    $fathername = $fatherName;
    $phone = $phoneNo;
    $address = $addresss;
}