<?php
	session_start();
	require 'conn.php';
	if (isset($_POST['upload-btn'])) {
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			unset($_SESSION['user_file_name']);
			if ($_FILES['user_file']['error'] == 0) {
				$max_size = 2 * 1024 * 1024;
				if ($_FILES['user_file']['size'] < $max_size) {
					$extension = pathinfo($_FILES['user_file']['name'],PATHINFO_EXTENSION);
					$allowed_extensions = array('jpg','jpeg','png','gif');
					if (in_array($extension, $allowed_extensions)) {
						// move_uploaded_file(filetempname, destination)
						$destination = 'upload/'.rand(1,9999).$_FILES['user_file']['name'];
						if (!file_exists($destination)) {
							if(move_uploaded_file($_FILES['user_file']['tmp_name'], $destination)){
								$_SESSION['user_file_name'] = $destination;
								header('location:upload_form.php');

								$query = "INSERT INTO `user`(`file_name`) VALUES ('$destination')";
								mysqli_query($conn,$query);
							}else {
								die('Error :File upload failed! please try again');
							}							
						} else {
							die('Error : file already exists please try again');
						}
					} else {
						die('Error : file type not supported');
					}				
				} else {
					die('Error : File size should be less than 2mb');
				}
			} else {
				die('Error : File Upload Error');
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	 <?php
        $get_query = "SELECT * from user";
        $response = mysqli_query($conn,$get_query);
    ?>
	<h4 class="text-center bg-dark text-white p-3 mt-4">Image Galary</h4>
    <div class="row mt-5 text-center">
        
        <?php
            while($data = mysqli_fetch_assoc($response)) {
        ?>
        <div class="col-md-4 mt-3">
            <img src="<?= $data['file_name']; ?>" width="175" height="175" style="border-radius: 50%;">
            <figcaption><?= explode('/', $data['file_name'])[1]; ?></figcaption>    
        </div>
        <?php
            }
        ?>
    </div>

</body>
</html>