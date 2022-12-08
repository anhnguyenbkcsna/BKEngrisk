<?php
require_once('controllers/admin/base_controller.php');
require_once('models/admin.php');

class LoginController extends BaseController
{
	function __construct()
	{
		$this->folder = 'login';
	}

	public function index()
	{
		$this->render('index');
	}


	public function logout()
	{
		session_start();
		unset($_SESSION["user"]);
		session_destroy();
		header("Location: index.php?page=admin&controller=login&action=index");
	}
}