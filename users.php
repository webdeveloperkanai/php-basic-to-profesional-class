<?php
require("header.php");

if (isset($_GET['del'])) {
    $del = $_GET['del'];
    $sql = "DELETE FROM  users WHERE id='$del' ";
    $resp = mysqli_query($con, $sql);

    if ($resp == true) {
        header("location: users.php");
    }
}
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
<div class="container">
    <h2>Manage Users</h2>

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $qx = mysqli_query($con, "SELECT * FROM  users ");
            while ($data = mysqli_fetch_array($qx)) {
            ?>
                <tr>
                    <td><?php echo $data['id'] ?></td>
                    <td> <?php echo $data['name'] ?> </td>
                    <td><?php echo $data['email'] ?></td>
                    <td><?php echo $data['password'] ?></td>
                    <td>
                        <a href="?del=<?php echo $data['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php } ?>

        </tbody>
        <tfoot>
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>

</div>


<script>
    new DataTable('#example');
</script>
<?php require("footer.php");
