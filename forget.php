<?php require("header.php");

if (isset($_POST['reset'])) {
    $email = $_POST['email'];

    $sql = "SELECT id,name from users where email='$email' ";
    $q = mysqli_query($con, $sql);

    if (mysqli_num_rows($q) > 0) {
        $otp = rand(1111, 9999);

        // mail("$email", "Reset Password", "Dear user, your OTP is $otp");

        $upd = mysqli_query($con, "UPDATE users SET password='$otp' WHERE email='$email' ");
        echo "<script>alert('New password sent on your email...')</script>";
        echo "<script>location.href='login.php'</script>";
    } else {
        echo "<script>alert('No account found!')</script>";
    }
}
?>

<br><br>
<center>
    <h2>Forget password ?</h2>
</center>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form action="" method="POST">
            <p>Enter email id</p>
            <input type="email" name="email" id="email" class="form-control">
            <br>

            <input type="submit" name="reset" value="Reset Password" class="btn btn-primary w-100">
            <br> <br>
            <a href="login.php">Back to login</a>

        </form>

    </div>
    <div class="col-md-4"></div>
</div>
<br><br>
<?php require("footer.php") ?>