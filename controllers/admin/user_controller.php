<?php
require_once('controllers/admin/base_controller.php');
require_once('models/user.php');

class UserController extends BaseController
{
	function __construct()
	{
		$this->folder = 'user';
	}

	public function index()
	{
		$user = User::getAll();
		$data = array('user' => $user);
		$this->render('index', $data);
	}

	public function add()
	{
		$username = $_POST['username'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$yob = $_POST['yob'];
		$gender = $_POST['gender'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$password = $_POST['password'];
		echo $fname . $lname . $yob . $gender . $phone . $email . $address . $password;
		// Photo
		$target_dir = "public/img/user/";
		$path = $_FILES['fileToUpload']['name'];
		$ext = pathinfo($path, PATHINFO_EXTENSION);
		echo $ext;
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
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$upload_ok = 0;
		}
		if ($_FILES["fileToUpload"]["size"] > 500000) {
			echo "Sorry, your file is too large.";
		}
		move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
		// Add new
		$add_new = User::insert($username, $password, $fname, $lname, $gender, $email, $yob, $phone, $address, $fileuploadname);
		header('Location: index.php?page=admin&controller=user&action=index');
	}

	public function editInfo()
	{
		$username = $_POST['acc'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$yob = $_POST['yob'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
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
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$upload_ok = 0;
		}
		if ($_FILES["fileToUpload"]["size"] > 500000) {
			echo "Sorry, your file is too large.";
		}
		$file_pointer = $urlcurrent;
		unlink($file_pointer);
		move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
		// Update
		echo $username . $target_file . $fname . $lname . $gender . $yob . $email . $phone . $address;
		$change_info = User::update($username, $target_file, $fname, $lname, $gender, $yob, $email, $phone, $address);
		header('Location: index.php?page=admin&controller=user&action=index');
	}

	public function editPass()
	{
		$username = $_POST['email'];
		$newpassword = $_POST['new-password'];
		// echo $username . ' ' . $newpassword;
		$change_pass = User::changePassword_($username, $newpassword);
		header('Location: index.php?page=admin&controller=user&action=index');
	}

	public function delete()
	{
		$username = $_POST['email'];
		$urlcurrent = $_POST['img'];
		unlink($urlcurrent);
		$delete_user = User::delete($username);
		header('Location: index.php?page=admin&controller=user&action=index');
	}
}