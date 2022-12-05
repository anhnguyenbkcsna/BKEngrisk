<?php
require_once('connection.php');
class User
{
    public $email;
    public $profile_photo;
    public $fname;
    public $lname;
    public $gender;
    public $yob;
    public $phone;
    public $address;
    public $createAt;
    public $updateAt;
    public $role;
    public $password;
    public function __construct($email, $profile_photo, $fname, $lname, $gender, $yob, $phone, $address, $createAt, $updateAt, $role, $password)
    {
        $this->email = $email;
        $this->profile_photo = $profile_photo;
        $this->fname = $fname;
        $this->lname = $lname;
        $this->gender = $gender;
        $this->yob = $yob;
        $this->phone = $phone;
        $this->address = $address;
        $this->createAt = $createAt;
        $this->updateAt = $updateAt;
        $this->role = $role;
        $this->password = $password;
    }

    static function getAll()
    {
        $db = DB::getInstance();
        $req = $db->query(
            "SELECT *
            FROM user;"
        );
        $users = [];
        foreach ($req->fetch_all(MYSQLI_ASSOC) as $user) {
            $users[] = new User(
                $user['email'],
                $user['profile_photo'],
                $user['fname'],
                $user['lname'],
                $user['gender'],
                $user['yob'],
                $user['phone'],
                $user['address'],
                $user['createAt'],
                $user['updateAt'],
                $user['role'],
                '' // Do not return password
            );
        }
        return $users;
    }

    static function get($email)
    {
        $db = DB::getInstance();
        $req = $db->query(
            "
            SELECT email, profile_photo, fname, lname, gender, yob, phone, createAt, updateAt, role
            FROM user
            WHERE email = '$email'
            ;"
        );
        $result = $req->fetch_assoc();
        $user = new User(
            $result['email'],
            $result['profile_photo'],
            $result['fname'],
            $result['lname'],
            $result['gender'],
            $result['yob'],
            $result['phone'],
            $result['address'],
            $result['createAt'],
            $result['updateAt'],
            $result['role'],
            '' // Do not return password
        );
        return $user;
    }

    static function getRole($username)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT role FROM user WHERE email = '$username'");
        $result = $req->fetch_assoc();
        return $result['role'];
    }

    static function insert($email, $profile_photo, $fname, $lname, $gender, $yob, $phone, $password, $address)
    {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $db = DB::getInstance();
        $req = $db->query(
            "
            INSERT INTO user (email, profile_photo, fname, lname, gender, yob, phone, address, createAt, updateAt, password)
            VALUES ('$email', '$profile_photo', '$fname', '$lname', $gender, $yob, '$phone',  '$address', NOW(), NOW(), '$password')
            ;"
        );
        return $req;
    }

    static function delete($email)
    {
        $db = DB::getInstance();
        $req = $db->query("DELETE FROM user WHERE email = '$email';");
        return $req;
    }

    static function update($email, $profile_photo, $fname, $lname, $gender, $yob, $phone, $address)
    {
        $db = DB::getInstance();
        $req = $db->query(
            "
            UPDATE user
            SET profile_photo = '$profile_photo', fname = '$fname', lname = '$lname', gender = $gender, yob = $yob, phone = '$phone', address = '$address', updateAt = NOW()
            WHERE email = '$email'
            ;"
        );
        return $req;
    }

    static function validation($email, $password)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM user WHERE email = '$email'");
        if (@password_verify($password, $req->fetch_assoc()['password']))
            return true;
        else
            return false;
    }

    static function changePassword($email, $oldpassword, $newpassword)
    {
        if (User::validation($email, $oldpassword)) {
            $password = password_hash($newpassword, PASSWORD_DEFAULT);
            $db = DB::getInstance();
            $req = $db->query(
                "UPDATE user
                SET password = '$password', updateAt = NOW()
                WHERE email = '$email';"
            );
            return $req;
        } else {
            return false;
        }
    }

    static function changePassword_($email, $newpassword)
    {
        $password = password_hash($newpassword, PASSWORD_DEFAULT);
        $db = DB::getInstance();
        $req = $db->query(
            "UPDATE user
            SET password = '$password', updateAt = NOW()
            WHERE email = '$email';"
        );
        return $req;
    }
}