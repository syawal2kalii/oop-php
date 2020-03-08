
<?php
    require '../vendor/database'
    class User {
        private $_db;

        public function __construct()
        {
            $this->_db = Database::getConnection();
        }

        public function insertUser($data  = array())
        {
           if ($this->_db->insert('user', $data)) {
               return true;
           }
           else{
               return false;
           }
        }
        public function selectUser(){
            if ($data = $this->_db->select('user')) {
                return $data;
            }
        }
    }

?>