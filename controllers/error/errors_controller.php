<?php
class ErrorsController
{
    public function index()
    {
        $view_file = '/xampp/htdocs/BKEngrisk/views/error/index.php';
        require_once($view_file);
    }
}