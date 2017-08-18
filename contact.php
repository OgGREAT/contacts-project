<?php
class contact
{
   public static function sayHello()
    {
        echo "Hello World from contact class";
    }
 
    protected static function connectDb()
    {
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $dbname = 'crud';
        $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        if(!$conn)
        {
            return false;
        }
        return $conn;
    }
    public static function getfruits()
    {
        $conn = self::connectDb();
        if($conn)
        {
            $sql = "SELECT * FROM fruits";
            $result = $conn->query($sql);

            $rows=[];
            while($row = $result->fetch_assoc())
            {
                $rows[] = $row;
            }
            return $rows;

        }else{
            return "cannot connect db";
        }
    }
  }
