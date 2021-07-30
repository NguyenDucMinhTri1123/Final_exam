<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;
    public $id;
    public $name;
    public $notes;
    //method
    function __construct($id, $name, $notes)
    {
        $this->id = $id;
        $this->name = $name;
        $this->notes = $notes;
    }
    static function add($role)
    {
        $conn = DB::connect();
        $sql = "INSERT INTO role (name,notes)
                    VALUE ('$role->name','$role->notes');";
        $result = $conn->query($sql);
        if ($conn->error) {
            echo $conn->error;
            return null;
        }
        $conn->close();
        return $result;
    }
    static function update_role($role)
    {
        $conn = db::connect();
        $sql = "UPDATE  role SET
                    name='$role->name',
                    notes='$role->notes'
                    WHERE id='$role->id' ";
        $result = $conn->query($sql);
        if ($conn->error) {
            echo $conn->error;
            return null;
        }
        $conn->close();
        return $result;
    }
    static function delete_role($id)
    {
        $conn = DB::connect();
        $sql = "DELETE FROM role WHERE id=$id ";
        $result = $conn->query($sql);
        if ($conn->error) {
            echo $conn->error;
            return false;
        }
        $conn->close();
        return $result;
    }
    static function get_list()
    {
        $conn = DB::connect();
        $sql = "SELECT * FROM role";
        $result = $conn->query($sql);
        $ls = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ls[] = new role($row['id'], $row['name'], $row['notes']);
            }
        }
        $conn->close();
        return $ls;
    }
    static function get_one($id)
    {
        $conn = DB::connect();
        $sql = "SELECT * FROM role WHERE id='$id'";
        $result = $conn->query($sql);
        //$result->num_rows
        $row = $result->fetch_assoc();
        $ls = new role($row['id'], $row['name'], $row['notes']);
        $conn->close();
        return $ls;
    }
    static function search($key)
    {
    }
}
