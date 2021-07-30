<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class novel_case extends Model
{
    use HasFactory;
    public $id;
    public $user_id;
    public $novel_id;
    public $reading_chapter;
    //method 

    function __construct($id, $user_id, $novel_id, $reading_chapter)
    {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->novel_id = $novel_id;
        $this->reading_chapter = $reading_chapter;
    }
    static function add($novel_case)
    {
        $conn = DB::connect();
        $sql = "INSERT INTO novel_case (user_id,novel_id,reading_chapter)
                    VALUE ('$novel_case->user_id','$novel_case->novel_id','$novel_case->reading_chapter');";
        $result = $conn->query($sql);
        if ($conn->error) {
            echo $conn->error;
            return null;
        }
        $conn->close();
        return $result;
    }
    static function update_novel_case($novel_case)
    {
        $conn = db::connect();
        $sql = "UPDATE  novel_case SET
                    
                    user_id='$novel_case->user_id',
                    novel_id='$novel_case->novel_id',
                    reading_chapter='$novel_case->reading_chapter'
                    WHERE id='$novel_case->id' ";
        $result = $conn->query($sql);
        if ($conn->error) {
            echo $conn->error;
            return null;
        }
        $conn->close();
        return $result;
    }
    static function delete_novel_case($chap_id)
    {
        $conn = DB::connect();
        $sql = "DELETE FROM novel_case WHERE id=$chap_id ";
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
        $sql = "SELECT * FROM novel_case";
        $result = $conn->query($sql);
        $ls = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ls[] = new novel_case($row['id'], $row['user_id'], $row['novel_id'], $row['reading_chapter']);
            }
        }
        $conn->close();
        return $ls;
    }
    static function get_one($id)
    {
        $conn = DB::connect();
        $sql = "SELECT * FROM novel_case WHERE id='$id'";
        $result = $conn->query($sql);
        //$result->num_rows
        $row = $result->fetch_assoc();
        $ls = new novel_case($row['id'], $row['user_id'], $row['novel_id'], $row['reading_chapter']);
        $conn->close();
        return $ls;
    }
    static function get_select($user_id)
    {
        $conn = DB::connect();
        $sql = "SELECT * FROM novel_case WHERE user_id='$user_id'";
        $result = $conn->query($sql);
        $ls = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ls[] = new novel_case($row['id'], $row['user_id'], $row['novel_id'], $row['reading_chapter']);
            }
        }
        $conn->close();
        return $ls;
    }
    static function search($key)
    {
    }
}
