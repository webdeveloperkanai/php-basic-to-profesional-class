<?php require("header.php");

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users values(NULL, '$name', '$email','$password' ) ";
    $query = mysqli_query($con, $sql);

    if ($query == true) {
        header("location: register.php?success=true");
    }
}
?>

<br><br>
<center>
    <h2>Register </h2>
</center>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form action="" method="POST">
            <?php if (isset($_GET['success']) == "true") {
                echo "<p class='text-success'> Registration successful </p>";
            } else if (isset($_GET['success']) == "false") {
                echo "<p class='text-danger'> Invalid Registration Info  </p>";
            } ?>
            <p>Enter name </p>
            <input type="text" name="name" id="name" class="form-control">
            <br>
            <p>Enter email id</p>
            <input type="email" name="email" id="email" class="form-control">
            <br>
            <p>Enter password</p>
            <input type="password" name="password" id="password" class="form-control">
            <br>
            <input type="submit" name="register" value="Register" class="btn btn-primary w-100">
            <br> <br>
            <a href="login.php">Login now</a>
        </form>

    </div>
    <div class="col-md-4"></div>
</div>
<br><br>
<?php require("footer.php") ?>