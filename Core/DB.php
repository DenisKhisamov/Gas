<?php
/**
 * ---THIS-HEAD-INFO---
 */

/**
 * Class DB Работа с БД
 */
class DB {
    /**
     * @var mysqli
     */
    private static $connect;
    public static function connect() {
        try {
            self::$connect = new mysqli(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_BASE, DB_PORT);
            if (self::$connect->connect_errno) {
                throw new Exception('Ошибка подключения к базе данных, возможно неправильные параметры подключения в config.php.');
            }
            self::$connect->set_charset('utf8');
        }catch (Exception $exception) {
            var_dump('Соединиться не удалось');
        }
    }
    
    public static function queryFetchRow(string $query, array $params=array()):array {
        $result = self::mQuery($query,$params);
        $row = array();
        if ($result && $result->num_rows>0) {
            $row = $result->fetch_assoc();
        }
        if ($result) {
            self::freeResult($result);
        }
        return $row;
    }
    
    public static function queryFetchRows(string $query, array $params=array()):array {
        $result = self::mQuery($query,$params);
        $rows = array();
        if ($result && $result->num_rows>0) {
            $rows = $result->fetch_all(MYSQLI_ASSOC);
        }
        if ($result) {
            self::freeResult($result);
        }
        return $rows;
    }
    
    public static function queryFetchValue(string $query,array $params=array(),int $column = 0) {
        $result = self::mQuery($query,$params);
        $val = null;
        if ($result && $result->num_rows>0) {
            $row = $result->fetch_row();
            if (isset($row[$column]))
                $val = $row[$column];
        }
        if ($result) {
            self::freeResult($result);
        }
        return $val;
    }
    
    public static function query(string $query, array $params=array()) {
        $result = self::mQuery($query,$params);
        self::freeResult($result);
    }
    
    /**
     * Выполняем запрос к Базе данных
     * @param $query
     * @param $params
     *
     * @return bool|mysqli_result
     */
    private static function mQuery(string $query, array $params=array()) {
        if (!self::$connect) {
            self::connect();
        }
        global $global_params;
        $global_params = $params;
        $query = preg_replace_callback('/(%d|%f|%s)/',function ($matches){
            global $global_params;
            $param = array_shift($global_params);
            if ($matches[1] == '%s' && strpos($param,"'")!==false) {
                $param = self::$connect->escape_string($param);
            }
            return sprintf($matches[1],$param);
        },$query);
        if (substr($query,0,4)=='DEV ')
        {
            $query = substr($query,4);
            var_dump($query);
        }
        $result = self::$connect->query($query);
        if($result == false)
        {
            throw new Exception(self::$connect->error);
        }
        return $result;
    }
    
    public static function freeResult($result) {
        if (is_object($result)) {
            $result->close();
            while (self::$connect->more_results()) {
                self::$connect->next_result();
                $result = self::$connect->store_result();
                if ($result) {
                    $result->close();
                }
            }
        }
    }
}