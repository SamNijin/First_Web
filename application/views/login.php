<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <link href="../../../Web/application/views/css/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../../web/application/views/css/login.css">

</head>

<body
    style="background-image: url('../../../Web/application/views/image/login_bg.jpg');background-repeat: no-repeat;background-size:cover;height:150vh;">

    <div class="container">
        <div class="divcon">
            <div class="formcon">
                <h2 class="head">Student Login</h2>

                <form class="loginform" action="../php/loginValidation.php" method="POST">
                    <table>
                        <tr>
                            <td>
                                <label for="uname" class="txt">
                                    User Name
                                </label>
                                <input type="text" id="uname" name="uname" placeholder="Enter User name" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="password" class="txt">
                                    Password
                                </label>
                                <input type="password" id="pwd" name="pwd" placeholder="Enter password" required>
                            </td>
                        </tr>
                    </table>
                    <button type="submit" id="login" name="login">Login</button>
                </form>
                <a href="../../../Form/index.php" class="regis">Register Here</a>
            </div>
        </div>
    </div>
</body>

</html>