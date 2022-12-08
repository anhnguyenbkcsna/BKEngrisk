<?php
require_once('connection.php');
class Comment
{
    public $id;
    public $name;
    public $content;


    public function __construct($id, $name, $content)
    {
        $this->id = $id;
        $this->name = $name;
        $this->content = $content;
    }

    static function getAll()
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM chuongtrinhhoc");
        $comments = [];
        foreach ($req->fetch_all(MYSQLI_ASSOC) as $comment) {
            $comments[] = new Comment(
                $comment['MaCT'],
                $comment['Ten'],
                $comment['NoiDung'],
            );
        }
        return $comments;
    }

    static function get($id)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM chinhanh WHERE MaCT = '$id'");
        $result = $req->fetch_assoc();
        $comment = new Comment(
            $result['MaCT'],
            $result['Ten'],
            $result['NoiDung'],
        );
        return $comment;
    }

    // static function getCommentByNews($news_id)
    // {
    //     $db = DB::getInstance();
    //     $req = $db->query("SELECT 
    //     C.id AS id,
    //     C.date AS date,
    //     C.approved AS approved,
    //     C.content AS content,
    //     C.news_id AS news_id,
    //     C.user_id AS user_id,
    //     N.title AS title,
    //     U.fname AS fname,
    //     U.lname AS lname,
    //     C.parent AS parent
    //     FROM comment AS C, user AS U, news AS N WHERE C.news_id = N.id AND C.user_id = U.email AND C.news_id = $news_id AND C.approved = 1 AND C.parent IS NULL ORDER BY C.date DESC;");
    //     $comments = [];
    //     foreach ($req->fetch_all(MYSQLI_ASSOC) as $comment) {
    //         $comments[] = new Comment(
    //             $comment['id'],
    //             $comment['date'],
    //             $comment['approved'],
    //             $comment['content'],
    //             $comment['news_id'],
    //             $comment['user_id'],
    //             $comment['title'],
    //             $comment['fname'] . ' ' . $comment['lname'],
    //             $comment['parent']
    //         );
    //     }
    //     return $comments;
    // }

    // static function getCommentByUser($user_id)
    // {
    //     $db = DB::getInstance();
    //     $req = $db->query("SELECT 
    //     C.id AS id,
    //     C.date AS date,
    //     C.approved AS approved,
    //     C.content AS content,
    //     C.news_id AS news_id,
    //     C.user_id AS user_id,
    //     N.title AS title,
    //     U.fname AS fname,
    //     U.lname AS lname,
    //     C.parent AS parent
    //     FROM comment AS C, user AS U, news AS N WHERE C.news_id = N.id AND C.user_id = U.email AND C.user_id = $user_id AND C.approved = 1 ORDER BY C.date DESC;");
    //     $comments = [];
    //     foreach ($req->fetch_all(MYSQLI_ASSOC) as $comment) {
    //         $comment[] = new Comment(
    //             $comment['id'],
    //             $comment['date'],
    //             $comment['approved'],
    //             $comment['content'],
    //             $comment['news_id'],
    //             $comment['user_id'],
    //             $comment['title'],
    //             $comment['fname'] . ' ' . $comment['lname'],
    //             $comment['parent']
    //         );
    //     }
    //     return $comments;
    // }


    static function insert($name, $content)
    {
        $db = DB::getInstance();
        $req = $db->query(
            "
            INSERT INTO chuongtrinhhoc (Ten, NoiDung)
            VALUES ('$name', '$content')
            ;"
        );
        return $req;
    }

    // static function reply($content, $news_id, $user_id, $parent)
    // {
    //     $approved = true;
    //     $db = DB::getInstance();
    //     $req = $db->query(
    //         "
    //         INSERT INTO comment (date, approved, content, news_id, user_id, parent)
    //         VALUES (NOW(), $approved, '$content', $news_id, '$user_id', $parent)
    //         ;"
    //     );
    //     return $req;
    // }

    // static function getReply($id)
    // {
    //     $db = DB::getInstance();
    //     $req = $db->query("SELECT 
    //     C.id AS id,
    //     C.date AS date,
    //     C.approved AS approved,
    //     C.content AS content,
    //     C.news_id AS news_id,
    //     C.user_id AS user_id,
    //     N.title AS title,
    //     U.fname AS fname,
    //     U.lname AS lname,
    //     C.parent AS parent
    //     FROM comment AS C, user AS U, news AS N WHERE C.news_id = N.id AND C.user_id = U.email AND C.parent = $id AND approved = 1;");
    //     $replies = [];
    //     foreach ($req->fetch_all(MYSQLI_ASSOC) as $reply) {
    //         $replies[] = new Comment(
    //             $reply['id'],
    //             $reply['date'],
    //             $reply['approved'],
    //             $reply['content'],
    //             $reply['news_id'],
    //             $reply['user_id'],
    //             $reply['title'],
    //             $reply['fname'] . ' ' . $reply['lname'],
    //             $reply['parent']
    //         );
    //     }
    //     return $replies;
    // }

    static function delete($id)
    {
        $db = DB::getInstance();
        $req = $db->query("DELETE FROM chuongtrinhhoc WHERE MaCT = '$id';");
        return $req;
    }

    static function update($id,$name, $content)
    {
        $db = DB::getInstance();
        $req = $db->query("UPDATE chuongtrinhhoc SET Ten = '$name', NoiDung = '$content' WHERE MaCT = '$id';");
        return $req;
    }

    // static function block($id)
    // {
    //     $db = DB::getInstance();
    //     $req = $db->query("UPDATE comment SET approved = 0 WHERE id = $id;");
    //     return $req;
    // }

    // static function unblock($id)
    // {
    //     $db = DB::getInstance();
    //     $req = $db->query("UPDATE comment SET approved = 1 WHERE id = $id;");
    //     return $req;
    // }
}