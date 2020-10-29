<?php   

class createDB{
    protected $servername;
    protected $username;
    protected $tablename;
    protected $password;
    protected $dbname;
    protected $con;


    //class constructor

    public function __construct($servername="localhost", $dbname="newdb", $username="nishant", $password="1234", $tablename="products")
        {

            $this->dbname= $dbname;
            $this->username= $username;
            $this->tablename= $tablename;
            $this->password= $password;
            $this->servername= $servername;


            //create connection 

            $this->con= mysqli_connect($this->servername,$this->username,$this->password);

            if(!$this->con){
                die("Connection fail".mysqli_connect_error());            }

                //query
                $sql="CREATE DATABASE IF NOT EXISTS $this->dbname";

                //execute

                if(mysqli_query($this->con,$sql)){
                    $this->con=mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);

                    $sql="CREATE TABLE IF NOT EXISTS `$this->tablename` 
                    (id int(11) PRIMARY KEY AUTO_INCREMENT,
                    product_name varchar(25) NOT NULL,
                    product_price_amazon varchar(20),
                    product_price_flipkart varchar(20),
                    product_amazon_link varchar(200),
                    product_flipkart_link varchar(200),
                    product_ram varchar(200),
                    product_camera varchar(200),
                    product_battery varchar (200),
                    product_processor varchar(200),
                    product_features varchar (200),
                    product_size varchar (200),
                    product_image varchar(100)); ";

                    if(!mysqli_query($this->con,$sql)){
                        echo "Error creating table".mysqli_error($this->con);
                    }
                }
                else {
                    return false;
                }

    }
    public function getData(){
        $sql = "SELECT * FROM $this->tablename";
        $result = mysqli_query($this->con,$sql);
        if(mysqli_num_rows($result)>0){
            return $result;
        }
    }
}
?>