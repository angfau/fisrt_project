
<?php
include "../../config/config.php";
session_start();
?>


<body>
    <h2><b>User</b></h2>
    <br/>
    <div>
    <a href="../../controller/employee/logout.php"><button class="btn btn-danger">Logout</button></a>
    <?php
    $a = $_SESSION['empl_grade'];
    if ($a = 2) {
    echo "<a href='add.php'><button class='btn btn-info'> Add New Users</button>";
    }
    ?>

    <br/>
    <br/>
    <br/>
    </div>
<div class="panel panel-primary">
<table cellpadding="0" cellspacing="0" class="table panel-heading">
    <tr style="width: 100%">
        <!-- <th><input type="text" class="form-control" placeholder="No" disabled></th>
        <th><input type="text" class="form-control" placeholder="Name" disabled></th> -->
        <th style="width: 50%">No</th>
        <th style="width: 50%">Name</th>
    </tr>
    <?php
        $index_user = pg_query($conn, "SELECT * FROM ms_employee WHERE delete_flag is not true ORDER BY empl_name asc;");

        $i = 0;
        while ($data = pg_fetch_assoc($index_user)){
            $i++;
    ?>
        <tr class="warning" style="color: black;" id="pagination">
            <td><?php echo $i; ?></td>
            <td>   
                <a href="view.php?id=<?php echo $data['id']; ?>">
                    <?php echo $data['empl_name']; ?>
                </a>
            </td>
    <?php
            }
    ?>
</tr>
</table>
</div>
</body>