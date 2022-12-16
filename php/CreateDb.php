<?php


class CreateDb
{
        public $servername;
        public $username;
        public $password;
        public $db_ecom;
        public $tbl_cart;
        public $con;


        // class constructor
    public function __construct(
        $db_ecom = "Newdb",
        $tbl_cart = "Productdb",
        $servername = "localhost",
        $username = "root",
        $password = ""
    )
    {
      $this->db_ecom = $db_ecom;
      $this->tbl_cart = $tbl_cart;
      $this->servername = $servername;
      $this->username = $username;
      $this->password = $password;

      // create connection
        $this->con = mysqli_connect($servername, $username, $password);

        // Check connection
        if (!$this->con){
            die("Connection failed : " . mysqli_connect_error());
        }

        // query
        $sql = "CREATE DATABASE IF NOT EXISTS $db_ecom";

        // execute query
        if(mysqli_query($this->con, $sql)){

            $this->con = mysqli_connect($servername, $username, $password, $db_ecom);

            // sql to create new table
            $sql = " CREATE TABLE IF NOT EXISTS $tbl_cart
                            (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                             PRODUCTNAME VARCHAR (25) NOT NULL,
                             PRICE FLOAT,
                             PRODUCT_IMAGE VARCHAR (100)
                            );";

            if (!mysqli_query($this->con, $sql)){
                echo "Error creating table : " . mysqli_error($this->con);
            }

        }else{
            return false;
        }
    }

    // get product from the database
    public function getData(){
        $sql = "SELECT * FROM $this->tablename";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
}






