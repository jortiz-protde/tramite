<?php

class Db
{
    private $db;
    private $datos;

    private function connect(){
        $this->datos = require 'datosConexion.php';
        $this->db = sqlsrv_connect($this->datos["server"], $this->datos["opciones"]);
        if(!$this->db) {
            die( print_r( sqlsrv_errors(), true));
        }
    }

    public function query($sql, $parametros){
        $this->connect();
        $cnx = $this->db;
        $query = sqlsrv_query($cnx, $sql, $parametros);
        if ($query){
            $datos = array();
            if (sqlsrv_has_rows($query)){
                while ($row = sqlsrv_fetch_object($query)){
                    $datos[] = $row;
                }
            }
        }else{
            die( print_r( sqlsrv_errors(), true));
        }
        sqlsrv_free_stmt($query);
        sqlsrv_close($this->db);
        return $datos;
    }
}