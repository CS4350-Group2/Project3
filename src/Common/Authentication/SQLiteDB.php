<?php

namespace Common\Authentication;

use PDO;
use PDOException;


class SQLite implements IAuthentication {

    public function __construct()
    {
        try
        {
            $this->conn = new PDO('sqlite:../Data/Project3DB.sqlite');

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            echo 'ERROR: ' .$e->getMessage();
        }
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

            $stmt = $this->conn->query("SELECT username,password FROM Users WHERE username= '".$username."' AND
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