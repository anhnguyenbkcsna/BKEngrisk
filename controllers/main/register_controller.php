<?php
require_once('controllers/main/base_controller.php');
require_once('models/user.php');

class RegisterController extends BaseController
{
	function __construct()
	{
		$this->folder = 'register';
	}

	public function index()
	{
		$this->render('index');
	}

	public function submit()
	{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$yob = $_POST['yob'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$username = $_POST['username'];
		$password = $_POST['pass'];
		echo $fname . $lname . $yob . $gender . $phone . $email . $address . $username . $password;
		User::insert($username, $password, $fname, $lname, $gender, $email, $yob, $phone, $address, 'public/img/user/default.png');
		header('Location: index.php?page=main&controller=login&action=index');
	}

	public function editInfo()
	{
		session_start();
		$email = $_SESSION['user'];
		$username= $_SESSION['user'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$gender = $_POST['gender'];
		$yob = $_POST['yob'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		$urlcurrent = $_POST['img'];
		// Photo
		$target_dir = "public/img/user/";
		$path = $_FILES['fileToUpload']['name'];
		$ext = pathinfo($path, PATHINFO_EXTENSION);
		$id = (string)date("Y_m_d_h_i_sa");
		$fileuploadname = (string)$id;
		$fileuploadname .= ".";
		$fileuploadname .= $ext;
		$target_file = $target_dir . basename($fileuploadname);
		if (file_exists($target_file)) {
			echo "Sorry, file already exists.";
		}
		$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
		// Allow certain file formats
		if (
			$fileType != "jpg" && $fileType != "png" && $fileType != "jpeg"
			&& $fileType != "gif"
		) {
			// echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$upload_ok = 0;
		}
		if ($_FILES["fileToUpload"]["size"] > 500000) {
			echo "Sorry, your file is too large.";
		}
		$file_pointer = $urlcurrent;
		unlink($file_pointer);
		move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
		// Update
		$change_info = User::update($username, $target_file, $fname, $lname, $gender, $yob,$email, $phone, $address);
		header('Location: index.php?page=main&controller=layouts&action=index');
	}

	public function editPass()
	{
		$email = $_POST['email'];
		$newpassword = $_POST['new-password'];
		echo $email . " " . $newpassword .  "\n";
		$change_pass = User::changePassword_($email, $newpassword);
		echo "change_pass";
		header('Location: index.php?page=admin&controller=user&action=index');
	}

	public function delete()
	{
		$email = $_POST['email'];
		$urlcurrent = $_POST['img'];
		unlink($urlcurrent);
		$delete_user = User::delete($email);
		header('Location: index.php?page=admin&controller=user&action=index');
	}

	// public function checkUsername()
	// {
	// 	$username = $_POST['username'];
	// 	$checkUsername = User::checkUsername($username);
	// 	header('Location: index.php?page=main&controller=login&action=index');
	// }
}