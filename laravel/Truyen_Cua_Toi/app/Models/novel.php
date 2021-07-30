<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class novel extends Model
{
    use HasFactory;
    // propertier
    public $id;
    public $name;
    public $img_url;
    public $author_name;
    public $author_id;
    public $type; //dich or sang tac
    public $status; // writing/complete/postpone
    public $detail; //novel introduction
    public $rank_score; //novel ranking min:1-max:5
    public $chapter_number; //number of chapter in the novel
    public $tag_list_id; //contained id of tag_list table
    //method
    function __construct($id, $name, $img_url, $author_name, $author_id, $type, $status, $detail, $rank_score, $chapter_number, $tag_list_id)
    {
        $this->id = $id;
        $this->name = $name;
        $this->img_url = $img_url;
        $this->author_name = $author_name;
        $this->author_id = $author_id;
        $this->type = $type;
        $this->status = $status;
        $this->detail = $detail;
        $this->rank_score = $rank_score;
        $this->chapter_number = $chapter_number;
        $this->tag_list_id = $tag_list_id;
    }
    static function add($novel)
    {
        $conn = DB::connect();
        $sql = "INSERT INTO novel(name,img_url,author_id,author_name,type,status,detail,rank_score,chapter_number,tag_list_id)
            VALUE ('$novel->name','$novel->img_url','$novel->author_id','$novel->author_name','$novel->type','$novel->status'
            ,'$novel->detail','$novel->rank_score','$novel->chapter_number','$novel->tag_list_id')";
        $result = $conn->query($sql);
        if ($conn->error) {
            echo $conn->error;
            return null;
        }

        $result = mysqli_insert_id($conn);
        $conn->close();
        return $result;
    }
    //
    static function update_novel($novel)
    {
        $conn = db::connect();
        $sql = "UPDATE  novel SET
                   name='$novel->name',
                   img_url='$novel->img_url',
                   author_id='$novel->author_id',
                   author_name='$novel->author_name',
                   type='$novel->type',
                   status='$novel->status',
                   detail='$novel->detail',
                   rank_score='$novel->rank_score',
                   chapter_number='$novel->chapter_number',
                   tag_list_id='$novel->tag_list_id'
                    WHERE id='$novel->id' ";
        $result = $conn->query($sql);
        if ($conn->error) {
            echo $conn->error;
            return null;
        }
        $conn->close();
        return $result;
    }
    static function delete_novel($id)
    {
        $conn = DB::connect();
        $sql = "DELETE FROM novel WHERE id=$id ";
        $result = $conn->query($sql);
        if ($conn->error) {
            echo $conn->error;
            return false;
        }
        $conn->close();
        return $result;
    }
    static function count_chapter($novel_id)
    {
        $conn = DB::connect();
        $sql = "SELECT * FROM novel";
        $result = $conn->query($sql);
        $num = 0;
        if ($result->num_rows > 0) {
            $num = $result->num_rows;
        }
        $conn->close();
        return $num;
    }
    static function get_rank_score_detail($novel_id)
    {
    }
    static function get_tag_list($novel_id)
    {
        $conn = DB::connect();
        $sql = "SELECT * FROM tag_list";
        $result = $conn->query($sql);
        $ls = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ls[] = new tag_list($row['id'], $row['tag_id'], $row['novel_id']);
            }
        }
        $conn->close();
        return $ls;
    }
    static function get_list()
    {
        $conn = DB::connect();
        $sql = "SELECT * FROM novel";
        $result = $conn->query($sql);
        $ls = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ls[] = new novel(
                    $row['id'],
                    $row['name'],
                    $row['img_url'],
                    $row['author_id'],
                    $row['author_name'],
                    $row['type'],
                    $row['status'],
                    $row['detail'],
                    $row['rank_score'],
                    $row['chapter_number'],
                    $row['tag_list_id']
                );
            }
        }
        $conn->close();
        return $ls;
    }
    static function get_one($novel_id)
    {
        $conn = DB::connect();
        $sql = "SELECT * FROM novel WHERE id='$novel_id'";
        $result = $conn->query($sql);
        $ls = "";
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $ls = new novel(
                $row['id'],
                $row['name'],
                $row['img_url'],
                $row['author_id'],
                $row['author_name'],
                $row['type'],
                $row['status'],
                $row['detail'],
                $row['rank_score'],
                $row['chapter_number'],
                $row['tag_list_id']
            );
        }
        $conn->close();
        return $ls;
    }
}
