<?php 
namespace Mvc\Models;

class Users
{
    public function All()
    {
        $users = array();
        $query = "SELECT * FROM usuario";
        $conexao =  MysqlRepository::getConect("127.0.0.1", "root", "", "crud");
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        $users = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $users;
    }
}

