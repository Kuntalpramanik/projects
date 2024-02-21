<?php
 Include 'conn.php';
 session_start();
 if(isset($_SESSION['pass'])){

    }else{
        header('location:../pages/client_login.php');
    }
?>

 <!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <script src="../assets/js/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../assets/css/bootstrap.minn.css">
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
    <style>
        /*Main CSS*/
.lawyer-detail:hover {
    background-color: green !important;
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
.navi ul li a {
    text-decoration: none;
}
.navi {
    height: 400px;
}
.tab-content .tab-pane {
    padding: 70px 0;
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

.header-top {
    margin: 0;
    padding-top: 2px;
}

.header-top img {
    border-radius: 50%;
    max-width: 48px !important;
    width: 100%;
}

.add-project {
    background: #5584ff none repeat scroll 0 0;
    border-radius: 100px;
    color: #ffffff;
    font-size: 14px;
    font-weight: 600;
    padding: 10px 27px 10px 45px;
    position: relative;
}

.header-rightside .nav > li > a:focus,
.header-rightside .nav > li > a:hover {
    background: none;
    text-decoration: none;
}
.add-project:hover {
    color: #ffffff;
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
header .logo img {
 max-width: 125px !important;
}

}
</style>
</head>
<body>
    <div id="welcome-msg" class="bg-info text-white p-3 text-center">
        <h1>Wellcome To Client Dashboard
       </h1>
       <a href="client_logout.php" class="btn btn-danger btn-lg text-nowrap" >
       <span class="fa-fa-logout"></span><strong>Logout</strong></a>
    </div>
    <div class="row">
        <div class="col-md-2 bg-warning">
    </div>

<link href="../assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>-->
<!------ Include the above in your HEAD tag ---------->

<link href="../assets/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                    <a hef=""><img src="../assets/images/logo.jpg" alt="merkery_logo" class="hidden-xs hidden-sm">
                        <img src="../assets/images/logo.jpg" alt="merkery_logo" class="visible-xs visible-sm circle-logo">
                    </a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active"><a href="../index.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Home</span></a></li>
                        <li><a href="clientcase_registration.php" class="" data-toggle="modal" data-target="#add_project"><i class="fa fa-plus" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Add Case </span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align mt-5">
                <?php
                    $insert_sql = "SELECT `images`,`description` from user WHERE type ='2'";
                    $run = mysqli_query($conn,$insert_sql);
                    while ($row = mysqli_fetch_assoc($run)) {
                        // print_r($row);
                ?> 
                <div class="col-md-3 p-3 mr-5 ml-5 bg-info lawyer-detail mb-5">
                    <img src="../assets/upload/<?= $row['images'];  ?>" height="200px" width="100%">
                    <div style="width: 100%;height:50px"><?= $row['description'];  ?></div>
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
</script>

</body>
</html>