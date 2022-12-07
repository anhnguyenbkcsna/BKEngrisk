<?php
require_once('connection.php');
class User
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

    static function getAll()
    {
        $db = DB::getInstance();
        $req = $db->query(
            "SELECT *
            FROM taikhoan;"
        );
        $users = [];
        foreach ($req->fetch_all(MYSQLI_ASSOC) as $user) {
            $users[] = new User(
                $user['ID'],
                $user['Ho'],
                $user['Ten'],
                $user['Gioitinh'],
                $user['Email'],
                $user['Namsinh'],
                $user['Diachi'],
                $user['Sodienthoai'],
                $user['TenDangNhap'],
                $user['role'],
                '', // Do not return password
                $user['createAt'],
                $user['updateAt'],
                $user['profile_photo']
            );
        }
        return $users;
    }

    static function get($username)
    {
        $db = DB::getInstance();
        $req = $db->query(
            "
            SELECT ID, Ho, Ten, Gioitinh, Email, Namsinh, Diachi, Sodienthoai, TenDangNhap, role, MatKhau, createAt, updateAt, profile_photo
            FROM taikhoan
            WHERE TenDangNhap = '$username'
            ;"
        );
        $result = $req->fetch_assoc();
        $user = new User(
            $result['ID'],
            $result['Ho'],
            $result['Ten'],
            $result['Gioitinh'],
            $result['Email'],
            $result['Namsinh'],
            $result['Diachi'],
            $result['Sodienthoai'],
            $result['TenDangNhap'],
            $result['role'],
            '', // Do not return password
            $result['createAt'],
            $result['updateAt'],
            $result['profile_photo']

        );
        return $user;
    }

    static function insert($username, $password, $fname, $lname, $gender, $email, $yob, $phone, $address, $profile_photo = "public/img/user/default.png", $role = 3)
    {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $db = DB::getInstance();
        $req = $db->query(
            "
            INSERT INTO taikhoan (Email, profile_photo, Ho, Ten, Gioitinh, Namsinh, Sodienthoai, Diachi, createAt, updateAt, MatKhau, TenDangNhap, role)
            VALUES ('$email', '$profile_photo', '$fname', '$lname', $gender, $yob, $phone, '$address', NOW(), NOW(), '$password', '$username', $role)
            ;"
        );
        return $req;
    }

    static function delete($username)
    {
        $db = DB::getInstance();
        $req = $db->query("DELETE FROM taikhoan WHERE TenDangNhap = '$username';");
        return $req;
    }

    static function update($username, $profile_photo, $fname, $lname, $gender, $yob, $email, $phone, $address)
    {
        $db = DB::getInstance();
        $req = $db->query(
            "
            UPDATE taikhoan
            SET profile_photo = '$profile_photo', fname = '$fname', lname = '$lname', gender = $gender, yob = $yob, email = '$email', phone = $phone, '$address', updateAt = NOW()
            WHERE TenDangNhap = '$username'
            ;"
        );
        return $req;
    }
    static function getRole($username)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT role FROM taikhoan WHERE TenDangNhap = '$username'");
        $result = $req->fetch_assoc();
        return $result['role'];
    }
    static function validation($username, $password)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM taikhoan WHERE TenDangNhap = '$username'");
        if (@password_verify($password, $req->fetch_assoc()['MatKhau']))
            return true;
        else
            return false;
    }

    //     static function changePassword($email, $oldpassword, $newpassword)
    //     {
    //         if (User::validation($email, $oldpassword)) {
    //             $password = password_hash($newpassword, PASSWORD_DEFAULT);
    //             $db = DB::getInstance();
    //             $req = $db->query(
    //                 "UPDATE user
    //                 SET password = '$password', updateAt = NOW()
    //                 WHERE email = '$email';"
    //             );
    //             return $req;
    //         } else {
    //             return false;
    //         }
    //     }

    static function changePassword_($username, $newpassword)
    {
        $password = password_hash($newpassword, PASSWORD_DEFAULT);
        $db = DB::getInstance();
        $req = $db->query(
            "UPDATE taikhoan
                SET MatKhau = '$password', updateAt = NOW()
                WHERE TenDangNhap = '$username';"
        );
        return $req;
    }
}