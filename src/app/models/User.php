<?php
//namespace mvc\libraries;

class User
{
    private $db;
    public function __construct()
    {
            $this->db=new mvc\libraries\Database;
    }
    /**
     * Finds user based on email
     *
     * @return void
     */
    public function findUser($email)
    {
        //This is prepare statement
        $this->db->query("Select * from users where Email=:email");
        
        //This is binding the value
        $this->db->bind(':email', $email);

        //Check if email exists
        if ($this->db->rowCount()>0) {
            return true;
        } else {
            return false;
        }
    }
    /**
     * Gets all the users
     *
     * @return void
     */
    public function getUser()
    {
        $this->db->query("Select * from users");
        $result=$this->db->resultSet();
        return $result;
    }

    public function register($data)
    {
        $username=$data['userName'];
        $first=$data['firstName'];
        $last=$data['lastName'];
        $email=$data['email'];
        $password=$data['password'];
        $this->db->query("insert into users (UserName,FirstName,LastName,Email,Pass)
        values('$username','$first','$last','$email','$password')");
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function login($data)
    {
        $email=$data['email'];
        $pass=$data['password'];
        $this->db->query("select * from users where Email='$email'");
        $row=$this->db->single();
        if ($pass==$row->Pass) {
            return $row;
        } else {
            return false;
        }
    }
}
