<?php
require_once('connection.php');
require_once('user.php');
class Admin
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
        $admins = [];
        foreach ($req->fetch_all(MYSQLI_ASSOC) as $admin) {
            $admins[] = new Admin(
                $admin['ID'],
                $admin['Ho'],
                $admin['Ten'],
                $admin['Gioitinh'],
                $admin['Email'],
                $admin['Namsinh'],
                $admin['Diachi'],
                $admin['Sodienthoai'],
                $admin['TenDangNhap'],
                $admin['role'],
                '', // Do not return password
                $admin['createAt'],
                $admin['updateAt'],
                $admin['profile_photo']
            );
        }
        return $admins;
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

    static function insert($username, $password, $fname, $lname, $gender, $email, $yob, $phone, $address, $profile_photo, $role = 3)
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
            SET profile_photo = '$profile_photo', Ho = '$fname', Ten = '$lname', Gioitinh = '$gender', Namsinh = '$yob', Email = '$email', Sodienthoai = '$phone', Diachi = '$address', updateAt = NOW()
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
        if ($password == $req->fetch_assoc()['MatKhau'])
            return true;
        else
            return false;
    }

    static function changePassword_($username, $newpassword)
    {

        $db = DB::getInstance();
        $req = $db->query(
            "UPDATE taikhoan
                SET MatKhau = '$newpassword', updateAt = NOW()
                WHERE TenDangNhap = '$username';"
        );
        return $req;
    }
};