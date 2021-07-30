<?php 
// thiết kế dư 1 table không dùng tới.
class my_novels{
    // propertier
    public $id;
    public $novel_id;
    public $author_id;
    public $types; // dich or sang tac
    // method
    function __construct($id,$novel_id,$author_id,$types){
        $this->id=$id;
        $this->novel_id=$novel_id;
        $this->author_id=$author_id;
        $this->types=$types;
    }
    static function add($novel){
        $conn = DB::connect();
        $sql="INSERT INTO my_novels (novel_id,author_id,types)
                VALUE ('$novel->novel_id','$novel->author_id','$novel->types');";
        $result = $conn->query($sql);
        if ($conn->error) {
            echo $conn->error;
            return null;
        }
        $conn->close();
        return $result;
    }
    static function update($novel){
        $conn = db::connect();
        $sql = "UPDATE  my_novels SET
                 novel_id='$novel->novel_id',
                 author_id='$novel->author_id',
                 types='$novel->types' 
                 WHERE id='$novel->id' ";
        $result = $conn->query($sql);
        if ($conn->error) {
            echo $conn->error;
            return null;
        }
        $conn->close();
        return $result;
    }
    // Hàm delete xóa chỉ khi truyền vào đối tượng my_novels , xóa đối tượng có id hoặc novel_id và author_id trùng với DB
    static function delete($novel){
        $conn = DB::connect();
        $sql = "DELETE FROM my_novels WHERE id='$novel->id' OR (novel_id='$novel->novel_id' AND author_id='$novel->author_id')  ";
        $result = $conn->query($sql);
        if ($conn->error) {
            echo $conn->error;
            return false;
        }
        $conn->close();
        return $result;
    }
    // Hàm get_list hoạt động chỉ khi truyền vào đối tượng my_novels 
    static function get_list(){
        $conn = DB::connect();
        $sql = "SELECT * FROM my_novels";
        $result = $conn->query($sql);
        $ls = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ls[] = new my_novels($row['id'],$row['novel_id'],$row['author_id'],$row['types']);
            }
        }
        $conn->close();
        return $ls;
    }
    // Hàm get_one hoạt động chỉ khi truyền vào đối tượng my_novels , xóa đối tượng có id hoặc novel_id và author_id trùng với DB
    static function get_one($novel){
        $conn = DB::connect();
        $sql = "SELECT * FROM my_novels WHERE id='$novel->id' OR (novel_id='$novel->novel_id' AND author_id='$novel->author_id')  ";
        $result = $conn->query($sql);
        //$result->num_rows
        $row = $result->fetch_assoc();
        $ls= new  my_novels($row['id'],$row['novel_id'],$row['author_id'],$row['types']);
        $conn->close();
        return $ls;
    }
    static function search($key){
  
    }
}
?>