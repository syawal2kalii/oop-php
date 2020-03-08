<?php

    class Database {

        private static $INSTANCE = null;
        private $DB,
                $HOST = "localhost",
                $USER = "root",
                $PASS = "",
                $DBNM = "cl_fb";

        public function __construct()
        {
            $this->DB = new mysqli($this->HOST, $this->USER, $this->PASS, $this->DBNM);
        }

        public static function getInstance()
        {
            if (!isset(self::$INSTANCE)) {
                self::$INSTANCE = new Database();
            }

            return self::$INSTANCE;
        }

        // public function insert($table, $data = array())
        // {
        //     $column = implode(", ", array_keys($data));
        //     $values = array();
        //     $i = 0;
        //     foreach ($data as $key => $value) {
        //         $values[$i] = "'".$value."'";
        //         $i++;
        //     }
        //     $value = implode(", ", array_values($values));
            

        //     $query = "INSERT INTO $table ($column) VALUES($value)";
        //     if ($this->DB->query($query)) {
        //         return true;
        //     }else{
        //         return false;
        //     }
        // }
        
        // public function select($table)
        // {
        //     $query = "SELECT * FROM $table";
        //     if ($data = $this->DB->query($query)) {
        //         return $data;
        //     }
        // }

    }
?>