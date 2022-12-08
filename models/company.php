<?php
require_once('connection.php');
class Company
{
    public $id;
    public $name;
    public $address;


    public function __construct($id, $name, $address)
    {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
    }

    static function getAll()
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM chinhanh");
        $companies = [];
        foreach ($req->fetch_all(MYSQLI_ASSOC) as $company) {
            $companies[] = new Company(
                $company['MaCN'],
                $company['Ten'],
                $company['Duong']
            );
        }
        return $companies;
    }

    static function get($id)
    {
        $db = DB::getInstance();
        $req = $db->query("SELECT * FROM chinhanh WHERE MaCN = $id");
        $result = $req->fetch_assoc();
        $company = new Company(
            $result['MaCN'],
            $result['Ten'],
            $result['Diachi']
        );
        return $company;
    }

    static function insert($name, $address)
    {
        $db = DB::getInstance();
        $req = $db->query(
            "
            INSERT INTO chinhanh (Ten, Diachi)
            VALUES ('$name', '$address')
            ;"
        );
        return $req;
    }

    static function delete($id)
    {
        $db = DB::getInstance();
        $req = $db->query("DELETE FROM chinhanh WHERE MaCN = '$id';");
        return $req;
    }

    static function update($id, $name, $address)
    {
        $db = DB::getInstance();
        $req = $db->query("UPDATE chinhanh SET Ten = '$name', Diachi = '$address' WHERE MaCN = '$id';");
        return $req;
    }
}