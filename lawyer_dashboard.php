<?php
include 'conn.php';
session_start();
   if(isset($_SESSION['uk'])){

    }else{
        header('location:../pages/lawyer_login.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
  <!--  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">-->
    <script src="../assets/js/jquery-3.4.1.js"></script>
   <link rel="stylesheet" href="../assets/css/bootstrap.minn.css">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
    <style>
        /*Main CSS*/

th,td {
	padding: 10px !important;
}
/*Login Signup Page*/
a:focus,a:hover,a{
    outline:none;
    text-decoration: none;
}
li,ul{
    list-style: none;
    padding: 0;
    margin: 0;
}
/*Home Page*/

.home {
    background: #f6f7fa;
}

#navigation {
    background: #0e1a35;
}

#navigation {
    padding: 0;
}

.display-table {
    display: table;
    padding: 0;
    height: 100%;
    width: 100%;
}

.display-table-row {
    display: table-row;
    height: 100%;
}

.display-table-cell {
    display: table-cell;
    float: none;
    height: 100%;
}

.v-align {
    vertical-align: top;
}
.logo img {
    max-width: 180px;
    padding: 16px 0 17px;
    width: 100%;
}
.header-top i {
    color: #0e1a35;
}

.icon-info {
    position: relative;
}
.navi i {
    font-size: 20px;
}

.header-top li {
    display: inline-block;
    text-align: center;
}

.navbar-content > span {
    font-size: 13px;
    font-weight: 700;
}
#navigation{
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
.logo {
    text-align: center;
}

.navi a {
    border-bottom: 1px solid #0d172e;
    border-top: 1px solid #0d172e;
    color: #ffffff;
    display: block;
    font-size: 17px;
    font-weight: 500;
    padding: 28px 20px;
    text-decoration: none;
}

.navi i {
    margin-right: 15px;
    color: #5584ff;
}

.navi .active a {
    background: #122143;
    border-left: 5px solid #5584ff;
    padding-left: 15px;
}

.navi a:hover {
    background: #122143 none repeat scroll 0 0;
    border-left: 5px solid #5584ff;
    display: block;
    padding-left: 15px;
}
.circle-logo {
    margin: 0 auto;
    max-width: 30px !important;
    text-align: center;
}
  @media only screen and (max-device-width: 767px) {
    .login-logo img {
        margin: 0 auto;
    }
    .tab-content .tab-pane {
        padding: 20px 0;
    }

</style>
</head>

<body>
    <div id="welcome-msg" class="bg-secondary text-white p-3 text-center">
        <h1>Wellcome To Lawyer Dashboard
</h1>
    <a href="lawyer_logout.php" class="btn btn-danger btn-lg text-nowrap" name="logout-lawyer">
    <span class="fa-fa-logout"></span><strong>Logout</strong></a>
    </div>
    <div class="row">
        <div class="col-md-2 bg-warning">
    </div>

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
<!------ Include the above in your HEAD tag ---------->

<link href="../assets/css/font-awesome.min.css" rel="stylesheet">
<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef=""><img src="../assets/images/logo.jpg" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <img src="../assets/images/logo.jpg" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi" style="height: 900px">
                    <ul>
                        <li class="active"><a href="../index.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="profile.php"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Profile </span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                 <?php
                    $s_sql = "SELECT * from case_record";
                    $run = mysqli_query($conn,$s_sql);
                    while ($row = mysqli_fetch_assoc($run)) {
                ?> 
                <div class="row mt-5">
	            	<div class="col-md-12">
		                <div id="info-section" class="bg-dark text-white p-2">
		                    <table class="" width="100%">
		                        <tr>
		                            <th>Requested By</th>
		                            <th>Requested Date</th>
                                    <th>Case title</th>
                                    <th>Case Type</th>
                                    <th>Case Details</th>

		                            <th>Fees</th>
		                            <th>Payment Status</th>
		                        </tr>

                                <?php         
                                    if ((array_key_exists('uk', $_SESSION) && $_SESSION['uk'] != '')) {                                    
                                        $user_email = $_SESSION['uk'];
                                        $get_user_sql = "SELECT * FROM `user` WHERE type='2' AND email='$user_email'";
                                        $client_details = mysqli_fetch_assoc(mysqli_query($conn,$get_user_sql));
                                        $lawyer_id = $client_details['id'];
                                        // echo $lawyer_id;exit;
                                        $sql="SELECT * FROM `case_record` WHERE lawyer_id='$lawyer_id'";
                                        
                                        $run=mysqli_query($conn,$sql);                                    
                                    $row_count = mysqli_num_rows($run);
                                    if ($row_count > 0) {

                                    
                                    while ($row = mysqli_fetch_assoc($run))
                                    {

                                ?>
                                            
                                <tr>                                            
                                    <!--<td><?= ($client_details['name'] == '') ? 'N/A':$client_details['name'];  ?></td>-->
                                     <td><?= ($row['Name'] != '') ? $row['Name']:'N/A';  ?></td>                                    
                                    <td><?= ($row['Date'] != '') ? $row['Date']:'N/A';  ?></td>
                                    <td><?= ($row['case_title'] != '') ? $row['case_title']:'N/A';  ?></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <td><?= ($row['case_type'] != '') ? $row['case_type']:'';  ?></td>
                                    <td><?= ($row['case_details'] != '') ? $row['case_details'] : 'N/A';  ?></td>
                                    <td><?= ($client_details['fees'] != '') ? $client_details['fees']:'N/A';  ?></td>
                                    <td><?= ($row['payment_status'] != '') ? $row['payment_status'] : 'N/A';  ?></td>                    
                                </tr>
                                <?php                            
                                    } 

                                }else {
                                ?>
                                <tr>
                                    <td colspan="7" class="text-center">No Case Found</td>
                                </tr>
                                <?php        
                                    } 
                                }     
                                ?>
                            </table>                                                                    
		                </div>
		                
	                </div>
            	</div>        
                </div>
            <?php
            }
            ?>     
        </div>         
        </div>
            
   
    </div>

</body>
<script>
  $(document).ready(function() {
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if(idFor.is(':visible'))
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            }
            else
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
        })
    });


    $('[data-toggle="tooltip"]').tooltip();

    $('button').click(function(e) {
        e.preventDefault();
        alert("This is a demo.\n :-)");
    });
});   
  type="text/javascript">
        $(document).ready(function(){
          $("#info-section").click(function(){
            $("#details-section").slideToggle();
          });
        });
</script>

</body>
</html>