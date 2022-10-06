<?php

date_default_timezone_set("America/Lima");
// error_reporting(0);

class Database
{
    /* Declaring the variables that will be used in the class. */
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;
    public $connection;
    public $message;

    /**
     * It connects to the database.
     */
    public function __construct()
    
    {
        $this->host = 'localhost';
        $this->db = 'RECREOCAMPESTRE';
        $this->user = '';
        $this->password = '';
        $this->charset = '';
        $this->connection = $this -> connect();
        'Server=localhost;Database=RECREOCAMPESTRE;Trusted_Connection=True;';
    }

    /**
     * It connects to the database
     * 
     * @return The connection to the database.
     */
    private function connect()
    {
        try {
            $connection = 'sqlsrv:Server=' . $this->host . ';';
            $connection .= 'Database=' . $this->db . ';';
            $connection .= '' . $this->charset;  //los 3 connection se vuelven 1 porque se están añadiendo con .=
            $options = [                                    
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,  //detectar errores
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            $pdo = new PDO(   //establecer conexión entre php y sql server
                $connection,
                $this->user,
                $this->password,
                $options
            );            

            $this->message = 'Conexión exitosa';
            return $pdo;
        } catch (PDOException $e) {
            $this->message = $e->getMessage();  //capturar un error.
            return false;
        }
    }

}