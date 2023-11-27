<?php
      include("../lib/database.php");

class UserModel extends Database
{
    protected $db;
    public function __construct()
    {
        $this->db = new Database();
        // echo "132";

    }
    public function signup($username, $password, $email)
    {
        $sql = "INSERT INTO customeraccount (username, password, email) VALUES ('$username', '$password', '$email')";
        self::$link->query($sql);
    }
    public function login($username_email, $password)
    {
        $sql =  "SELECT *FROM customeraccount WHERE username = '$username_email' OR email = '$username_email'";
        $result = self::$link->query($sql);
        return $result;
    }
    public function checkExists($username, $email)
    {
        $sql = "SELECT * FROM customeraccount WHERE username = '$username' OR email = '$email'";
        $result = self::$link->query($sql);
        
        return $result;
    }
    /*
    private $username;
    private $password;
    private $email;
    private $firstname;
    private $lastname;
    
    private $id;
    private $phone_number;
    private $avatar;
    
    private $role;
    */
}
