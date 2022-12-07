<?php
require_once('connection.php');
require_once('user.php');
class Admin extends User
{
    public $ID;
    public $fname;
    public $lname;
    public $gender;
    public $email;
    public $yob;
    public $address;
    public $phone;
    public $username;
    public $role;
    public $password;
    public $createAt;
    public $updateAt;
    public $profile_photo;

    public function __construct($ID, $fname, $lname, $gender, $email, $yob, $address, $phone, $username, $role, $password, $createAt = null, $updateAt = null, $profile_photo = null)
    {
        $this->ID = $ID;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->gender = $gender;
        $this->email = $email;
        $this->yob = $yob;
        $this->address = $address;
        $this->phone = $phone;
        $this->username = $username;
        $this->role = $role;
        $this->password = $password;
        $this->createAt = $createAt;
        $this->updateAt = $updateAt;
        $this->profile_photo = $profile_photo;
    }

    // static function insert($username, $password)
    // {
    //     $password = password_hash($password, PASSWORD_DEFAULT);
    //     $db = DB::getInstance();
    //     $req = $db->query("INSERT INTO taikhoan (username, password, init, createAt, updateAt) VALUES ('$username', '$password', 0, NOW(), NOW());");
    //     return $req;
    // }



    // static function delete($username)
    // {
    //     $db = DB::getInstance();
    //     $req = $db->query("DELETE FROM admin WHERE username = '$username';");
    //     return $req;
    // }

    // static function validation($username, $password)
    // {
    //     $db = DB::getInstance();
    //     $req = $db->query("SELECT * FROM admin WHERE username = '$username'");
    //     if (@password_verify($password, $req->fetch_assoc()['password']))
    //         return true;
    //     else
    //         return false;
    // }



    // static function changePassword_($username, $newpassword)
    // {
    //     $password = password_hash($newpassword, PASSWORD_DEFAULT);
    //     $db = DB::getInstance();
    //     $req = $db->query(
    //         "UPDATE admin
    //         SET password = '$password', updateAt = NOW()
    //         WHERE username = '$username';"
    //     );
    //     return $req;
    // }

    // static function getAll()
    // {
    //     $db = DB::getInstance();
    //     $req = $db->query("SELECT * FROM taikhoan WHERE role NOT '3' ");
    //     $admins = [];
    //     foreach ($req->fetch_all(MYSQLI_ASSOC) as $admin) {
    //         $admins[] = new Admin(
    //             $admin['username'],
    //             $admin['password'],
    //             $admin['createAt'],
    //             $admin['updateAt'],
    //             $admin['init']
    //         );
    //     }
    //     return $admins;
    // }
};