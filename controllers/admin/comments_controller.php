<?php
require_once('controllers/admin/base_controller.php');
require_once('models/comment.php');
require_once('models/news.php');
require_once('models/user.php');


class CommentsController extends BaseController
{
	function __construct()
	{
		$this->folder = 'comments';
	}

	public function index()
	{
        $comments = Comment::getAll();
        // $users = User::getAll();
        // $news =  News::getAll();
        $data = array('comments' => $comments );

        $this->render('index',$data);
	}
    public function add(){
        $content = $_POST['content'];
        $name = $_POST['name'];
        Comment::insert($name, $content);
        header('Location: index.php?page=admin&controller=comments&action=index');
    }
    public function edit(){
        $id = $_POST['id'];
        $content = $_POST['content'];
        $name = $_POST['name'];
        Comment::update($id,$name, $content);
        header('Location: index.php?page=admin&controller=comments&action=index');
    }
    public function delete(){
        $id = $_POST['id'];
        Comment::delete($id);
        header('Location: index.php?page=admin&controller=comments&action=index');
    }
    // public function hide(){
    //     $id = $_POST['id'];
    //     $getdata = Comment::get($id)->approved;
    //     if($getdata==1){
    //         Comment::block($id);
    //     }else{
    //         Comment::unblock($id);
    //     }

    //     header('Location: index.php?page=admin&controller=comments&action=index');
    // }
}