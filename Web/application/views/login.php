<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <link href="application/views/css/bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css\login.css">

</head>
<body>

<div class="container">
<div class="divcon">
<div class="formcon">
  <h2 class="head">Student Login</h2>

  <form class="loginform" action="#">
    <table>
      <tr>
        <td>
        <label for="email" class="txt">
        Email
      </label>
      <input type="email" id="email" placeholder="Enter email" required>
        </td>
      </tr>
      <tr>
        <td>
        <label for="password" class="txt">
        Password
      </label>
      <input type="password"id="pwd" placeholder="Enter password" required>
        </td>
      </tr>
      </table>
      <button type="submit">Login</button>
  </form>
  <a href="../../../Form/index.php" class="regis">Register Here</a>
  </div>
</div>
</div>
</body> 
</html>
