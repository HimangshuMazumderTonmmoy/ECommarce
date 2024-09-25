<?php
require_once('/opt/lampp/htdocs/eCommarce/Model/dataBaseConnection.php');
class user
{
    public $id;
    public $name;
    public $email;
    public $password;
    public $type;

    public function __construct($email, $password, $type = '')
    {
        $this->email = $email;
        $this->password = $password;
        $this->type = $type;
    }

    public function search()
    {
        $connection = getConnection();
        $query = "SELECT * FROM `user` WHERE email = '$this->email' and Password = '$this->password';";
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result) == 1) 
        {
            $row = mysqli_fetch_assoc($result);
            $this->type = $row['type'];
            $this->id = $row['ID'];
            $this->name = $row['Name'];
            return true;
        } 
        else
            return false;
    }
}
