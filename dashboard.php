<?php
    include "header.php";
    include "menu.php";
    include "footer.php";
    include '../pages/conn.php';
     session_start();
    echo $em = $_SESSION['email'];
     $sql = "SELECT * FROM `user` WHERE `email`='$em'";
     $run=mysqli_query($conn,$sql);
     $data=mysqli_fetch_assoc($run);

?>
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"><img src="../assets/upload/law9.jpg" width="200px" height="150px">
                                <h2> All Available Lawyer</h2>
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
                                                    <th>Delete</th>
                                                    <th>update</th>


                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                              //if (mysqli_num_rows($run) > 0)
                                               //{
                                            $insert_sql = "SELECT * FROM `user` where type='2'";
                                             $run=mysqli_query($conn,$insert_sql);
                                             // $data = mysqli_fetch_assoc($run);
                                                 //if( $type == '2')
                                                while ($row = mysqli_fetch_assoc($run))
                                                {
                                                    ?>
                                                    
                                                <tr class="text-center">
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
                                                    <td> <button class="btn-danger btn"><a href="delete.php?id=<?php echo $row['id']; ?>" class="text-white"><strong>Delete</strong></a></button></td>

                                                    <td> <button class="btn-warning btn"><a href="delete.php?id=<?php echo $row['id']; ?>" class="text-white"><strong>Update</strong></a></button></td>


                                                </tr>
                                                <?php
                                                  }
                                            ?>
                                            </tbody>

                                         
                                    <!-- /.table-responsive -->
                                    

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
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
