<?php
 /*
      * Classe para conexão ao banco de dados
      * @author Fábio CS
 */
class Conexao{
    
    private $host;
    private $user;
    private $password;
    private $db;
    private $sql;
    private $con;
    
    function __construct($host, $user, $password, $db) {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->db = $db;
    }

    public function getHost() {
        return $this->host;
    }

    public function setHost($host) {
        $this->host = $host;
    }

    public function getUser() {
        return $this->user;
    }

    public function setUser($user) {
        $this->user = $user;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getDb() {
        return $this->db;
    }

    public function setDb($db) {
        $this->db = $db;
    }
    public function getSql() {
        return $this->sql;
    }

    public function setSql($sql) {
        $this->sql = $sql;
    }
    
     /*
      * Função para conexão ao banco de dados
      * @author Fábio CS
      * @return Object Retorna o objeto da conexão
      */
    function conectar(){
      $this->con = mysql_connect($this->host,$this->user,$this->password) or die($this->erro(mysql_error()));
      return $this->con;
    }
    
    /*
      * Função para seleção do banco de dados a ser usado
      * @author Fábio CS
      * @return Boolean Retorna true (verdadeiro) ou false (falso)
      */
    function selecionarDB(){
      return mysql_select_db($this->db) or die($this->erro(mysql_error()));
   }
   
   /*
      * Função para execução da consulta ao banco de dados
      * @param Texto SQL para consulta
      * @author Fábio CS
      * @return ResultSet Retorna o resultado da consulta como um objeto
      */
   function query(){
      return mysql_query($this->sql) or die ($this->erro(mysql_error()));
   }
   
   /*
      * Função para fechar a conexão ao banco de dados
      * @author Fábio CS
      * @return boolean Retorna true caso sucesso ou false em caso de falha.
      */
   function desconectar(){
       return mysql_close($this->con);
   }
   
   /*
      * Função para exibir os error
      * @author Fábio CS
      * @param String $erro Erro a ser exibido
      * @return void
      */
    function erro($erro){
      echo "Ocorreu o seguinte erro:".$erro;
   }


}
?>
