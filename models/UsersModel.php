<?php

namespace Models;

use Illuminate\Database\Query\Builder;
use Config\Database;

class UsersModel
{
    public function __construct()
    {
        $this->database = new Database();
    }

    public function getUser($id) {}

    public function createUser()
    {
        $sql = "INSERT INTO users(name, email, password) VALUES (?, ?, ?)";
        $userParams = ['Vladimir Drondi1231231n', 'v.d12312312rondin@involta.ru', '123qwert31231231y'];

        $result = $this->database->query($sql, $userParams);
        return $result;
    }
}