<?php
$registernumber = 'Register Number';
$name = 'Name';
$userName = 'User Name';
$Passwd = 'Password';
$bloodgroup = 'Enter Your Blood Group';
$fathername = "Father Name";
$phone = 'Phone Number';
$address = 'Current Address';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <link href="../views/css/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="..\views\css\form.css">
    <title>Form</title>
</head>

<body>
    <div class="container">
        <div class="divcon">
            <div class="formcon">
                <form class="loginform " action="../../../Web/application/php/newRegistration.php" method="post">
                    <h2 class="head">
                        Register Here
                    </h2>
                    <table>
                        <tr>
                            <td>
                                <label class="txt">
                                    Register No.
                                </label> <br>
                                <?php
                                echo '
                                <input type="text" placeholder="' . $registernumber . '" required name="regNo"
                                    id="regNo" />
                                    ';
                                ?>
                            </td>
                            <td>
                                <label class="txt">
                                    Name
                                </label><br>
                                <?php
                                echo '
                                <input type="text" placeholder="' . $name . '" required name="name" id="name" />
                                ';
                                ?>
                            </td>
                            <td>
                                <label class="txt">
                                    User Name
                                </label><br>
                                <?php
                                echo '
                                <input type="text" placeholder="' . $userName . '" required name="uname" id="uname" />
                                ';
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="txt">
                                    Password
                                </label><br>
                                <?php
                                echo '
                                <input type="password" placeholder="' . $Passwd . '" required name="pass" id="pass" />
                                ';
                                ?>
                            </td>
                            <td>
                                <label class="txt">
                                    DOB
                                </label><br>
                                <input type="date" placeholder="Date Of Birth" required name="dob" id="dob" />
                            </td>
                            <td>
                                <label class="txt">
                                    Department
                                </label><br>
                                <select name="dept" class="input" id="dept" required>
                                    <option value="cse" id="cse">Computer Science and Engineering</option>
                                    <option value="ece" id="ece">Electronics and Communication Engineering</option>
                                    <option value="eee" id="eee">Electronics and Electrical Engineering</option>
                                    <option value="mech" id="mech">Mechanical Engineering</option>
                                    <option value="civ" id="civ">Civil Engineering</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="txt">
                                    Gender
                                </label><br>
                                <select name="gender" id="gender" class="input" required>
                                    <option value="male" id="male">Male</option>
                                    <option value="female" id="female">Female</option>
                                    <option value="other" id="other">other</option>
                                </select>
                            </td>
                            <td>
                                <label class="txt">
                                    Blood Group
                                </label><br>
                                <?php
                                echo '
                                <input type="text" placeholder="' . $bloodgroup . '" required name="bgroup"
                                    id="bgroup" />
                                    ';
                                ?>
                            </td>
                            <td>
                                <label class="txt">
                                    Father's Name
                                </label><br>
                                <?php
                                echo "
                                <input type='text' placeholder='" . $fathername . "' name='fname' id='fname' />
                                ";
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="txt">
                                    Phone
                                </label><br>
                                <?php
                                echo '
                                <input type="tel" placeholder="' . $phone . '" required name="phone" id="phone" />
                                ';
                                ?>
                            </td>
                            <td>
                                <label class="txt">
                                    Nationality
                                </label><br>
                                <select name="nation" id="nation" class="input" required>
                                    <option value="Indian" id="indian">Indian</option>
                                </select>
                            </td>
                            <td>
                                <label class="txt">
                                    Address
                                </label><br>
                                <?php
                                echo '
                                <textarea rows="3" cols="38" placeholder="' . $address . '" name="address" id="address"
                                    class="addrs"
                                    style="background-color: hsl(210, 100%, 95%);border: none; padding: 12px 15px; margin: 8px 0;max-width: 500px;width: 300px;border-radius: 5px;"
                                    required></textarea>
                                    ';
                                ?>
                            </td>
                        </tr>
                    </table>
                    <button type="submit" id="submit" name="submit">Register</button>
                </form>
            </div>
            <div class="formconmob">
                <form class="loginformmob" action="../../../Web/application/php/newRegistration.php" method="post">
                    <h2 class="head">
                        Register Here
                    </h2>
                    <table>
                        <tr>
                            <td>
                                <label class="txt">
                                    Register No.
                                </label> <br>
                                <?php
                                echo '
                                <input type="text" placeholder="' . $registernumber . '" required name="regNo"
                                    id="regNo" />
                                    ';
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="txt">
                                    Name
                                </label><br>
                                <?php
                                echo '
                                <input type="text" placeholder="' . $name . '" required name="name" id="name" />
                                ';
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="txt">
                                    User Name
                                </label><br>
                                <?php
                                echo '
                                <input type="text" placeholder="' . $userName . '" required name="uname" id="uname" />
                                ';
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="txt">
                                    Password
                                </label><br>
                                <?php
                                echo '
                                <input type="password" placeholder="' . $Passwd . '" required name="pass" id="pass" />
                                ';
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="txt">
                                    DOB
                                </label><br>
                                <input type="date" placeholder="Date Of Birth" required name="dob" id="dob" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="txt">
                                    Department
                                </label><br>
                                <select name="dept" id="dept" class="input" required>
                                    <option value="cse" id="cse">Computer Science and Engineering</option>
                                    <option value="ece" id="ece">Electronics and Communication Engineering</option>
                                    <option value="eee" id="eee">Electronics and Electrical Engineering</option>
                                    <option value="mech" id="mech">Mechanical Engineering</option>
                                    <option value="civ" id="civ">Civil Engineering</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="txt">
                                    Gender
                                </label><br>
                                <select name="gender" id="gender" class="input" required>
                                    <option value="male" id="male">Male</option>
                                    <option value="female" id="female">Female</option>
                                    <option value="other" id="other">other</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="txt">
                                    Blood Group
                                </label><br>
                                <?php
                                echo '
                                <input type="text" placeholder="' . $bloodgroup . '" required name="bgroup"
                                    id="bgroup" />
                                    ';
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="txt">
                                    Father's Name
                                </label><br>
                                <?php
                                echo "
                                <input type='text' placeholder='" . $fathername . "' required name='fname' id='fname' />
                                ";
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="txt">
                                    Phone
                                </label><br>
                                <?php
                                echo '
                                <input type="tel" placeholder="' . $phone . '" required name="phone" id="phone" />
                                ';
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="txt">
                                    Nationality
                                </label><br>
                                <select name="nation" class="input" required>
                                    <option value="Indian" id="indian">Indian</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="txt">
                                    Address
                                </label><br>
                                <?php
                                echo '
                                <input type="text" placeholder="' . $address . '" class="addrs" required name="address"
                                    id="address" />
                                    ';
                                ?>
                            </td>
                        </tr>
                    </table>
                    <button type="submit">Register</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>