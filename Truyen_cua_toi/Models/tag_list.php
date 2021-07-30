<?php 
    class tag_list{
        public $id;
        public $tag_id;
        public $novel_id;
        //method
        function __construct($id,$tag_id,$novel_id){
            $this->id=$id;
            $this->tag_id=$tag_id;
            $this->novel_id=$novel_id;
        }
        static function add($tag_list){
            $conn = DB::connect();
            $sql="INSERT INTO tag_list (tag_id,novel_id)
                    VALUE ('$tag_list->tag_id','$tag_list->novel_id');";
            $result = $conn->query($sql);
            if ($conn->error) {
                echo $conn->error;
                return null;
            }
            $result=mysqli_insert_id($conn);
            $conn->close();
            return $result;
        }
        static function update($tag_list){
            $conn = db::connect();
            $sql = "UPDATE  tag_list SET
                    tag_id='$tag_list->tag_id',
                    novel_id='$tag_list->novel_id'
                    WHERE id='$tag_list->id' ";
            $result = $conn->query($sql);
            if ($conn->error) {
                echo $conn->error;
                return null;
            }
            $conn->close();
            return $result;
        }
        static function delete($id){
            $conn = DB::connect();
            $sql = "DELETE FROM tag_list WHERE id=$id ";
            $result = $conn->query($sql);
            if ($conn->error) {
                echo $conn->error;
                return false;
            }
            $conn->close();
            return $result;
        }
        static function get_list(){
            $conn = DB::connect();
            $sql = "SELECT * FROM tag_list";
            $result = $conn->query($sql);
            $ls = [];
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $ls[] = new tag_list($row['id'],$row['tag_id'],$row['novel_id']);
                }
            }
            $conn->close();
            return $ls;
        }
        static function get_one($id){
            $conn = DB::connect();
            $sql = "SELECT * FROM tag_list WHERE id='$id'";
            $result = $conn->query($sql);
            //$result->num_rows
            $row = $result->fetch_assoc();
            $ls= new tag_list($row['id'],$row['tag_id'],$row['novel_id']);
            $conn->close();
            return $ls;
        }
        static function search($key){
        }
    }

?>