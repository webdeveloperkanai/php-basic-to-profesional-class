<?php require("header.php");

if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT id,name from users where email='$email' and password='$password' ";
    $q = mysqli_query($con, $sql);

    if (mysqli_num_rows($q) > 0) {
        $user = mysqli_fetch_array($q);

        $_SESSION['uid'] = $user['id'];

        echo "<script>location.href='account.php'</script>"; 
    } else {
        echo "<script>alert('Invalid credentials!')</script>";
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
            &nbsp; &nbsp; &nbsp; 
            <a href="forget.php">Forget password?</a>
        </form>

    </div>
    <div class="col-md-4"></div>
</div>
<br><br>
<?php require("footer.php") ?>