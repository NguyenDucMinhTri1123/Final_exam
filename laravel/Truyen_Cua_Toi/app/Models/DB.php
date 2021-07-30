<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysqli;

class DB extends Model
{
    use HasFactory;
    static private $conn = null;
    static public function connect()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        // Create connection
        $conn = DB::$conn;
        if (!$conn) {
            $conn = new mysqli($servername, $username, $password, "truyen_cua_toi");
        }
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

    static public function reset_connect()
    {
        // DB::$conn = null;
    }
}
