<?php
    include "header.php";
    include "menu.php";
    include "footer.php";
    include '../pages/conn.php';
?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">All Available User</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    DataTables Advanced Tables
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                    
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Address</th>
                                                    <th>Gender</th>
                                                    <th>skills</th>
                                                    <th>Designation</th>
                                                    <th>Password</th>
                                                    <th>Status</th>
                                                    <th>Date</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                              //if (mysqli_num_rows($run) > 0)
                                               //{
                                            $insert_sql = "SELECT * FROM `user` where type='3'";
                                             $run=mysqli_query($conn,$insert_sql);
                                             // $data = mysqli_fetch_assoc($run);
                                                 //if( $type == '2')
                                                while ($row = mysqli_fetch_assoc($run))
                                                {
                                                    ?>
                                                    
                                                <tr>
                                                   <td><?php echo $row['id'];  ?></td>
                                                    <td><?php echo $row['name'];  ?></td>
                                                    <td><?php echo $row['email'];  ?></td>
                                                    <td><?php echo $row['address'];  ?></td>
                                                    <td><?php echo $row['gender'];  ?></td>
                                                    <td><?php echo $row['skills'];  ?></td>
                                                    <td><?php echo $row['designation'];  ?></td>
                                                    <td><?php echo $row['password'];  ?></td>
                                                    <td><?php echo $row['status'];  ?></td>
                                                    <td><?php echo $row['Date'];  ?></td>



                                                </tr>
                                                <?php
                                                  }
                                            ?>
                                            </tbody>
    </table>
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>

    </body>
</html>
