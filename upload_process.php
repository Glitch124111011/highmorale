<?php 

if (isset($_POST['submit']) && isset($_FILES['img'])) {
    include 'db_connect.php';

	echo "<pre>";
	print_r($_FILES['img']);
	echo "</pre>";

    $cat = $_POST['cat'];
    $nam = $_POST['name'];
    $price = $_POST['price'];
    $details = $_POST['detail'];
	$link = $_POST['link'];

	$img_name = $_FILES['img']['name'];
	$img_size = $_FILES['img']['size'];
	$tmp_name = $_FILES['img']['tmp_name'];
	$error = $_FILES['img']['error'];

	if ($error === 0) {
		if ($img_size > 125000) {
			$em = "Sorry, your file is too large.";
		    header("Location: upload.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = './uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "INSERT INTO product(product_img, category, product_name, details, shoppee_link, price, status) 
				        VALUES('$new_img_name', '$cat', '$nam', '$details' , '$link', '$price', 'N')";
				mysqli_query($db_connection, $sql);
				header("Location: admin_index.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: upload.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: upload.php?error=$em");
	}

}else {
	header("Location: index.php");
}
?>