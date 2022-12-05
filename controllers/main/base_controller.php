<?php
class BaseController
{
    protected $folder;

    function render($file, $data = array())
    {
        $view_file = '/xampp/htdocs/BKEngrisk/views/main/' . $this->folder . '/' . $file . '.php';
        if (is_file($view_file)) {
            extract($data);
            ob_start();
            require_once($view_file);
            $content = ob_get_clean();
            require_once('/xampp/htdocs/BKEngrisk/views/basic_layouts.php');
        } else {
            header('Location: index.php?page=main&controller=layouts&action=error');
        }
    }
}