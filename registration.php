<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
            
        <form action="php/registration.php" method="post">
            <p class="register-title">REGISTER</p> 
            <div class="form-group">
                <label class="label-form" for="">Nama : </label>
                <input id="name" type="text" class="form-control" name="nama" style="border:solid #98A8F8 1px">
            </div>
            <div type="email" class="form-group">
                <label for="">Email : </label>
                <input id="email" type="text" class="form-control" name="email" style="border:solid #98A8F8 1px">
            </div>
            <div class="form-group">
                <label for="">Password : </label>
                <input id="password" type="password" class="form-control" name="password" style="border:solid #98A8F8 1px">
            </div>
            <div class="form-group">
                <label for="">Repeat Password : </label>
                <input id="repeatPassword" type="password" class="form-control" name="repeatPassword" style="border:solid #98A8F8 1px"> 
            </div>
            <input href="login.html" class="btn" type="submit" value="Register">

            <div class="link-register">
                Sudah punya akun? <a href="login.html">Login</a>
            </div>
        </form>

    </div>
    <script src="javascript/submit.js">    </script>
    <?php
    require("User.php");
    echo "<table border = 1>
    <tr>
        <td>name</td>
        <td>username</td>
        <td>password</td>
    </tr>";

    foreach (User::getUser() as $row);
    echo"<tr><td>".$row['user']."<td><td>".$row['username']."<tr><td>".$row['password'];
endforeach;
echo "</table>";
?>
</body>
</html>
