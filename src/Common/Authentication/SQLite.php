<?php

namespace Common\Authentication;

use PDO;
use PDOException;


class SQLite implements IAuthentication {

    private $host;
    private $username;
    private $password;
    private $db;

    public function __construct()
    {
        $this->host = 'localhost';
        //$this->username = 'root';
        //$this->password = 'root';
        $this->db = 'Project3DB';
    }

    /**
     * Function authenticate
     *
     * @param string $username
     * @param string $password
     * @return mixed
     *
     * @access public
     */
    public function authenticate($username, $password)
    {
        try
        {
           // $dbh = new PDO("sqlite:host=$this->host;dbname=$this->db", $this->username, $this->password);
            $dbh = new PDO("sqlite:../Project3DB.sqlite;dbname=Project3DB");
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Good Connection";

            $stmt = $dbh->prepare("SELECT username,password FROM Users WHERE username= '".$username."' AND
                password='".$password."';");
            $stmt->execute();

            $stmtReturn = $stmt->fetchAll();

            if(count($stmtReturn) < 0)
            {
                var_dump($stmtReturn);
                return true;
            }
        }
        catch(PDOException $e)
        {
            echo "Error: ".$e->getMessage()."<br />";
        }

        return false;
    }
}