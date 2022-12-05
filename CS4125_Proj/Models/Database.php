<?php 
session_start();
    class Database{
        private $servername='46.22.136.30';
        private $username='cs4125usr';
        private $password='sec_dev_ul21$';
        private $dbname='cs4125db';

        public function __construct(){
            $this->mysqli = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
        }

        protected function insert($table,$para=array()){
            $table_columns = implode(',', array_keys($para));
            $table_value = implode("','", $para);

            $sql="INSERT INTO $table($table_columns) VALUES('$table_value')";

            $result = $this->mysqli->query($sql);
        }

        protected function update($table,$para=array(),$id){
            $args = array();

            foreach ($para as $key => $value) {
                $args[] = "$key = '$value'"; 
            }

            $sql="UPDATE  $table SET " . implode(',', $args);

            $sql .=" WHERE $id";

            $result = $this->mysqli->query($sql);
        }

        protected function delete($table,$id){
            $sql="DELETE FROM $table";
            $sql .=" WHERE $id ";
            $sql;
            $result = $this->mysqli->query($sql);
        }

        protected function select($table,$rows="*",$where = null){
            if ($where != null) {
                $sql="SELECT $rows FROM $table WHERE $where";
            }else{
                $sql="SELECT $rows FROM $table";
            }

            $f = fopen("debug.txt", 'a');
                  $debug_var[0] = $sql;
                  $debug_var[1] = "test2";
                  $tmp = print_r($debug_var, true);
                  fwrite($f, $tmp);
                  $txt = "\n";
                  fwrite($f, $txt);
                  fclose($f);

            $this->sql = $result = $this->mysqli->query($sql);
        }

        public function __destruct(){
            $this->mysqli->close();
        }
    }
?>