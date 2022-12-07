<?php
require_once('controllers/admin/base_controller.php');
require_once('controllers/admin/user_controller.php');
require_once('models/admin.php');

class AdminController extends UserController
{
	function __construct()
	{
		$this->folder = 'admin';
	}

	public function index()
	{
		$admin = Admin::getAll();
		$data = array('admin' => $admin);
		$this->render('index', $data);
	}

	// public function add()
	// {
	// 	$username = $_POST['username'];
	// 	$password = $_POST['password'];
	// 	$add_new = Admin::insert($username, $password, $fname, $lname, $gender, $email, $yob, $phone, $address, $fileuploadname);
	// 	header('Location: index.php?page=admin&controller=admin&action=index');
	// }

	// public function edit()
	// {
	// 	$username = $_POST['username'];
	// 	$newPassword = $_POST['new-password'];
	// 	$change_pass = Admin::changePassword_($username, $newPassword);
	// 	header('Location: index.php?page=admin&controller=admin&action=index');
	// }

	// public function delete()
	// {
	// 	$username = $_POST['username'];
	// 	$delete_user = Admin::delete($username);
	// 	header('Location: index.php?page=admin&controller=admin&action=index');
	// }
}