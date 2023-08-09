<?php require("header.php");

$myemail = "email@gmail.com";
$mypass = "123456";

if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == $myemail && $password == $mypass) {
        header("location: account.php"); /// page redirection 
    } else {
        echo "<h1>Invalid info </h1>";
    }
}
?>

<br><br>
<center>
    <h2>Login</h2>
</center>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form action="" method="POST">
            <p>Enter email id</p>
            <input type="email" name="email" id="email" class="form-control">
            <br>
            <p>Enter password</p>
            <input type="password" name="password" id="password" class="form-control">
            <br>
            <input type="submit" name="register" value="Login" class="btn btn-primary w-100">
            <br> <br> 
            <a href="register.php">Register now</a>
        </form>

    </div>
    <div class="col-md-4"></div>
</div>
<br><br>
<?php require("footer.php") ?>