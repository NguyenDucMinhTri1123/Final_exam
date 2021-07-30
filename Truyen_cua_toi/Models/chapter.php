<?php 
 class chapter{
    //  propertier
    public $id;
    public $name;
    public $number_of_word;
    public $content;
    public $read_times;
    public $book_id;
    //method
    //method
    function __construct($id,$name,$number_of_word,$content,$read_times,$book_id){
      $this->id=$id;
      $this->name=$name;
      $this->number_of_word=$number_of_word;
      $this->content=$content;
      $this->read_times=$read_times;
      $this->book_id=$book_id;
  }
  static function add($chapter){
      $conn = DB::connect();
      $sql="INSERT INTO chapter (name,number_of_word,content,read_times,book_id)
              VALUE ('$chapter->name','$chapter->number_of_word','$chapter->content','$chapter->read_times','$chapter->book_id');";
      $result = $conn->query($sql);
      if ($conn->error) {
          echo $conn->error;
          return null;
      }
      $conn->close();
      return $result;
  }
  static function update($chapter){
      $conn = db::connect();
      $sql = "UPDATE  chapter SET
              name='$chapter->name',
              number_of_word='$chapter->number_of_word',
              content='$chapter->content',
              read_times='$chapter->read_times',
              book_id='$chapter->book_id'
              WHERE id='$chapter->id' ";
      $result = $conn->query($sql);
      if ($conn->error) {
          echo $conn->error;
          return null;
      }
      $conn->close();
      return $result;
  }
  static function delete($chap_id){
      $conn = DB::connect();
      $sql = "DELETE FROM chapter WHERE id=$chap_id ";
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
      $sql = "SELECT * FROM chapter";
      $result = $conn->query($sql);
      $ls = [];
      if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
              $ls[] = new chapter($row['id'],$row['name'],$row['number_of_word'],$row['content'],$row['read_times'],$row['book_id']);
          }
      }
      $conn->close();
      return $ls;
  }
  static function get_one($chap_id){
      $conn = DB::connect();
      $sql = "SELECT * FROM chapter WHERE email='$chap_id'";
      $result = $conn->query($sql);
      //$result->num_rows
      $row = $result->fetch_assoc();
      $ls= new chapter($row['id'],$row['name'],$row['number_of_word'],$row['content'],$row['read_times'],$row['book_id']);
      $conn->close();
      return $ls;
  }
  static function search($key){

  }
 }
