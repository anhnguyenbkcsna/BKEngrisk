<?php
require_once('controllers/main/base_controller.php');
require_once('models/comment.php');

class ServicesController extends BaseController
{
	function __construct()
	{
		$this->folder = 'services';
	}
	
	public function index()
	{
		$comments = Comment::getAll();
		$data = array('comments' => $comments);
		$this->render('index', $data);
	}
}