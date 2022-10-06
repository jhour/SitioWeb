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
        $this->host = 'DESKTOP-KEASLUN\\SQLEXPRESS';
        $this->db = 'RECREO';
        $this->user = '';
        $this->password = '';
        $this->charset = 'utf8mb4';
        $this->connection = $this -> connect();
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
            $connection .= 'Charset=' . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            $pdo = new PDO(
                $connection,
                $this->user,
                $this->password,
                $options
            );            

            $this->message = 'Conexión exitosa';
            return $pdo;
        } catch (PDOException $e) {
            $this->message = $e->getMessage();
            return false;
        }
    }

    /**
     * It checks if a record exists in a table
     * 
     * @param table The table name
     * @param where array('id' => 1)
     * 
     * @return The number of rows that match the query.
     */
    public function exists($table, $where)
    {
        try {
            if (!$this->connection) {
                return false;
            }
            $values = [];
            $condition = [];
            foreach ($where as $key => $value) {
                $values[] = $value;
                $condition[] = $key . ' = ?';
            }
            $condition = implode(' AND ', $condition);
            $sql = "SELECT id FROM {$table} WHERE {$condition}";
            $query = $this->connection->prepare($sql);
            $query->execute($values);
            $result = $query->rowCount();
            if ($result > 0) {
                $this->message = 'Existen ' . $result . ' registros';
            } else {
                $this->message = 'No existen registros';
            }
            return $result;
        } catch (Exception $e) {
            $this->message = $e->getMessage();
            return false;
        }
    }

    /**
     * It takes a table name and an array of key/value pairs and inserts them into the table
     * 
     * @param table The table name
     * @param inserts array of values to insert
     * 
     * @return The number of rows affected by the query.
     */
    public function create($table, $inserts)
    {
        try {
            $inserts['origen'] = 'web';
            $inserts['usuario'] =
                $_SESSION['person']['names'] .
                ' ' .
                $_SESSION['person']['lastnames'];
            $inserts['ip'] = getIP();
            $inserts['fecha_creacion'] = date('Y-m-d H:i:s');
            $inserts['fecha_actualizacion'] = date('Y-m-d H:i:s');
            $inserts['estado'] = '1';

            if (!$this->connection) {
                return false;
            }

            $columns = array();
            $keys = array();
            $values = array();

            foreach ($inserts as $key => $value) {
                $columns[] = $key;
                $keys[] = ':' . $key;
                $values[':' . $key] = $value;
            }
            $columns = implode(', ', $columns);
            $keys = implode(', ', $keys);
            $values = $values;

            $sql = "INSERT INTO $table ($columns) VALUES ($keys)";
            $query = $this->connection->prepare($sql);
            $query->execute($values);

            $this->message = 'Se ha(n) insertado ' . $query->rowCount() . ' registros';
            return $query->rowCount();
        } catch (Exception $e) {
            $this->message = $e->getMessage();
            return false;
        }
    }

    /**
     * It updates a table with the values in the array, where the values in the array match
     * 
     * @param table The table name
     * @param updates array of columns and values to update
     * @param where array('id' => 1)
     * 
     * @return The number of rows affected by the query.
     */
    public function update($table, $updates, $where)
    {
        try {
            $updates['fecha_actualizacion'] = date('Y-m-d H:i:s');
            $updates['origen'] = 'web';
            $updates['usuario_actualizacion'] = $_SESSION['person']['names'] . ' ' . $_SESSION['person']['lastnames'];
            $updates['ip'] = getIP();

            if (!$this->connection) {
                return false;
            }
            $columns = [];
            $values = [];
            $condition = [];
            foreach ($updates as $key => $value) {
                $columns[] = $key . ' = ?';
                $values[] = $value;
            }
            foreach ($where as $key => $value) {
                $condition[] = $key . ' = ?';
                $values[] = $value;
            }
            $columns = implode(', ', $columns);
            $condition = implode(' AND ', $condition);
            $sql = "UPDATE $table SET $columns WHERE $condition";
            $query = $this->connection->prepare($sql);
            $query->execute($values);
            $this->message = 'Se ha(n) actualizado ' . $query->rowCount() . ' registros';
            return $query->rowCount();
        } catch (Exception $e) {
            $this->message = $e->getMessage();
            return false;
        }
    }

    /**
     * It deletes a row from a table based on a condition
     * 
     * @param table The table name
     * @param where array of conditions
     * 
     * @return The number of rows affected by the query.
     */
    public function delete($table, $where)
    {
        $connection = $this->connect();
        if (!$connection) {
            return false;
        }
        $values = [];
        $condition = [];
        foreach ($where as $key => $value) {
            $condition[] = $key . ' = ?';
            $values[] = $value;
        }
        $condition = implode(' AND ', $condition);
        $sql = "DELETE FROM $table WHERE $condition";
        $query = $connection->prepare($sql);
        $query->execute($values);
        return $query->rowCount();
    }
}

$db = new Database();
echo $db -> message ;
