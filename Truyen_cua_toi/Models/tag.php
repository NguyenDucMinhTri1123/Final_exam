<?php 
    class tag{
        public $id;
        public $name;
        public $detail;
        //method
        function __construct($id,$name,$detail){
            $this->id=$id;
            $this->name=$name;
            $this->detail=$detail;
        }
        static function add($tag){
            $conn = DB::connect();
            $sql="INSERT INTO tag (name,detail)
                    VALUE ('$tag->name','$tag->detail');";
            $result = $conn->query($sql);
            if ($conn->error) {
                echo $conn->error;
                return null;
            }
            $conn->close();
            return $result;
        }
        static function update($tag){
            $conn = db::connect();
            $sql = "UPDATE  tag SET
                    name='$tag->name',
                    detail='$tag->detail'
                    WHERE id='$tag->id' ";
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
            $sql = "DELETE FROM tag WHERE id=$id ";
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
            $sql = "SELECT * FROM tag";
            $result = $conn->query($sql);
            $ls = [];
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $ls[] = new tag($row['id'],$row['name'],$row['detail']);
                }
            }
            $conn->close();
            return $ls;
        }
        static function get_one($id){
            $conn = DB::connect();
            $sql = "SELECT * FROM tag WHERE id='$id'";
            $result = $conn->query($sql);
            //$result->num_rows
            $row = $result->fetch_assoc();
            $ls= new tag($row['id'],$row['name'],$row['detail']);
            $conn->close();
            return $ls;
        }
        static function search($key){
        }
    }
?>