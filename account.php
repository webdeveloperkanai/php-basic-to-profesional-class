<?php require("header.php");
    if(!isset($_SESSION['uid'])) {
        header("location: login.php");
    }
?>
<h1>My Account :: </h1> 
<big>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque omnis nemo iusto autem qui eveniet? Laborum alias, reiciendis doloremque, aperiam recusandae illo, ab fuga debitis sequi facere expedita consequatur provident.
</big>

<br><br><br>
    <a href="logout.php" class="btn btn-danger">Logout account </a>
<br><br><br>
<?php require("footer.php") ?>