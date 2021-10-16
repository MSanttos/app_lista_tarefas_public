<?php

  class conexao{

    private $host = 'localhost';
    private $dbname = 'php_com_pdo';
    private $user = 'root';
    private $password = 'cogumelo8998';

    /********************************/

    public function conectar(){
      try{
        $conexao = new PDO(
          "mysql:host=$this->host;dbname=$this->dbname",
          "$this->user",
          "$this->password"
        );

        return $conexao;

      } catch (PDOException $e){
        echo '<p>'. "Error: " . $e->getMessage() . '</p>';
      }
    }
  }

?>