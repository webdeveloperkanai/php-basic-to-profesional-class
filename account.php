<?php require("header.php");
if (!isset($_SESSION['uid'])) {
    header("location: login.php");
}

if(isset($_POST['updateProfile'])) {
    $name=$_POST['name']; 
    $email=$_POST['email']; 
    $password=$_POST['password']; 

    $uid = $_SESSION['uid']; 

    $q = mysqli_query($con, "UPDATE users SET name='$name', email='$email',password='$password' WHERE id='$uid' ");

    if($q==true) {
        echo "<script>alert('Profile updated successfully');</script>"; 
    } else {
        echo "<script>alert('Something went wrong!');</script>";
    }
}


$uid = $_SESSION['uid'];
$q= mysqli_query($con,"SELECT * FROM users WHERE id='$uid' ");
$user = mysqli_fetch_array($q); 

?> 
<h1>Welcome back <?php echo $user['name'] ?>! </h1>
<big>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque omnis nemo iusto autem qui eveniet? Laborum alias, reiciendis doloremque, aperiam recusandae illo, ab fuga debitis sequi facere expedita consequatur provident.
</big>

<br><br><br>
<div class="container">
    <form action="" method="post">
        <p>Name</p>
        <input type="text" name="name" class="form-control" value="<?php echo $user['name'] ?>" >
        <p>Email</p>
        <input type="text" name="email" class="form-control" value="<?php echo $user['email'] ?>"  >
        <p>Password</p>
        <input type="text" name="password" class="form-control" value="<?php echo $user['password'] ?>"  >

        <input type="submit" name="updateProfile" value="Update Profile" class="btn btn-primary">

    </form>
</div>
<br><br><br>
<a href="logout.php" class="btn btn-danger">Logout account </a>

<a href="delete.php" class="btn btn-danger">Delete account </a>

<br><br><br>
<?php require("footer.php") ?>