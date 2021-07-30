<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    use HasFactory;
    //propertier
    public $email;
    public $password;
    public $name;
    public $age;
    public $chap_counter;
    public $gender;
    public $role_id;
    //method
    function __construct($email, $password, $name, $age, $chap_counter, $gender, $role_id)
    {
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
        $this->age = $age;
        $this->chap_counter = $chap_counter;
        $this->gender = $gender;
        $this->role_id = $role_id;
    }
    static function add($account)
    {
        $conn = DB::connect();
        $sql = "INSERT INTO account (email,name,age,gender,chap_counter,role_id,password)
                VALUE ('$account->email','$account->name','$account->age','$account->gender','$account->chap_counter','$account->role_id','$account->password');";
        $result = $conn->query($sql);
        if ($conn->error) {
            echo $conn->error;
            return null;
        }
        $conn->close();
        return $result;
    }
    static function update_account($account)
    {
        $conn = db::connect();
        $sql = "UPDATE  account SET
                name='$account->name',
                age='$account->age',
                gender='$account->gender',
                chap_counter='$account->chap_counter',
                role_id='$account->role_id',
                password='$account->password'
                WHERE email='$account->email' ";
        $result = $conn->query($sql);
        if ($conn->error) {
            echo $conn->error;
            return null;
        }
        $conn->close();
        return $result;
    }
    static function update_password($email, $password)
    {
        $conn = db::connect();
        $sql = "UPDATE  account SET
                password='$password'
                WHERE email='$email' ";
        $result = $conn->query($sql);
        if ($conn->error) {
            echo $conn->error;
            return null;
        }
        $conn->close();
        return $result;
    }
    static function delete_account($email)
    {
        $conn = DB::connect();
        $sql = "DELETE FROM account WHERE email='$email' ";
        $result = $conn->query($sql);
        if ($conn->error) {
            echo $conn->error;
            return false;
        }
        $conn->close();
        return $result;
    }
    static function check_match_email($email)
    {
        $conn = DB::connect();
        $sql = "SELECT * FROM account WHERE email='$email' ";
        $result = $conn->query($sql);
        if ($conn->error) {
            echo $conn->error;
            return null;
        }
        $conn->close();
        if ($result->num_rows > 0) {
            return true;
        } else
            return false;
    }
    static function check_login($email, $password)
    {
        $conn = DB::connect();
        $sql = "SELECT * FROM account WHERE email='$email' AND password='$password' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0)
            return $email;
        else if ($result->num_rows == 0)
            return false;
    }
    static function get_list()
    {
        $conn = DB::connect();
        $sql = "SELECT * FROM account";
        $result = $conn->query($sql);
        $ls = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ls[] = new account($row['email'], $row['name'], $row['age'], $row['chap_counter'], $row['gender'], $row['role_id'], $row['password']);
            }
        }
        $conn->close();
        return $ls;
    }
    static function get_one($account_email)
    {
        $conn = DB::connect();
        $sql = "SELECT * FROM account WHERE email='$account_email'";
        $result = $conn->query($sql);
        //$result->num_rows
        $row = $result->fetch_assoc();
        $ls = new account($row['email'], $row['password'], $row['name'], $row['age'], $row['chap_counter'], $row['gender'], $row['role_id']);
        $conn->close();
        return $ls;
    }
    static function search($key)
    {
    }
}
