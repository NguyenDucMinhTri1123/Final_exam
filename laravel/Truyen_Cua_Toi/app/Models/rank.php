<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rank extends Model
{
    use HasFactory;
    public $id;
    public $score;
    public $notes;
    public $novel_id;
    public $user_id;
    // method
    function __construct($id, $score, $notes, $novel_id, $user_id)
    {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->novel_id = $novel_id;
        $this->score = $score;
        $this->notes = $notes;
    }
    static function add($rank)
    {
        $conn = DB::connect();
        $sql = "INSERT INTO rank (score,notes,novel_id,user_id)
                VALUE ('$rank->score','$rank->notes','$rank->novel_id','$rank->user_id');";
        $result = $conn->query($sql);
        if ($conn->error) {
            echo $conn->error;
            return null;
        }
        $conn->close();
        return $result;
    }
    static function update_rank($rank)
    {
        $conn = db::connect();
        $sql = "UPDATE  rank SET
                score='$rank->score',
                notes='$rank->notes',
                novel_id='$rank->novel_id',
                user_id='$rank->user_id'
                WHERE id='$rank->id' ";
        $result = $conn->query($sql);
        if ($conn->error) {
            echo $conn->error;
            return null;
        }
        $conn->close();
        return $result;
    }
    static function delete_rank($rank_id)
    {
        $conn = DB::connect();
        $sql = "DELETE FROM rank WHERE id=$rank_id ";
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
        $sql = "SELECT * FROM rank";
        $result = $conn->query($sql);
        $ls = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ls[] = new rank($row['id'], $row['score'], $row['notes'], $row['novel_id'], $row['user_id']);
            }
        }
        $conn->close();
        return $ls;
    }
    static function get_one($id)
    {
        $conn = DB::connect();
        $sql = "SELECT * FROM rank WHERE id='$id'";
        $result = $conn->query($sql);
        //$result->num_rows
        $row = $result->fetch_assoc();
        $ls = new rank($row['id'], $row['score'], $row['notes'], $row['novel_id'], $row['user_id']);
        $conn->close();
        return $ls;
    }
    static function search($key)
    {
    }
}
